<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        
        return view('contacts.index', compact('contacts'));
    }

    public function edit(string $id)
    {
        $contact = Contact::where('id', $id)->first();
        $statuses = Status::get();
      
        return view('contacts.edit', compact('contact', 'statuses'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {   
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->status = $request->status;

        if($contact->save()) {
            return redirect()->route('contacts.index')->with('success', 'Contact updated !');
        }

        return redirect()->route('contacts.index')->with('error', 'Something went wrong!');
    }


    public function archive(Request $request, Contact $contact)
    {
        $contact->archived = $request->archive;

        if($contact->save()) {
            return redirect()->route('contacts.index')->with('success', 'Contact archived !');
        }

        return redirect()->route('contacts.index')->with('error', 'Something went wrong!');
    }

    public function return(Contact $contact)
    {
        $contact->archived = null;

        if($contact->save()) {
            return redirect()->route('contacts.index')->with('success', 'Contact returned !');
        }

        return redirect()->route('contacts.index')->with('error', 'Something went wrong!');
    }

      
    public function destroy(Contact $contact)
    {
        if($contact->delete()) {
            return redirect()->route('contacts.index')->with('success', 'Contact deleted successfuly!');
        }
        return redirect()->route('contacts.index')->with('error', 'Something went wrong!');
    }
}
