<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function saveLawQuestion(Request $request)
    {
        $data = $request->all();
        #create or update your data here
        $request->input($data);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    public function saveSubscription(Request $request)
    {
        $data = $request->all();
        #create or update your data here
        $request->input($data);

        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
    public function saveMessages(Request $request)
    {
        $data = $request->all();
        #create or update your data here
        $request->input($data);
        return response()->json(['success'=>'Ajax request submitted successfully']);


    public function saveWebsiteFeedback(Request $request)
    {
        $data = $request->all();
        #create or update your data here
        $request->input($data);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
}

