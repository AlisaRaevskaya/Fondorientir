<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ReceptionMessageRequest;
use App\Http\Requests\CallRequest;
use App\Http\Requests\LawQuestionSidebarRequest;
use App\Http\Requests\LawQuestionRequest;
use App\Http\Requests\FaqFormRequest;
use App\Http\Requests\ApplicationRequest;
use App\Http\Requests\ProblemRequest;


use App\Models\Message;
use App\Models\MessageCategory;
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
    {
        $validatedData = $req->validated();

        $data = new Message;

        $name=$req->input('name');
        $phone=$req->input('phone');

        $data->name= $name;
        $data->phone = $phone;
        $data->message = $req->input('message');
         $data->consent = $req->input('consent');
        $data->message_category_id = 1;
        $data->category="Правовая приемная";
        $data->save();

        $message_category=MessageCategory::where('id', 1)->pluck('category_name');

        Mail::send('email.message_mail', ['message_category'=> $message_category[0], 'name'=>$name,'phone'=>$phone], function ($message) {
            $message->to(env('MAIL_CLIENT'), 'Фонд')->subject('Сообщение с сайта');
        });

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

        $name=$req->input('name');
        $phone=$req->input('phone');
        $message_category=$req->input('category');
        Mail::send('email.message_mail', ['message_category'=>$message_category, 'name'=>$name,'phone'=>$phone], function ($message) {
            $message->to(env('MAIL_CLIENT'), 'Фонд')->subject('Сообщение с сайта');
        });
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
        $data->message = $req->input('message');
        $data->consent = $req->input('consent');
        $data->message_category_id = 2;

        $data->save();

        $name=$req->input('name');
        $phone=$req->input('phone');
        $message_category=MessageCategory::where('id', 2)->pluck('category_name');

        Mail::send('email.message_mail', ['message_category'=>$message_category[0], 'name'=>$fullname,'phone'=>$phone], function ($message) {
            $message->to(env('MAIL_CLIENT'), 'Фонд')->subject('Сообщение с сайта');
        });

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

        $message_category=MessageCategory::where('id', 3)->pluck('category_name');
        $name=$req->input('name');
        $phone=$req->input('phone');

        Mail::send('email.message_mail', ['message_category'=>$message_category[0], 'name'=>$name,'phone'=>$phone], function ($message) {
            $message->to(env('MAIL_CLIENT'), 'Фонд')->subject('Сообщение с сайта');
        });
        return response()->json(['success'=>'Данные успешно отправлены']);
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

        $message_category=MessageCategory::where('id', 6)->pluck('category_name');
        $name=$req->input('name');
        $phone=$req->input('phone');

        Mail::send('email.message_mail', ['message_category'=>$message_category[0], 'name'=>$name,'phone'=>$phone], function ($message) {
            $message->to(env('MAIL_CLIENT'), 'Фонд')->subject('Сообщение с сайта');
        });
        return response()->json(['success'=>"Ваша заявка принята. Ждите нашего звонка."]);
    }

     /**
     *
     *
     * @param  FaqFormRequest $req
     * @return Response
     */
    public function saveFaqQuestionForm(FaqFormRequest $req)
    {
        $validatedData = $req->validated();
        $data = new Message;


        $data->name=$req->input('name');
        $data->message = $req->input('message');
        $data->phone = $req->input('phone');
        $data->message_category_id = 1;
        $data->category="Правовая приемная";
        $data->save();

        $name=$req->input('name');
        $phone=$req->input('phone');
        $message_category=$req->input('category');
        Mail::send('email.message_mail', ['message_category'=>$message_category, 'name'=>$name,'phone'=>$phone], function ($message) {
            $message->to(env('MAIL_CLIENT'), 'Фонд')->subject('Сообщение с сайта');
        });
        return response()->json(['success'=>'Ваша заявка отправлена. Наш юрист свяжется с Вами в ближайшее время']);
    }
}