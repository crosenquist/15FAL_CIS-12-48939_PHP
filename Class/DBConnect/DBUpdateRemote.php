<?php
//Create a connection to the database
//DB, UN, Pass, DB
          mysql_connect('209.129.8.3', '48939', '48939cis12');
          mysql_select_db('48939');
          //mysql_connect('localhost', 'root', '');
          //mysql_select_db('test');
//Query the database
        $query="UPDATE `cr2490090_entity_movie` 
                SET duration=duration+1.30
                WHERE release_date >'2010-02-08' 
                AND studio like '%Amblin%'";
        //echo $query."<br/>";
        $rs = mysql_query($query);
?>