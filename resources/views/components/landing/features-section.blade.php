<section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3  gap-10 text-center px-10">
  @foreach($features as $feature)
    <x-ui.base-card>
      <h3 class="my-3 flex items-center justify-center gap-2 uppercase font-medium text-xl text-rose-600">
        {!! $feature['heading'] !!}
      </h3>
      <p class="leading-relaxed text-gray-500">{!! $feature['body'] !!}</p>
    </x-ui.base-card>
  @endforeach
</section>
