<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedProductForm extends Component
{
    public $featuredProduct;

    public function __construct($featuredProduct = null)
    {
        $this->featuredProduct = $featuredProduct;
    }

    public function render()
    {
        return view('components.featured-product-form');
    }
}
