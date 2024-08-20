<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $contacts = $user->contacts()->paginate(10);

        return view('contacts.index', compact('contacts'));
    }


    public function fetchContacts(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->get('search');
            $user = Auth::user();
            $contacts = $user->contacts()
                ->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%". $search. "%")
                        ->orWhere('company', 'like', "%". $search. "%")
                        ->orWhere('phone', 'like', "%". $search. "%")
                        ->orWhere('email', 'like', "%". $search. "%");
                })
                ->paginate(10);

            return view('contacts._list', compact('contacts'))->render();
        }

        $user = Auth::user();
        $contacts = $user->contacts()->paginate(10);

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $results = $request->toArray();

        $contact = new Contact();
        $contact->name = $results['name'];
        $contact->company = $results['company'];
        $contact->phone = $results['phone'];
        $contact->email = $results['email'];
        $contact->user_id = Auth::id();
        $contact->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $results = $request->toArray();

        $contact->name = $results['name'];
        $contact->company = $results['company'];
        $contact->phone = $results['phone'];
        $contact->email = $results['email'];
        $contact->user_id = Auth::id();
        $contact->update();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('home');
    }
}
