

<?php echo($header)?>

<?php print_r($libros)?>
    <div class="container">
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Edicion</th>
                    <th>Autor</th>
                    <th>Fecha de publicacion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($libros as $libro): ?>
                <tr>
                    <td><? echo ($libro['book_id']); ?> </td>
                    <td><? echo($libro['book_name']); ?> </td>
                    <td><? echo($libro['edition']); ?> </td>
                    <td><? echo($libro['author_id']); ?> </td>
                    <td><? echo($libro['publication_date']); ?></td>
                    <td>Editar/Borrar</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

 <?php echo($footer)?>