<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;

class ActiveAndInactiveUsersController extends Controller
{
    /**
     * Active and inactive users.
     */
    public function __invoke()
    {
        $statusCount = User::query()
            ->addSelect(DB::raw('count(*) as count'))
            ->groupBy('active')
            ->get();
        return view('users.active-count', ['statusCount' => $statusCount]);
    }
}
