<?php

if (isset($_POST['submit'])) {
  $filename = basename($_FILES['file']['name']);
  $tmp_file = $_FILES['file']['tmp_name'];
  $basepath = dirname(__FILE__);

  if (!is_dir("$basepath/files")) {
    mkdir("$basepath/files");
  }

  if (move_uploaded_file($_FILES['file']['tmp_name'], "$basepath/files/$filename")) {
    echo "<script>alert('file berhasil di upload')</script>";
  } else {
    echo "<script>alert('file gagal di upload')</script>";
  }
}

?>

<html>

<head>
  <title>PHP FILE UPLOAD</title>
</head>

<body>
  <form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">upload</button>
  </form>
</body>

</html>