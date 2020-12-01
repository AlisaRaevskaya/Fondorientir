<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceptionMessageRequest;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Webfeedback;
use App\Mail\Submail;
use App\Models\FeedbackCall;
use App\Models\Notification;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AjaxController extends Controller
{
    public function saveLawQuestion(Request $req)
    {

    $data = new Message;
    $data->name=$req->input('name');
    $data->email = $req->input('email');
    $data->message = $req->input('message');
    $data->message_category_id = 1;
    $data->save();
    return response()->json(['success'=>'Данные успешно отправлены']);
    }

/**
 *
 *
 * @param  ReceptionMessageRequest  $req
 * @return Response
 */

  public function saveReceptionMessage(ReceptionMessageRequest $req)
    {

    //     $rules=[
    //     'lastName' => 'required|min:2|max:255|regex:/^[a-zA-Z]{2,}$/i',
    //     'firstName' => 'required|min:2|max:255|regex:/^[a-zA-Z]{2,}$/i',
    //     'fatherName' => 'required|min:2|max:255|regex:/^[a-zA-Z]{2,}$/i',
    //     'message' => 'required|string|min:8|max:500',
    //     'email' => 'required|min:2|max:255|regex:/^.+@.+$/i',
    //     'phone' => 'required|min:2|max:255|regex:/^.+\d.+$/i',
    //     'consent' => 'required|boolean|accepted',
    //     'job' => 'min:5|max:255|nullable',
    //     'address' => 'required|min:2|max:255'];

    //     $v = Validator::make($req->all(), $rules);

    // if ($v->fails())
    // {
    //     return redirect()->back()->withErrors($v->errors());
    // }

        $validatedData = $req->validated();
        // dd($validatedData);
        $data = new Message();


        $fullname= $req->input('lastName') . ' ' .$req->input('firstName') . ' ' . $req->input('fatherName');

        $data->name = $fullname;
        $data->job = $req->input('job');
        $data->phone = $req->input('phone');
        $data->email = $req->input('email');
        $data->address= $req->input('address');
        $data->message = $req->input('message');
        $data->consent = $req->input('consent');
        $data->message_category_id = 2;

        $data->save();

        return response()->json(['success'=>'Ваша заявка отправлена, В ближайшее время с вами свяжется наш специалист']);
    }

    public function saveApplication(Request $req)
    { $data = new Message();
      $data->message_category_id = 3;
      $data->request->all();
      $data->fill();
      $data->save();

    return response()->json(['success'=>'Данные успешно отправлены']);
    }

     public function saveClaim(Request $req)
    { $data = new Message();
      $data->message_category_id = 4;
      $data->request->all();
      $data->fill();
      $data->save();

    return response()->json(['success'=>'Данные успешно отправлены']);
    }


    public function saveWebsiteFeedback(Request $req)
    {
        $data = new Message();

        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->phone = $req->input('phone');
        $data->message = $req->input('message');
        $data->message_category_id = 5;
        $data->fill();
        $data->save();


        return response()->json(['success'=>"Ваша заявка отправлена."]);
    }

    public function saveCallInfo(Request $req)
    {
        $data = new Message();

        $data->name = $req->input('name');
        $data->phone = $req->input('phone');
        $data->message_category_id = 6;
        $data->fill();
        $data->save();

        return response()->json(['success'=>"Ваша заявка принята.Ждите звонка"]);
    }

// public function saveSubscription(Request $req)
    // {
    //     $data = new Subscription();

    //     $data->email = $req->input('email');

    //     $data->save();

    //     // Mail::to($data->email)->send(new SubMail);

    //     return response()->json(['success'=>'Данные успешно отправлены']);
    // }

}
