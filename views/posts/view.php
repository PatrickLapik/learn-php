<?php view('partials/header'); ?>

<main class="container">
  <table class="table table-striped table-hoverable">
    <thead>
      <th>Id</th>
      <th>Title</th>
      <th>Content</th>
    </thead>
    <tbody>
      <tr>
        <td><?= $post->id ?></td>
        <td><?= $post->title ?></td>
        <td><?= $post->body ?></td>
      </tr>
    </tbody>
  </table>

  <a class="btn btn-primary" href="/admin/posts">Back</a>

</main>

<?php view('partials/footer'); ?>
