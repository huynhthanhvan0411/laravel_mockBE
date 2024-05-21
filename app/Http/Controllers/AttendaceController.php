<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as FacadesResponse;
use App\Http\Requests\AttendaceRequets;

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
                $checkIn = $attendance->first()->check_date;
                $checkOut = $attendance->last()->check_date;
                return response()->json([
                    'status' => 'success',
                    'data' => [
                        'user' =>$attendance->first()->user->name,
                        'check_in' => $checkIn,
                        'check_out' => $checkOut
                    ]
                ],Response::HTTP_OK);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Data not found'
            ],Response::HTTP_NOT_FOUND);
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ],Response::HTTP_BAD_REQUEST);
        }

    } 
    // add check attendance 
    public function addAttendance(AttendaceRequets $request){
        DB::beginTransaction();
        try{
            $attendance = new Attendance();
            $attendance->user_id = $request->user_id;
            $attendance->check_date = $request->check_date;
            $attendance->save();
            DB::commit();
            return response()->json([
                'status' => 'success',
                'data' => $attendance
            ],Response::HTTP_OK);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ],Response::HTTP_BAD_REQUEST);
        }
    }
}
