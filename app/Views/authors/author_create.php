<?php echo($header)?>



<?php if (session('Message')){?>
<div class="alert alert-danger" role="alert">
    <?php
    echo session('Message');
    ?>
</div>
<?php
}
?>
     Formulario de Crear Author


     <div class="card">
        <div class="card-body">
            <h5 class="card-title">Datos de author</h5>
            <p class="card-text ">

                <form method="post" action="<?php echo(Base_url('/save_data'))?>" enctype="multipart/form-data">
                    <!-- <div class="row"> -->
                        <div class="form-group col-md-4" >
                            <label for="Nombre">Nombre</label>
                            <input id="fst_name" class="form-control" type="text" name="fst_name">

                        </div>

                        <div class="form-group col-md-4">
                            <label for="Apellido">Apellido</label>
                            <input id="lst_name" class="form-control" type="text" name="lst_name">
                        </div>
                    <!-- </div> -->
                  
                    <div class="form-group col-md-4">
                        <label for="my-input">Pais</label>
                        <input id="country" class="form-control" type="text" name="country">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Cantidad de libro</label>
                        <input type="text" class="form-control" name="book_count" id="book_cout">
                    </div>

                    <button class="btn btn-success" type="submit">Guardar</button>
                    <a href="<?php echo base_url("/author_list")?>" class="btn btn-info">cancelar</a>
                   
                </form>

            </p>
        </div>
     </div>

    


<?php echo($footer)?>