<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">

    <form action="/tweets" method="post">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's up..."></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img src="{{ auth()->user()->getAvatarAtribute() }}" alt="your avatar" class="rounded-full">
            <button type="submit" class="bg-blue-500 rounded-lg p-2 text-white">Post</button>
        </footer>
    </form>

    @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>