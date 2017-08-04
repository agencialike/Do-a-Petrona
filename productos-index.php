<?php 
/*
Template name: productos
*/
?>
<?php include "header.php"; ?>
<style>
            .product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}
</style>

<div class="container">
<h1 class="titu-rec" style="padding: 25px 0px; font-size: 30px;">Productos</h1>
    <div class="row percha">
    <!-- Producto1-->
        <div class="col-md-3 col-xs-12 perchares">
              <div class="thumbnail">
                <a href="" data-toggle="modal" data-target="#product_view1">
                    <img src="http://dpetrona.com/wp-content/uploads/2017/08/empaque1.png" alt="" class="img-responsive">
                </a>
                
              </div>
            </div>
    <!-- Producto2-->
            <div class="col-md-3 col-xs-12 perchares">
              <div class="thumbnail">
                <a href="" data-toggle="modal" data-target="#product_view1">
                    <img src="http://dpetrona.com/wp-content/uploads/2017/08/empaque1.png" alt="" class="img-responsive">
                </a>
                
              </div>
            </div>
    <!-- Producto3-->
            <div class="col-md-3 col-xs-12 perchares">
              <div class="thumbnail">
                <a href="" data-toggle="modal" data-target="#product_view2">
                    <img src="http://dpetrona.com/wp-content/uploads/2017/08/spaghetti.png" alt="" class="img-responsive">
                </a>
                
                
              </div>
            </div>
    <!-- Producto4-->
            <div class="col-md-3 col-xs-12 perchares">
              <div class="thumbnail">
               <a href="" data-toggle="modal" data-target="#product_view1">
                    <img src="http://dpetrona.com/wp-content/uploads/2017/08/empaque1.png" alt="" class="img-responsive">
                </a>
                
              </div>

        </div>
    </div>
    <div class="row percha" style="padding: 0px;">
    <!-- Producto5-->
        <div class="col-md-3 col-xs-12 perchares">
              <div class="thumbnail">
                <a href="" data-toggle="modal" data-target="#product_view1">
                    <img src="http://dpetrona.com/wp-content/uploads/2017/08/empaque1.png" alt="" class="img-responsive">
                </a>
                
              </div>
            </div>
    <!-- Producto6-->
            <div class="col-md-3 col-xs-12 perchares">
              <div class="thumbnail">
                <a href="" data-toggle="modal" data-target="#product_view1">
                    <img src="http://dpetrona.com/wp-content/uploads/2017/08/empaque1.png" alt="" class="img-responsive">
                </a>
                
              </div>
            </div>
        <!-- Producto7-->
            <div class="col-md-3 col-xs-12 perchares">
              <div class="thumbnail">
                <a href="" data-toggle="modal" data-target="#product_view2">
                    <img src="http://dpetrona.com/wp-content/uploads/2017/08/spaghetti.png" alt="" class="img-responsive">
                </a>
                
                
              </div>
            </div>
        <!-- Producto8-->
            <div class="col-md-3 col-xs-12 perchares">
              <div class="thumbnail">
               <a href="" data-toggle="modal" data-target="#product_view1">
                    <img src="http://dpetrona.com/wp-content/uploads/2017/08/empaque1.png" alt="" class="img-responsive">
                </a>
                
              </div>
        </div>
    </div>
</div>

<!-- Vistas -->
<div class="modal fade product_view" id="product_view1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right">x</span></a>
                <h3 class="modal-title">Nombre de producto</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="http://dpetrona.com/wp-content/uploads/2017/08/empaque1.png" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Product Id: <span>51526</span></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <h3 class="cost"></span> $75.00 <small class="pre-cost"></span> $60.00</small></h3>                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade product_view" id="product_view2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right">x</span></a>
                <h3 class="modal-title">Nombre de producto2</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="http://dpetrona.com/wp-content/uploads/2017/08/spaghetti.png" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Product Id: <span>51526</span></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <h3 class="cost"></span> $75.00 <small class="pre-cost"></span> $60.00</small></h3>                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>