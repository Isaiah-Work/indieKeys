<?php 
    include "../templates/header.php";
    include '../src/controllers/config.php';
    include '../src/controllers/conexion.php';
?>
    <!--Contenedor Principal-->
    <div class="c-container  pt-5 pb-4">

        <div class="container text-left">

            <div class="row"> 
                

                <div class="form-group col-sm-12 col-md-12 col-lg-3 card-body">
                    
                    <div class="c-card card m-3 p-3 pb-100">                                               

                            <label class="mt-2 pb-2">Precio</label>
                            <select class="form-control" name="precio" id="precio">
                                <option value="Todos">Todos</option>
                                <option value="DESC">De mayor a menor</option>
                                <option value="ASC">De menor a mayor</option>
                            </select>                                    
                        
                            <label class="mt-2 pb-2">Plataforma</label>
                            <select class="form-control" name="plataforma" id="plataforma">
                                <option value="Steam">Steam</option>
                                <option value="Epic">Epic Games Store</option>
                                <option value="Itch.io">Itch.io</option>
                            </select>                                                    
                        
                            <label class="mt-2 pb-2">Precio</label>
                            <select class="form-control" name="precio2" id="precio2">
                                <option value="Todos">Todos</option>
                                <option value="DESC">De mayor a menor</option>
                                <option value="ASC">De menor a mayor</option>
                            </select>               
                            <div class="form-group">
                                <button class="c-header__button btn btn-primary col-12 col-sm-auto mt-3 mb-3" type="submit">Filtrar</button>
                            </div>         
                    </div>

                </div>
                
                
                        
            <!--   
            </div>-->
            
                    <!--Productos--> 
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <a href="" class="">
                    <div class="c-card p-3 mb-5 pb-5">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">
                            
                        <div class="card-body mt-4">

                            <span>Título del Producto JAWUNDIUANWDIUAWNDIOAWNDIAWNDIAWUN</span>
                            <h5 class="card-title mt-4">$400.00</h4>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <label class=" ">Con existencia</label>
                            
                            
                            <button class="mt-4 c-card__button btn " name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>

                    </a>
                        
                </div>   

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <div class="card">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">

                        <div class="card-body ">

                            <span>Título del Producto</span>
                            <h5 class="card-title">$400.00</h4>
                            <p class="card-text">Descripcion</p>
                            <button class="btn c-header__button" name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>
                        
                </div>   

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <div class="card">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">

                        <div class="card-body">

                            <span>Título del Producto</span>
                            <h5 class="card-title">$400.00</h4>
                            <p class="card-text">Descripcion</p>
                            <button class="btn c-header__button" name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>
                        
                </div>   

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <div class="card">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">

                        <div class="card-body">

                            <span>Título del Producto</span>
                            <h5 class="card-title">$400.00</h4>
                            <p class="card-text">Descripcion</p>
                            <button class="btn c-header__button" name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>
                        
                </div>   

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <div class="card">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">

                        <div class="card-body">

                            <span>Título del Producto</span>
                            <h5 class="card-title">$400.00</h4>
                            <p class="card-text">Descripcion</p>
                            <button class="btn c-header__button" name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>
                        
                </div>   

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <div class="card">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">

                        <div class="card-body">

                            <span>Título del Producto</span>
                            <h5 class="card-title">$400.00</h4>
                            <p class="card-text">Descripcion</p>
                            <button class="btn c-header__button" name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>
                        
                </div>   
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <div class="card">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">

                        <div class="card-body">

                            <span>Título del Producto</span>
                            <h5 class="card-title">$400.00</h4>
                            <p class="card-text">Descripcion</p>
                            <button class="btn c-header__button" name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>
                        
                </div>   

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <div class="card">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">

                        <div class="card-body">

                            <span>Título del Producto</span>
                            <h5 class="card-title">$400.00</h4>
                            <p class="card-text">Descripcion</p>
                            <button class="btn c-header__button" name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>
                        
                </div>   

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">

                    <div class="card">

                        <img 
                            title="Título Producto"
                            alt="Título"
                            class="card-img-top" 
                            src="../public/images/game_undertale_img.webp">

                        <div class="card-body">

                            <span>Título del Producto</span>
                            <h5 class="card-title">$400.00</h4>
                            <p class="card-text">Descripcion</p>
                            <button class="btn c-header__button" name="btnAccion" value="Agregar" type="submit">Agregar Al Carrito</button>
                        </div>
            
                    </div>
                        
                </div>   

            </div>        
        </div>
    </div>

<?php 
    include "../templates/footer.php"
?>
