<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">Home</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/explore">Explore</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/notifications">Notifications</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/messages">Messages</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/bookmarks">Bookmarks</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">Lists</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('profile', auth()->user()) }}">Profile</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="#">More</a>
    </li>
</ul>