<?php echo($header)?>

<?php if (session('Message')){?>
<div class="alert alert-danger" role="alert">
    <?php
     print_r(session('Message'));
    ?>
</div>
<?php
}
?>

    <style>
       body{
        background-color: #cccccc
       }
    </style>
<!--  -->
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-md-8 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Datos del Libro </h5>
                        <p class="card-text ">

                        <form method="post" id="send" action="<?php echo(Base_url('/save_book_data'))?>" enctype="multipart/form-data">
                            <!-- <div class="row"> -->
                                    <div class="form-group " >
                                        <label for="Nombre">Nombre</label>
                                        <input id="name" class="form-control my-3 py-2" type="text" name="name">

                                    </div>

                                    <div class="form-group ">
                                        <label for="EDITION">Edicion </label>
                                        <input id="edition" class="form-control my-3 py-2" type="text" name="edition">
                                    </div>

                                    <div class="form-group my-3 ">

                                     <label class="input-group-text" for="inputGroupSelect01">Autores</label>
                                        <select class="custom-select my-3" name="author_id">
                            
                                            <?php foreach ($data as $key):?> 
                                                <option value="<?php echo $key['id']?>"> <?php echo $key['author_fst_name']?> </option>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                


                                    <div class="form-group my-3 ">
                                            <label for="">Fecha de publicacion</label>
                                            <input type="date" name="publication_date" id="date" class="form-control my-3 py-2">
                                    </div>     
                        <!-- </div> -->
                    
                                    <div class="text-center my-3">
                                        <button id="btn_save"  class="btn btn-outline-success " type="submit">Guardar</button>
                                        <a href="<?php echo base_url("/book_list")?>" class="btn btn-outline-info">cancelar</a>
                                    </div>            

                        
                        </form>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
     <!-- Ajax -->
     <!-- tratamento en proceso  -->
     

     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    (function($){
        $("#send").submit(function(ev){
            ev.preventDefault();
            $.ajax({
                url:"/save_book_data",
                type: 'Post',
                data: $(this).serialize(),
                success: function(data){
                    console.log(data);
                },
                error:function(){

                }
            });
        })
    })
   

</script>
    


<?php echo($footer)?>