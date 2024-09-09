<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding: 20px 0;">
        <tr>
            <td align="center">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                    <tr>
                        <td align="center" style="padding-bottom: 30px;">
                            <img src="{{asset('assets/front/images/logo.png')}}" alt="" style="padding: 10px; background-color: #000000; border-radius: 10px; width: 100px;">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding-bottom: 15px;">
                            <h1 style="font-size: 24px; color: #000000; text-transform: capitalize; line-height: 1.2; margin: 0;">{{ $data['title'] }}</h1>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding-bottom: 20px;">
                            <p style="font-size: 14px; color: #000000; opacity: 0.8; margin: 0;">{{ $data['body'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding: 10px;">
                                        <a href="{{ $data['link2']['url'] }}" style="display: inline-block; width: 180px; height: 55px; line-height: 55px; background-color: red; color: #ffffff; font-size: 18px; text-align: center; text-decoration: none; border-radius: 6px;">{{ $data['link2']['text'] }}</a>
                                    </td>
                                    <td align="center" style="padding: 10px;">
                                        <a href="{{ $data['link1']['url'] }}" style="display: inline-block; width: 180px; height: 55px; line-height: 55px; background-color: green; color: #ffffff; font-size: 18px; text-align: center; text-decoration: none; border-radius: 6px;">{{ $data['link1']['text'] }}</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
