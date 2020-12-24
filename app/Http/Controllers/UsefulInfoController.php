<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class UsefulInfoController extends Controller
{

    public function medpatent()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-14', compact('page'));
    }
    public function rvp()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-7', compact('page'));
    }


    public function grazhdanstvo()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-8-1', compact('page'));
    }
    public function snyatiye()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-6', compact('page'));
    }
    public function snyatie()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-13', compact('page'));
    }

    public function migrationCart()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-1', compact('page'));
    }
    public function migrationUchet()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-2', compact('page'));
    }

    public function migrationProlongation()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-2-1', compact('page'));
    }
    public function migrationSnyatiye()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-2-2', compact('page'));
    }
    public function visaInvitation()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-3', compact('page'));
    }
    public function changeInvitation()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-3-1', compact('page'));
    }
    public function patent()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-4', compact('page'));
    }
    public function patentProlongation()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-4-1', compact('page'));
    }
    public function patentTest()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-4-2', compact('page'));
    }

    public function patentComission()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-4-3', compact('page'));
    }

    public function razreshenie()
    {
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-5', compact('page'));
    }
    public function vksRabota()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-5-1', compact('page'));
    }
    public function vksZhitelstvo()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-5-2', compact('page'));
    }
    public function commission(){
        $page=page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-5-3', compact('page'));
    }
    public function rabotaTest()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-7-5', compact('page'));
    }
    public function razreshenieComission()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-7-6', compact('page'));
    }
    public function rvpConfirm()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-7-1', compact('page'));
    }
    public function vid()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-7-2', compact('page'));
    }
    public function vidConfirm()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-7-3', compact('page'));
    }
    public function grazhdanstvoTest()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-8', compact('page'));
    }

    public function grazhdanstvoCommission()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-8-2', compact('page'));
    }
    public function polis()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-9', compact('page'));
    }
    public function snils()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-8-4', compact('page'));
    }
    public function daktiloskopiya()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-9-2', compact('page'));
    }
    public function inn()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-9-1', compact('page'));
    }
       public function status()
    {
        $page= page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-8-3', compact('page'));
    }
}