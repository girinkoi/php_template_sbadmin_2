<?php
include __DIR__ . "../inc/connect.php";
class get {
    function get_all_groups(){
        global $db;

        if (isset( $_GET['id'])) {
            $group_id = $_GET['id'];
            $query = $db->query("SELECT * FROM `groups` WHERE id = $group_id");
            return $query->fetch_all(MYSQLI_ASSOC);
        }else{
            $query = $db->query("SELECT * FROM `groups`");
             return $query->fetch_all(MYSQLI_ASSOC);
        }
        

    }

    function get_all_users(){
        global $db;
        $query = $db->query("SELECT * FROM `users`");
        return $query->fetch_all(MYSQLI_ASSOC);
    }
}

?>