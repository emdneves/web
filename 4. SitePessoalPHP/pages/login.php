<main>
    <h1>LOGIN</h1>
    <form action="db/login.php" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php 
        if(isset($_GET['r'])){
            if($_GET['r'] == 'erro'){
                /*echo "
                <div class=\"alert alert-danger\" role=\"alert\">
                    Login Errado
                </div>
                ";*/
                ?>
                <div class="alert alert-danger" role="alert">
                    Login Errado
                </div>
                <?php
            }
        }
    ?>

</main>