<?php
class userController
{
    public function user_login(){
        $db = new database();
        $con = $db->initDatabase();
        $statement = $con->prepare("select * from user_tbl");
        $statement->execute();
        $row = $statement->fetchAll();
        foreach ($row as $data) {
            echo $data['user']."|".$data['pass']."<br>";
        }
    }

}
