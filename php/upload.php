<?php
    include 'connection.php';
     
    $statusMsg = '';
    // File upload path
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
     
    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf','docx');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = $conn->query("INSERT INTO `files`(`files`) VALUES ('".$fileName."')");  //INSERT INTO `files`(`id`, `files`) VALUES ('[value-1]','[value-2]')
                if($insert){
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    // echo '<script>alert("Flie Uploaded")</scrpit>';
                    // header("../homepage.php");
                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
     
    // Display status message
    echo $statusMsg;
?>