<?php

namespace App\Admin\Controllers;

use App\Models\Page;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class PageController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Page(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('created_at');
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });

            $grid->disableViewButton();
            $grid->disableCreateButton();
            $grid->disableDeleteButton();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Page(), function (Form $form) {
            $form->text('title');
            $form->editor('content');

            $form->disableHeader();
            $form->footer(function ($footer) {
                $footer->disableViewCheck();
                $footer->disableEditingCheck();
                $footer->disableCreatingCheck();
            });
        });
    }
}
