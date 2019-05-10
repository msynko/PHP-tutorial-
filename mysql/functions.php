
<?php include "db.php"; ?>

<?php

function createRows(){
    if(isset($_POST['submit'])){

        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
   

        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query failed' . mysqli_error());
        } else {
            echo "Record Created";
        }
    }
}

function readRows(){

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query failed' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
       
}


function showData(){
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query failed' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value=''>$id</option>";
    }
}



function updateTable() {
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username' ";
        $query .= "username = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

            if(!$result){
                die("Query failed" . mysqli_error($connection));
             } else {
                echo "Record Updated";
            }

    }
}

function deleteRows() {
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM `users` ";
        $query .= "WHERE `id` = $id ";

        $result = mysqli_query($connection, $query);

            if(!$result){
                die("Query failed" . mysqli_error($connection));
            } else {
                echo "Record Deleted";
            }
    }
}

?>

