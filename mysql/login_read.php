<!-- READ -->

<?php include "db.php"; 
 include "function.php"; ?>

<?php include "includes/header.php" ?>
 
            <div class="container">

                <div class="col-m-6">

                    <?php 
    
                         while($row = mysqli_fetch_assoc($result)){

                    ?>
                <pre>

                    <?php
                        print_r($row);
                        ?>

                </pre>
                     <?php
                        }
                        ?>
                    </div>
                </div>
<?php include "includes/footer.php" ?>