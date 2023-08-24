<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function contactsave(Request $request){

        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
        ]);

        $newData = [
            'name' => Str::title($request->name),
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => request()->ip(),
        ];
        $lastData = Contact::create($newData);

        return back()->with(['message' => 'Başarıyla Gönderildi!']);
    }
}
