<?php

namespace App\View\Components\UI;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BaseCard extends Component
{
  public function __construct(public string $class = '') { }
  public function render(): View|Closure|string { return view('components.ui.base-card'); }
}
