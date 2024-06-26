<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // --------------------------------------
    // --------------------------------------




    public function role()
    {

        return $this->belongsTo(Role::class, 'roleId');

    } // end function






    // --------------------------------------
    // --------------------------------------






    public function checkPermission($name)
    {

        // 1: getPermissions
        $rolePermissions = $this->role()->permissions;

        // ?->permissions?->pluck('permissionId')?->toArray() ?? [];
        // :: checkFound
        $isFound = Permission::whereIn('id', $rolePermissions)->count();


        return $isFound > 0 ? true : false;


    } // end if





} // end model
