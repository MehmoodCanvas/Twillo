<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wacky Sports | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex" />
	<link rel="icon" href="assets/front/images/favicon.ico">
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="d_body">
<header class="header_main_wrapper">
        <div class="header_main_wrap_f">
            <div class="header_main_wrap_logo">
                <img src="{{asset('assets/front/images/logo.png')}}" class="img-fluid" alt="header-main-wrap-logo">
            </div>
            <div class="dashboard-main-th-userm-f">
                <div class="dashboard-main-th-user-f">
                    <div class="dashboard-main-th-user-img">
                        <img src="assets/front/images/d-user-icon.png" class="img-fluid" alt="">
                    </div>
                    <div class="dashboard-main-th-user-name">
                        <p>{{Auth::user()->name}} <i class="fa-solid fa-chevron-down"></i></p>
                        <span>Active</span>
                    </div>
                    <div class="d-logout-Drop">
                        <a href="{{url('logout')}}"><img src="assets/front/images/logout-ico.png" class="img-fluid" alt="Logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
</header>
    
    <section class="dashboard_main_wrap">
        <div class="dashboard_side_bar">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-Dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Dashboard" type="button" role="tab" aria-controls="v-pills-Dashboard" aria-selected="true"><img src="assets/front/images/d_ico1.png" class="img-fluid" alt=""> Dashboard</button>
                    <button class="nav-link" id="v-pills-Management-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Management" type="button" role="tab" aria-controls="v-pills-Management" aria-selected="false"><img src="assets/front/images/d_ico2.png" class="img-fluid" alt=""> Phone Group</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="assets/front/images/d_ico3.png" class="img-fluid" alt=""> Phone Numbers</button>
                    <button class="nav-link" id="v-pills-Email-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Email" type="button" role="tab" aria-controls="v-pills-Email" aria-selected="false"><img src="assets/front/images/d_ico4.png" class="img-fluid" alt="">Email Groups</button>
                    <button class="nav-link" id="v-pills-Emails-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Emails" type="button" role="tab" aria-controls="v-pills-Emails" aria-selected="false"><img src="assets/front/images/d_ico4.png" class="img-fluid" alt="">All Emails</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><img src="assets/front/images/d_ico5.png" class="img-fluid" alt=""> Send Message</button>
                    <button class="nav-link" id="v-pills-sendemails-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sendemails" type="button" role="tab" aria-controls="v-pills-sendemails" aria-selected="false"><img src="assets/front/images/d_ico5.png" class="img-fluid" alt=""> Send Email</button>
                </div>
            </div>
        </div>
        <div class="dashboard_main_box">
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success')}}
              </div>
              @endif
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-Dashboard" role="tabpanel" aria-labelledby="v-pills-Dashboard-tab">
                    <div class="d_content_main_wrap">
                        <div class="d_content_main_heading">
                            <h6>Dashboard</h6>
                        </div>
                        <div class="d_content_main_boxes">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="d_content_top_crbox_f">
                                        <div class="d_content_top_crbox_img">
                                            <img src="assets/front/images/cr_box_ico1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="d_content_top_crbox_text">
                                            <h6>200</h6>
                                            <p>Total Users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="d_content_top_crbox_f">
                                        <div class="d_content_top_crbox_img">
                                            <img src="assets/front/images/cr_box_ico2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="d_content_top_crbox_text">
                                            <h6>190+</h6>
                                            <p>SMS Messages</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="d_content_top_crbox_f">
                                        <div class="d_content_top_crbox_img">
                                            <img src="assets/front/images/cr_box_ico3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="d_content_top_crbox_text">
                                            <h6>190+</h6>
                                            <p>Email Messages</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="d_content_top_crbox_f">
                                        <div class="d_content_top_crbox_img">
                                            <img src="assets/front/images/cr_box_ico4.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="d_content_top_crbox_text">
                                            <h6>400+</h6>
                                            <p>Subscriptions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d_content_main_boxes">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <div class="d_content_main_box">
                                        <div class="d_content_main_box_heading">
                                            <h6>Sms & EMail Reports <a href="#!"><i class="fa-solid fa-ellipsis"></i></a></h6>
                                        </div>
                                        <div class="d_content_main_box_chart">
                                            <canvas id="lineChart" style="max-height: 400px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <div class="d_content_main_box lg_box_height">
                                        <div class="d_content_main_box_heading">
                                            <h6>All User</h6>
                                        </div>
                                        <div class="d_content_main_box_chart">
                                            <img src="assets/front/images/dono_img.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-Management" role="tabpanel" aria-labelledby="v-pills-Management-tab">
                    <div class="d_content_main_wrap">
                        <div class="d_content_main_heading">
                            <h6>Phone Group Management</h6>
                            <button class="common_dark_btn" data-bs-toggle="modal" data-bs-target="#exampleModal12" >Add New</button>
                        </div>
                        <div class="d_content_main_box_table_m">
                            <table class="table" id="myTable1">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($smsgroups as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item->sms_group_name}}</td>
                                        <td>{{$item->sms_group_id}}</td>
                                        <td><a class="btn btn-danger" href="{{url('delete/phone_group/'.$item->sms_group_id)}}">Delete</a></td>
                                    </tr>    
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="d_content_main_wrap">
                        <div class="d_content_main_heading">
                            <h6>Phone Numbers</h6>
                            <button class="common_dark_btn" data-bs-toggle="modal" data-bs-target="#addphone" >Add New</button>
                        </div>
                        <select class="filterselect" id="filterDropdown">
                            <option value="">Show All</option>
                            <option value="Interested">Interested</option>
                            <option value="Not-interested">Not-interested</option>
                        </select>
                        <div class="d_content_main_box_table_m">
                            <table class="table" id="myTable2">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Group</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($numbers as  $no)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$no->phone_number}}</td>
                                        <td>{{{$no->sms_group_name}}}</td>
                                        <td class="yellowp">{{{$no->phone_number_status}}}</td>
                                        <td><a class="btn btn-danger" href="{{url('delete/phone/'.$no->phone_id)}}">Delete</a></td>

                                    </tr>     
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-Email" role="tabpanel" aria-labelledby="v-pills-Email-tab">
                    <div class="d_content_main_wrap">
                        <div class="d_content_main_heading">
                            <h6>Email Messages</h6>
                            <button class="common_dark_btn btn_fix" data-bs-toggle="modal" data-bs-target="#addemailgroup">Add New Email Group</button>
                        </div>
                        <div class="d_content_main_box_table_m">
                            <table class="table" id="myTable3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Action</th>
                                 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emailsgroups as  $emgroup)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$emgroup->email_group_name}}</td>
                                        <td>{{$emgroup->email_group_id}}</td>
                                        <td><a class="btn btn-danger" href="{{url('delete/email_group/'.$emgroup->email_group_id)}}">Delete</a></td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-Emails" role="tabpanel" aria-labelledby="v-pills-Emails-tab">
                    <div class="d_content_main_wrap">
                        <div class="d_content_main_heading">
                            <h6>Emails</h6>
                            <button class="common_dark_btn" data-bs-toggle="modal" data-bs-target="#addemail">Add New Email</button>
                        </div>
                        <select class="filterselect" id="filterDropdown2">
                            <option value="">Show All</option>
                            <option value="Interested">Interested</option>
                            <option value="Not-interested">Not-interested</option>
                        </select>
                        <div class="d_content_main_box_table_m">
                            <table class="table" id="myTable34">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Group</th>

                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emails as  $email)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$email->emails_email}}</td>
                                        <td>{{{$email->email_group_name}}}</td>
                                        <td class="yellowp">{{{$email->emails_status}}}</td>
                                        <td><a class="btn btn-danger" href="{{url('delete/email/'.$email->emails_id)}}">Delete</a></td>

                                    </tr>     
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <div class="d_content_main_wrap">
                        <div class="d_content_main_heading">
                            <h6>Settings</h6>
                        </div>
                        <div class="d_content_main_form_wrap">
                             <form action="{{url('send-sms')}}" method="post">
                                <div class="row">
                                    @csrf
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="d_content_main_form_inputs">
                                            <label for="group">Select Group <span>*</span></label>
                                            <select name="group" id="group" class="minimal1" required>
                                                <option value="00">Single Number</option>
                                                @foreach ($smsgroups as $sendgroups)
                                                <option value="{{$sendgroups->sms_group_id}}">{{$sendgroups->sms_group_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>                
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Phone Number <span>*</span></label>
                                            <input  placeholder="Enter  +102222044"  name="sms_single"></input>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Message <span>*</span></label>
                                            <textarea placeholder="Enter Enter Message"  name="sms_content" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <button class="common_dark_btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-sendemails" role="tabpanel" aria-labelledby="v-pills-sendemails-tab">
                    <div class="d_content_main_wrap">
                        <div class="d_content_main_heading">
                            <h6>Settings</h6>
                        </div>
                        <div class="d_content_main_form_wrap">
                             <form action="{{url('shoot-email')}}" method="post">
                                <div class="row">
                                    @csrf
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="d_content_main_form_inputs">
                                            <label for="email_group_id">Select Group <span>*</span></label>
                                            <select name="email_group_id" id="email_group_id" class="minimal1" required>
                                                <option value="00">Single Number</option>
                                                @foreach ($emailsgroups as $emails)
                                                <option value="{{$emails->email_group_id}}">{{$emails->email_group_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>    
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Subject <span>*</span></label>
                                            <input type="text" placeholder="Enter Enter Message"  name="subject" required></input>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Title <span>*</span></label>
                                            <input type="text" placeholder="Enter Enter Message"  name="title" required></input>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Body <span>*</span></label>
                                            <textarea placeholder="Enter Enter Message"  name="body" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <button class="common_dark_btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="custom_tab">
                    <div class="d_content_main_wrap">
                        <div class="d_content_main_heading">
                            <h6>Form Layout</h6>
                        </div>
                        <div class="d_content_main_form_wrap">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="d_content_main_form_inputs">
                                        <label for="">First Name <span>*</span></label>
                                        <input type="text" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="d_content_main_form_inputs">
                                        <label for="">Last Name <span>*</span></label>
                                        <input type="email" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="d_content_main_form_inputs">
                                        <label for="">Email Address <span>*</span></label>
                                        <input type="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="d_content_main_form_inputs">
                                        <label for="">Phone No <span>*</span></label>
                                        <input type="tel" placeholder="Enter Phone No">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="d_content_main_form_inputs">
                                        <label for="">Message <span>*</span></label>
                                        <textarea  placeholder="Enter Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="d_content_main_form_inputs">
                                        <button class="common_dark_btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-wrapper">
    
    </footer>
    
    <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="custome-content modal-content">
                <div class="custome-content-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body custome-body">
                    <div class="d_content_main_form_wrap">
                        <div class="row">
                            <form action="{{url('post-sms-group')}}" method="post">
                                @csrf
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="d_content_modal_text">
                                        <h6>Add New</h6>
                                    </div>
                                    <div class="d_content_main_form_inputs">
                                        <label for="">First Name <span>*</span></label>
                                        <input type="text" placeholder="Enter First Name" name="sms_group_name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="d_content_main_form_inputs">
                                        <button class="common_dark_btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal new_modal fade" id="addphone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="custome-content modal-content">
                <div class="custome-content-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body custome-body">
                    <div class="d_content_main_form_wrap">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="row">
                                    <form action="{{url('post-number')}}" method="post">
                                        @csrf
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="d_content_modal_text">
                                                <h6>Add New</h6>
                                            </div>
                                            <div class="d_content_main_form_inputs">
                                                <label for="phone_group_id">Select Group <span>*</span></label>
                                            <select name="phone_group_id" id="phone_group_id" required>
                                                <option value="">Select Group</option>
                                                @foreach ($smsgroups as $groups)
                                                <option value="{{$groups->sms_group_id}}">{{$groups->sms_group_name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="d_content_main_form_inputs">
                                                <label for="">Phone Number <span>*</span></label>
                                                <input type="text" placeholder="+10000000" name="phone_number">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="d_content_main_form_inputs">
                                                <button class="common_dark_btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 cus_border">
                                <div class="row">
                                    <form action="{{url('bulk-number')}}" method="post" enctype="multipart/form-data"> 
                                        @csrf
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="d_content_modal_text">
                                                <h6>Upload Bulk</h6>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="d_content_main_form_inputs">
                                                <label for="">Upload File <span>*</span></label>
                                                <input type="file" placeholder="" name="import_file">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="d_content_main_form_inputs">
                                                <button class="common_dark_btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addemailgroup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="custome-content modal-content">
                <div class="custome-content-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body custome-body">
                    <div class="d_content_main_form_wrap">
                        <div class="row">
                            <form action="{{url('post-email-group')}}" method="post">
                                @csrf
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="d_content_modal_text">
                                        <h6>Add New</h6>
                                    </div>
                                    <div class="d_content_main_form_inputs">
                                        <label for="">Email Group Name<span>*</span></label>
                                        <input type="text" placeholder="Demo Group" name="email_group_name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="d_content_main_form_inputs">
                                        <button class="common_dark_btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal  new_modal fade" id="addemail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="custome-content modal-content">
                <div class="custome-content-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body custome-body">
                    <div class="d_content_main_form_wrap">
                        <div class="row">

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="row">
                                <form action="{{url('post-email')}}" method="post">
                                    @csrf
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_modal_text">
                                            <h6>Add New</h6>
                                        </div>
                                        <div class="d_content_main_form_inputs">
                                            <label for="emails_group_id">Select Group <span>*</span></label>
                                           <select name="emails_group_id" id="emails_group_id" required>
                                            <option value="">Select Group</option>
                                            @foreach ($emailsgroups as $egroups)
                                            <option value="{{$egroups->email_group_id}}">{{$egroups->email_group_name}}</option>
                                            @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Email<span>*</span></label>
                                            <input type="email" placeholder="demo@xyz.com" name="emails_email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <button class="common_dark_btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 cus_border">
                            <div class="row">
                                <form action="{{url('bulk-email')}}" method="post" enctype="multipart/form-data"> 
                                    @csrf
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_modal_text">
                                            <h6>Upload Bulk</h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Upload File <span>*</span></label>
                                            <input type="file" placeholder="" name="import_email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <button class="common_dark_btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.6.3.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="{{asset('assets/front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset("assets/front/js/custom.js")}}"></script>

<script>

    let table = new DataTable('#myTable', {
        // options
    });

</script>
<script>

    let table1= new DataTable('#myTable1', {
    });

</script>
<script>

    let table2= new DataTable('#myTable2', {
    });
    const dropdown = document.getElementById('filterDropdown');
    dropdown.addEventListener('change', function() {
        let selectedValue = dropdown.value;
        
        table2.search(selectedValue).draw();
    });

</script>
<script>

    let table3= new DataTable('#myTable3', {
        // options
    });

</script>

<script>

    let table34= new DataTable('#myTable34', {
    });
    
    const dropdown2 = document.getElementById('filterDropdown2');
    dropdown2.addEventListener('change', function() {
        let selectedValue2 = dropdown2.value;
        table34.search(selectedValue2).draw();
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const lineChart = new Chart(document.querySelector('#lineChart'), {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [20, 20, 40, 50, 40, 50, 20, 40, 20,],
                fill: false, // Fill under the line
                borderColor: '#CFAA45',
                tension: 0.5
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            elements: {
                line: {
                    borderRadius: 7 
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
});
</script>

<script>
     $('#view_btn').on('click', function () {
        $('.custom_tab').addClass('d-block');
        $('.custom_tab').removeClass('d-none');
        $('.nav-link').removeClass('active');
        $('.tab-pane').removeClass('show active');
    });
     $('.nav-link').on('click', function () {
        $('.custom_tab').addClass('d-none');
        $('.custom_tab').removeClass('d-block');
    });
</script>

<script>
    $(".dashboard-main-th-user-bell").click(function(){
    $(".navDropNoti").slideToggle();
    });
    $(".dashboard-main-th-user-f").click(function(){
    $(".d-logout-Drop").slideToggle();
    });
</script>

</body>
</html>