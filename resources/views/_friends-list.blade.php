<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach (auth()->user()->follows as $user)
    <li class="mb-4">
     
        <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
            <img 
                src="{{ $user->getAvatarAtribute() }}" 
                alt="" 
                class="rounded-full"
                width="40"
                height="40"
            >
            <p class="ml-2">{{ $user->name }}</p>
        </a>
 
    </li>
    @endforeach
</ul>