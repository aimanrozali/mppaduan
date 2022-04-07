<?php

include "../create_conn.php";

if(isset($_POST['update'])){
  $id = $_POST['id'];
  update_data($id,$conn);
  exit();
}

if(isset($_GET['deleteId'])){
  $id = $_GET['deleteId'];
  delete_data($id,$conn);
  exit();
}



// Update data
function update_data($id,$conn){
  //$title = filterInput($_POST["title"]);
  $summary = filterInput($_POST["summary"]);
  $content = $_POST["content"];

  $sql = "UPDATE announcement SET summary='$summary', content= '$content' WHERE id='$id'";


  $conn->query($sql);
  $conn->close();

  header("location:announce_main.php");
  exit();
  
}

//Delete Data
function delete_data($id,$conn){
  $sql = "SELECT * FROM announcement WHERE id=$id";
  $result = $conn->query($sql);
  $rows = $result->fetch_assoc();
  if(file_exists($rows['pic']))
  {
    unlink($rows['pic']);
  }
  else
  {
    echo "Cant be deleted";
  }
  $sql = "DELETE FROM announcement WHERE id='$id'";
  $exec = $conn->query($sql);
  $conn->close();
  header("location:announce_main.php");
  exit();
}


function filterInput($value){
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}