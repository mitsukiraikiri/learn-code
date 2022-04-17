<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$response = json_decode(curl_exec($curl), true);

curl_close($curl);
?>

<html>

<head>
  <title>PHP CURL</title>
</head>

<body>
  <h1>List Post</h1>
  <ul>
    <?php foreach ($response as $post) : ?>
      <li><?= $post["title"] ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>