<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/app.css">
    <script src="../public/assets/lib/jquery.js"></script>
    <script src="../public/assets/js/sweetalert.min.js"></script>
    <title> <?= $tittle ?></title>
</head>
<body>
    <!-- core de l'application  -->
    <div class="app">
        <div class="app_content">
           <!--  navigation menu -->
            <?php require "../app/views/nav_desktop.php";  ?> 
           <!-- fin navigation menu -->
            <main class="py-4">
                <?=$main ?>
                <div class="main_deco"></div>
            </main>
        </div>
    </div>
   </body>

</html>
