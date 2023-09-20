<?php 
  include 'inc/header.php';
?>

<?php 
  $feedback = [
    [
      "id" => 1,
      "name" => "MoMo",
      "email" => "momo@test.io",
      "body" => "MoMo is a King",
    ],
    [
      "id" => 2,
      "name" => "Murray",
      "email" => "murray@test.io",
      "body" => "Murray is a Don",
    ],
    [
      "id" => 3,
      "name" => "Sammy",
      "email" => "sammy@test.io",
      "body" => "Sammy ti fe japa",
    ],
  ];
?>
        <h2> Past Feedback</h2>

        <?php if(empty($feedback)): ?>
          <p class="lead mt3">There is no feedback</p>
        <?php endif; ?>

        <div class="card my-3">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
            molestias animi earum eos dolorem repellat a quibusdam, aperiam vero
            repellendus voluptatibus natus deserunt sed doloribus inventore,
            totam labore maxime perferendis!
          </div>
        </div>
<?php 
  include 'inc/footer.php';
?>