<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Login as Authenticatable;
class Login extends Model
{
    use HasFactory, Notifiable;
    public $table = 'table_login';
    protected $Login = ['id','UserName','password'];
}
