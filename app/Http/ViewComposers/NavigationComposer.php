<?php
namespace App\Http\ViewComposers;
use App\Models\Menu;
use App\Models\News;
use Illuminate\View\View;


//В этом классе будем доставать данные из базы и
//передавать в соответствующее представление (например, resources/layouts/partials/_nav.blade.php)

class NavigationComposer
{
    public function compose(View $view)
    {
        $menuitems = Menu::IsPublished()->OfSort(['parent_id' => 'asc', 'sort_order' => 'asc'])->get();
        $newsitems = News::orderBy('dateline', 'desc')->limit(3)->get();

        $menuitems = $this->buildTree($menuitems);

        return $view->with(compact('menuitems', 'newsitems'));
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
