<?php

namespace App\Http\Controllers\Guest\Soccer;

use App\Http\Controllers\Controller;
use App\Models\SoccerLeague;
use App\Services\Guest\BreadcrumbService;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Guest/Soccer/Index', [
            'leagues' => SoccerLeague::get(['id', 'name', 'prefix']),
            'breadcrumbs' => BreadcrumbService::getBreadcrumbs(),
        ]);
    }
}
