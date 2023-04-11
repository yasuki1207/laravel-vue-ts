<?php

namespace App\Http\Controllers\Guest\Soccer;

use App\Http\Controllers\Controller;
use App\Models\SoccerLeague;
use App\Services\Guest\BreadcrumbService;
use Inertia\Inertia;

class StandingController extends Controller
{
    public function __invoke(string $prefix)
    {
        return Inertia::render('Guest/Soccer/Standing', [
            'league' => SoccerLeague::where('prefix', $prefix)->first(),
            'breadcrumbs' => BreadcrumbService::getBreadcrumbs(),
        ]);
    }
}
