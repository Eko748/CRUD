<?php
 include "connect_db.php";
 $sql = "SELECT * FROM meubel";
 $result = mysqli_query($mysqli, $sql);
 $i=1;
 while($row=mysqli_fetch_assoc($result)){
  echo "<tr>
  	     <td>".$i."</td>
        <td>".$row['meja']."</td>
  	     <td>".$row['kursi']."</td>
  	     <td>".$row['lemari']."</td>
  	     <td>".$row['rak']."</td>
        <td><a href="meubel_form_edit.php?id=".$row['id']."">Edit</a> 
            <a href="meubel_delete.php?id=".$row['id']."">Delete</a></td>
       </tr>";
  $i++;
 }
?>