<?php include 'views/partials/header.php'; ?>

<main class="container">

  <table class="table table-striped table-hoverable">
    <thead>
      <th>Id</th>
      <th>Title</th>
      <th>Actions</th>
    </thead>
    <tbody>
      <?php foreach ($posts as $post): ?>
        <tr>
          <td><?= $post->id ?></td>
          <td><?= $post->title ?></td>
          <td>
            <div class="btn-group" role="group">
              <a type="button" class="btn btn-info">View</a>
              <a type="button" class="btn btn-warning">Edit</a>
              <a type="button" class="btn btn-danger">Delete</a>
            </div>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>

</main>

<?php include 'views/partials/footer.php'; ?>
