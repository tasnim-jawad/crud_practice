<?php
    include "../crud_practice/worker.php";

    $worker2 = new Worker();
    
        $id = $_GET['id'];
        $worker2->delete_worker($id);
    

?>