<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Webfeedback;

class AjaxController extends Controller
{
    public function saveComment(Request $req)
    {
        $data = new Comment();
        $data->name=$req->input('name');
        $data->email=$req->input('email');
        $data->message = $req->input('body');

        $data->save();
        return response()->json(['success'=>'Данные успешно отправлены']);

    }

    public function saveSubscription(Request $req)
    {
        $data = new Subscription();

        $data->email = $req->input('subscribe');

        $data->save();

        return response()->json(['success'=>'Данные успешно отправлены']);
    }

    public function saveMessages(Request $req)
    {
        $data = new Message();

        // $name= $req->input('firstName');
        // $lastname=$req->input('lastName');
        // $fathername=$req->input('fatherName');
        // $fullname = $lastname .' ' . $name .' '. $fathername;

        $data->fio = $req->input('lastName');
        $data->email = $req->input('email');
        $data->job = $req->input('job');
        $data->phone = $req->input('phone');
        $data->address= $req->input('address');
        $data->message = $req->input('message');
        $data->sendbyemail = $req->input('sendbyemail');
        $data->publish = $req->input('publish');

        $data->save();

        return response()->json(['success'=>'Данные успешно отправлены']);
    }

    public function saveWebsiteFeedback(Request $req)
    {
        $data = new Webfeedback();

        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->phone = $req->input('phone');
        $data->message = $req->input('message');

        $data->save();

        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
}

