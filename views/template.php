<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site mvc</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/style.css">
  </head>
  <body>
    Template
    <hr>
    <?php $this->loadViewInTemplate($viewName, $viewData) ?>
  </body>
</html>
