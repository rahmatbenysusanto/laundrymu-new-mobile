<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ChatController extends Controller
{
    public function index(): View
    {
        $dataChat = $this->GET('api/chat?outlet_id='.Session::get('toko')->id, []);
        $chat = $dataChat->data ?? [];

        return view('chat.index', compact('chat'));
    }

    public function create(Request $request): \Illuminate\Http\JsonResponse
    {
        $result = $this->POST('api/chat', [
            "outlet_id" => Session::get('toko')->id,
            "role"      => "client",
            "chat"      => $request->post('chat')
        ]);

        if (isset($result) && $result->status) {
            return response()->json([
                'status'    => true
            ], 200);
        } else {
            return response()->json([
                'status'    => false
            ], 400);
        }
    }

    public function getChat(): \Illuminate\Http\JsonResponse
    {
        $dataChat = $this->GET('api/chat?outlet_id='.Session::get('toko')->id, []);
        $chat = $dataChat->data ?? [];

        return response()->json([
            'status'    => true,
            'data'      => $chat
        ], 200);
    }
}
