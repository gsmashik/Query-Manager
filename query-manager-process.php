<?php

include("Database.php");
 $sql = $_POST['query'];
 
try{
  $stmt = $dbv->pdo->prepare($sql);
  $stmt->execute();
 $row = $stmt->fetchall();
 
 ?> <thead><?php
  for ($i=0; $i < $stmt->columnCount(); $i++) { 
    $col = $stmt->getColumnMeta($i);
   $columns[]= $col['name'];
  }
 // $col_coun = count($column);
 for ($i=0; $i < count($columns) ; $i++) { ?>
  <th class="text-center" ><?php
  echo $columns[$i];?> </th><?php
  }
 ?>
 </thead><?php
 
 
 $row_count = count($row);
 for ($i=0; $i < $row_count ; $i++) { 
     ?> <tr><?php
     foreach ($row[$i] as $key => $value) {?>
  <td><?php echo $value;?></td> <?php
     }
     ?> </tr><?php
 }

}

  catch(PDOException $e){
echo " PLEASE CHECK YOURE QUERY IT WAS UNCOMPLETE OR PROBLEM PLEAESE CHECK </br> ";
echo  $e->getMessage();
  }

 