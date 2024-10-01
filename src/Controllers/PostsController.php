<?php

namespace App\Controllers;


use App\Models\Post;

class PostsController
{
  public function index()
  {
    $posts = Post::all();
    view('posts/index', compact('posts'));
  }
  public function create()
  {
    view('posts/create');
  }
  public function store()
  {
    $post = new Post();
    $post->title = $_POST['title'];
    $post->body = $_POST['body'];
    $post->save();
    redirect('/admin/posts');
  }
  public function getById($id)
  {
    $post = Post::getById($id);
    view('posts/view', compact('post'));
  }
  public function edit($id){
    $post = Post::getById($id);
    view('posts/edit', compact('post'));
  }
  public function update($id) {
    $post = Post::getById($id);
    $post->title = $_POST['title'];
    $post->body = $_POST['body'];
    $post->save();
    redirect('/admin/posts');
  }
  public function destroy($id) {
    $post = Post::getById($id);
    $post->delete();
    redirect('/admin/posts');
  }
}
