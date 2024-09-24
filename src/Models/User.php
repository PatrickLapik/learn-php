<?php
namespace App\Models;

class User extends Model{
  public static $table = 'user';
  public $id;
  public $email;
  public $password;
}
