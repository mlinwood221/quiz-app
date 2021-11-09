<?php

namespace App\Models;

use Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function sendPasswordResetNotification($token)
    {
        Mail::send('email.resetpassword', ['token' => $token], function ($m) {
            $m->from(env('MAIL_FROM'), env('MAIL_NAME'));
            $m->to(request()->email, '')->subject('Reset Password');
        });

        if(count(Mail::failures()) > 0) {
            return 0;
        }

        return 1;
    }

    public function badge()
    {
        return $this->hasOne(Badge::class, 'user_id', 'id');
    }
}
