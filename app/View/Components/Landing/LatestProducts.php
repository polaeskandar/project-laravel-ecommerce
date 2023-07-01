<?php

namespace App\View\Components\Landing;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestProducts extends Component
{
  public function __construct() { }
  public function render(): View|Closure|string { return view('components.landing.latest-products'); }
}
