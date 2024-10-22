<ul>
    <li><a class="{{ request()->routeIs('home' ? 'text-gray-400' : 'text-gray-700') }}" href="{{ route('home') }}">Home</a></li>
    <li><a class="{{ request()->routeIs('post.index' ? ' text-gray-400' : 'text-gray-700 ') }}" href="{{ route('posts.index') }}">Blog</a></li>
    <li><a class="{{ request()->routeIs('about' ? ' text-gray-400' : 'text-gray-700 ') }}" href="{{ route('about') }}">Nosotros</a></li>
    <li><a class="{{ request()->routeIs('contact' ? ' text-gray-400' : 'text-gray-700 ') }}" href="{{ route('contact') }}">Contacto</a></li>
</ul>
