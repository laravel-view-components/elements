<span {{ $attributes->merge([ 'class' => $getClassAttributes() . ($currentStep == $name ? ' active' : '') ]) }}>
  {{ $title }}
</span>
