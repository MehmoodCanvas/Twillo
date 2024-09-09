@include('inc.header')
<section class="signin_main_wrapper">
    <div class="signin_wrap_f">
        <div class="signin_wrap_video">
            <video src="{{asset('assets/front/images/main_video.mp4')}}" loop autoplay muted></video>
        </div>
        <div class="signin_form_main_wrap">
            <div class="signin_form_logo">
                <img src="{{asset('assets/front/images/logo.png')}}" class="img-fluid" alt="">
            </div>
            <form action="{{url('post-login')}}" method="post">
                @csrf
                <div class="signin_form_ttext">
                    <h6>Sign In</h6>
                    <p>Stay Updated on your professional world</p>
                </div>
                @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error')}}
                  </div>
                  @endif
                <div class="signin_form_field">
                    <div class="signin_form_f">
                        <div class="form_field">
                            <label for="field1">Email Address <span>*</span></label>
                            <input type="email" name="email" id="field1" placeholder="Enter Email Address">
                        </div>
                    </div>
                    <div class="form_field pass_field mb-3">
                        <label for="pass">Password <span>*</span></label>
                        <input type="password" id="pass_input"  name="password">
                        <i id="pass_ico" class="fa-solid fa-eye-slash"></i>
                    </div>
                    <div class="signin_checkbox_f">
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                                Remember Me
                        </label>
                        <a href="#!">Forgot Password?</a>
                    </div>
                </div>
                <div class="signin_form_btn">
                    <button class="main_btn" type="submit">Sign In</button>
                    <a href="#!">Register</a>
                </div>
            </form>

        </div>
    </div>
</section>

@include('inc.footer')
