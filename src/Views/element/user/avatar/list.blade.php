<div {{ $attributes->merge([ 'class' => 'avatar-list' . ($stacked) ? ' avatar-list-stacked' : '' ]) }} class=" ">
@if($slot)
  {{ $slot }}
@else
  @foreach($users as $user)
  <x-element-user-avatar :user="$user" />
  @endforeach
@endif
</div>
