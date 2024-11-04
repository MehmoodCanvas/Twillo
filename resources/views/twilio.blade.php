@include('inc.header')


<section class="twili_wrapper">
        <div class="twili_wrap_box">
            <div class="twili_wrap_box_logo">
                <img src="{{asset('assets/front/images/logo.png')}}" class="img-fluid">
            </div>
            <div class="twili_wrap_box_text">
                <h6></h6>
                <p>A brief description of the campaign.</p>
            </div>
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success')}}
              </div>
              @endif
            <form action="{{url("single-phone")}}" method="post">
              @csrf
            <div class="twili_wrap_box_input">
                <input type="number" placeholder="Your phone number" name="phone_number">
                <button type="submit">Join Now</button>
            </div>
          </form>
            <div class="checkbox-wrapper-46">
              <input type="checkbox" id="cbx-46" class="inp-cbx" required />
              <label for="cbx-46" class="cbx"
                ><span>
                  <svg viewBox="0 0 12 10" height="10px" width="12px">
                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span
                ><span>I agree to receive marketing messages from Wacky Sports at the phone number provided above. I understand that I can reply STOP to opt out.</span>
              </label>
            </div>
        </div>
        <div class="twili_wrap_bottom_btn">
            <ul>
                <li>
                    <a href="">Privacy Policy</a>
                </li>
                <li>
                    <a href="">|</a>
                </li>
                <li>
                    <a href="{{url('terms-of-use')}}">Terms of Service</a>
                </li>
            </ul>
        </div>
</section>

</body>
</html>