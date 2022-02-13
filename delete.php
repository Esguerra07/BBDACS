<?php include_once 'config/db.php';

$user_id = $_POST['user_id'];

$sql = "DELETE FROM users WHERE id = $user_id";
$result = mysqli_query($conn,$sql);

if($result)
    {
        header("Location: UserAdmin.php?success=User Data is Deleted");

    }
    else
    {
        header("Location: UserAdmin.php?error=Data is not Deleted");


    }

mysqli_close($conn);