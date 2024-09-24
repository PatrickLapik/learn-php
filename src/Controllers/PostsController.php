<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController {
  public function index() {
    $posts = Post::all();
    include 'views/posts/index.php';
  }
}
