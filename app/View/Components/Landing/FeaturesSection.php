<?php

namespace App\View\Components\Landing;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturesSection extends Component
{
  public array $features;

  public function __construct()
  {
    $this->features = [
      [
        'heading' => '<i class="fa-solid fa-face-grin-hearts"></i>We love our customers',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab beatae consectetur dolore ea, earum excepturi facere iusto magni nemo nobis qui quis sunt, temporibus veritatis. Architecto quae repudiandae voluptatem.'
      ],
      [
        'heading' => ' <i class="fa-solid fa-percent"></i>Best prices',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab beatae consectetur dolore ea, earum excepturi facere iusto magni nemo nobis qui quis sunt, temporibus veritatis. Architecto quae repudiandae voluptatem.'
      ],
      [
        'heading' => '<i class="fa-solid fa-face-smile-beam"></i>100% Satisfaction',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab beatae consectetur dolore ea, earum excepturi facere iusto magni nemo nobis qui quis sunt, temporibus veritatis. Architecto quae repudiandae voluptatem.'
      ],
    ];
  }

  public function render(): View|Closure|string { return view('components.landing.features-section'); }
}
