<?php
session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = input_filter($_POST["title"]);
    $description = input_filter($_POST["description"]);
    $dateOpen = input_filter($_POST["dateOpen"]);
    $dateClosed = input_filter($_POST["dateClosed"]);
    $link = input_filter($_POST["link"]);
    $datePublish = date("Y/m/d");
    $pic = addPic();

    submitData($title,$description,$dateOpen,$dateClosed,$link,$datePublish,$pic);
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

  function submitData($title,$description,$dateOpen,$dateClosed,$link,$datePublish,$pic) {
    include("../create_conn.php");
    $sql = "INSERT INTO bantuan(title, description, dateOpen, dateClosed, link, datePublish, pic) VALUES ('$title','$description','$dateOpen','$dateClosed','$link','$datePublish','$pic')";

    $conn->query($sql);
    $conn->close();

    header("location:bantuan_main.php");
    exit();
  }

  function addPic() {
    $path = "images/bantuan/";
    if($_FILES['image']['name']){
      $filename = rand(0,1000000).$_FILES['image']['name'];

      move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);

      $img = $path.$filename;

      return $img;
    }

    return "Image Missing";
  }
  
?>
