<?php echo($header)?>



     Formulario de Crear Author


     <div class="card">
        <div class="card-body">
            <h5 class="card-title">Datos de author</h5>
            <p class="card-text ">

                <form method="post" action="<?php echo(Base_url('/save_book_data'))?>" enctype="multipart/form-data">
                    <!-- <div class="row"> -->
                            <div class="form-group col-md-4" >
                                <label for="Nombre">Nombre</label>
                                <input id="name" class="form-control" type="text" name="name">

                            </div>

                            <div class="form-group col-md-4">S
                                <label for="EDITION">Edicion </label>
                                <input id="edition" class="form-control" type="text" name="edition">
                            </div>

                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend ">
                                <label class="input-group-text" for="inputGroupSelect01">Autores</label>
                        
                            </div>
                            <select class="custom-select col-md-2" name="author_id">
            
                                <?php foreach ($data as $key):?> 
                                    <option  value="<?php echo $key->id?>" ><?php echo $key->author_fst_name?> </option>

                                <?php endforeach; ?>
                            </select>
                        




                    <!-- </div> -->
                  <!-- <div class="field">
                    <label for="" class="label">Select Autor</label>
                    <div class="control">
                            <div class="select">
                                <select name="authors_Id" id="authors_Id">
                                    <option >Select dropdown</option>
                                </select>
                            </div>
                    </div> -->
                   
                  <!-- </div> -->

               

                    <button class="btn btn-success" type="submit">Guardar</button>

                   
                </form>

            </p>
        </div>
     </div>

    


<?php echo($footer)?>