<?php
session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = input_filter($_POST["title"]);
    $summary = input_filter($_POST["summary"]);
    $content = input_filter($_POST["content"]);
    $datePublish = date("Y/m/d");
    $pic = addPic();

    submitData($title,$summary,$content,$datePublish,$pic);
    }
    else
    {
      echo('<script>alert("Data is empty!");</script>');
    }


  function input_filter($d) {
    $d = trim($d);
    $d = stripslashes($d);
    $d = htmlspecialchars($d);
    return $d;
  }

  function submitData($title,$summary,$content,$datePublish,$pic) {
    include("../create_conn.php");
    $sql = "INSERT INTO announcement(publishDate, title, summary, content, pic) VALUES ('$datePublish','$title','$summary','$content','$pic')";

    $conn->query($sql);
    $conn->close();

    echo "Announcement : ".$title." added successfully!!";
    echo "afsa".$pic;
  }

  function addPic() {
    $path = "images/announcement/";
    if($_FILES['image']['name']){
      move_uploaded_file($_FILES['image']['tmp_name'], $path.$_FILES['image']['name']);

      $img = $path.$_FILES['image']['name'];

      return $img;
    }

    return "Image Missing";
  }
  
?>

