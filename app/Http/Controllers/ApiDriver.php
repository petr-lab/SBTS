<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use App\Driver;

class ApiDriver extends Controller
{
    //

    public function driverLogin(){
    	$card_code=Input::get('id');
        $driver=Driver::where('card_code', $card_code)->first();
        if($driver){

            return response()
                ->json(
                   $driver
                );


        }

         else{
        return response()
            ->json(['status' => 2, 'message' => 'Ntitubashije kubamenya!']);
    }

    }
}
