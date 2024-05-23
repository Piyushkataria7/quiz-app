
<?php
session_start();
    include('db_connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        $password = $_POST['password'];

        $sql = "SELECT * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: quiz.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>
