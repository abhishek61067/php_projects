<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Upload Files</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
   <p>File upload</p>
   <form action="upload.php" enctype="multipart/form-data" method="POST">
   <p>Select File</p>
   <input type="file" name="fileToUpload" id="fileToUpload">
   <br><br><br>
   <input type="submit" name="upload" value="upload">
   </form>
   </body>
</html>