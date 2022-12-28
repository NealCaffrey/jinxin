<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Slide;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SlideController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Slide(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('image')->image('', 100, 100);
            $grid->column('orders')->sortable();


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
        return Form::make(new Slide(), function (Form $form) {
            $form->display('id');
            $form->image('image')->uniqueName()->autoUpload();
            $form->text('orders')->rules('int')->default(10);

            $form->disableHeader();
            $form->footer(function ($footer) {
                $footer->disableViewCheck();
                $footer->disableEditingCheck();
                $footer->disableCreatingCheck();
            });
        });
    }
}
