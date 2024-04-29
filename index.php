<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Programando</title>
</head>

<body>
    
    <h1 id="saludo"></h1>

    
    <script>

        var shield = 100;
        var lifes = 5;
        var damage;
        var msg;
        var inv = false;
        var coolDown = 5; //Tiempo en segundos que tarda en quitarse el coolDown
        var alive = true; 
        
        
        
        function Saludar(){
            //msg = "Hola mundo desde una función";
            console.log(msg);
        }
        
        function Impacto()
        {
            damage = Math.random() * 5000;
            damage = Math.floor(damage)/100;
            shield -= damage; //Este es lo mismo que shield = shield - damage;
            shield = Math.floor(shield * 100) / 100; //Redondeo el valor de shield a 2 decimales
            
            if(shield > 0){
                msg = "IMPACTO de fuerza " + damage + "!!! Te queda " + shield + " de escudo";

            }
            else if(shield == 0) {
                msg = "IMPACTO de fuerza " + damage + "!!! ESTÁS SIN ESCUDO!!!!!!!";

            }
            else {
                lifes--;
                msg = "MUERTE!!!!";
                
            }
            
            
            Saludar();
            
              
            
            
        }
        
        
        Impacto();
        Impacto();
        Impacto();
        
        

        
    
    </script>
    
</body>
</html>