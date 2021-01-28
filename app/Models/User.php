<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;


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
        'password',
        'group_id',
        'balance',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /*
     * Function for getting notifications from user
     */
    public function getNotifications()
    {
        return $this->hasMany("App\Models\Notification", 'user_id');
    }

    public function group()
    {
        return $this->hasOne('App\Models\Group', 'id', 'group_id');
    }




    public function permissions()
    {
        return $this->hasOne('App\Models\Group', 'id', 'group_id')->first()->permissions();
    }

    public function hasPermission($permission)
    {
        if ($this->permissions()->where('name', $permission)->first() || $this->group()->first()->permissions()->where('name', '*')->first()) {
            return true;
        }
        return false;
    }

    public function hasAnyPermission($permissions)
    {
        if (is_array($permissions)) {
            foreach ($permissions as $permission) {

                if ($this->hasPermission($permission)) {
                    return true;
                }
            }
        } else {
            if ($this->hasPermission($permissions)) {
                return true;
            }
        }
        return false;
    }

    public function sendPasswordResetNotification($token)
    {

        $this->notify(new ResetPassword($token));
    }




    public function getAvatar()
    {
        if ($this->image_path) {
            return "/" . $this->image_path;
        } else {
            return 'assets/home/img/avatar_default.jpg';
        }
    }

}
