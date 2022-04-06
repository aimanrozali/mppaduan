<?php
    include "create_conn.php";
    $db = $conn;
    $sql = "SELECT * FROM announcement";
    $exec = $db->query($sql);
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
    <?php include "nav.php"; ?>s

    <!-- === HERO SECTION === -->
    <section class="hero-section">
        <div class="hero">

        </div>
    </section>


    <!-- === SERVICE SECTION=== -->

    <section class="service">
        <h1>Our Services</h1>

        <div class="row">
            <div class="col" onclick="location.href='direktori.html';">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-people-group"></i>
                </div>
                <h3>Directory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a corrupti dolor sunt voluptas
                    reiciendis fuga vero nesciunt voluptatum esse adipisci at, asperiores eum harum maiores alias
                    eligendi quasi explicabo.</p>
            </div>

            <div class="col" onclick="location.href='aduan.html';">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-flag"></i>
                </div>
                <h3>Complaint</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a corrupti dolor sunt voluptas
                    reiciendis fuga vero nesciunt voluptatum esse adipisci at, asperiores eum harum maiores alias
                    eligendi quasi explicabo.</p>
            </div>


            <div class="col" onclick="location.href='bantuan.html';">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-hand-holding-hand"></i>
                </div>
                <h3>Bantuan</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a corrupti dolor sunt voluptas
                    reiciendis fuga vero nesciunt voluptatum esse adipisci at, asperiores eum harum maiores alias
                    eligendi quasi explicabo.</p>
            </div>

        </div>
    </section>


    <section class="announcements">
        <h3>Latest Announcements</h3>
        <?php while($fetch=$exec->fetch_assoc()){ ?>
        <div class="announce-container">
            <div class="announce-box">
                <div class="announce-img">
                    <img src="admin-dashboard/<?= $fetch['pic'] ?>" alt="">
                </div>

                <div class="announce-text">
                    <span><?= $fetch['publishDate'] ?></span>
                    <a href="" class="announce-title"><?= $fetch['title'] ?></a>
                    <p><?= $fetch['summary'] ?></p>
                    <a href="<?= "announcements.php?announce=".$fetch['id']?>">Read More</a>
                </div>

            </div>
            <?php } ?>

        </div>



    </section>


    <!-- === FOOTER === -->

    <?php include "footer.php"; ?>



</body>

</html>