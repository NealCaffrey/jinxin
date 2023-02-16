<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Product;
use App\Models\Attribute;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ProductController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Product(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('image')->image('', 100, 100);
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });

            $grid->disableViewButton();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Product(), function (Form $form) {
            $form->select('category_id')
                ->options('/api/category_list_2')
                ->rules('required');

            $form->select('brand_id')
                ->options('/api/brand_list');

            $form->select('appearance_id')
                ->options('/api/appearance_list');

            $form->text('name');
            $form->image('image')->uniqueName()->autoUpload()->rules('required');
            $form->multipleImage('slide');

            $form->embeds('attribute', '属性', function ($form) {
                $attribute = Attribute::all();
                //属性字段
                foreach ($attribute as $attr)
                {
                    $form->text($attr->name);
                }
            })->saving(function ($v) {
                // 转化为json格式存储
                return json_encode($v);
            });

            $form->editor('content')->rules('required');
            $form->editor('spec')->rules('required');

            $form->disableHeader();
            $form->footer(function ($footer) {
                $footer->disableViewCheck();
                $footer->disableEditingCheck();
                $footer->disableCreatingCheck();
            });
        });
    }
}
