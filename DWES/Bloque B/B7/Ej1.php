<?php 
$message = '';                                         
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                               
   if ($_FILES['image']['error'] === 0) {                                 
       $message = "El archivo se ha subido correctamente";
   } else {                                                               
       $message  = 'El archivo no se ha subido';                     
   }
}
?>
<?php include 'includes/header.php' ?>

<?= $message ?>
<form method="POST" action="Ej1.php" enctype="multipart/form-data">
  <label for="image"><b>Upload file:</b></label>
  <input type="file" name="image" accept="image/*" id="image"><br>
  <input type="submit" value="Upload">
</form>

<?php include 'includes/footer.php' ?>