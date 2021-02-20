<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;
use Session;
if(!isset($_SESSION))
{
    session_start();
}

class ProfileController extends Controller
{
    public function profile_update(){
        return view('frontend.user.profile_update');
    }

    public function profile_post_update(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['current_address']=$request->current_address;
        $data['home_address']=$request->home_address;
        $data['user_sex']=$request->user_sex;
        $data['dob']=$request->dob;

        $image=$request->file('avatar');
        if ($image) {
            $digits = 2;
            $image_name = str_pad(rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
            $ext = strtolower($image->getClientOriginalExtension());

            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'matrimony/user/img/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['avatar']=$image_url;
            }
        }
        $id=$request->id;
        $update_slider=User::where('id', $id)->update($data);

        if ($update_slider){
            Session::put('message','Slider Update Successfully!!');
            return redirect()->back();
        }else{
            Session::put('messageWarning','Slider Update Failed!!');
            return redirect()->back();
        }

    }

    public function editLifestyle(){
        return view('frontend.user.edit_lifestyle');
    }
}

