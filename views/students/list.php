<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>
  <a href="?module=student&action=list">List</a>
  <a href="?module=student&action=create">add</a>
  <hr>
  <?
  foreach ($list as $item) {
    echo $item['name'];
  }
  ?>
</body>
</html>
