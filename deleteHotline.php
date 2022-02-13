<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM hotline WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: HotlineAdmin.php?success=Hotline Data is Deleted");

    }
    else
    {
        header("Location: HotlineAdmin.php?error=Data is not Deleted");


    }
    mysqli_close($conn);