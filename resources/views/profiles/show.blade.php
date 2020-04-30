@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">

        <img 
            src="https://i.pinimg.com/originals/f4/2b/30/f42b30f75c7a0e5d5f6f3ee37be915fc.jpg" 
            alt=""
            class="mb-2"
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit Profile</a>
                <form action="/profiles/{{ $user->name }}/follow" method="post">
                    @csrf
                    <button 
                        type="submit" 
                        class="bg-blue-500 rounded-full py-2 px-4 text-white text-xs"
                    >
                        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
                    </button>
                </form>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea itaque quis quibusdam accusantium atque, magnam, 
            provident suscipit rem dolor officiis ab quas placeat enim. Nulla, maiores nisi! Error, in unde.
        </p>

        <img 
            src="{{ $user->getAvatarAtribute() }}" 
            alt="" 
            class="rounded-full absolute"
            style="width:150px; left:calc(50% - 75px); top:138px;"
        >

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets // relationship tweets()
    ])
@endsection