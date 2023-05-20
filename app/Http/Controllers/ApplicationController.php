<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Computer;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::get();
        
        return view('applications.index', compact('applications'));
    }

    public function create()
    {
        $computers = Computer::get();
        return view('applications.create', compact('computers'));
    }

    public function store(ApplicationRequest $request)
    {
        $application = new Application();
        $application->name = $request->name;
        $application->surname = $request->surname;
        $application->city = $request->city;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->computer = $request->computer;
        $application->comment = $request->comment;

        if($request->file('file1') !== null)
        {
            Storage::delete('public/'.$application->file1);
            $file1 = $request->file('file1');
            $file1Name = md5($file1->getClientOriginalName());
            $file1Path = 'uploads/'.$file1Name;
            Storage::disk('public')->put($file1Path, file_get_contents($request->file('file1')));
            $application->file1 = $file1Path;

        }

        if($request->file('file2') !== null)
        {
            Storage::delete('public/'.$application->file2);
            $file2 = $request->file('file2');
            $file2Name = md5($file2->getClientOriginalName());
            $file2Path = 'uploads/'.$file2Name;
            Storage::disk('public')->put($file2Path, file_get_contents($request->file('file2')));
            $application->file2 = $file2Path;

        }

        if($application->save()) {
            return redirect()->route('applications.index')->with('success', 'Applications created !');
        }

        return redirect()->route('applications.index')->with('error', 'Something went wrong!');
    }

    public function edit(string $id)
    {
        $application = Application::where('id', $id)->first();
        $computers = Computer::get();
        $statuses = Status::get();
      
        return view('applications.edit', compact('application', 'statuses', 'computers'));
    }

    public function update(ApplicationRequest $request, Application $application)
    {   
        $application->name = $request->name;
        $application->surname = $request->surname;
        $application->city = $request->city;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->computer = $request->computer;
        $application->comment = $request->comment;
        $application->status = $request->status;

        if($request->file('file1') !== null)
        {
            Storage::delete('public/'.$application->file1);
            $file1 = $request->file('file1');
            $file1Name = md5($file1->getClientOriginalName().time());
            $file1Path = 'uploads/'.$file1Name;
            Storage::disk('public')->put($file1Path, file_get_contents($request->file('file1')));
            $application->file1 = $file1Path;

        }

        if($request->file('file2') !== null)
        {
            Storage::delete('public/'.$application->file2);
            $file2 = $request->file('file2');
            $file2Name = md5($file2->getClientOriginalName().time());
            $file2Path = 'uploads/'.$file2Name;
            Storage::disk('public')->put($file2Path, file_get_contents($request->file('file2')));
            $application->file2 = $file2Path;

        }

        if($application->save()) {
            return redirect()->route('applications.index')->with('success', 'Applications updated !');
        }

        return redirect()->route('applications.index')->with('error', 'Something went wrong!');
    }

    public function archive(Request $request, Application $application)
    {
        $application->archived = $request->archive;

        if($application->save()) {
            return redirect()->route('applications.index')->with('success', 'Application archived !');
        }

        return redirect()->route('applications.index')->with('error', 'Something went wrong!');
    }

    public function return(Application $application)
    {
        $application->archived = null;

        if($application->save()) {
            return redirect()->route('applications.index')->with('success', 'Application returned !');
        }

        return redirect()->route('applications.index')->with('error', 'Something went wrong!');
    }

    public function destroy(Application $application)
    {
        if($application->delete()) {
            if(Storage::exists('public/'.$application->file1))
            {
                Storage::delete('public/'.$application->file1);
            }
            if(Storage::exists('public/'.$application->file2))
            {
                Storage::delete('public/'.$application->file2);
            }

            return redirect()->route('applications.index')->with('success', 'Application deleted successfuly !');
        }
        return redirect()->route('applications.index')->with('error', 'Something went wrong!');
    }
}
