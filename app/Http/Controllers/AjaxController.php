<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Webfeedback;
use App\Mail\Submail;
use App\Models\FeedbackCall;


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AjaxController extends Controller
{

    public function saveComment(Request $req)
    {
        $comment = new Comment();

        $comment->name = $req->input('name');
        $comment->email = $req->input('email');
        $comment->body = $req->input('body');
        $comment->topic_reply_id = $req->input('topic_reply_id');

        return response()->json(['success'=>'Данные успешно отправлены']);
    }


    public function saveSubscription(Request $req)
    {
        $data = new Subscription();

        $data->email = $req->input('email');

        $data->save();

        // Mail::to($data->email)->send(new SubMail);

        return response()->json(['success'=>'Данные успешно отправлены']);
    }

    public function saveMessages(Request $req)
    {
        $data = new Message();

        $fullname= $req->input('lastName') . ' ' .$req->input('firstName') . '' . $req->input('fatherName');

        $data->fio =$fullname;
        $data->job = $req->input('job');
        $data->phone = $req->input('phone');
        $data->email = $req->input('email');
        $data->address= $req->input('address');
        $data->message = $req->input('message');
        $data->publish = $req->input('consent');

        dd($data);
        $data->save();

        return response()->json(['success'=>'Ваша заявка отправлена, В ближайшее время с вами свяжется наш специалист']);
    }

    public function saveWebsiteFeedback(Request $req)
    {

        $data = new Webfeedback();

        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->phone = $req->input('phone');
        $data->message = $req->input('message');

        $data->save();

        return response()->json(['success'=>"Ваша заявка отправлена."]);

        }

        public function saveCallInfo(Request $req){

            $data = new FeedbackCall();

            $data->name = $req->input('name');
            $data->phone = $req->input('phone');

            $data->save();

            return response()->json(['success'=>"Ваша заявка отправлена.Ждите звонка"]);
        }

        public function saveLawQuestion(Request $req)
        {

            return response()->json(['success'=>'Данные успешно отправлены']);
        }

}
