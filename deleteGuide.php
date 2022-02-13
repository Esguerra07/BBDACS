<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM guides WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: GuideAdmin.php?success=Guide Data is Deleted");

    }
    else
    {
        header("Location: GuideAdmin.php?error=Data is not Deleted");


    }
    mysqli_close($conn);