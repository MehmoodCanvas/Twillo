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
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

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
                        <img src="{{asset('assets/front/images/d-user-icon.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="dashboard-main-th-user-name">
                        <p>{{Auth::user()->name}} <i class="fa-solid fa-chevron-down"></i></p>
                        <span>Active</span>
                        <div class="d-logout-Drop">
                            <a href="{{url('logout')}}"><img src="{{asset('assets/front/images/logout-ico.png')}}" class="img-fluid" alt="Logout">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
    
    <section class="dashboard_main_wrap">
        <div class="dashboard_side_bar">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-Dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Dashboard" type="button" role="tab" aria-controls="v-pills-Dashboard" aria-selected="true">Dashboard</button>
                    <button class="nav-link" id="v-pills-Management-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Management" type="button" role="tab" aria-controls="v-pills-Management" aria-selected="false">Phone Group</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Phone Numbers</button>
                    <button class="nav-link" id="v-pills-Email-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Email" type="button" role="tab" aria-controls="v-pills-Email" aria-selected="false">Email Groups</button>
                    <button class="nav-link" id="v-pills-Emails-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Emails" type="button" role="tab" aria-controls="v-pills-Emails" aria-selected="false">All Emails</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Send Message</button>
                    <button class="nav-link" id="v-pills-sendemails-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sendemails" type="button" role="tab" aria-controls="v-pills-sendemails" aria-selected="false">Send Email</button>
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
                                        <td><a class="btn btn-danger confirmation" href="{{url('delete/phone_group/'.$item->sms_group_id)}}">Delete</a></td>
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
<!--                             <button class="common_dark_btn" data-bs-toggle="modal" data-bs-target="#addphone" >Add New</button> -->
                            <div class="dropdown">
                              <button class="common_dark_btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Add New
                              </button>
                              <ul class="dropdown-menu cus_dmenu" aria-labelledby="dropdownMenuButton1">
                                <li><button data-bs-toggle="modal" data-bs-target="#addphone">Upload A Number</button></li>
                                <li><button data-bs-toggle="modal" data-bs-target="#addphone_bulk">Upload Bulk Number</button></li>
                              </ul>
                            </div>
                        </div>
                        <select class="filterselect minimal" id="filterDropdown">
                            <option value="">Show All</option>
                            <option value="Interested">Interested</option>
                            <option value="Not-interested">Not-interested</option>
                        </select>
                        <select class="filterselect" id="filterDropdownGroup">
                            <option value="">Show All</option>
                            @foreach ($smsgroups as $item)
                            <option value="{{$item->sms_group_name}}">{{$item->sms_group_name}}</option>
                            @endforeach

                        </select>
                        <div class="d_content_main_box_table_m">
                            <table class="table" id="myTable2">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
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
                                        <td>{{$no->phone_first_name}}</td>
                                        <td>{{$no->phone_last_name}}</td>
                                        <td>{{{$no->sms_group_name}}}</td>
                                        <td class="yellowp">{{{$no->phone_number_status}}}</td>
                                        <td><a class="btn btn-danger confirmation" href="{{url('delete/phone/'.$no->phone_id)}}">Delete</a></td>

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
                                        <td><a class="btn btn-danger confirmation" href="{{url('delete/email_group/'.$emgroup->email_group_id)}}">Delete</a></td>
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
<!--                             <button class="common_dark_btn" data-bs-toggle="modal" data-bs-target="#addemail">Add New Email</button> -->
                            <div class="dropdown">
                              <button class="common_dark_btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Add New
                              </button>
                              <ul class="dropdown-menu cus_dmenu" aria-labelledby="dropdownMenuButton1">
                                <li><button data-bs-toggle="modal" data-bs-target="#addemail">Upload A Email</button></li>
                                <li><button data-bs-toggle="modal" data-bs-target="#addemail_bulk">Upload Bulk Emails</button></li>
                              </ul>
                            </div>
                        </div>
                        <select class="filterselect minimal" id="filterDropdown2">
                            <option value="">Show All</option>
                            <option value="Interested">Interested</option>
                            <option value="Not-interested">Not-interested</option>
                        </select>
                        <div class="d_content_main_box_table_m">
                            <table class="table" id="myTable34">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Email First Name</th>
                                        <th scope="col">Email Last Name</th>

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
                                        <td>{{$email->emails_first_name}}</td>
                                        <td>{{$email->emails_last_name}}</td>
                                        <td>{{{$email->email_group_name}}}</td>
                                        <td class="yellowp">{{{$email->emails_status}}}</td>
                                        <td><a class="btn btn-danger confirmation" href="{{url('delete/email/'.$email->emails_id)}}">Delete</a></td>

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
                                            <select name="group" id="group" class="minimal" required>
                                                <option value="00">Single Number</option>
                                                @foreach ($smsgroups as $sendgroups)
                                                <option value="{{$sendgroups->sms_group_id}}">{{$sendgroups->sms_group_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>                
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Phone Number</label>
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
                                            <select name="email_group_id" id="email_group_id" class="minimal" required>
                                                <option value="">Select Group</option>
                                                <option value="Single">Single Email</option>
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
                                            <label for="">Single Email <span>*</span></label>
                                            <input type="text" placeholder="Enter Single Email If Single is Choosen"  name="single_email"></input>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                           
                                            <textarea id="basic-conf" placeholder="Enter Enter Message"  name="body"></textarea>
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
                                        <h6>Add New Group</h6>
                                    </div>
                                    <div class="d_content_main_form_inputs">
                                        <label for="">Enter Group Name <span>*</span></label>
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
        <div class="modal fade" id="addphone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="custome-content modal-content">
                <div class="custome-content-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body custome-body">
                    <div class="d_content_main_form_wrap">
                        <div class="row">
                                    <form action="{{url('post-number')}}" method="post">
                                        @csrf
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="d_content_modal_text">
                                                <h6>Add New</h6>
                                            </div>
                                            <div class="d_content_main_form_inputs">
                                                <label for="phone_group_id">Select Group <span>*</span></label>
                                            <select class="minimal" name="phone_group_id" id="phone_group_id" required>
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
                                                <label for="">First Name</label>
                                                <input type="text" placeholder="First Name" name="phone_first_name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="d_content_main_form_inputs">
                                                <label for="">Last Name</label>
                                                <input type="text" placeholder="Last Name" name="phone_last_name">
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
    
    <div class="modal fade" id="addphone_bulk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="custome-content modal-content">
                <div class="custome-content-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body custome-body">
                    <div class="d_content_main_form_wrap">
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
<div class="modal fade" id="addemail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="custome-content modal-content">
                <div class="custome-content-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body custome-body">
                    <div class="d_content_main_form_wrap">
                        <div class="row">
                                <form action="{{url('post-email')}}" method="post">
                                    @csrf
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_modal_text">
                                            <h6>Add New</h6>
                                        </div>
                                        <div class="d_content_main_form_inputs">
                                            <label for="emails_group_id">Select Group <span>*</span></label>
                                           <select class="minimal" name="emails_group_id" id="emails_group_id" required>
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
                                            <input type="email" placeholder="demo@xyz.com" name="emails_email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Email First Name<span>*</span></label>
                                            <input type="text" placeholder="Jhon" name="emails_first_name" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="d_content_main_form_inputs">
                                            <label for="">Email Last Name<span>*</span></label>
                                            <input type="text" placeholder="Xyz" name="emails_last_name" >
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
    
    <div class="modal fade" id="addemail_bulk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="custome-content modal-content">
                <div class="custome-content-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body custome-body">
                    <div class="d_content_main_form_wrap">
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
    
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.6.3.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="{{asset('assets/front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset("assets/front/js/custom.js")}}"></script>
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/ovcqyonlgkt5atfff0di1ynaf5u0jvztzi999yrbluq973wo/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
       selector: '#basic-conf',
       plugins: [
          'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
          'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
          'table', 'emoticons', 'help'
       ],
       toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
          'forecolor backcolor emoticons | help',
       init_instance_callback: function (editor) {
          editor.setContent(`<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
   <head>
      <!--[if gte mso 9]>
      <xml>
         <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
         </o:OfficeDocumentSettings>
      </xml>
      <![endif]-->
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="format-detection" content="date=no" />
      <meta name="format-detection" content="address=no" />
      <meta name="format-detection" content="telephone=no" />
      <meta name="x-apple-disable-message-reformatting" />
      <!--[if !mso]><!-->
      <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet" />
      <!--<![endif]-->
      <title>Wacky Sports Offer</title>
      <!--[if gte mso 9]>
      <style type="text/css" media="all">
         sup { font-size: 100% !important; }
      </style>
      <![endif]-->
      <style type="text/css" media="screen">
         /* Linked Styles */
         body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none }
         a { color:#66c7ff; text-decoration:none }
         p { padding:0 !important; margin:0 !important } 
         img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
         .mcnPreviewText { display: none !important; }
         /* Mobile styles */
         @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
         .mobile-shell { width: 100% !important; min-width: 100% !important; }
         .bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }
         .text-header,
         .m-center { text-align: center !important; }
         .center { margin: 0 auto !important; }
         .container { padding: 20px 10px !important }
         .td { width: 100% !important; min-width: 100% !important; }
         .m-br-15 { height: 15px !important; }
         .p30-15 { padding: 30px 15px !important; }
         .p40 { padding: 20px !important; }
         .m-td,
         .m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }
         .m-block { display: block !important; }
         .fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }
         .column,
         .column-top,
         .column-empty,
         .column-empty2,
         .column-dir-top { float: left !important; width: 100% !important; display: block !important; }
         .column-empty { padding-bottom: 10px !important; }
         .column-empty2 { padding-bottom: 20px !important; }
         .content-spacing { width: 15px !important; }
         }
      </style>
   </head>
   <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
         <tr>
            <td align="center" valign="top">
               <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                  <tr>
                     <td class="td container" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding-top:55px; padding-bottom: 10px;">
                        <!-- Header -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                              <td style="padding-bottom: 20px;">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                       <td class="p30-15" style="padding: 25px 30px 25px 30px;" bgcolor="#232323">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                             <tr>
                                                <th class="column-top" width="145" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                         <td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://thewackyreport.com/special-promotions-firsttime.html" target="_blank"><img src="http://thewackyreport.com/images/Wackysportsbanner1-min.png" width="240" height="52" border="0" alt="Wacky Sports Special Offer " /></td>
                                                         </a>
                                                      </tr>
                                                   </table>
                                                </th>
                                                <th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
                                                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                      </tr>
                                                   </table>
                                                </th>
                                             </tr>
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                        <!-- END Header -->
                        <!-- Section 1 -->							
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#313941">
                           <tr>
                              <td valign="top" class="m-td" style="font-size:0pt; line-height:0pt; text-align:left;">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                       <td class="img" height="30" bgcolor="#ffffff" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
                                    </tr>
                                 </table>
                              </td>
                              <td align="center" valign="top" width="650" class="mobile-shell">
                                 <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                                    <tr>
                                       <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                             <tr>
                                                <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://thewackyreport.com/images/bg-background.jpg" width="650" height="300" editable="true" border="0" alt="" /></a></td>
                                             </tr>
                                             <tr>
                                                <td class="h1-1-white centered p-25-15" style="padding: 28px; color:#000000; font-family:'Barlow Condensed', Arial,sans-serif; font-size:36px; line-height:52px; text-align:center;" bgcolor="#61E1B6">
                                                   <multiline>
                                                      NEXT TOP SAT NOV 9, 2024! <br>
                                                      16-4 Since 2020
                                                   </multiline>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="p-25-15" style="padding: 30px 30px 50px 30px;">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                         <td class="text-4-white centered" style="padding-bottom: 30px; color:#ffffff; font-family:'Quicksand', Arial,sans-serif; font-size:24px; line-height:34px; text-align:center;">
                                                            <multiline>
                                                               <b>50% OFF Lowest Pricing For First time clients</b><br>YOUR Lowest Price Specials!
                                                            </multiline>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td align="center">
                                                            <!-- Button -->
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                               <tr>
                                                                  <td class="text-btn-red" bgcolor="#1E90ff" style="color:#d85d5c; font-family:'Quicksand', Arial,sans-serif; font-size:18px; line-height:16px; text-align:center; padding:13px 27px; border-radius:3px;">
                                                                     <multiline>
                                                                        <a href="https://thewackyreport.com/special-promotions-firsttime.html" target="_blank" class="link" style="color:#d85d5c; text-decoration:none;"><span class="link" style="color:#ffffff; text-decoration:none;"><strong>VIEW THE SPECIALS</strong></span></a>
                                                                     </multiline>
                                                                  </td>
                                                               </tr>
                                                            </table>
                                                            <!-- END Button -->
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                              <td valign="top" class="m-td" style="font-size:0pt; line-height:0pt; text-align:left;">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                       <td class="img" height="30" bgcolor="#ffffff" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                        <!-- END Section 1 -->
                        <!-- Article / Title + Copy + Button PART 1 Let Wacky Help -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                              <td style="padding-bottom: 20px;">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                    <tr>
                                       <td class="p30-15" style="padding: 50px 30px;">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                             <tr>
                                                <td class="h3 pb20" style="color:#114490; font-family:'Noto Sans', Arial,sans-serif; font-size:24px; line-height:32px; text-align:left; padding-bottom:20px;">Let Wacky Help Your Bankroll Grow</td>
                                             </tr>
                                             <tr>
                                                <td class="text pb20" style="color:#000000; font-family:'Noto Sans', Arial,sans-serif; font-size:16px; line-height:26px; text-align:left; padding-bottom:20px;">Wacky Sports Just Earned a #1 Top Spot in College Football with two Monitors!!! Since 2020 The NFL|NCAAF Combo Package has amassed 200+ Units of Profits. Trust the Process! This Is the Lowest Price Offered and will expire soon.</td>
                                             </tr>
                                             <!-- Button -->
                                             <tr>
                                                <td align="left">
                                                   <table border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                         <td class="text-button" style="background:#114490; color:#ffffff; font-family:'Noto Sans', Arial,sans-serif; font-size:16px; line-height:18px; padding:14px 22px; text-align:center; border-radius:6px;"><a href="https://docs.google.com/spreadsheets/d/1IcfDnHO73GCRj3xE6p3d3FjHkEbyuzBIzPzMNLRqcxg/edit?usp=sharing" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">VIEW 2023 NCAAF RESULTS</span></a></td>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                             <!-- END Button -->
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                        <!-- END Article / Title + Copy + Button -->
                        <!-- END Two Columns / Images TWO OF THEM END-->
                        <!-- Article Image On The Right Who Is Wacky-->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                              <td style="padding-bottom: 20px;">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                    <tr>
                                       <td class="p40" style="padding:40px;">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0" dir="rtl" style="direction: rtl;">
                                             <tr>
                                                <th class="column-dir-top" dir="ltr" width="225" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr; vertical-align:top;">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                         <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="https://thewackyreport.com/images/Tom.Czarnecki-min.jpg" width="179" height="179" border="0" alt="Wacky Tom Czarnecki" /></td>
                                                      </tr>
                                                   </table>
                                                </th>
                                                <th class="column-empty" dir="ltr" width="30" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
                                                <th class="column-dir-top" dir="ltr" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr; vertical-align:top;">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                         <td class="h4 pb20" style="color:#114490; font-family:'Noto Sans', Arial,sans-serif; font-size:24px; line-height:28px; text-align:left; padding-bottom:20px;">Who Is Wacky</td>
                                                      </tr>
                                                      <tr>
                                                         <td class="text pb20" style="color:#000000; font-family:'Noto Sans', Arial,sans-serif; font-size:16px; line-height:28px; text-align:left; padding-bottom:20px;">A True Pro with Realistic Expectations. Wacky Earned 17x TOP Awards and Multi Top 5 Finishes. There are no Top Plays of the Month or Upsets of the Century here. </td>
                                                      </tr>
                                                      <!-- Button -->
                                                      <tr>
                                                         <td align="left">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                               <tr>
                                                                  <td class="text-button" style="background:#114490; color:#ffffff; font-family:'Noto Sans', Arial,sans-serif; font-size:16px; line-height:18px; padding:14px 22px; text-align:center; border-radius:6px;"><a href="https://thewackyreport.com/special-promotions-firsttime.html" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">READ MORE</span></a></td>
                                                               </tr>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                      <!-- END Button -->
                                                   </table>
                                                </th>
                                             </tr>
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                        <!-- Article Image On The Right -->

                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </body>
</html>`);
       }
    });
 </script>

<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are you sure?');
    });
</script>
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
    const dropdown3 = document.getElementById('filterDropdownGroup');
    dropdown3.addEventListener('change', function() {
        let selectedValuew = dropdown3.value;
        table2.search(selectedValuew).draw();
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
                fill: false, 
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
