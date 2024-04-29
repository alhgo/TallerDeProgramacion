<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    
    
    <title>Practicando con Bootstrap</title>
    

    <link href="css/myCSS.css" rel="stylesheet" type="text/css">
    
</head>

<body>
    
    <div class="container">
        
        <!--Inicio encabezado-->
        <header>
            <div class="row">
            
                <div class="col-12">
                
                    <h1>Título de mi página</h1>
                </div>
            
            </div>
            
        </header>
        <!--Fin encabezado-->
        
        
         <!--Inicio Triada-->
        <div class="row">

            <div class="col-xl-4 col-lg-6 col-sm-12 triada">Elemento 1</div>
            <div class="col-xl-4 col-lg-6 col-sm-12 triada">Elemento 2</div>
            <div class="col-xl-4 d-xxl-none d-xl-block d-none triada">Elemento 3</div>


        </div>
        <!--Fin Triada-->
        
        <section class="mt-2" >
        
            <div class="row">
                
                <?php for($n = 0; $n < 6; $n ++): ?>
                <!--Inicio de item-->
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12">
                
                    <div class="row">
                    
                        <div class="col-xl-12 col-lg-12 col-md-4 col-sm-12">
                            
                            <img src="img/koala.jpg" class="img-fluid" alt="Koal">
                            
                        </div>
                        <div class="col-xl-12  col-lg-12 col-md-8 col-sm-12">
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit omnis explicabo iste accusantium quo, voluptate. 
                        
                        
                        
                        </div>
                        
                    </div>
                
                </div>
                <!--Fin de Item-->
                <?php endfor ?>
            
            </div>
        
        
        
        </section>
        
        <footer class="col-12">
            <p>Pie de página</p>
        </footer>
        
        
        
    
    </div>
    

    
    
    
    
    
    
    
    
    
    
    
</body>
</html>