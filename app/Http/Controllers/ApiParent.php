<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
use Illuminate\Support\Facades\Input; 

class ApiParent extends Controller
{
    //

        public function loginParent(){
       
         $email = Input::get('email');
        $password = Input::get('password');
        $parent = Family::where('email', $email)->first();
           
        if ($parent && \Hash::check($password, $parent->password)) {
            // TODO : check if deployment is full to sector level
            return response()
                ->json(
                   $parent
                );
        }else{
        return response()
            ->json(['status' => 2, 'message' => 'Ntitubashije kubamenya!']);
    }
}
}
