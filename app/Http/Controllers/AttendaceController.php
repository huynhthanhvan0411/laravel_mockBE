<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as FacadesResponse;

class AttendaceController extends Controller
{
    // show all check attendance 
    public function index()
    {
        $attendance = Attendance::all();
        try{
            if($attendance){
                return response()->json([
                    'status' => 'success',
                    'data' => $attendance
                ],Response::HTTP_OK);
            }
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ],Response::HTTP_BAD_REQUEST);
        }
    }
    // show find to employyee
    public function checkAttendance(string $id)
    {
        $attendance = Attendance::where('user_id',$id)->get();
        try{
            if($attendance){
                return response()->json([
                    'status' => 'success',
                    'data' => $attendance
                ],Response::HTTP_OK);
            }
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ],Response::HTTP_BAD_REQUEST);
        }

    } 
    // add check attendance 
    public function addAttendance(){

    }
}
