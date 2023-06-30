<?php

namespace App\View\Components\Searchbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Searchbar extends Component
{
  public function __construct() { }
  public function render(): View|Closure|string { return view('components.searchbar.searchbar'); }
}
