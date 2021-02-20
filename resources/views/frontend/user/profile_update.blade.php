@extends('frontend_layouts.main')
@section( 'content')
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="{{ route('home') }}"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Edit Profile</li>
     </ul>
   </div>
   <!---728x90--->
   <?php
   $message=Session::get('message');
   if($message){

   ?>
   <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
       </button>
       <?php
       echo $message;
       Session::put('message','');
       ?>
   </div>
   <?php

   }
   ?>
   <?php
   $messageWarning=Session::get('messageWarning');
   if($messageWarning){

   ?>
   <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
       </button>
       <?php
       echo $messageWarning;
       Session::put('messageWarning','');
       ?>
   </div>
<?php

}
?>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="{{ route('profile.post.update') }}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" value="{{ Auth::user()->id }}" name="id">
            <div class="form-group">

                <img src="{{ url('/') }}/{{ Auth::user()->avatar }}" alt="profile photo" style="height: 200px; width:200px" />
              </div>
	  	    <div class="form-group">
		      <label for="edit-name">Profile Photo <span class="form-required" title="This field is required.">*</span></label>
		      <input type="file" id="edit-name" name="avatar" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-pass" name="name" value="{{ Auth::user()->name }}" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-name">Current Address <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="current_address" value="{{ Auth::user()->current_address }}" size="60" maxlength="60" class="form-text required">
		    </div>
            <div class="form-group">
                <label for="edit-name">Home Town <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="home_address" value="{{ Auth::user()->home_address }}" size="60" maxlength="60" class="form-text required">
              </div>
              <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="sex">Sex : </label>
                <div class="col-sm-5">
                    <div class="radios">
				                <input type="radio" id="male" name="user_sex" value="1" {{ Auth::user()->user_sex == 1 ? 'checked':'' }}>
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="user_sex" value="2" {{ Auth::user()->user_sex == 2 ? 'checked':'' }}>
                                <label for="female">Female</label><br>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>

		    <div class="age_select">
		      <label for="edit-pass">Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <input type="date" id="edit-name" name="dob" value="{{ Auth::user()->dob }}" size="60" maxlength="60" class="form-text required">
                  </div>
            </div>
            <div class="col-sm-4 form_box2">

                 </div>
                 <div class="col-sm-4 form_box1">

                  </div>
                  <div class="clearfix"> </div>
                 </div>
              </div>


			  <div class="form-actions">
			    <button type="submit" id="edit-submit" class="btn_1 submit">Submit</button>
			  </div>
		 </form>
	  </div>
	  {{-- <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div> --}}
	  <div class="clearfix"> </div>
   </div>
   <!---728x90--->
  </div>
</div>
@endsection
