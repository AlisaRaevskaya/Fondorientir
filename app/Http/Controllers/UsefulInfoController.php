<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class UsefulInfoController extends Controller
{
    public function rvp()
    {
        $page= Page::where('id', 52)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }

    public function grazhdanstvo()
    {
        $page= Page::where('id', 53)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function snyatiye()
    {
        $page= Page::where('id', 61)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    // public function snyatie()
    // {
    //     $page= Page::where('id', 'Снятие запрета на въезд')->IsPublished()->first();
    //     return view('useful.info', compact('page'));
    // }

    public function migrationCart()
    {
        $page= Page::where('id', 33)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function migrationUchet()
    {
        $page= Page::where('id', 35)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }

    public function migrationProlongation()
    {
        $page= page::where('id', 34)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function migrationSnyatiye()
    {
        $page= page::where('id', 36)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function visaInvitation()
    {
        $page= Page::where('id', 37)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function changeInvitation()
    {
        $page= page::where('id', 38)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function patent()
    {
        $page= Page::where('id', 39)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function patentProlongation()
    {
        $page= page::where('id', 40)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function patentTest()
    {
        $page= page::where('id', 41)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }

    public function patentComission()
    {
        $page= page::where('id', 42)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }

    public function razreshenie()
    {
        $page= Page::where('id', 43)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function vksRabota()
    {
        $page= page::where('id', 44)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function vksZhitelstvo()
    {
        $page= page::where('id', 45)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function commission(){
        $page=page::where('id', 46)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function rabotaTest()
    {
        $page= page::where('id', 47)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function razreshenieComission()
    {
        $page= page::where('id', 48)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function rvpConfirm()
    {
        $page= page::where('id', 49)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function vid()
    {
        $page= page::where('id', 50)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function vidConfirm()
    {
        $page= page::where('id', 51)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function grazhdanstvoTest()
    {
        $page= page::where('id', 56)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }

    public function grazhdanstvoCommission()
    {
        $page= page::where('id', 54)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function polis()
    {
        $page= page::where('id', 57)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function snils()
    {
        $page= page::where('id', 58)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function daktiloskopiya()
    {
        $page= page::where('id', 59)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
    public function inn()
    {
        $page= page::where('id', 60)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }
       public function status()
    {
        $page= page::where('id', 55)->IsPublished()->first();
        return view('useful.info', compact('page'));
    }

    public function granizy(){
         $page= page::where('id', 62)->IsPublished()->first();
         return view('useful.info', compact('page'));
    }
    public function pereseleniye(){
         $page= page::where('id', 63)->IsPublished()->first();
         return view('useful.info', compact('page'));
    }
}
