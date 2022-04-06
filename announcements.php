<?php
    include "create_conn.php";
    $ann = $_GET['announce'];
    $db = $conn;
    $sql = "SELECT * FROM announcement WHERE id='$ann'";
    $exec = $db->query($sql);
    $an = $exec->fetch_assoc();
    $db->close();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <title>Majlis Perwakilan Pelajar USM</title>
</head>

<body>
    <!-- === NAVIGATION BAR === -->
    <?php include "nav.php"; ?>

    <section class="blog">
        <div class="blog-card">
            <h2><?= $an['title'] ?></h2>
            <h4><?= $an['summary']?>, <?= $an['publishDate'] ?></h4>
            <div class="blog-image">
                <img src="admin-dashboard/<?= $an['pic'] ?>" alt="">
            </div>
            <p> <?= $an['content'] ?>
            </p>
        </div>
    </section>


    <!-- === FOOTER === -->

    <?php include "footer.php"; ?>

</body>

</html>