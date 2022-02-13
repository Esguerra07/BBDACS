<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM rightsidenews WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: RightSideAdmin.php?success=Right Side News Data is Deleted");

    }
    else
    {
        header("Location: RightSideAdmin.php?error=Data is not Deleted");


    }
    mysqli_close($conn);