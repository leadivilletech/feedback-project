<?php include 'inc/header.php' ?>

<?php
$sql_string = 'SELECT * FROM feedback';
$data = mysqli_query($connect, $sql_string);
$reviews = mysqli_fetch_all($data, MYSQLI_ASSOC);
// print_r($reviews);



?>
<article class="container">
  <header class="header ">
    <p style="color: brown" class="title is-underlined mt-6 has-text-centered">Past Reviews</p>
  </header>

  <?php foreach ($reviews as $review) : ?>

    <div class="card m-6 p-4">
      <div class="card-body mb-3 p-3">
        <p class="card-item " style="color:black";><?= $review['message']; ?></p>
      </div>
      <i class="card-item ml-3">
        <?= '<p style="color:brown";> created by ' . $review['name'], ' on ' . $review['date'];
        '</p>' ?>
      </i>
    </div>
  <?php endforeach ?>
</article>