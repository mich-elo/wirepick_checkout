<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
</head>

  <body>
    <?php include_once './src/components/general/layout.php'; ?>
    <?php include_once './src/components/navigation/navigation_bar.php'; ?>
    
    <?php LayoutContainerOpen() ?>
      <?php
        include_once './src/components/payments/payment_methods.php';
      ?>
    
    <?php LayoutContainerClose() ?>


  </body>
</html>