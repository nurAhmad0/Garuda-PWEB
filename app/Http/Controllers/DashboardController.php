<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $user = $request->user();
        if ($user->role === 'klien') {
            $projects = Project::where('client_id', $user->id)
                ->withCount('bids')
                ->orderByDesc('id')
                ->get();
            return view('dashboard.klien', compact('projects'));
        }
        $bids = Bid::with('project.client')
            ->where('developer_id', $user->id)
            ->orderByDesc('id')
            ->get();
        return view('dashboard.developer', compact('bids'));
    }
}
