<?php
require_once (dirname(__FILE__)).'/../C:\xampp\htdocs\Webtech_class\database_connection_test.php';

class Post extends Database{
    //create
    public function create($title, $body){
        $query = "INSERT INTO `posts`(`title`, `body`) VALUES ('$title','$body')";

        return $this->run($query);
    }
    //read
    //update
    //delete

}