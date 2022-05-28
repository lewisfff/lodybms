@extends('app')

@section('content')
    <div class="user-links">
        @foreach(\App\Models\User::all() as $user)
            <a class="user-link" href="{{ route('user', [$user->name]) }}">
                <div class="user-image"
                     style="background-image: url('{{ $user->profile_image_url }}')">
                    {{ $user->display_name }}
                </div>
            </a>
        @endforeach
    </div>
@endsection
