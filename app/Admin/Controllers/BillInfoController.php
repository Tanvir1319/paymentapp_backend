<?php

namespace App\Admin\Controllers;

use App\Models\BillInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BillInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BillInfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BillInfo());
        $grid->column('id',"ID");
        $grid->column('brand_name',"Brand Name");
        $grid->column('brand_logo',"Brand Logo");
        $grid->column('due',"Due");
        $grid->column('due_more',"Due Info");
        $grid->column('brand_id',"Brand Id");
        $grid->column('due_date',"Due Date");
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BillInfo::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BillInfo());



        return $form;
    }
}
