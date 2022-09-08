
<?php echo($header)?><br/> 

<a href="<?php echo(base_url('author_new'))?>" class="btn btn-success"> Crear author</a>
<br/>
<br/> 
   
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>lastname</th>
                    <th>Country</th>
                    <th>-------</th>
                </tr>   
            </thead>    
            <tbody> 
            <?php foreach($data as $keys): ?>
                <tr>
                    <td><?php echo $keys->id?></td>
                    <td><?php echo $keys->author_fst_name ?></td>
                    <td><?php echo $keys->author_lst_name?></td>
                    <td><?php echo $keys->country ?></td>
                    <td>
                    <a href="<?php echo Base_url("edit_author/$keys->id")?>"  class="btn btn-warning btn-sm"> Editar</a> ---
                    <a href="<?php echo Base_url("delete/$keys->id")?>"  class="btn btn-danger btn-sm " > Borrar </a> ---
                    <a href="<?php echo Base_url("/book_details")?>"  class="btn btn-success btn-sm"> Detalles del libro</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<?php echo($footer)?>