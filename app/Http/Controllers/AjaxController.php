<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ReceptionMessageRequest;
use App\Http\Requests\CallRequest;
use App\Http\Requests\LawQuestionSidebarRequest;
use App\Http\Requests\LawQuestionRequest;
use App\Http\Requests\ClaimRequest;
use App\Http\Requests\ApplicationRequest;
use App\Http\Requests\ProblemRequest;


// use App\Models\Notification;
// use App\Notifications\MessageSent;

use App\Models\Message;

use App\Mail\Submail;
use App\Mail\FormMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

class AjaxController extends Controller
{
    /**
     *
     *
     * @param  LawQuestionRequest $req
     * @return Response
     */

    public function saveLawQuestion(LawQuestionRequest $req)

    {   $validatedData = $req->validated();
        $data = new Message;
        $data->name=$req->input('name');
        $data->email = $req->input('email');
        $data->phone = $req->input('phone');
        $data->message = $req->input('message');
        $data->message_category_id = 1;
        $data->save();

        Mail::to($req->input('email'))->send(new SubMail());

        return response()->json(['success'=>'Ваша заявка отправлена. Наш юрист свяжется с Вами в ближайшее время']);
    }

    /**
     *
     *
     * @param  LawQuestionSidebarRequest $req
     * @return Response
     */

    public function saveLawQuestionSidebar(LawQuestionSidebarRequest $req)
    {
        $validatedData = $req->validated();

        $data = new Message;

        $category=$req->input('category');
        $data->name=$req->input('name');
        $data->email = $req->input('email');
        $data->phone = $req->input('phone');
        $data->category= $category;
        $data->message_category_id = 1;
        $data->save();

        Mail::to($req->input('email'))->send(new FormMail($category));

        return response()->json(['success'=>'Ваша заявка отправлена. Наш юрист свяжется с Вами в ближайшее время']);
    }
    /**
     *
     *
     * @param  ReceptionMessageRequest  $req
     * @return Response
     */

    public function saveReceptionMessage(ReceptionMessageRequest $req)
    {
        $validatedData = $req->validated();

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

        Mail::to($req->input('email'))->send(new SubMail());

        return response()->json(['success'=>'Ваша заявка отправлена, В ближайшее время с Вами свяжется наш специалист.']);
    }
    /**
     *
     *
     * @param  ApplicationRequest  $req
     * @return Response
     */
    public function saveApplication(ApplicationRequest $req)
    {
        $validatedData = $req->validated();
        $data = new Message();
        $data->message_category_id = 3;
        $data->request->all();

        $data->save();

         Mail::to($req->input('email'))->send(new SubMail());

        return response()->json(['success'=>'Данные успешно отправлены']);
    }
    /**
     *
     *
     * @param  ClaimRequest  $req
     * @return Response
     */
    public function saveClaim(ClaimRequest $req)
    {
        $validatedData = $req->validated();

        $data = new Message();
        $data->message_category_id = 4;

        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->phone = $req->input('phone');
        $data->message = $req->input('message');

        $data->save();
        Mail::to($req->input('email'))->send(new SubMail());
        return response()->json(['success'=>'Ваша заявка принята!Наш специалист свяжется с вами в ближайшее время.']);
    }

    /**
     *
     *
     * @param  ProblemRequest  $req
     * @return Response
     */
    public function saveProblemMessage(ProblemRequest $req)
    {
        $validatedData = $req->validated();
        $data = new Message();

        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->phone = $req->input('phone');
        $data->message = $req->input('message');
        $data->message_category_id = 5;
        $data->save();

        Mail::to($req->input('email'))->send(new SubMail());
        return response()->json(['success'=>"Ваша заявка принята!"]);
    }
   /**
     *
     *
     * @param  CallRequest  $req
     * @return Response
     */
    public function saveCallInfo(CallRequest $req)
    {
        $validatedData = $req->validated();
        $data = new Message();

        $data->name = $req->input('name');
        $data->phone = $req->input('phone');
        $data->message_category_id = 6;
        $data->save();
        return response()->json(['success'=>"Ваша заявка принята.Ждите звонка."]);
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
