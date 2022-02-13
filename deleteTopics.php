<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM topics WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: TopicsAdmin.php?success=Topics Data is Deleted");

    }
    else
    {
        header("Location: TopicsAdmin.php?error=Data is not Deleted");


    }
    mysqli_close($conn);