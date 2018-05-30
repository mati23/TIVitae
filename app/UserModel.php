<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $fillable =['users_name','users_city','users_phone','users_formation','users_phone','users_email', 'users_password'];
    protected $guarded = ['users_id','created_at','updated_at'];
    protected $table = 'tb_users'
}
