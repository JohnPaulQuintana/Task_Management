<?php

namespace App\Http\Controllers;

use App\Models\PDFPath;
use App\Models\Section1;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Section4;
use App\Models\Section5;
// use App\Models\Pdf;
use App\Events\NotifyEvent;
use Illuminate\Http\Request;
use App\Models\CompletedTask;
use App\Models\Notification;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompletedTaskController extends Controller
{
    public function completed(Request $request){
    

        // task
        // Get the currently authenticated user's ID
        $userId = Auth::user()->id;
        // Insert a single record with user_id
        CompletedTask::create(array_merge($request->all(), ['user_id' => $userId]));
        
        // Retrieve all CompletedTasks
        $allCompletedTasks = CompletedTask::where('user_id', $userId)->first();
        // dd($allCompletedTasks);
        Pdf::setOption(['dpi' => 300, 'defaultFont' => 'sans-serif']);

        $pdf = Pdf::loadView('pdf-templates.pdf', ['render'=>$allCompletedTasks]);
        // Generate a unique filename for the PDF
        $filename = 'completed/'.$userId.'_' . uniqid() . '.pdf';

        PDFPath::create(["user_id"=>$userId,"task_id"=>$allCompletedTasks->id,"path"=>$filename]);
         // Ensure the "completed" directory exists
        // Storage::makeDirectory('completed');
        $pdf->setPaper('a4', 'portrait')->save(Storage::disk('public')->path($filename));

        event(new NotifyEvent(["from_id"=>$userId,"role"=>0, 'status'=>"completed"]));
        
        // notification save
        Notification::create(['user_id'=>$userId, 'document_number'=>$allCompletedTasks->s4_document_number, 'role'=>0]);
        
        return redirect()->back()->with(['success' => 'Task completed successfully', 'status' => true]);
    }


   
}
