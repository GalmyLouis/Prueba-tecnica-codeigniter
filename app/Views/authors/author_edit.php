<?php echo($header)?><br/> 




<div class="card">
        <div class="card-body">
            <h5 class="card-title">Editar Autor</h5>
            <p class="card-text ">

                <form method="post" action="<?php echo(Base_url('/update_data'))?>" enctype="multipart/form-data">
                    <!-- <div class="row"> -->
                        <input type="hidden" name="id" value="<?php echo $author->id?> ">
                        <div class="form-group col-md-4" >
                            <label for="Nombre">Nombre</label>
                            <input id="fst_name" value="<?php echo $author->author_fst_name?>" class="form-control" type="text" name="fst_name">

                        </div>

                        <div class="form-group col-md-4">
                            <label for="Apellido">Apellido</label>
                            <input id="lst_name" value="<?php echo $author->author_lst_name?>" class="form-control" type="text" name="lst_name">
                        </div>
                    <!-- </div> -->
                  
                    <div class="form-group col-md-4">
                        <label for="my-input">Pais</label>
                        <input id="country" value="<?php echo $author->country?>" class="form-control" type="text" name="country">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Cantidad de libro</label>
                        <input type="text" value="<?php echo $author->book_number?>" class="form-control" name="book_count" id="book_cout">
                    </div>

                    <button class="btn btn-success" type="submit">Guardar</button>
                    <a href="<?php echo base_url("/author_list")?>" class="btn btn-info">cancelar</a>
                   
                </form>

            </p>
        </div>
     </div>












<?php echo($footer)?>