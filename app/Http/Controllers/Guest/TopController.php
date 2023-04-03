<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class TopController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Guest/Top');
    }
}
