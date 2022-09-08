

<?php echo($header)?><br/>

<a href="<?php echo(base_url('book_new'))?>" class="btn btn-success "> Crear Nuevo Libro</a>
<br><br/>

   
        <table class="table table-dark col">
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
                    <a href="<?php echo Base_url("edit/$keys->Id")?>"  class="btn btn-warning btn-sm"> Editar</a> ---
                    <a href="<?php echo Base_url("delete/$keys->Id")?>"  class="btn btn-danger btn-sm " > Borrar </a> ---
                    <a href="<?php echo Base_url("/book_details")?>"  class="btn btn-success btn-sm"> Detalles del libro</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

 <?php echo($footer)?>