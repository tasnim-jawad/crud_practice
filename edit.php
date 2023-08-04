<?php
    include "../crud_practice/worker.php";
    $workers_all = new Worker;

    $need_edit =$workers_all->edit_info($_GET["id"]);
    $single_worker = mysqli_fetch_assoc($need_edit);

    if (isset($_POST["send"])) {
        $workers_all->update_info($_POST);
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit worker info</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="nav.css">

</head>
<body>
    <header>
        <div class="container-lg position-relative">
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <div class="logo">
                        <img src="https://logodownload.org/wp-content/uploads/2015/02/burger-king-logo-0.png" alt="">
                    </div>
                </div>
                <div class="col-lg-10">
                    <nav class="nav_lg">
                        <ul>
                            <li><a href="#test3">home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">service</a></li>
                            <li><a href="#">gallery</a></li>
                            <li><a href="#">team</a></li>
                            <li><a href="#">testimonial</a></li>
                            <li><a href="#">contact</a></li>
                            <li><a href="#">address</a></li>
                        </ul>
                    </nav>
                </div>

                <div id="toggol_container" class="toggol_container">
                    <a href="#">#</a>
                </div>
            </div>
        </div>
        <nav id="nav_absolute" class="nav_absolute">
            <ul>
                <li><a href="#test3">home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">service</a></li>
                <li><a href="#">gallery</a></li>
                <li><a href="#">team</a></li>
                <li><a href="#">testimonial</a></li>
                <li><a href="#">contact</a></li>
                <li><a href="#">address</a></li>
            </ul>
        </nav>
        <div id="nav_overlay" class="nav_overlay"></div>
    </header>
    <div class="edit_container container-fluid">
        <div class="row justify-content-center">
        <div class="col-lg-4">
                    <div class="input_form shadow bg-body-tertiary rounded mt-5">
                        <div class="input_heading bg-danger p-5">
                            <h2 class="display-5 text-uppercase py-2 text-center">worker info</h2>
                        </div>
                        <form class="p-5" action="" method="POST">
                                <input type="hidden" name="id" value="<?= $single_worker['id']; ?>">
                            <div class="form-group">
                                <label class="form-label" for="name" >Name</label>
                                <input class="form-control" name="name" id="name" type="text" value="<?php echo $single_worker["name"];?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email" >Email</label>
                                <input class="form-control" name="email" id="email" type="email" autocomplete="off" value="<?php echo $single_worker["email"];?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password" >Password</label>
                                <input class="form-control" name="password" id="password" type="password" autocomplete="off" value="<?php echo $single_worker["password"];?>">
                            </div>
                            <button type="submit" class="btn btn-warning mt-4" name="send">Update Worker</button>
                        </form>
                    </div>
                    
                </div>
        </div>
    </div>
    <section class="test1"></section>
    <section class="test2"></section>
    <section class="test3" id="test3"></section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="nav.js"></script>

</body>
</html>