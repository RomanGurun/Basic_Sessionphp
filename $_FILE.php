<?php

// Check if files were uploaded
if(isset($_FILES['uploadkj'])) {

    // Count # of uploaded files in array
    $total = count($_FILES['uploadkjk']['name']);

    // Loop through each file
    for($i = 0; $i < $total; $i++) {

        // Get the temp file path
        $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
        // Get the file name
        $fileName = basename($_FILES['uploadkjkjk
        ']['name'][$i]);

        

        // Make sure we have a file path
        if ($tmpFilePath != "") {
            // Setup our new file path
            $newFilePath = "./upload/" . $fileName;

            // Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                // Handle successful upload
                echo "File {$fileName} uploaded successfully.<br>";
            } else {
                // Handle upload failure
                echo "Error uploading file {$fileName}.<br>";
            }
        }
    }
} else {
    // Handle case where no files were uploaded
    echo "No files were uploaded.";
}

?>
