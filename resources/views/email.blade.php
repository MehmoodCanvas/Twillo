<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
    <style>
        .new_text .btn_1 a{
            font-family:'Noto Sans', Arial,sans-serif;
            font-size:12px;
            text-align: center;
            background:#114490;
            color:#ffffff;
            font-family:'Noto Sans',Arial,sans-serif;
            font-size:16px;
            line-height:18px;
            padding:14px 22px;
            text-align:center;
            border-radius:6px;
            text-decoration: none
        }
        .new_text .btn_2 a{
            font-family:'Noto Sans', Arial,sans-serif;
            font-size:12px;
            text-align: center;
            background :#0f5132;
            color:#ffffff;
            font-family:'Noto Sans',Arial,sans-serif;
            font-size:16px;
            line-height:18px;
            padding:14px 22px;
            text-align:center;
            border-radius:6px;
            text-decoration: none
        }
        .box_tbn_f{
            display: flex;
            align-items: center;
            gap: 20px
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
    {!! $data['body'] !!}
    <!-- Footer -->
    <table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4" style="padding: 20px 0px">
        <tbody>
        <tr>
            <td align="center" valign="top">
                <table width="650" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                    <td class="p30-15" style="padding: 50px 30px;" bgcolor="#ffffff">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" style="padding-bottom: 30px;">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td class="img" width="55" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://x.com/TheWackyReport" target="_blank"><img src="https://thewackyreport.com/images/t8_ico_twitter.jpg" width="45" height="45" border="0" alt="" /></a></td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-footer1 pb10" style="color:#999999; font-family:'Noto Sans', Arial,sans-serif; font-size:16px; line-height:20px; text-align:center; padding-bottom:10px;">Wacky Sports - "The Most Knowledge Has The Edge"</td>
                            </tr>
                            <tr>
                                <td class="text-footer2 pb30" style="color:#999999; font-family:'Noto Sans', Arial,sans-serif; font-size:12px; line-height:26px; text-align:center; padding-bottom:30px;"></td>
                            </tr>
                            <tr>
                                <td class="text-footer3" style="color:#000000; font-family:'Noto Sans', Arial,sans-serif; font-size:12px; line-height:18px; text-align:center;">
                                    <a href="#" target="_blank" class="link3-u" style="color:#000000; text-decoration:underline;">
                                        <span class="link3-u" style="color:#000000; text-decoration:underline;">Unsubscribe </span>
                                    </a> from this mailing list.</td>
                                </tr>
                                <tr>
                                    <td class="new_text box_tbn_f">
                                        <p style="text-align: center" class="btn_1"><a href="{{$data['link1']['url']}}">{{$data['link1']['text']}}</a> </p>
                                        <p style="text-align: center" class="btn_2"><a href="{{$data['link2']['url']}}" >{{$data['link2']['text']}}</a></p>
                                    </td> 
                                </tr>
                        </table>
                    </td>
                    </tr>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
     <!-- END Footer -->
</body>
</html>
