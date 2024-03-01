<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function notifs(){
        $notifs = DB::table('notifications')
            ->join('users', 'notifications.user_id', '=', 'users.id')
            ->select('users.name','users.role as checkrole', 'notifications.*')
            ->where('notifications.read', 0)
            ->latest()
            ->get();
        return response()->json(['notifs'=>$notifs]);
    }

    public function notificationUpdate($id){
        // Find the notification by ID
        $notification = Notification::find($id);
        $notification->update(['read'=>1]);
        return response()->json(['reload'=>true]);
    }
}
