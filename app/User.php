<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name',
        'email',
        'email_verified_at',
        'who',
        'unid',
        'first_name',
        'last_name',
        'phone',
        'passport',
        'passport',
        'username',
        'address',
        'position',
        'active',
        'password',
        'role_id',
        'seen_last',
        'countdown_pass',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setName(){
        return $this->title . ' ' . ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public function setPhoto(){
        return url(is_file($this->passport)? url($this->passport) : 'images/user.png');
    }

    public function seen(){
        if(!empty($this->seen_last)){
            return Carbon::createFromTimeStamp($this->seen_last)->diffForHumans();
        }else{
            return 'not available';
        }

    }

    public function pos(){
        $pos = 'Unknown';
        if(!empty($this->position)){
            $pos=$this->position;
        }else{
            switch ($this->who){
                case 1:
                    $pos='desk-admin';
                    break;
                case 2:
                    $pos='Admin';
                    break;
                case 3:
                    $pos='Senior Admin';
                    break;
                case 4:
                    $pos='Super Admin';
                    break;
                default:
                    $pos='Unknown';
                    break;
            }
        }
        return $pos;
    }
}
