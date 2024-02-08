<?php

namespace Kaamrul\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Kaamrul\Contact\Models\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}
