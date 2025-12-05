<?php

$db = new mysqli('localhost', 'root', '', 'sbadmin2_starterkit');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$query_groups = $db->query("SELECT * FROM `groups`");
$query_users = $db->query("SELECT id, username, password, email, first_name, last_name, company, phone FROM `users`");

$result_groups = $query_groups->fetch_all();
$result_users = $query_users->fetch_all();

?>