<?php

include "../create_conn.php";

if(isset($_GET['editId'])){
  $id = $_GET['editId'];
  edit_data($id,$conn);
}

if(isset($_GET['id'])){
  $id = $_GET['id'];
  update_data($id,$conn);
}

if(isset($_GET['deleteId'])){
  $id = $_GET['deleteId'];
  delete_data($id,$conn);
}

// edit Data
function edit_data($id,$conn){
  $sql = "SELECT * FROM bantuan WHERE id='$id'";
  $exec = $conn->query($sql);
  $result = $exec->fetch_assoc();
  $conn->close();
}

// Update data
function update_data($id,$conn){
  $title = filterInput($_POST["title"]);
  $description = filterInput($_POST["description"]);
  $dateOpen = filterInput($_POST["dateOpen"]);
  $dateClosed = filterInput($_POST["dateClosed"]);
  $link = filterInput($_POST["link"]);

  $sql = "UPDATE bantuan SET title='$title', desription='$description', dateOpen= '$dateOpen', dateClosed= '$dateClosed', link= '$link' WHERE id='$id'";


  $conn->query($sql);
  $conn->close();
  
}

//Delete Data
function delete_data($id,$conn){
  $sql = "SELECT * FROM bantuan WHERE id=$id";
  $result = $conn->query($sql);
  $rows = $result->fetch_assoc();
  if(file_exists($rows['pic']))
  {
    unlink($rows['pic']);
    echo "Image deleted";
  }
  else
  {
    echo "Cant be deleted";
  }
  $sql = "DELETE FROM bantuan WHERE id='$id'";
  $exec = $conn->query($sql);
  $conn->close();
  header("location:bantuan_main.php");
  exit();
}


function filterInput($value){
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}