<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM home WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: HomeAdmin.php?success=Recent Post Data is Deleted");

    }
    else
    {
        header("Location: HomeAdmin.php?error=Data is not Deleted");


    }
    mysqli_close($conn);