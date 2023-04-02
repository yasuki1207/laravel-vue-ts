<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'ziggy' => function () use ($request) {
                $ziggyGroups = is_null($request->user()) ? ['guest'] : ['all'];
                if (config('app.env') !== 'production') {
                    array_push($ziggyGroups, 'ignition');
                }
                return array_merge((new Ziggy($ziggyGroups))->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }
}
