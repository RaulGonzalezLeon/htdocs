<?php 
$message = '';                                         
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                               
   if ($_FILES['image']['error'] === 0) {                                 
       $message = "El archivo se ha subido correctamente";
   } else {                                                               
       $message  = 'The file could not be uploaded.';                     
   }
}
?>
<?php include 'includes/header.php' ?>

<?= $message ?>
<form method="POST" action="ej1.php" enctype="multipart/form-data">
  <label for="image"><b>Upload file:</b></label>
  <input type="file" name="image" accept="image/*" id="image"><br>
  <input type="submit" value="Upload">
</form>

<?php include 'includes/footer.php' ?>