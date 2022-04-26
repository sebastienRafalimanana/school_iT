<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/lib/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/css/app.css">
    <title> <?= $tittle ?></title>
</head>
<body>
    <!-- core de l'application  -->
    <div class="app">
        <header></header>
        <div class="app_content">
            <div class="app_nav">
                <?php require "../app/views/nav_desktop.php";  ?>
            </div >
            <main class="py-4">
                <?=$main ?>
                <div class="main_deco"></div>
            </main>
        </div>
    </div>
</body>
</html>