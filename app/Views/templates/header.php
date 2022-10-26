<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-brand">
        Biblioteca
        </div>
        <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url("/book_list")?>">Libros </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url("/author_list")?>">Autores</a>
                </li>
        </ul>
    </div>

</nav>

     