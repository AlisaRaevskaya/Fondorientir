<?php

namespace App\Http\ViewComposers;

use App\Models\Menu;
use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $menuitems = Menu::IsPublished()->OfSort(['parent_id' => 'asc', 'sort_order' => 'asc'])->get();

        $menuitems = $this->buildTree($menuitems);

        return $view->with('menuitems', $menuitems);
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
