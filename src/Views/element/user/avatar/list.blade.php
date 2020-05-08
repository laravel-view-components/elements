<div {{ $attributes->merge([ 'class' => 'avatar-list' . ($stacked ? ' avatar-list-stacked' : '') ]) }}>
@if($slot->isEmpty())
  @foreach($users as $user)
  <x-element-user-avatar :user="$user" />
  @endforeach
@else
  {{ $slot }}
@endif
</div>
