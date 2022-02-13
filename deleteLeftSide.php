<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM leftsidenews WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: LeftSideAdmin.php?success=Left Side News Data is Deleted");

    }
    else
    {
        header("Location: LeftSideAdmin.php?error=Data is not Deleted");


    }
    mysqli_close($conn);