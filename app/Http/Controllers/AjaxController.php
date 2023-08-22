<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function contactsave(Request $request){
        $data = $request->all();
        $data['ip'] = request()->ip(); 
        $lastData = Contact::create($data);
        
    }
}
