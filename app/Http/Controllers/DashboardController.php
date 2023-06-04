<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\mitra;
use App\Models\investor;
use App\Models\User;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    public function mitra()
    {

        $mitra = mitra::where('user_id',auth()->user()->id)->first();
        $id = $mitra->id;
        return view('mitra.dashboard', [
            "title" => "Mitra Dashboard",
            'posts' => blog::where('user_id', $id)->get(),
            'mitra' => $mitra
        ]);
    }

    public function investor()
    {
        $user = investor::where('user_id',auth()->user()->id)->first();
        
        return view('investor.dashboard', [
            "title" => "Investor Dashboard",
            'posts' => blog::all(),
            'user' => $user
        ]);
    }
    public function admin()
    {
        $user = User::where('id',auth()->user()->id)->first();
        
        return view('admin.dashboard', [
            "title" => "Admin Dashboard",
            'posts' => blog::all(),
            'user' => $user
        ]);
    }
}

