<div {{ $attributes->merge([ 'class' => 'progress progress-' . $size ]) }}>
  @if($indeterminate)
  <div class="progress-bar bg-{{ $color }} progress-bar-indeterminate"></div>
  @else
  <div class="progress-bar bg-{{ $color }}" style="width: {{ $progress }}%" role="progressbar" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
    <span class="sr-only">{{ $progress }}% Complete</span>
  </div>
  @endif
</div>
