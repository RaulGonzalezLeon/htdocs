<?php 
$message = '';      
$moved = false;                                                      
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                               
   if ($_FILES['image']['error'] === 0) {                                 
       $temp = $_FILES['image']['tmp_name'];
       $path = './var/www/' . $_FILES['image']['name'];

       $moved = move_uploaded_file($temp, $path);
   }
   
   if($moved === true) {
    $message = '<img src="' . $path .'">';
   } else {
    $message = "El archivo no se ha guardado";
   }
}
?>
<?php include 'includes/header.php' ?>

<?= $message ?>
<form method="POST" action="Ej2.php" enctype="multipart/form-data">
  <label for="image"><b>Upload file:</b></label>
  <input type="file" name="image" accept="image/*" id="image"><br>
  <input type="submit" value="Upload">
</form>

<?php include 'includes/footer.php' ?>