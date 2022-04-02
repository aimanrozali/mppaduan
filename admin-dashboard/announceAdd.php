<?php
session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST["title"]) && isset($_POST["summary"]) && isset($_POST["content"]))
    {

      $valid_extensions = array('jpeg', 'jpg', 'png'); // Accepted file ext
    $path = 'images/announcement/'; // Upload dir

    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['name'];

    // get file extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    // Handle if happen to upload same file
    $final_image = rand(1000,1000000).$img;

    // Check valid format
    if(in_array($ext, $valid_extensions))
    {
      $path = $path.strtolower($final_image);

      if(move_uploaded_file($tmp,$path))
      {
        echo "<img src='$path' />";
      }
    }
    else
    {
      echo 'invalid';
    }

    $title = input_filter($_POST["title"]);
    $summary = input_filter($_POST["summary"]);
    $content = input_filter($_POST["content"]);
    $datePublish = date("Y/m/d");
    $pic = $path;

    submitData($title,$summary,$content,$datePublish,$pic);
    }
    else
    {
      echo('<script>alert("Data is empty!");</script>');
    }

    
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
    $valid_extensions = array('jpeg', 'jpg', 'png'); // Accepted file ext
    $path = '../images/announcement/'; // Upload dir

    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['name'];

    // get file extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    // Handle if happen to upload same file
    $final_image = rand(1000,1000000).$img;

    // Check valid format
    if(in_array($ext, $valid_extensions))
    {
      $path = $path.strtolower($final_image);

      if(move_uploaded_file($tmp,$path))
      {
        return $path;
      }
    }
    else
    {
      return 'invalid';
    }
  }
  
?>
