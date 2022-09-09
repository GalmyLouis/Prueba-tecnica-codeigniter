<?php echo($header)?>
<br/>

<a href="<?php echo Base_url("/book_list")?>"  class="btn btn-success btn-sm">Volver</a>
<br/>
<br/>

   
        <table class="table table-dark col">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Edicion</th>
                    <th>Autor</th>
                    <th>Fecha de publicacion</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><?php echo $book->book_name?> </td>
                    <td><?php echo $book->edition?> </td>
                    <td><?php echo $book->authors_id?> </td>
                    <td><?php echo $book->publication_date ?>
                    </td>
                       
                    </td>
                </tr>
            
            </tbody>
        </table>

 <?php echo($footer)?>