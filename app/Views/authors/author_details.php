<?php echo($header)?>
<br/>

<a href="<?php echo Base_url("/author_list")?>"  class="btn btn-success btn-sm">Volver</a>
<br/>
<br/>

   <div class="container">
        <div class="table-responsive">
            <table class="table table-dark col">
                <thead class="thead-dark">
                    <tr>
                        <th>Firstname</th>
                        <th>lastname</th>
                        <th>Pais</th>
                        <th>Cantidad de Libros</th>
                        <th>Fecha de registro</th
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        
                        <td><?php echo $author->author_fst_name ?></td>
                        <td><?php echo $author->author_lst_name?></td>
                        <td><?php echo $author->country ?></td>
                        <td><?php echo $author->book_number?></td>
                        <td><?php echo $author->created_at?></td>
                        </td>
                        
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
   </div>
       

 <?php echo($footer)?>