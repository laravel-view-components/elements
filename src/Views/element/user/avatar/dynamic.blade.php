<span {{ $attributes->merge([ 'class' => $getClassAttributes() ]) }} style="background-image: url('{{ $user->getAvatarImageUrl() }}')">
  <span class="badge bg-{{ $user->getStatusColor() }}"></span>
  {{ $slot }}
</span>
