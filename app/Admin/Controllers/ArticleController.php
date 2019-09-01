<?php

namespace App\Admin\Controllers;

use App\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(){

        // return Admin::grid(Article::class, function (Grid $grid){
        $grid = new Grid(new Article);
        $grid->id('ID')->sortable();
        $grid->column('subject');
        $grid->column('description');
        $grid->picture('picture')->image();



        $grid->column('incharge');
        $grid->column('created_at');
        $grid->column('updated_at');
        // });
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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('subject', __('Subject'));
        $show->field('description', __('Description'));
        $show->field('picture', __('Picture'));
        $show->field('incharge', __('Incharge'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(){


        // return Admin::form(Article::class, function (Form $form) {
        $form = new Form(new Article);
        $form->display('id', 'ID');

        $form->text('subject');
        $form->textarea('description');
        $form->image('picture');
        $form->text('incharge');

        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');
        // });
        return $form;
    }
}
