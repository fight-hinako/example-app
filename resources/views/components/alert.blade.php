{{-- Alert component -- slate-900 text-white rounded-xl px-6 py-4 inline-block --}}
<div {{ $attributes->merge([
    'class'=>'text-white rounded-xl px-6 py-4 inline-block '. $bg
]) }} role= {{ $role }}>
    @isset($title)
        <span class="font-bold">{{ $title }}</span>
    @endisset
     {{ $slot }}
  </div>



