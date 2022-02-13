<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM about WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: AboutAdmin.php?success=About Us Data is Deleted");

    }
    else
    {
        header("Location: AboutAdmin.php?error=About Us Data is not Deleted");


    }
    mysqli_close($conn);