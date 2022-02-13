<?php include_once 'config/mydb.php';

$user_id = $_POST['user_id'];

$sql = "DELETE FROM news_update WHERE id = $user_id";
$result = mysqli_query($conn,$sql);

if($result)
    {
        header("Location: NewsUpdateAdmin.php?success=NewsUpdate Data is Deleted");

    }
    else
    {
        header("Location: NewsUpdateAdmin.php?error=Data is not Deleted");


    }
mysqli_close($conn);