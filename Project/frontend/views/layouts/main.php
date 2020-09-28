<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
    <!-- header -->
    <?php require_once 'header_sp.php'; ?>
    <?php echo $this->content; ?>
    <?php
    require_once 'views/layouts/footer.php';
    die();
    ?>
</div>
</body>
</html>