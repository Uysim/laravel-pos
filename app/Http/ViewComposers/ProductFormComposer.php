<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;

class ProductFormComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $category_select_collection;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('category_select_collection', Category::pluck('name', 'id'));
    }
}
