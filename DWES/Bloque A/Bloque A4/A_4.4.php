<?php
class Library{
    public array $book;
    public string $libraryName;

    public function __construct(array $book, string $libraryName){
        $this->book = $book;
        $this->libraryName = $libraryName;
    }

    public function addBooks(string $book) {
        $this->book[] = $book; 
    }
    
    

    function removeBooks(array $title){
        foreach($this->books as $title){
            if($title === $books ){
                unset($title);
                $this->books = array_values($this->books);
                return true;
            }
        }
        return false;
    }

    public function getBooks()
    {
        return $this->book;
    }

}



$library = new Library($books = ['El principito', 'Invisible', "La celestina"], "La Casa del Libro");


$library->addBooks("1984");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_4.4 RaulGL</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
<h2>Lista de Libros en "<?= $library->libraryName ?>"</h2>

<!-- Mostrar todos los libros de la biblioteca -->
<ul>
    <?php foreach ($library->getBooks() as $book): ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>

<?php include 'includes/footer.php'; ?>
</body>
</html>


