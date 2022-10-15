<?php

if (isset($_POST['submit']) && isset($_FILES['file'])) {
    include "connection.php";
   

    $filename = $_FILES['file']['name'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    

    if ($fileError === 0) {
        if ($fileSize > 500000) {
            $em = "Sorry, your file is too large!";
            header("Location: create-report-students.php?error=$em");
        }
        else{
            $files_ext = pathinfo($filename, PATHINFO_EXTENSION);
            $files_ext_lc = strtolower($files_ext);

            $allowed = array("jpg", "jpeg", "png", "docx", "pdf" ,"mp4");
          
            if (in_array($files_ext_lc, $allowed)) {
                $new_img_name =$filename;
                $files_upload_path = 'uploads/.'.$new_img_name ;
                move_uploaded_file($fileTmpname, $files_upload_path);

                $sql = "INSERT INTO report(file,data)VALUES('$new_img_name','file')";
                mysqli_query($con, $sql);
                header("Location: view.php?");
            }
            else{
                $em = "Sorry, You can't upload files of this type";
                header("Location: create-report-students.php?error=$em");
            }
        }
    }
    else{
        $em = "Unknown error occured!";
        header("Location: create-report-students.php?error=$em");
    }
}
else{
    header("Location: create-report-students.php");
}