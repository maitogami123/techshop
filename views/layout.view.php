<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?? "Dyanmic Titles" ?></title>
    <link rel="stylesheet" href="/techshop/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/techshop/public/css/index.css">
  </head>
  <body>
    <?php require("$name.view.php"); ?>
  </body>
  <script src="/techshop/public/js/jquery.min.js"></script>
</html>