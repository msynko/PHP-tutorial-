<!-- DELETE  -->

<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php deleteRows(); ?>


<?php include "includes/header.php" ?>
    <div class="container">
        <div class="col-m-6">
          <h1>Delete</h1>  
            <form action="login_delete.php" method="post">
                <div class="form-group">
                    <label for="username"> Username</label>
                    <input type="username" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <?php
                            showData();
                        ?>
                    </select>
                </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Update">
                </form>
            </div>
        </div>
<?php include "includes/footer.php" ?>