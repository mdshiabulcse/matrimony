<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Lifestyle;
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
    public function aboutCreate(Request $request){
        $flight = new Lifestyle();

        $flight->user_id = $request->user_id;
        $flight->about = $request->about;
        $flight->maritial_status = $request->maritial_status;
        $flight->mother_lang = $request->mother_lang;
        $flight->height = $request->height;
        $flight->weight = $request->weight;
        $flight->blood_group = $request->blood_group;
        $flight->physical_status = $request->physical_status;
        $flight->education = $request->education;
        $flight->ocupation = $request->ocupation;
        $flight->anual_income = $request->anual_income;
        $flight->father_name = $request->father_name;
        $flight->mother_name = $request->mother_name;
        $flight->father_ocupation = $request->father_ocupation;

        $flight->save();
        return view('frontend.user.view_profile');
    }
    public function viewProfile($id){
        $UserInfo=User::where('id',$id)->first();
        $showAbout=Lifestyle::where('user_id',$id)->first();
        return view('view-profile', compact('UserInfo','showAbout'));
    }
}

