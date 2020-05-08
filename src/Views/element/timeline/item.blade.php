<li>
  <div class="list-timeline-icon bg-{{ $color }}">{{ $icon ?? '' }}</div>
  <div class="list-timeline-content">
    <div class="list-timeline-time">{{ $time }}</div>
    <p class="list-timeline-title">{{ $title }}</p>
    {{ $slot }}
  </div>
</li>
