<div {{ $attributes->merge([ 'class' => 'list list-timeline' . ($simple ? ' list-timeline-simple' : '' ) ]) }}>
<ul class="list list-timeline">
  {{ $slot }}
</ul>
