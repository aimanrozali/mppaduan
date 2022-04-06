<?php
    include "create_conn.php";
    $qr = "SELECT * FROM bantuan";
    $db = $conn;
    $res = $db->query($qr);
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

    <section class="bantuan">
        <?php while($fetch = $res->fetch_assoc()){ ?>
        <div class="card">
            <div class="card-image">
                <img src="admin-dashboard/<?= $fetch['pic'] ?>" alt="">
            </div>

            <div class="card-content">
                <div class="blog-details">
                    <div class="icon-text">
                        <!-- <span class="icon"><i class="fa-solid fa-share-nodes"></i></span> -->
                        <span class="text"><?= $fetch['datePublish'] ?></span>
                    </div>

                </div>

                <h2 class="blog-title"><?= $fetch['title'] ?></h2>
                <p class="excerpt"><?= $fetch['description'] ?></p>

                <div class="blog-cta">
                    <a href="<?= $fetch['link'] ?>" class="button">Link Form</a>
                    <button class="share-button"><i class="fa-solid fa-share-nodes"></i></button>
                </div>
            </div>
        </div>

        <?php }
        $db->close(); ?>

    </section>

    <!-- === FOOTER === -->

    <?php include "footer.php"; ?>



</body>

</html>