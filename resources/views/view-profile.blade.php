@extends('frontend_layouts.main')
@section('content')

    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.html"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">View Profile</li>
                </ul>
            </div>
            <?php
            $message = Session::get('message');
            if ($message) { ?>
            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php
                echo $message;
                Session::put('message', '');
                ?>
            </div>
            <?php }
            ?>
            <?php
            $messageWarning = Session::get('messageWarning');
            if ($messageWarning) { ?>
            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php
                echo $messageWarning;
                Session::put('messageWarning', '');
                ?>
            </div>
            <?php }
            ?>
            <div class="profile">
                <div class="col-md-8 profile_left">
                    <h2>{{ $UserInfo->name }}</h2>
                    <div class="col_3">
                        <div class="col-sm-4 row_2">
                            <div class="flexslider">
                                <ul>
                                    <li data-thumb="assets_frontend/images/p1.jpg">
                                        <img src="{{ url('/') }}/{{ $UserInfo->avatar }}"
                                            style="height: 200px; width:250px" />
                                    </li>
                                    {{-- <li data-thumb="assets_frontend/images/p2.jpg">
							<img src="assets_frontend/images/p2.jpg" />
						</li>
						<li data-thumb="assets_frontend/images/p3.jpg">
							<img src="assets_frontend/images/p3.jpg" />
						</li>
						<li data-thumb="assets_frontend/images/p4.jpg">
							<img src="assets_frontend/images/p4.jpg" />
						</li> --}}
                                </ul>
                            </div>
                        </div>
                        <!---728x90--->

                        <div class="col-sm-8 row_1">
                            <table class="table_working_hours">
                                <tbody>
                                    <tr class="opened_1">
                                        <td class="day_label">Age / Height :</td>
                                        <td class="day_value">{{ $UserInfo->dob }}, {{ $showAbout->height }}</td>
                                    </tr>
                                    <tr class="opened">
                                        <td class="day_label">Religion :</td>
                                        <td class="day_value">Islam</td>
                                    </tr>
                                    <tr class="opened">
                                        <td class="day_label">Marital Status :</td>
                                        <td class="day_value">{{ $showAbout->maritial_status }}</td>
                                    </tr>
                                    <tr class="opened">
                                        <td class="day_label">Location :</td>
                                        <td class="day_value">{{ $UserInfo->home_address }}</td>
                                    </tr>
                                    <tr class="closed">
                                        <td class="day_label">Education :</td>
                                        <td class="day_value closed"><span>{{ $showAbout->education }}</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- <ul class="login_details">
                                <li><a href="{{ route('profile_update') }}">
                                        <h3>Edit Profile</h3>
                                    </a></li>
                            </ul> --}}
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!---728x90--->
                    <div class="col_4">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                                        data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                                        aria-controls="profile">Family Details</a></li>
                                {{-- <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab"
                                        aria-controls="profile1">Partner Preference</a></li> --}}
                            </ul>
                            {{-- <li style="margin-left:566px; list-style:none"><a href="{{ route('edit_lifestyle') }}" >
                                <h3>Edit</h3>
                            </a></li> --}}
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div class="tab_box">

                                        <p>{{ $showAbout->about }}</p>
                                    </div>
                                    <div class="basic_1">
                                        <h3>Basics & Lifestyle</h3>

                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>

                                                    <tr class="opened">
                                                        <td class="day_label">Marital Status :</td>
                                                        <td class="day_value">{{ $showAbout->maritial_status }}</td>
                                                    </tr>


                                                    <tr class="opened">
                                                        <td class="day_label">Height :</td>
                                                        <td class="day_value">{{ $showAbout->height }}</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Physical Status :</td>
                                                        <td class="day_value closed"><span>{{ $showAbout->physical_status }}</span></td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>

                                                    <tr class="opened">
                                                        <td class="day_label">Mother Tongue :</td>
                                                        <td class="day_value">{{ $showAbout->mother_lang }}</td>
                                                    </tr>


                                                    <tr class="opened">
                                                        <td class="day_label">Blood Group :</td>
                                                        <td class="day_value">{{ $showAbout->blood_group }}</td>
                                                    </tr>
                                                    <tr class="closed">
                                                        <td class="day_label">weight :</td>
                                                        <td class="day_value closed"><span>{{ $showAbout->weight }}</span></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="basic_1 basic_2">
                                        <h3>Education & Career</h3>
                                        <div class="basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened">
                                                        <td class="day_label">Education :</td>
                                                        <td class="day_value">{{ $showAbout->education }}</td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Occupation Detail :</td>
                                                        <td class="day_value closed">{{ $showAbout->ocupation }}</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Annual Income :</td>
                                                        <td class="day_value closed"><span>Tk.{{ $showAbout->anual_income }}</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                    <div class="basic_3">
                                        <h4>Family Details</h4>
                                        <div class="basic_1 basic_2">
                                            <h3>Basics</h3>
                                            <div class="col-md-6 basic_1-left">
                                                <table class="table_working_hours">
                                                    <tbody>
                                                        <tr class="opened">
                                                            <td class="day_label">Father's Name :</td>
                                                            <td class="day_value">{{ $showAbout->father_name }}</td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">Mother's Name :</td>
                                                            <td class="day_value">{{ $showAbout->mother_name }}</td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">Occupation :</td>
                                                            <td class="day_value closed"><span>{{ $showAbout->father_ocupation }}</span></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                                    <div class="basic_1 basic_2">
                                        <div class="basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened">
                                                        <td class="day_label">Age :</td>
                                                        <td class="day_value">28 to 35</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Marital Status :</td>
                                                        <td class="day_value">Single</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Body Type :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Complexion :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Height 5ft 9 in / 175cm :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Diet :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Kujadosham / Manglik :</td>
                                                        <td class="day_value closed"><span>No</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Religion :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Caste :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Mother Tongue :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Education :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Occupation :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Country of Residence :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">State :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Residency Status :</td>
                                                        <td class="day_value closed"><span>Doesn't matter</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 profile_right">
                    <div class="newsletter">
                        <form>
                            <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
                            <input type="submit" value="Go">
                        </form>
                    </div>
                    <div class="view_profile">
                        <h3>View Similar Profiles</h3>
                        <ul class="profile_item">
                            <a href="#">
                                <li class="profile_item-img">
                                    <img src="images/p5.jpg" class="img-responsive" alt="" />
                                </li>
                                <li class="profile_item-desc">
                                    <h4>2458741</h4>
                                    <p>29 Yrs, 5Ft 5in Christian</p>
                                    <h5>View Full Profile</h5>
                                </li>
                                <div class="clearfix"> </div>
                            </a>
                        </ul>
                        <ul class="profile_item">
                            <a href="#">
                                <li class="profile_item-img">
                                    <img src="images/p6.jpg" class="img-responsive" alt="" />
                                </li>
                                <li class="profile_item-desc">
                                    <h4>2458741</h4>
                                    <p>29 Yrs, 5Ft 5in Christian</p>
                                    <h5>View Full Profile</h5>
                                </li>
                                <div class="clearfix"> </div>
                            </a>
                        </ul>
                        <ul class="profile_item">
                            <a href="#">
                                <li class="profile_item-img">
                                    <img src="images/p7.jpg" class="img-responsive" alt="" />
                                </li>
                                <li class="profile_item-desc">
                                    <h4>2458741</h4>
                                    <p>29 Yrs, 5Ft 5in Christian</p>
                                    <h5>View Full Profile</h5>
                                </li>
                                <div class="clearfix"> </div>
                            </a>
                        </ul>
                        <ul class="profile_item">
                            <a href="#">
                                <li class="profile_item-img">
                                    <img src="images/p8.jpg" class="img-responsive" alt="" />
                                </li>
                                <li class="profile_item-desc">
                                    <h4>2458741</h4>
                                    <p>29 Yrs, 5Ft 5in Christian</p>
                                    <h5>View Full Profile</h5>
                                </li>
                                <div class="clearfix"> </div>
                            </a>
                        </ul>
                    </div>
                    <div class="view_profile view_profile1">
                        <h3>Members who viewed this profile also viewed</h3>
                        <ul class="profile_item">
                            <a href="#">
                                <li class="profile_item-img">
                                    <img src="images/p9.jpg" class="img-responsive" alt="" />
                                </li>
                                <li class="profile_item-desc">
                                    <h4>2458741</h4>
                                    <p>29 Yrs, 5Ft 5in Christian</p>
                                    <h5>View Full Profile</h5>
                                </li>
                                <div class="clearfix"> </div>
                            </a>
                        </ul>
                        <ul class="profile_item">
                            <a href="#">
                                <li class="profile_item-img">
                                    <img src="images/p10.jpg" class="img-responsive" alt="" />
                                </li>
                                <li class="profile_item-desc">
                                    <h4>2458741</h4>
                                    <p>29 Yrs, 5Ft 5in Christian</p>
                                    <h5>View Full Profile</h5>
                                </li>
                                <div class="clearfix"> </div>
                            </a>
                        </ul>
                        <ul class="profile_item">
                            <a href="#">
                                <li class="profile_item-img">
                                    <img src="images/p11.jpg" class="img-responsive" alt="" />
                                </li>
                                <li class="profile_item-desc">
                                    <h4>2458741</h4>
                                    <p>29 Yrs, 5Ft 5in Christian</p>
                                    <h5>View Full Profile</h5>
                                </li>
                                <div class="clearfix"> </div>
                            </a>
                        </ul>
                        <ul class="profile_item">
                            <a href="#">
                                <li class="profile_item-img">
                                    <img src="images/p12.jpg" class="img-responsive" alt="" />
                                </li>
                                <li class="profile_item-desc">
                                    <h4>2458741</h4>
                                    <p>29 Yrs, 5Ft 5in Christian</p>
                                    <h5>View Full Profile</h5>
                                </li>
                                <div class="clearfix"> </div>
                            </a>
                        </ul>
                    </div>
                </div> --}}
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
