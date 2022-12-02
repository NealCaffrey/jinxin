<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Attribute;
use App\Models\AttributeCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class AttributeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Attribute(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('category_id', '属性分类')->display(function ($categoryId) {
                return AttributeCategory::find($categoryId)->name;
            });
            $grid->column('name');
            $grid->column('order')->sortable();

            $grid->disableViewButton();
            $grid->quickSearch('name');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Attribute(), function (Form $form) {
            $form->select('category_id')->options('/api/attribute_category')->rules('required');
            $form->text('name')->rules('required');
            $form->text('order')->rules('int')->default(0);

            $form->disableHeader();
            $form->footer(function ($footer) {
                $footer->disableViewCheck();
                $footer->disableEditingCheck();
                $footer->disableCreatingCheck();
            });
        });
    }
}
