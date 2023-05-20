<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Requests\VolunteerRequest;
use App\Models\Position;
use Illuminate\Support\Facades\Storage;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::get();
        
        return view('volunteers.index', compact('volunteers'));
    }

    public function edit(string $id)
    {
        $volunteer = Volunteer::where('id', $id)->first();
        $positions = Position::get();
        $statuses = Status::get();
      
        return view('volunteers.edit', compact('volunteer', 'statuses', 'positions'));
    }

    public function update(VolunteerRequest $request, Volunteer $volunteer)
    {   
        $volunteer->name = $request->name;
        $volunteer->city = $request->city;
        $volunteer->email = $request->email;
        $volunteer->phone = $request->phone;
        $volunteer->position = $request->position;
        $volunteer->details = $request->details;
        $volunteer->status = $request->status;

        if($request->file('file') !== null)
        {
            Storage::delete('public/'.$volunteer->file);
            $file = $request->file('file');
            $fileName = md5($file->getClientOriginalName().time());
            $filePath = 'uploads/'.$fileName;
            Storage::disk('public')->put($filePath, file_get_contents($request->file('file')));
            $volunteer->file = $filePath;

        }

        if($volunteer->save()) {
            return redirect()->route('volunteers.index')->with('success', 'Volunteer updated !');
        }

        return redirect()->route('volunteer.index')->with('error', 'Something went wrong!');
    }

    public function archive(Request $request, Volunteer $volunteer)
    {
        $volunteer->archived = $request->archive;

        if($volunteer->save()) {
            return redirect()->route('volunteers.index')->with('success', 'Volunteer archived !');
        }

        return redirect()->route('volunteers.index')->with('error', 'Something went wrong!');
    }

    public function return(Volunteer $volunteer)
    {
        $volunteer->archived = null;

        if($volunteer->save()) {
            return redirect()->route('volunteers.index')->with('success', 'Volunteer returned !');
        }

        return redirect()->route('volunteers.index')->with('error', 'Something went wrong!');
    }

    public function destroy(Volunteer $volunteer)
    {
        if($volunteer->delete()) {
            if(Storage::exists('public/'.$volunteer->file))
            {
                Storage::delete('public/'.$volunteer->file);
            }

            return redirect()->route('volunteers.index')->with('success', 'Volunteer deleted successfuly!');
        }
        return redirect()->route('volunteers.index')->with('error', 'Something went wrong!');
    }
}
