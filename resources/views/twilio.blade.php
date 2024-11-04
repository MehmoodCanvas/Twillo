<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
  <style>
      .twili_wrapper {
          height: 100vh;
          padding: 150px 0px 100px 0px;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
      }
      .twili_wrap_box {
          width: 500px;
          border: 1px solid var(--text-color);
          padding: 30px;
          border-radius: 5px;
          text-align: center;
          margin: 0px 0px 30px 0px;
      }
      .twili_wrap_box_logo {
          margin: 0px 0px 30px 0px;
      }
      .twili_wrap_box_text h6 {
          font-size: 35px;
          font-family: var(--Montserrat-SemiBold);
          color: var(--text-color);
          text-transform: capitalize;
          margin: 0 0 10px 0;
      }
      .twili_wrap_box_text p {
          font-size: 18px;
          font-family: var(--Montserrat-Medium);
          color: var(--black);
          opacity: 0.8;
          margin: 0 0 20px 0;
      }
      .twili_wrap_box_input {
          position: relative;
          margin: 0 0 25px 0;
      }
      .twili_wrap_box_input input {
          font-size: 18px;
          font-family: var(--Montserrat-Medium);
          color: var(--black);
          width: 100%;
          height: 60px;
          border-radius: 9.32px;
          border: 1.275px solid #9c9c9c;
          background-color: transparent;
          padding: 0 0px 0 15px;
      }
      .twili_wrap_box_input button {
          position: absolute;
          top: 1px;
          right: 0px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 18px;
          color: var(--text-color);
          background-color: var(--main-color);
          width: 100px;
          height: 58px;
          border-radius: 10px;
          border: transparent;
      }
      .twili_wrap_bottom_btn ul {
          display: flex;
          align-items: center;
          gap: 20px;
      }
      .twili_wrap_bottom_btn ul li a{
          font-size: 18px;
          font-family: var(--Montserrat-Medium);
      }
      .checkbox-wrapper-46 input[type="checkbox"] {
        display: none;
        visibility: hidden;
      }
      .checkbox-wrapper-46 .cbx {
          margin: auto;
          -webkit-user-select: none;
          user-select: none;
          cursor: pointer;
          display: flex;
          text-align: start;
      }
      .checkbox-wrapper-46 .cbx span {
          display: inline-block;
          vertical-align: middle;
          transform: translate3d(0, 0, 0);
          font-family: var(--Montserrat-Medium);
          font-size: 15px;
      }
      .checkbox-wrapper-46 .cbx span:first-child {
          position: relative;
          width: 50px;
          height: 18px;
          border-radius: 3px;
          transform: scale(1) translate(0px, 5px);
          vertical-align: middle;
          border: 1px solid #9098a9;
          transition: all 0.2s ease;
      }
      .checkbox-wrapper-46 .cbx span:first-child svg {
        position: absolute;
        top: 3px;
        left: 2px;
        fill: none;
        stroke: #ffffff;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 16px;
        stroke-dashoffset: 16px;
        transition: all 0.3s ease;
        transition-delay: 0.1s;
        transform: translate3d(0, 0, 0);
      }
      .checkbox-wrapper-46 .cbx span:first-child:before {
        content: "";
        width: 100%;
        height: 100%;
        background: #506eec;
        display: block;
        transform: scale(0);
        opacity: 1;
        border-radius: 50%;
      }
      .checkbox-wrapper-46 .cbx span:last-child {
        padding-left: 8px;
      }
      .checkbox-wrapper-46 .cbx:hover span:first-child {
        border-color: #506eec;
      }
      
      .checkbox-wrapper-46 .inp-cbx:checked + .cbx span:first-child {
        background: #506eec;
        border-color: #506eec;
        animation: wave-46 0.4s ease;
      }
      .checkbox-wrapper-46 .inp-cbx:checked + .cbx span:first-child svg {
        stroke-dashoffset: 0;
      }
      .checkbox-wrapper-46 .inp-cbx:checked + .cbx span:first-child:before {
        transform: scale(3.5);
        opacity: 0;
        transition: all 0.6s ease;
      }
      
      @keyframes wave-46 {
        50% {
          transform: scale(0.9) translate(0px, 5px);
        }
      }
  </style>
</head>

<body>


<section class="twili_wrapper">
        <div class="twili_wrap_box">
            <div class="twili_wrap_box_logo">
                <img src="assets/front/images/logo.png" class="img-fluid">
            </div>
            <div class="twili_wrap_box_text">
                <h6>Company Name</h6>
                <p>A brife description of the campaign.</p>
            </div>
            <div class="twili_wrap_box_input">
                <input type="number" placeholder="Your phone number">
                <button>Join Now</button>
            </div>
            <div class="checkbox-wrapper-46">
              <input type="checkbox" id="cbx-46" class="inp-cbx" />
              <label for="cbx-46" class="cbx"
                ><span>
                  <svg viewBox="0 0 12 10" height="10px" width="12px">
                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg></span
                ><span>I agree to receive marketing messaging from Twilio at the phone number provided above. I understand I will receive 2 messages a month, data rates may apply, reply STOP to opt out</span>
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
                    <a href="">Terms of Service</a>
                </li>
            </ul>
        </div>
</section>

</body>
</html>