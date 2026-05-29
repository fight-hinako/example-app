
@extends('layouts.app')
 <div class="profile-page">
 @section('title', 'プロフィール')

 @section('content')

    <h1>Hello Profile Page</h1>

    <h2>ようこそ{{ $name }}さん！</h2>
    @if ($is_admin)
        <p>あなたは管理者です。</p>
    @else
        <p>あなたは一般ピーポーです。</p>
    @endif

    <ul>
    @foreach ($skills as $skill)
        <li>{{ $skill }}</li>
    @endforeach
    </ul>
    {{--ログイン関係--}}
    @auth
        <button>ログアウト</button>
    @endauth
    @guest
        <button>ログイン</button>
    @endguest

   <img src = "{{ asset('directory/images/134104929311952660.jpg') }}">
  </div>
 @endsection

 <x-alert bg="bg-blue-500" role="alert">
     <x-slot:title>
        Blue
     </x-slot:title>>
    Text
 </x-alert>
