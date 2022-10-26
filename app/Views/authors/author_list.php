
<?php echo($header)?><br/> 

 
        <div class="container p-5">
            <div class="table-responsive">
            <a href="<?php echo(base_url('author_new'))?>" class="btn btn-outline-success " > Crear author</a>
            <br><br>
                <table class="table table-light">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">lastname</th>
                            <th scope="col">Country</th>
                            <th scope="col">Acciones</th>
                        </tr>   
                    </thead>    
                    <tbody class="bg-light"> 
                    <?php foreach($data as $keys): ?>
                        <tr>
                            <th scope="col"><?php echo $keys['id']?></th>
                            <td><?php echo $keys['author_fst_name'] ?></td>
                            <td><?php echo $keys['author_lst_name']?></td>
                            <td><?php echo $keys['country'] ?></td>
                            <td>
                        
                            <a href="<?php echo Base_url('edit_author/'.$keys['id'])?>"  class="btn btn-warning btn-sm"> Editar</a> ---
                            <a href="<?php echo Base_url('delete/'.$keys['id'])?>"  class="btn btn-danger btn-sm " > Borrar </a> ---
                            <a href="<?php echo Base_url('author_details/'.$keys['id'])?>"  class="btn btn-success btn-sm"> Detalles del Autor</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
      
        </div>
   
       

<?php echo($footer)?>