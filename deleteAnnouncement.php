<?php include_once 'config/mydb.php';

 $id = $_POST['user_id'];
    
    $squery ="DELETE FROM announcement WHERE id='$id' ";
    $squery_run = mysqli_query($conn,$squery);

    if($squery_run)
    {
        header("Location: AnnouncementAdmin.php?success=Announcement Data is Deleted");

    }
    else
    {
        header("Location: AnnouncementAdmin.php?error=Data is not Deleted");


    }
    mysqli_close($conn);