<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Simple message method
     *
     * @param Request $request
     * @return array
     */
    public function message(Request $request): array
    {
        event(new MessageEvent(
            $request->input("username"),
            $request->input("message")
        ));

        return [];
    }
}
