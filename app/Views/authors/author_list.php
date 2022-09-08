
<?php echo($header)?>

<a href="<?php echo(base_url('author_new'))?>"> Crear author</a>

    
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
                    <td>Editar/
                     <a href="<?php echo Base_url("delete/").$keys->id;?>"  class="btn btn-danger " > Borrar </a>   
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<?php echo($footer)?>