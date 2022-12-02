<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Tree;

class CategoryController extends AdminController
{
    public function index(Content $content)
    {
        return $content->header('导航菜单')
            ->body(function (Row $row) {
                $tree = new Tree(new Category);
                $tree->disableCreateButton();
                $tree->disableEditButton();
                $row->column(12, $tree);
                $tree->branch(function ($branch) {
                    return $branch['name'];
                });
                $tree->maxDepth(2);
            });
    }

    protected function form()
    {
        return Form::make(new Category(), function (Form  $form) {
            $form->select('parent_id')
                ->options('/api/category_list')
                ->saving(function ($v) {
                    return (int) $v;
                });
            $form->text('name')->rules('required');
        });
    }
}
