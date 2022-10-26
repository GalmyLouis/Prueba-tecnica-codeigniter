<?php echo($header)?>
<br/>

<a href="<?php echo Base_url("/book_list")?>"  class="btn btn-success btn-sm">Volver</a>
<br/>
<br/>

<div class="container">
    <div class="table-responsive">
       <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edicion</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha de publicacion</th>
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
    </div>
</div>
   
      

 <?php echo($footer)?>