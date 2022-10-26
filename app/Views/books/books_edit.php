<?php echo($header)?>




<style>
       body{
        background-color: #cccccc
       }
</style>

<div class="container mt-5 pt-5">

    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">

            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5 class="card-title">Datos del Libro </h5>
                    <p class="card-text ">

                        <form method="post" action="<?php echo(Base_url('/update_book_data'))?>" enctype="multipart/form-data">
                            <!-- <div class="row"> -->
                    
                                    <div class="form-group" >
                                        <label for="Nombre">Nombre</label>
                                        <input id="name" value="<?php echo $book->book_name?>" class="form-control my-3 py-2" type="text" name="name">
                                        <input type="hidden" name="id" value="<?php echo $book->Id?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="EDITION">Edicion </label>
                                        <input id="edition" value="<?php echo $book->edition?>" class="form-control my-3 py-2" type="text" name="edition">
                                    </div>

                                    <div class="form-group my-4">
                                        <div class="input-group-prepend ">
                                        <label class="input-group-text" >Autores</label>
                                        <select class="custom-select my-3 py-2" name="author_id">
                    
                                            <?php foreach ($data as $key):?> 
                                                <option  value="<?php echo $key->id?>" ><?php echo $key->author_fst_name?> </option>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    


                                    <div class="form-group  py-2 ">
                                            <label for="">Fecha de publicacion</label>
                                            <input type="date" value="<?php echo $book->publication_date?>" name="publication_date" id="" class="form-control">
                                    </div>     
                            <!-- </div> -->
                                    <div class="text-center my-3">
                                        <button class="btn btn-outline-success" type="submit">Guardar</button>
                                        <a href="<?php echo base_url("/book_list")?>" class="btn btn-outline-info">cancelar</a>
                                    </div>            
                           

                            
                        </form>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>





<?php echo($footer)?>