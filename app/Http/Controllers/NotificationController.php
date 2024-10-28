<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class NotificationController extends Controller
{
    public function findByUserId(): View
    {
        $hit = $this->GET('api/notification', []);
        $notif = $hit->data;

        return view('notification.index', compact('notif'));
    }

    public function count(): \Illuminate\Http\JsonResponse
    {
        $hit = $this->GET('api/notification/count', []);

        return response()->json([
            'data' => $hit->data ?? []
        ]);
    }
}
