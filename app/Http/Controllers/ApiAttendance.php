<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use DB;
use App\Attendance;
use Carbon\Carbon;
use DateTime;


class ApiAttendance extends Controller
{
    //
    public function studentAttendance(){
		   $student=Input::get('student_code');
		   $driver=Input::get('driver_code');
		   $time=Input::get('time');
           $part=Input::get('part');
		   $now = date("Y-m-d H:i:s"); 
           $todayDate = date("Y-m-d");
           $student_id = DB::table('students')->where('card_code', $student)->value('id');
           $driver_id=DB::table('drivers')->where('card_code', $driver)->value('id');
           
                    

                    if($student_id){
                      
                        if ($part=='go') {
                            # code...
                            if($time=='in'){
                                Attendance::create([
                                    'student_id' => $student_id,
                                    'driver_id' => $driver_id,
                                    'go_time_in' => $now,
                                    'date'      =>$todayDate,
                                ]);
                                    return response()
                                            ->json(
                                                [   
                                                    'status' => 'success go in bus',
                                                    'student' => DB::table('students')->where('id', $student_id)->value('name'),
                                                    'driver'=>DB::table('drivers')->where('id', $driver_id)->value('name'),
                                                    'date time' =>$now
                                                ]
                                            );
                            }elseif ($time=='out') {
                                # code...
                                Attendance::where('id', DB::table('attendances')->where('student_id',$student_id)->value('id'))
                                ->where('date', $todayDate)
                                ->update(['go_time_out' => $now]);
                                return response()
                                            ->json(
                                                [   
                                                    'status' => 'success go out bus',
                                                    'student' => DB::table('students')->where('id', $student_id)->value('name'),
                                                    'driver'=>DB::table('drivers')->where('id', $driver_id)->value('name'),
                                                    'date time' =>$now
                                                ]
                                            );

                            }


                        }elseif ($part='back') {
                            # code...
                              if($time=='in'){
                               Attendance::where('id', DB::table('attendances')->where('student_id',$student_id)->value('id'))
                                ->where('date', $todayDate)
                                ->update(['back_time_in' => $now]);
                                return response()
                                            ->json(
                                                [   
                                                    'status' => 'success back out bus',
                                                    'student' => DB::table('students')->where('id', $student_id)->value('name'),
                                                    'driver'=>DB::table('drivers')->where('id', $driver_id)->value('name'),
                                                    'date time' =>$now
                                                ]
                                            );
                            }elseif ($time=='out') {
                                # code...
                                 Attendance::where('id', DB::table('attendances')->where('student_id',$student_id)->value('id'))
                                ->where('date', $todayDate)
                                ->update(['back_time_out' => $now]);
                                return response()
                                            ->json(
                                                [   
                                                    'status' => 'success back out bus',
                                                    'student' => DB::table('students')->where('id', $student_id)->value('name'),
                                                    'driver'=>DB::table('drivers')->where('id', $driver_id)->value('name'),
                                                    'date time' =>$now
                                                ]
                                            );
                            }

                        }

                    }else{
                        return "your not student here";
                    }

                    // 	if ($time=='in') {
                    // 		# code...
                    // 	Attendance::create([
                    //     'student_id' => $student_id,
                    //     'driver_id' => $driver,
                    //     'time_in' => $now
                    // ]);
                    // 	   return response()
				                // ->json(
				                //     [   
				                //         'status' => 'success', 
				                       
				                //     ]
				                // );
                    // 	}elseif ($time=='out') {
                    		# code...
            //         		App\Attendance::where('id', DB::table('attendances')->where('student_id',$student_id)->value('id'))
						      //   ->update(['time_out' => $now]);
            //         	   return response()
            //     ->json(
            //         [   
            //             'status' => 'success', 
            //         ]
            //     );
            //         	}
   
            // }else{
            // 	  	   return response()
            //     ->json(
            //         [   
            //             'status' => 'success', 
            //             'student_id'=>$student_id,
            //         ]
            //     );

            // }
}
}

