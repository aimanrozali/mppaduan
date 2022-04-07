<?php
session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = input_filter($_POST["title"]);
    $summary = input_filter($_POST["summary"]);
    $content = $_POST["content"];
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

    
  }

  function addPic() {
    $path = "images/announcement/";
    if($_FILES['image']['name']){
      $filename = rand(0,1000000).$_FILES['image']['name'];

      move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);

      $img = $path.$filename;

      return $img;
    }

    return "Image Missing";
  }
  
?>
