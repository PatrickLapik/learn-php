<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\User;

class PublicController
{
  public function index()
  {
    $posts = Post::all();
    include 'views/index.php';
  }

  public function us()
  {
    $posts = Post::all();
    include 'views/us.php';
  }

  public function form()
  {
    // $fname = '';
    // if(isset($_GET['fname'])){
    //     $fname = $_GET['fname'];
    // }
    // $fname = isset($_GET['fname']) ? $_GET['fname'] : '';
    dump($_GET, $_POST);
    $fname = $_GET['fname'] ?? $_POST['fname'] ?? '';
    include 'views/form.php';
  }
  public function answer()
  {
    dump($_GET, $_POST, $_REQUEST);
  }
}
