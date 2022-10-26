<?php echo($header)?>



     Formulario de Crear Author
     <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-md-8 col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datos de author</h5>
                        <p class="card-text ">

                            <form method="post" action="<?php echo(Base_url('/save_data'))?>" enctype="multipart/form-data">
                                <!-- <div class="row"> -->
                                    <div class="form-group " >
                                        <label for="Nombre">Nombre</label>
                                        <input id="fst_name" class="form-control" type="text" name="fst_name">

                                    </div>

                                    <div class="form-group ">
                                        <label for="Apellido">Apellido</label>
                                        <input id="lst_name" class="form-control" type="text" name="lst_name">
                                    </div>
                                <!-- </div> -->
                            
                                <div class="form-group">
                                    <label for="my-input">Pais</label>
                                    <input id="country" class="form-control" type="text" name="country">
                                </div>
                                <div class="form-group">
                                    <label for="">Cantidad de libro</label>
                                    <input type="text" class="form-control" name="book_count" id="book_cout">
                                </div>

                                <button class="btn btn-success" type="submit">Guardar</button>
                                <a href="<?php echo base_url("/author_list")?>" class="btn btn-info">cancelar</a>
                            
                            </form>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    


<?php echo($footer)?>