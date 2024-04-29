<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Programando</title>
</head>

<body onLoad="Saludar()">
    
    <h1 id="saludo"></h1>

    
    <button onClick="RecibirImpacto()">IMPACTO</button>
    <script>

        var shield = 100;
        var lifes = 5;
        var damage;
        var msg = "COMIENZA EL JUEGO";
        var inv = false;
        var coolDown = 5; //Tiempo en segundos que tarda en quitarse el coolDown
        var alive = true; 
        
        
        
        function Saludar(){
            //msg = "Hola mundo desde una función";
            console.log(msg);
            document.getElementById("saludo").innerHTML = msg;
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
                if(lifes > 1){
                    shield = 100;
                    msg = "Te quedan " + lifes + " vidas. Y 100 de escudo"; 
                }
                else if(lifes == 1){
                    shield = 100;
                    msg = "Te queda 1 vida. Y 100 de escudo"; 
                }
                else {
                    msg = "Estás MUERTOS";
                    alive = false;
                }
                
                
            }
            
            
            Saludar();
            
              
            
            
        }
        
        function RecibirImpacto()
        {
            //Ejemplo de comprobación con OR
            /*
            if(alive == false || inv == true){
                console.log("No pasa nada");
            }
            */
            
            
            
            if(alive == true && inv == false){
                Impacto();
            }
            else{
                console.log("No se puede recibir impacto estando mierto")
            }
        }
        

        
        

        
    
    </script>
    
</body>
</html>