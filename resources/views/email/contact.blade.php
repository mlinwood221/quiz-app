@extends('email.app')

@section('content')
<table class="inner">
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding: 18px;padding-bottom:25px;padding-top:25px;">
                        Request from the site<br /><br/> 
                        {{ $email }} <br /><br />
                        {{ nl2br($content) }} <br />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
</table>
@endsection
