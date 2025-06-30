<?php
/** @var string $route */

?>

<a
    class="nav-link
    {{ request()->routeIs($route) ? 'active' : '' }}"
    {!! request()->routeIs($route) ? 'aria-current="page"' : '' !!}
    href="{{ route($route) }}"

>
    {{ $slot }}
</a>