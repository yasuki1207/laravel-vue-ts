<?php

namespace App\Services\Guest;

class BreadcrumbService
{
    public static function getBreadcrumbs(): array
    {
        $breadcrumbArray = [];
        if (request()->routeIs('guest.soccer.*') && !request()->routeIs('guest.soccer.index')) {
            array_push($breadcrumbArray, [
                'position' => 1,
                'name' => 'リーグ一覧',
                'route' => route('guest.soccer.index'),
            ]);
        }
        return $breadcrumbArray;
    }
}