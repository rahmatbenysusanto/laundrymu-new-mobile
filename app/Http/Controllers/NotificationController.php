<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function detail($id): View
    {
        $notification = DB::table('notification')->where('id', $id)->first();
        DB::table('notification')->where('id', $id)->update([
            'status' => 'read',
            'updated_at' => now()->timestamp * 1000
        ]);

        return view('notification.detail', compact('notification'));
    }

    public function count(): \Illuminate\Http\JsonResponse
    {
        $hit = $this->GET('api/notification/count', []);

        return response()->json([
            'data' => $hit->data ?? []
        ]);
    }
}
