

<?php echo($header)?>

<a href="<?php echo(base_url('book_new'))?>"> Crear Nuevo Libro</a>


   
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Edicion</th>
                    <th>Fecha de publicacion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $keys): ?>
                <tr>
                    <td><?php echo $keys->Id?> </td>
                    <td><?php echo $keys->book_name ?> </td>
                    <td><?php echo $keys->edition  ?> </td>
                    <td><?php echo $keys->publication_date ?></td>
                    <td>
                        Editar/ <a href="<?php echo Base_url("delete/").$keys->Id;?>"  class="btn btn-danger " > Borrar </a> 
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

 <?php echo($footer)?>