<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function handleVisitor(Request $request)
    {
        $ipAddress = $request->ip();

        $visitor = Visitor::firstOrCreate(
            ['ip_address' => $ipAddress],
            ['new_visits' => 1, 'unique_visits' => 1]
        );

        if (!$visitor->wasRecentlyCreated) {
            $visitor->increment('new_visits');
        }
    }
}
