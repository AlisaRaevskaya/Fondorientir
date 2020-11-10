<?php
namespace App\Http\ViewComposers;
use App\Models\Menu;
use App\Models\News;
use App\Models\Contact;
use Illuminate\View\View;


//В этом классе будем доставать данные из базы и
//передавать в соответствующее представление (например, resources/layouts/partials/_nav.blade.php)

class NavigationComposer
{
    public function compose(View $view)
    {
        $menuitems = Menu::IsPublished()->OfSort(['parent_id' => 'asc', 'sort_order' => 'asc'])->get();
        $newsitems = News::orderBy('dateline', 'desc')->limit(7)->get();
        $contacts= Contact::all();
        $new = News::find(1)->first();
        $category= $new->category;

        $menuitems = $this->buildTree($menuitems);

        return $view->with(compact('menuitems', 'newsitems', 'contacts','category'));
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
