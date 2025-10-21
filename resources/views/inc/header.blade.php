<header>
    <nav>
        <ul class="list-unstyled">
            <li><a href="{{ route('index') }}">index</a></li>
            @auth
            <li><a href="{{ route('secret') }}">secret</a></li>
            <li><a href="{{ route('logout') }}">выход</a></li>
            @else
            <li><a href="{{ route('login') }}">login</a></li>
            <li><a href="{{ route('register') }}">register</a></li>
        </ul>
        @endauth
    </nav>
</header>