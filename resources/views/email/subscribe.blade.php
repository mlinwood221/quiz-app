@extends('email.app')

@section('content')
<table class="inner">
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding: 18px;padding-bottom:25px;padding-top:25px;">
                        Hello, {{ $email }} subscribed to the site.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
</table>
@endsection
