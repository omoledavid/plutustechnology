<?php

function setActiveMenu(string $routeName, string $activeClass = 'active'): string
{
    return request()->routeIs($routeName) ? $activeClass : '';
}
function logo()
{
    return asset('assets/image/logo/logo.png');
}