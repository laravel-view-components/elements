<span {{ $attributes->merge([ 'class' => $getClassAttributes() ]) }}>
  @if($color)
  <span class="badge bg-{{ $color }}"></span>
  @endif
  {{ $slot }}
</span>
