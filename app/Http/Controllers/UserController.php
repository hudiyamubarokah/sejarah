<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getUser(){

        $data = User::with('materi:id, judul')->select('id', 'name','email')->get();

        $userData = $data->map(function ($user){
            $materi= $user->materi->map(function ($materi){
                return [
                    'id' => $materi->id,
                    'materi' => $materi->judul
                ];
            });
            return[
                'id' =>$user->id,
                'name' => $user->name,
                'email' => $user->email,
                'materi' =>$materi
            ];
        });
        return response()->json(['data'=>$userData]);
    }

}
