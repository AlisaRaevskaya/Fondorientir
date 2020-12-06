<?php
namespace App\Http\ViewComposers;
use App\Models\Page;
use App\Models\News;
use App\Models\Contact;
use App\Models\Category;
use App\Models\SecondMenu;
use App\Models\Message;
use App\Models\MessageCategory;
use Illuminate\View\View;


//В этом классе будем доставать данные из базы и
//передавать в соответствующее представление (например, resources/layouts/partials/_nav.blade.php)

class NavigationComposer
{
    public function compose(View $view)
    {
        $menuitems = Page::IsPublished()->IsMenu()->OfSort(['parent_id' => 'asc', 'sort_order' => 'asc'])->get();
        $newsitems = News::orderBy('dateline', 'desc')->limit(7)->get();
        $contacts= Contact::all();
        $new = News::find(1)->first();
        $category= $new->category;
        $categories= Category::all();
        $secondmenu=SecondMenu::where('published',1)->orderBy('id', 'asc')->get();
        // $secondmenu = Menu::IsPublished()->where('parent_id', 2)->where('id', '>', 15)->OfSort(['parent_id' => 'asc', 'sort_order' => 'asc'])->get();
        $footermenu = Page::IsPublished()->IsMenu()->where('parent_id', 2)->OfSort(['parent_id' => 'asc', 'sort_order' => 'asc'])->get();

        $not_read_message = Message::where('is_read', false)->get()->count();


        $menuitems = $this->buildTree($menuitems);


        return $view->with(compact('menuitems', 'newsitems', 'contacts','category', 'categories','secondmenu','footermenu','not_read_message'));
    }

    public function buildTree($items)
    {
        $grouped = $items->groupBy('parent_id');

        foreach ($items as $item) {
            if ($grouped->has($item->id)) {
                $item->children = $grouped[$item->id];
            }
        }
        return $items->where('parent_id', null);
    }
}
