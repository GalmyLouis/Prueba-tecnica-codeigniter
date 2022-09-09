<?php echo($header)?>



Formulario de Crear Author



<div class="card">
   <div class="card-body">
       <h5 class="card-title">Datos del Libro </h5>
       <p class="card-text ">

           <form method="post" action="<?php echo(Base_url('/update_book_data'))?>" enctype="multipart/form-data">
               <!-- <div class="row"> -->
    
                       <div class="form-group col-md-4" >
                           <label for="Nombre">Nombre</label>
                           <input id="name" value="<?php echo $book->book_name?>" class="form-control" type="text" name="name">
                           <input type="hidden" name="id" value="<?php echo $book->Id?>">
                       </div>
                       
                       <div class="form-group col-md-4">
                           <label for="EDITION">Edicion </label>
                           <input id="edition" value="<?php echo $book->edition?>" class="form-control" type="text" name="edition">
                       </div>

                       <div class="form-group col-md-3 ">
                           <div class="input-group-prepend ">
                           <label class="input-group-text" for="inputGroupSelect01">Autores</label>
                           <select class="custom-select col-md-6" name="author_id">
       
                               <?php foreach ($data as $key):?> 
                                   <option  value="<?php echo $key->id?>" ><?php echo $key->author_fst_name?> </option>

                               <?php endforeach; ?>
                           </select>
                       </div>
                      


                       <div class="form-group ">
                               <label for="">Fecha de publicacion</label>
                               <input type="date" value="<?php echo $book->publication_date?>" name="publication_date" id="" class="form-control">
                       </div>     
              <!-- </div> -->
          

               <button class="btn btn-success" type="submit">Guardar</button>
               <a href="<?php echo base_url("/book_list")?>" class="btn btn-info">cancelar</a>

              
           </form>

       </p>
   </div>
</div>




<?php echo($footer)?>