<?php
// Create a folder for uploads if it doesn't exist
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Optional: Limit file size (e.g., 5MB)
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Optional: Allow only certain file types
$allowed_types = ["jpg", "png", "jpeg", "gif", "pdf"];
if (!in_array($fileType, $allowed_types)) {
    echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is still 1
if ($uploadOk == 0) {
    echo "<br>Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
