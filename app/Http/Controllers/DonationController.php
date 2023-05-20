<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Requests\DonationRequest;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::get();
        
        return view('donations.index', compact('donations'));
    }

    public function create()
    {
        $applications = Application::where('has_donation', false)->whereIn('status', ['New', 'Complete'])->get();
        return view('donations.create', compact('applications'));
    }

    public function store(DonationRequest $request)
    {
        $application = Application::where('id', $request->client_id)->first();
        $application->has_donation = true;
        $application->status = 'Complete';
        $donation = new Donation();
        $donation->client_id = $request->client_id;
        $donation->donation = $request->donation;



        if($donation->save()) {
            $application->save();
            return redirect()->route('donations.index')->with('success', 'Donation created !');
        }

        return redirect()->route('donations.index')->with('error', 'Something went wrong!');
    }

    public function edit(string $id)
    {
        $applications = Application::get();
        $donations = Donation::where('id', $id)->first();
      
        return view('donations.edit', compact('donations', 'applications'));
    }

    public function update(DonationRequest $request, Donation $donation)
    {   
        $donation->client_id = $request->client_id;
        $donation->donation = $request->donation;



        if($donation->save()) {
            return redirect()->route('donations.index')->with('success', 'Donation updated !');
        }

        return redirect()->route('donations.index')->with('error', 'Something went wrong!');
    }

    public function destroy(Donation $donation)
    {
        if($donation->delete()) {

            return redirect()->route('donations.index')->with('success', 'Donation deleted successfuly !');
        }
        return redirect()->route('donations.index')->with('error', 'Something went wrong!');
    }
}
