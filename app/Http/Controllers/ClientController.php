<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function backHand(){
        return view ('back-hand');
    }

    public function ourFileStore(Request $request){
        $client = new Client;
        $client-> name = $request->name;
        $client-> phone = $request->phone;
        $client-> email = $request->email;
        $client-> address = $request->address;
        $client-> project = $request->project;
        $client-> facebook_review = $request->facebook_review;
        $client-> google_review = $request->google_review;
        $client-> page_number = $request->page_number;

        $client->save();
        // return view('back-hand');
        return redirect()->back();
    }
}
