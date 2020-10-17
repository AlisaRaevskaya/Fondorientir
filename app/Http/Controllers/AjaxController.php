<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Webfeedback;
use Illuminate\Support\Facades\Validator;

class AjaxController extends Controller
{
    // $input=$request->all();
    // $input['answered']=0;
    // //$feedback = new Feedback($input);
    // Feedback::create($input);

    // $order = [
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'phone' => $request->phone,
    //     'message' => $request->question
    // ];


    public function saveComment(Request $req)
    {
        //$user = Auth::user();

        // $user = User::find($user->id);

        // $this->validate($request,[
        //     'avatar' => 'nullable|image',
        //     'name' => 'required',
        //     'email' => [
        //         'required',
        //         'email',
        //         Rule::unique('users')->ignore($user->id),
        //     ],
        //     'password' => 'nullable|string|min:8|confirmed',
        // ]);

        $input=$req->all();

        $validatedData = $req->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|min:4',
            'body' => 'required'
            ]);


        Comment::create($validatedData);

        // $data = new Comment();
        // $data->name=$req->input('name');
        // $data->email=$req->input('email');
        // $data->body = $req->input('body');
        // $data->topic_id =$req->input('topic_id');

        // $data->save();
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
        $input['status']=0;
        $data = new Message();

        $name= $req->input('firstName');
        $lastname=$req->input('lastName');
        $fathername=$req->input('fatherName');
        $fullname = $lastname .' ' . $name .' '. $fathername;


        $data->fio = $fullname;
        $data->email = $req->input('email');
        $data->job = $req->input('job');
        $data->phone = $req->input('phone');
        $data->address= $req->input('address');
        $data->message = $req->input('message');
        $data->sendbyemail = $this->checkboxValue($req->input('sendbyemail'));
        $data->publish =  $this->checkboxValue($req->input('publish'));

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

        return response()->json(['success'=>'Ваша заявка отправлена.']);
    }

    public function checkboxValue($value){
    empty($value) ? $value= 0 : $value = 1;
    }


}
