<!-- REGISTRATION FORM ON INDEX.PHP
<?php 
    include_once './db.inc.php';
        if (isset($_POST['submit'])) {
            // register
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $address = $_POST['address'];
                  
            $sql = "INSERT INTO users (firstname, lastname, email, pwd, address) VALUES ('$firstname','$lastname','$email','$pwd','$address')";
    
    
            if (mysqli_query($conn, $sql)) {
                header("location: index.php?success");
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
?>

<!-- DASHBOARD FOR ADMINISTRATION USE -->
<?php
        if (isset($_POST['update'])) {
            $title = $_POST['title'];
            $subtitle = $_POST['subtitle'];
            $article = $_POST['article'];
            $links = $_POST['links'];

            $sql = "INSERT INTO job_posts (title, subtitle, article, links) VALUES('$title','$subtitle','$article','$links')";

            if (mysqli_query($conn, $sql)) {
                header("location: dashboard.php?success");
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            mysqli_close($conn);      
        }
?>