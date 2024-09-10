<?php

namespace App\Controllers;

class PublicController
{
  public function index()
  {
    include 'views/index.php';
  }
  public function us()
  {
    include 'views/us.php';
  }
}
