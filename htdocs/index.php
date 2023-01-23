<?php
$username = "JP";

function random_adjective()
{
  $adjectives = [
    "limp",
    "suspicious",
    "pretentious",
    "affordable"
  ];

  $rand_index = array_rand($adjectives);
  return $adjectives[$rand_index];
}

function time_of_day()
{
  $tod = date("a");
  return $tod === "pm" ? "afternoon" : "morning";
}

function image_id()
{
  return 33;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Mooementum</title>
</head>

<body>
  <p><?= "Hi, there $username TM!" ?></p>
  <h1><?= date("g:i") ?></h1>
  <h2>You're looking very <?= random_adjective() ?> this <?= time_of_day() ?>, <?= $username ?></h2>
  <img src="https://picsum.photos/id/<?= image_id() ?>/200" alt="Some thing">
</body>

</html>