<!DOCTYPE html>
<html>
<head>
    <title>Upload a File</title>
</head>
<body>

<h2>Upload a File</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Select file to upload:</label><br><br>
    <input type="file" name="fileToUpload" required><br><br>
    <input type="submit" value="Upload File">
</form>

</body>
</html>
