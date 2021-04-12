<div class="">
<ul class="flex flex-row justify-center">
    <li class="p-4">Home</li>
    <li class="p-4">About</li>
    <li class="p-4"><a href="/posts">Blog</a></li>
    <li class="p-4">Contact Us</li>
    <li class="p-4"><a href="/posts/create">Create Post</a></li>
</ul>
</div>

@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="/userpage/{{auth()->user()->id}}" class="text-sm text-gray-700 underline">{{auth()->user()->name}}</a>
                        <a href="/userpage/{{auth()->user()->id}}" class="text-sm text-gray-700 underline">My Blogs</a>
                        <a href="{{ url('/userpage') }}" class="text-sm text-gray-700 underline">Logout</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



