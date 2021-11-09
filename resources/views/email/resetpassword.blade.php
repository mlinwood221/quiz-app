@extends('email.app')

@section('content')
<table class="inner">
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding: 18px;padding-bottom:0;padding-top:25px;">
                        Hello, 
                        <br>
                        <br>
                        You recently requested to reset your password. Just click on the button below to define a new one:
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ url('password/reset/' . $token) }}" style="background-color:#8364E2;color:#FFFFFF;padding: 14px 0px;font-size:14px;font-weight: bold;text-decoration: none;border-radius: 5px;width:187px;margin-left: auto;margin-right:auto;display:block;margin-top:25px;margin-bottom:25px;text-align:center;max-width:177px;">Change password</a>	
                    </td>
                </tr>
                <tr>
                    <td style="padding: 18px;padding-bottom:30px;padding-top:10px;">
                        If the above button doesn't work, copy the following URL address, then paste it into a new window in your browser: 
                        <br>
                        <br>
                        <a href="{{ url('password/reset/' . $token) }}">{{ url('password/reset/' . $token) }}</a>.
                        <br>	
                        <br>	
                        If you have not requested to reset your password, you can ignore this email.
                    
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
</table>
@endsection
