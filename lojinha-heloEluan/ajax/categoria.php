<?php


require_once "../app/models/CategoriaCrud.php";
$crud = new CategoriaCrud();
$categorias = $crud->getCategorias();

echo "<ul>";
foreach ($categorias as $categoria) {
    echo "<li>".$categoria->getNOme()."</li>";
}

echo "</ul>";
?>

