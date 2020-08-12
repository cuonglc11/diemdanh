<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\lists;
use Illuminate\Support\Facades\Auth;
use DB;

class diemdanhController extends Controller
{
    function login(Request $rq){
    	$tk = new user;
    	$tk = [
         'name' => $rq->txtname,
         'password'=> $rq->txtpass

     ];
    	//dd($tk);
     if(Auth::attempt($tk)){
      return redirect()->route('diemdanh');
  }
  else{
      
    $rq ->session()->flash('status','bạn chưa tài khoản trong hệ thống!');
      return redirect()->route('login');

  }

}
function diemdanh(Request $re){

                  $re ->session()->flash('ketthuc','chúc bạn có buổi làm việc  vui vẻ!');
   return view('diemdanh');

}
function luu(Request $re){
    	
   $kt  = $re->txtdate;
    
    	
 
   $xem = new lists;
    	date_default_timezone_get('Asia/Ho_Chi_Minh');  //cài đặt giờ và thời gian làm
    	$state = date('Y-m-d H:i:s');
         
    	// $xem ->fill(['name'=>$re->txtnguoi,'starTime'=> $state , 'EndTime'=> $state,'note'=>$re->txtnote, 'time'=>$re->txtdate]);
     //    // dd($xem);
     //   // $xem ->fill()
     
                     
        $xem = DB::table('lists')->insert(['name'=>$re->ten,'starTime'=> $state , 'EndTime'=> $state,'note'=>$re->note, 'time'=>$re->time]);
        
     //   $xem->save();

       $id = $xem->id;
       $end = $xem->EndTime;
        //  if($state==date('Y-m-d 9:0:0')){
        //     $bt = 
        //      $up = 
        // }
  
        return view('ketthuc',compact('kt','id','end'));

    }
    // function ketthuc(){
     
    //      return view('ketthuc', compact('id'));
    // } 
    function save_ketthuc( Request $re){
    // $end = $re->txtend;
     date_default_timezone_get('Asia/Ho_Chi_Minh');  //cài đặt giờ và thời gian làm
        $end = date('Y-m-d H:i:s');
    // dd($end);
     //$kh = $re->all();
    // dd($end,$id);
     // 
      $and  = $re->id;
     
     // dd($and);
   // $model =lists::find($kh);
     // $up = DB::update('update lists set EndTime= '.$end.' where id ='.$and.'');
     $up= DB::table('lists')
            ->where('id', $and)
            ->update(['EndTime' => $end]);
    // $model->update()
     // $up = DB::table('lists')
      //      ->where('.$and.', 1)
       //     ->update(['.$end.' => 1]);
     //  dd($up);
    //  $up->save();
      echo "thời gian làm việc kết thúc";

       //  return view('ketthuc');
    }


    function danhsach(){

      $data = DB::table('lists')->paginate(5);
      return view('taglink',compact('data'));
   }
    function pagination(Request $re)
   {
    
       $data = DB::table('lists')->paginate(5);
      return view('danhsach',compact('data'))->render();

   }
   function doi(){
    $data =  DB::table('lists')->paginate(5);
    return view('doi' , compact('data'));
   }

}
//'de'=>$cu

 