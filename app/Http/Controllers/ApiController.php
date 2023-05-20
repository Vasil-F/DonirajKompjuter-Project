<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Video;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Volunteer;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\VolunteerRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ApplicationRequest;
use App\Models\Donation;

class ApiController extends Controller
{
    public function blogs() 
    {
        $blogs = Blog::get();
        return response()->json($blogs);
    }
    public function videos() 
    {
        $videos = Video::get();
        return response()->json($videos);
    }
    public function partners() 
    {
        $partners = Partner::get();
        return response()->json($partners);
    }

    public function storeContact(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->archived = null;
        $contact->created_at = Carbon::now();

        if($contact->save()){
            return response('Success');
        }

        return response('Error');
    }

    public function storeVolunteer(VolunteerRequest $request)
    {
        $volunteer = new Volunteer();
        $volunteer->name = $request->name;
        $volunteer->city = $request->city;
        $volunteer->email = $request->email;
        $volunteer->phone = $request->phone;
        $volunteer->position = $request->position;
        $volunteer->details = $request->details;
        $volunteer->archived = null;
        $volunteer->created_at = Carbon::now();

        $file = $request->file('file');
        $fileName = md5($file->getClientOriginalName().time());
        $filePath = 'uploads/'.$fileName;
        Storage::disk('public')->put($filePath, file_get_contents($request->file('file')));

        $volunteer->file = $filePath;

        if($volunteer->save()){
            return response('Success');
        }

        return response('Error');
    }

    public function storeApplication(ApplicationRequest $request)
    {
        $application = new Application();
        $application->name = $request->name;
        $application->surname = $request->surname;
        $application->city = $request->city;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->computer = $request->computer;
        $application->comment = $request->comment;
        $application->archived = null;
        $application->created_at = Carbon::now();

        if($request->file('file1') !== null)
        {
        $file1 = $request->file('file1');
        $file1Name = md5($file1->getClientOriginalName().time());
        $file1Path = 'uploads/'.$file1Name;
        Storage::disk('public')->put($file1Path, file_get_contents($request->file('file1')));
        $application->file1 = $file1Path;
        }

        if($request->file('file2') !== null)
        {
        $file2 = $request->file('file2');
        $file2Name = md5($file2->getClientOriginalName().time());
        $file2Path = 'uploads/'.$file2Name;
        Storage::disk('public')->put($file2Path, file_get_contents($request->file('file2')));
        $application->file2 = $file2Path;
        }

        if($application->save()){
            return response('Success');
        }

        return response('Error');
    }

    public function statistics()
    {
        $partners = Partner::get();
        $donations = Donation::get();

        return response(['Partners:'. count($partners), 'Donations:'. count($donations)]);
    }

    /* Uncomment the function before going to route 'token' when logged in as the user */
    // public function token()
    // {
    //     $token = User::find(3)->createToken('api_key');
    //     return response()->json($token);
    // }
}
