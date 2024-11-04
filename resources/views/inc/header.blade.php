<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wacky Sports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex" />
	<link rel="icon" href="assets/front/images/favicon.ico">
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
            .legal_top_wrapper {
            padding: 150px 0px 100px 0px;
            background-color: var(--text-color);
        }
        .legal_wrap_top_text{
            text-align: center;
        }
        .legal_wrap_top_text h6 {
            font-size: 65px;
            font-family: var(--Montserrat-SemiBold);
            color: var(--white);
            margin: 0 0 20px 0;
            line-height: 1;
            text-transform: capitalize;
        }
        .legal_wrap_top_text h5 {
            font-size: 24px;
            font-family: var(--Montserrat-Medium);
            color: var(--white);
            text-decoration: underline;
            text-transform: uppercase;
        }
        .legal_wrapper{
            padding: 100px 0px;
        }
        .legal_wrap_text h6{
            font-size: 40px;
            font-family: var(--Montserrat-SemiBold);
            color: var(--black);
            margin: 0 0 30px 0;
            line-height: 1;
            text-transform: capitalize;
        }
        .legal_wrap_text h5{
            font-size: 30px;
            font-family: var(--Montserrat-SemiBold);
            color: var(--black);
            margin: 0 0 20px 0;
            line-height: 1;
            text-transform: capitalize;
        }
         .legal_wrap_text p {
            font-size: 17px;
            font-family: var(--Montserrat-Medium);
            color: var(--black);
            margin: 0 0 20px 0;
        }
        .legal_wrap_text ul {
            padding: 0px 0px 0px 40px;
            margin: 0px 0px 25px 0px;
        }
         .legal_wrap_text ul li {
            font-size: 17px;
            font-family: var(--Montserrat-Medium);
            color: var(--black);
            list-style: disc;
            margin: 0 0 10px 0;
        }
         .legal_wrap_text ul li span{
            font-family: var(--Montserrat-SemiBold);
         }
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

        <header class="header-main-wrapper">
            
        </header>