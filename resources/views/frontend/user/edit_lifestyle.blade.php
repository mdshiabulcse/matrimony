@extends('frontend_layouts.main')
@section( 'content')
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="{{ route('home') }}"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Edit Your About</li>
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
	     <form action="{{ route('about.create') }}" method="post" enctype="multipart/form-data">
            @csrf
<input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="form-group">
                <label for="edit-pass">Father Name <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-pass" name="father_name" value="" class="form-text required">
              </div>
              <div class="form-group">
                <label for="edit-pass">Mother Name <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-pass" name="mother_name" value="" class="form-text required">
              </div>
              <div class="form-group">
                <label for="edit-name">Father Occupation <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="father_ocupation" value="" size="60" maxlength="60" class="form-text required">
              </div>
	  	    <div class="form-group">
		      <label for="edit-name">Bio <span class="form-required" title="This field is required.">*</span></label>
		     <textarea name="about" size="60" maxlength="60" class="form-text required" > </textarea>
		    </div>

		    <div class="form-group">
		      <label for="edit-pass">Language <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-pass" name="mother_lang" value="" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-name">Height <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text required">
		    </div>
            <div class="form-group">
                <label for="edit-name">Weight <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text required">
              </div>
              <div class="form-group">
                <label for="edit-name">Blood Group <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="blood_group" value="" size="60" maxlength="60" class="form-text required">
              </div>
            <div class="form-group">
                <label for="edit-name">Physical Status <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="physical_status" value="" size="60" maxlength="60" class="form-text required">
              </div>
              <div class="form-group">
                <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="education" value="" size="60" maxlength="60" class="form-text required">
              </div>
              <div class="form-group">
                <label for="edit-name">Occupation <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="ocupation" value="" size="60" maxlength="60" class="form-text required">
              </div>
              <div class="form-group">
                <label for="edit-name">Annual Incom <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="anual_income" value="" size="60" maxlength="60" class="form-text required">
              </div>

              <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="sex">Maritial Status : </label>

                <div class="radios">
                            <input type="radio" id="male" name="maritial_status" value="Single" >
                            <label for="male">Single</label>
                            <input type="radio" id="female" name="maritial_status" value="Maried" >
                            <label for="female">Maried</label>
                            <input type="radio" id="female" name="maritial_status" value="Devorce" >
                            <label for="female">Devorce</label>

            </div>
            </div>

		    <div class="age_select">

		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    {{-- <label for="edit-pass">Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
                    <input type="date" id="edit-name" name="dob" value="{{ Auth::user()->dob }}" size="60" maxlength="60" class="form-text required"> --}}
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
