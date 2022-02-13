<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM hazard WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: HazardAdmin.php?success=Hazard Data is Deleted");

    }
    else
    {
        header("Location: HazardAdmin.php?error=Data is not Deleted");


    }
    mysqli_close($conn);