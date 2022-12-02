<?php

namespace App\Admin\Controllers;

use App\Models\Nav;
use Dcat\Admin\Form;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Tree;


class NavController extends AdminController
{
    public function index(Content $content)
    {
        return $content->header('导航菜单')
            ->body(function (Row $row) {
                $tree = new Tree(new Nav);
                $tree->disableCreateButton();
                $tree->disableEditButton();
                $row->column(12, $tree);
                $tree->branch(function ($branch) {
                    return "{$branch['title']}  <a href='#'>{$branch['url']}</a>";
                });
                $tree->maxDepth(3);
            });
    }

    protected function form()
    {
        return Form::make(new Nav(), function (Form  $form) {
            $form->select('parent_id')
                ->options('/api/nav_tree')
                ->saving(function ($v) {
                    return (int) $v;
                });
            $form->text('title')->rules('required');
            $form->text('url');
        });
    }
}
