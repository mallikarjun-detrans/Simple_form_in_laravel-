<?php

namespace App\Http\Controllers;

use App\Students;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class Indexcontroller extends Controller
{
    public function adddata(Request $request){
        $data = $request->validate(
            [
                'studentname'=>'required|min:2|max:10',
                'studentemail'=>'required|min:5|max:100',
                'studentphone'=>'required| digits_between:9,11'
            ]
        );
        // dd($data);

        $user=new Students();
        $user->create($data);

        // return ('data is added');
        $user1 = Students::All();
        // dd($user1);
        return view('/result', ['array'=>$user1]);


    }
}
