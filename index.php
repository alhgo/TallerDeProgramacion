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
        
        //Funcion propia para generar numeros aleatorios con 2 decimales
        function RandomNumber(max = 50)
        {
            var resultado;
            max *=100; //Lo multiplico por 100
            resultado = Math.random() * max;
            resultado = Math.floor(resultado)/100; //Lo redondeo y divido para dar 2 decimales
            //console.log(resultado);
            return resultado;
        }
        
        function Impacto()
        {

            damage = RandomNumber(25);
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
        

        /*
        function Sumar(x, y){
            
            var resultado = x + y;
            //console.log(resultado);
            return resultado;
        }
        
        function Multiplicar(x, y){
            
            var resultado = x * y;
            //console.log(resultado);
            return resultado;
        }
        
        Sumar(20, 50);
        
        num1 = Sumar(123,32423 );
        num2 = Multiplicar(34,23);
        
        var resultado = num1 / num2;
        console.log(resultado);
        
        */
        
        //----------------BUCLES----------------//
        //Ejemplo de buble con while
        var n = 0;
        while(n < 10){
            console.log(n);
            n++;
        }
        
        //Lo mismo pero bien hecho con FOR, en esta ocasión cueta atras, incluyendo el 0
        for(y = 10; y >= 0 ; y--){
            console.log(y);
        }
        
    
    </script>
    
</body>
</html>