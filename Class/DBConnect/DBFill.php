<?php
//Create a connection to the database
//DB, UN, Pass, DB
          //mysql_connect('209.129.8.3', '48939', '48939cis12');
          //mysql_select_db('48939');
          mysql_connect('localhost', 'root', '');
          mysql_select_db('test');
//Query the database
        $query="INSERT INTO `cr2490090_entity_movie`
                       (`name`,`studio`,`release_date`,
                        `rating_id`,`duration`) VALUES ";
        $records=1000;
        for($i=1;$i<=$records;$i++){
          $query.="('Movie".$i."',";
          $query.=" 'Studio".rand(1,50)."',";
          $query.="'".rand(1950,2010)."-".rand(1,12)."-".rand(1,28)."',";
          $query.=rand(1,4).",";
          $query.=(rand(1,2)+rand(0,99)/100.0).")";
          if($i!=$records)$query.=",";
        }
        echo $query."<br/>";
        $rs = mysql_query($query);
?>