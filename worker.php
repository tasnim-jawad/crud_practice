<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "crud_practice");

class Worker{

    public $connection;
    
    function __construct(){

        $this->connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

    }

    public function add_worker($worker_info){
        
        $name = $worker_info['name'];
        $email = $worker_info['email'];
        $password = $worker_info['password'];

        $query = "INSERT INTO `worker_info` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')";
        $insert_succes = mysqli_query($this->connection,$query);

        if ($insert_succes) {
            // print_r($worker_info);
            // header("location: index.php");
        }

        $this->show_worker();
    }

    public function show_worker(){
        $query = "SELECT * FROM `worker_info`";
        $show_succes = mysqli_query($this->connection,$query);
        if ($show_succes) {
            // echo "ok go ahead";
            // header("location: index.php");
        }
        return $show_succes;
    }

    public function delete_worker($id){
        $query = "DELETE FROM `worker_info` WHERE `id` = $id ";
        $delete_succes = mysqli_query($this->connection,$query);

        if ($delete_succes) {
            // Delete successful, redirect to the page where you want to show the remaining records
            header("Location: index.php");
            exit;
        } else {
            // Handle the delete error if necessary
            echo "Error: " . mysqli_error($connection);
        }
    }
    public function edit_info($id){
        $query = "SELECT * FROM `worker_info` WHERE `id` = $id ";
        $edit_succes = mysqli_query($this->connection,$query);

        // if ($edit_succes) {

        // } 
        return $edit_succes;
    }

    public function update_info($data){
        // $query = "SELECT * FROM `worker_info` WHERE `id` = $id ";
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $query = "UPDATE `worker_info` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `id` = $id";
        $update_succes = mysqli_query($this->connection,$query);

        if ($update_succes) {
            // echo "Update successful!";
            header("Location: index.php");
        } else {
            echo "Update failed: " . mysqli_error($this->connection);
        }
    }

}



?>