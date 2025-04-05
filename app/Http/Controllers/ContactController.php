<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('dashboard.contact.index', compact('messages'));
    }
    
    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->only('name', 'email', 'subject', 'message'));

        return redirect()->back()->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'reply' => 'required|string|max:1000',
    ]);

    $message = Contact::findOrFail($id);
    $message->reply = $request->reply;
    $message->status = 'replied'; // تأكد أن هذه القيمة متوافقة مع قاعدة البيانات
    $message->save();

    return redirect()->route('contacts.index')->with('success', 'تم الرد على الرسالة بنجاح.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete(); 
        return redirect()->route('contacts.index')->with('success');
    }

//     public function reply(Request $request, $id)
// {
//     $contact = Contact::findOrFail($id);
//     // You can send an email, create a reply, etc.
//     return view('contacts.reply', compact('contact'));
// }
    
}
