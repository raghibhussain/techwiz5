<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function NotificationReed(Request $req)
    {
        $id = $req->id;

        Notification::where('id', $id)->update(['isReed' => 1]);

        return response()->json(['success' => 'Notification Updated Successfully']);
    }

    public function getNotificationPage()
    {
        return view('Pages.Notifications', [
            'title' => 'All Notifications'
        ]);
    }
}
