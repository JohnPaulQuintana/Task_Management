<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Section1;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Section4;
use App\Models\Section5;
use Illuminate\View\View;
use App\Events\NotifyEvent;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\CompletedTask;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function dashboard()
    {
        $alreadyDo = CompletedTask::where('user_id', Auth::user()->id)->first();

        
        if($alreadyDo != null){
            $allTasked = Task::where('id', '!=', $alreadyDo->task_id)->latest()->get();
        }else{
            $allTasked = Task::get();
        }

        
        if(Auth::user()->role === 1){
            // finish
            $complete = CompletedTask::count();
        }else{
            // finish
            $complete = CompletedTask::where('user_id', Auth::user()->id)->count();
        }
        $today = Task::where('category', 'daily')->count();
        $weekly = Task::where('category', 'weekly')->count();
        $monthly = Task::where('category', 'monthly')->count();
       
        // dd($f);

        $section1 = Section1::get();
        $section2 = Section2::get();
        $section3 = Section3::get();
        $section4 = Section4::get();
        $section5 = Section5::get();
        return view('dashboard', [
            'complete' => $complete,
            'daily' => $today,
            'weekly' => $weekly,
            'monthly' => $monthly,
            'tasks' => $allTasked, 
            'section1' => $section1, 
            'section2' => $section2, 
            'section3' => $section3, 
            'section4' => $section4, 
            'section5' => $section5
        ]);
    }
    public function completed()
    {

        // Retrieve tasks along with completed tasks for the authenticated user using join
        $tasksWithCompletedTasks = DB::table('completed_tasks')
        ->join('tasks', 'completed_tasks.task_id', '=', 'tasks.id')
        ->leftjoin('p_d_f_paths', 'completed_tasks.id', '=', 'p_d_f_paths.task_id')
        ->where('completed_tasks.user_id', Auth::user()->id)
        ->select('tasks.id as taskID', 'tasks.title', 'tasks.description', 'tasks.category', 'tasks.task_number',
            'completed_tasks.user_id', 'completed_tasks.task_id', 'completed_tasks.id as completedID',
            'p_d_f_paths.id as pathID', 'p_d_f_paths.path'
        )
        ->get();

        // Use Laravel's collection methods to remove duplicates
$uniqueTasksWithCompletedTasks = collect($tasksWithCompletedTasks)->groupBy('completedID')->map->first()->values()->all();


        
        // dd($uniqueTasksWithCompletedTasks);

        return view('layouts.task', ['tasks' => $uniqueTasksWithCompletedTasks]);
    }
    public function completedAdmin()
    {

        // Retrieve tasks along with completed tasks for the authenticated user using join
        $tasksWithCompletedTasks = DB::table('completed_tasks')
        ->join('tasks', 'completed_tasks.task_id', '=', 'tasks.id')
        ->join('p_d_f_paths', 'completed_tasks.id', '=', 'p_d_f_paths.task_id')
        ->join('users', 'completed_tasks.user_id', '=', 'users.id')
        ->where('completed_tasks.user_id', '!=', Auth::user()->id)
        ->select('tasks.id as taskID', 'tasks.title', 'tasks.description', 'tasks.category', 'tasks.task_number',
            'completed_tasks.user_id', 'completed_tasks.task_id', 'completed_tasks.id as completedID',
            'users.name',
            'p_d_f_paths.id as pathID', 'p_d_f_paths.path'
        )
        ->get();
        
        // dd($tasksWithCompletedTasks);

        return view('layouts.task', ['tasks' => $tasksWithCompletedTasks]);
    }

    public function adminUsers(){
        $users = User::where('role', 0)->get();
        return view('layouts.admin-user', ['users'=>$users]);
    }

    public function createdAdmin()
    {
        $tasks = Task::latest()->get();
        $section1 = Section1::get();
        $section2 = Section2::get();
        $section3 = Section3::get();
        $section4 = Section4::get();
        $section5 = Section5::get();
        return view('layouts.admin-created', [
            'tasks'=>$tasks,
            'section1' => $section1, 
            'section2' => $section2, 
            'section3' => $section3, 
            'section4' => $section4, 
            'section5' => $section5
        ]);
    }
    public function today()
    {
        $alreadyDo = CompletedTask::where('user_id', Auth::user()->id)->first();

        if($alreadyDo != null){
            $allTasked = Task::where('id', '!=', $alreadyDo->task_id)->where('category', 'daily')->latest()->get();
        }else{
            $allTasked = Task::where('category', 'daily')->get();
        }
        return view('layouts.today', ['tasks' => $allTasked]);
    }
    public function weekly()
    {
        $alreadyDo = CompletedTask::where('user_id', Auth::user()->id)->first();
        // dd($alreadyDo);
        if($alreadyDo != null){
            $allTasked = Task::where('id', '!=', $alreadyDo->task_id)->where('category', 'weekly')->latest()->get();
        }else{
            $allTasked = Task::where('category', 'weekly')->get();
        }
        // dd($allTasked);
        return view('layouts.weekly', ['tasks' => $allTasked]);
    }
    public function monthly()
    {
        $alreadyDo = CompletedTask::where('user_id', Auth::user()->id)->first();
        // dd($alreadyDo);
        if($alreadyDo != null){
            $allTasked = Task::where('id', '!=', $alreadyDo->task_id)->where('category', 'monthly')->latest()->get();
        }else{
            $allTasked = Task::where('category', 'monthly')->get();
        }
        // dd($allTasked);
        return view('layouts.monthly', ['tasks' => $allTasked]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $requestValidated = $request->only(['task_number', 'title', 'description', 'category']);
        $requestValidatedS1 = $request->only(['s1_section', 's1_title', 's1_document_number', 's1_effective_date', 's1_revision_number', 's1_page']);
        if($request->task_id !== null){
          
            // Find the task by ID and update it with the extracted fields
            Task::where('id', $request->task_id)->update($requestValidated);
            Section1::where('id', 1)->update($requestValidatedS1);
            return redirect()->back()->with(['success' => 'Task updated successfully', 'status' => true]);
        }

       
        // task
        $task = new Task;
        $task->fill($requestValidated);
        $task->save();

        event(new NotifyEvent(["from_id"=>Auth::user()->id,"role"=>1, 'status'=>"created"]));
        
        // notification save
        Notification::create(['user_id'=>Auth::user()->id, 'document_number'=>$requestValidated['task_number'], 'role'=>1]);

        // $form = $this->generatePDF();

        // Redirect back to the previous page
        return redirect()->back()->with(['success' => 'Task created successfully', 'status' => true]);
    }

    public function take(Request $request, $id){
        $task = Task::find($id);

        $section1 = Section1::get();
        $section2 = Section2::get();
        $section3 = Section3::get();
        $section4 = Section4::get();
        $section5 = Section5::get();

        return view('layouts.take', [
            'tasks' => $task, 
            'section1' => $section1, 
            'section2' => $section2, 
            'section3' => $section3, 
            'section4' => $section4, 
            'section5' => $section5
        ]);
    }

    // Delete a task
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        // Add any additional authorization checks if needed

        $task->delete();

         // Redirect back to the previous page
         return redirect()->back()->with(['success' => 'Task deleted successfully', 'status' => true]);
    }

    private function generatePDF()
    {
        return view('pdf-templates.pdf');
    }
}
