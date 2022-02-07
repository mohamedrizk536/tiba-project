<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    use HasFactory;

    protected $table = 'userrs';

protected $fillable = [ 'name', 'email','username','phone','password','confirmation_password','permission_id'];



}
