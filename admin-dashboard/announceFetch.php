<?php


// fetch Data
function fetch_data(){
  include "../create_conn.php";
  $sql="SELECT * FROM announcement";
  $exec = $conn->query($sql);
  
  $conn->close();
  
  return $exec;
}

$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
  $sn=0;
  
    while($rows=$fetchData->fetch_assoc()){

      echo("<div class='d-flex py-4 row'>
      <h6 class='col-9 grid-margin stretch-card preview-subject'>");
      echo("<a href='announce_view.php?view=".$rows['id']."'>");
      echo($rows['title']."</a>");
      echo("</h6>");

      echo("<p class='col-2 grid-margin stretch-card text-muted text-small'>");
      echo($rows['publishDate']);
      echo("</p> </div>");

      echo("<div class='my-n3 row mx-0 my-n4-5'>
      <p class='text-muted overflow-elipses'>");
      echo($rows["summary"]);
      echo("</p> </div>");

      $sn++;
    }
    echo("<tr>
        <td colspan='7'>".$sn." Announcement");
}

?>