

<?php echo($header)?><br/>

        <div class="container p-5">
            <a href="<?php echo(base_url('book_new'))?>" class="btn btn-success "   > Crear Nuevo Libro</a>
                 <br><br/>
            <div class="table-responsive">
               
                <table class="table table-bordered table-striped table-light table-sm">
                    <thead >
                        <tr class="shadow-lg">
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edicion</th>
                            <th scope="col">Fecha de publicacion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php foreach($data as $keys): ?>
                        <tr>
                            <th scope="row"><?php echo $keys['Id']?> </th>
                            <td><?php echo $keys['book_name'] ?> </td>
                            <td><?php echo $keys['edition']  ?> </td>
                            <td><?php echo $keys['publication_date'] ?></td>
                            <td>
                            <a href="<?php echo Base_url('edit_book/'.$keys['Id'])?>"  class="btn btn-warning btn-sm"> Editar</a> ---
                            <a href="<?php echo Base_url('delete_book/'.$keys['Id'])?>"  class="btn btn-danger btn-sm " > Borrar </a> ---
                            <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#viewModal" > Detalles del libro</a>
                            
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
           </div>
        </div>
<!-- modal -->

<div class="modal fade" id ="viewModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">lista</h2>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="container">
                    <div class="table-responsive">
                    <table class="table table-light">
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
                                    <td><?php echo $keys['book_name'] ?></td>
                                    <td><?php echo $keys['edition']  ?></td>
                                    <td> <?php echo $keys['authors_id'] ?></td>
                                    <td><?php echo $keys['publication_date'] ?></td>
                                    
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
   
            </div>
            <div class="modal-footer">
                <button class="btn btn_secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>




 <?php echo($footer)?>