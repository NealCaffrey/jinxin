<?php

namespace App\Admin\Controllers;

use App\Models\Business;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BusinessController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Business(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('url');
            $grid->column('image')->image('', 100, 100);
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

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
        return Form::make(new Business(), function (Form $form) {
            $form->text('name');
            $form->text('url');
            $form->image('image')->uniqueName()->autoUpload()->rules('required');

            $form->display('created_at');
            $form->display('updated_at');

            $form->disableHeader();
            $form->footer(function ($footer) {
                $footer->disableViewCheck();
                $footer->disableEditingCheck();
                $footer->disableCreatingCheck();
            });
        });
    }
}
