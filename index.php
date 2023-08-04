<?php
    include "../crud_practice/worker.php";
    $worker1 = new Worker();

    if(isset($_POST["send"])){
        // print_r($_POST);
        $worker1->add_worker($_POST);
        // Redirect to the same page after processing the form submission
        header("Location: ".$_SERVER['PHP_SELF']);
    }

    $workers =$worker1->show_worker();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud practice</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <section id="banner">
        <div class="heading bg-warning">
            <h1 class="text-center text-uppercase py-5 display-1 mb-1">Crud practice</h1>
        </div>
    </section>
    <section id="data">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="input_form shadow mb-5 bg-body-tertiary rounded">
                        <div class="input_heading bg-danger p-5">
                            <h2 class="display-5 text-uppercase py-2 text-center">worker info</h2>
                        </div>
                        <form class="p-5" action="" method="POST">
                            <div class="form-group">
                                <label class="form-label" for="name" >Name</label>
                                <input class="form-control" name="name" id="name" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email" >Email</label>
                                <input class="form-control" name="email" id="email" type="email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password" >Password</label>
                                <input class="form-control" name="password" id="password" type="password" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-warning mt-4" name="send">Add Worker</button>
                        </form>
                    </div>
                    
                </div>
                <div class="col-lg-8">
                    <div class="table_container">
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr class="table-active">
                                    <th>srl#</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; while ($single_worker = mysqli_fetch_assoc($workers)) { ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $single_worker['name'] ?></td>
                                        <td><?php echo $single_worker["email"] ?></td>
                                        <td><?php echo $single_worker["password"] ?></td>
                                        <td>
                                            <a class="btn btn-info" href="edit.php?id=<?php echo $single_worker['id']; ?> ">Edit</a>
                                            <a class="btn btn-danger" href="delete.php?id=<?php echo $single_worker['id']; ?> ">Delete</a>
                                        </td>
                                    </tr> 
                                <?php }; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>