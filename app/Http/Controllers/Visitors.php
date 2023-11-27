<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\EmailTable;

class Visitors extends Controller{
    
    public function log(Request $request){
        $name = $request->ip();

        $data = [
            'message' => '<p>Happy to see you again!</p>',
        ];

        
        return response()
            ->json($data, 200)
            ->header('Access-Control-Allow-Origin', 'https://jdv2022.github.io')
            ->header('Access-Control-Allow-Methods', 'POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With');
    }

    public function cors(){
        return response()
            ->json([], 204)
            ->header('Access-Control-Allow-Origin', 'https://jdv2022.github.io')
            ->header('Access-Control-Allow-Methods', 'POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With, Authorization');
    }

    public function sendEmail(Request $request){
        $request->validate([
            'name' => 'required|max:45',
            'email' => 'required|email',
            'subject' => 'required|max:50',
            'message' => 'required',
        ]);
        $data;
        $model = new EmailTable;
        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->subject = $request->input('subject');
        $model->message = $request->input('message');
        if($model->save()){
            $data = ['message' => 'Success'];
        }
        else{
            $data = ['message' => 'Fail'];
        }
        return response()
            ->json($data, 200)
            ->header('Access-Control-Allow-Origin', 'https://jdv2022.github.io')
            ->header('Access-Control-Allow-Methods', 'POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With');
    }

}
