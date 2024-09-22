<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $Notifications = Notification::where("user_id", Auth::user()->id)->paginate(10);
        return view('Pages.Notifications', [
            'title' => 'All Notifications',
            'Notifications' => $Notifications
        ]);
    }
}
