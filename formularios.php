<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formularios</title>
    
    <style>
        .error {
            border-color: red;
        }
    
    </style>
</head>

<body>
    
<form action="destino.php" method="post" id="myForm">
        <p>
            <label for="myName">Escribe tu nombre</label><br>
            <input type="text" name="miNombre" placeholder="Escribe tu nombre" id="myName">
        </p>
        
  <p>
            <label for="check">Acepto las condiciones</label>
    <input type="checkbox" name="validar" id="check">
    </p>
    <p>
        Idioma
      <select name="idioma" id="idioma">
            <option value="">Elige uno</option>
            <option value="es">Español</option>
            <option value="en">Inglés</option>
            <option  value="mu">Murciano</option>
        </select>
    
    </p>
    <p>
        Sexo<br>
        
        Hombre <input type="radio" name="gendre" value="v">
        Mujer <input type="radio" name="gendre" value="m">
        NS/NC <input type="radio" name="gendre" value="ind">
        
    </p>
    
    <p>
        <input type="color" name="color">
    </p>
    <p>
        <textarea name="msg">
        
        
        
        </textarea>
    </p>

    <span onClick="ValidateForm()" id="send">Enviar</span>
        
    
</form>
    
    <form action="">
        <input type="text" required>
        <button type="submit">Enviar 2</button>
    </form>
    
    <script>
    
        function ValidateForm(){
            var todoCorrecto = true;
            
            var inputName = document.getElementById("myName");
            
            //COMPROBAR CAMPO DE NOMBRE
            //Compruebo si esta vacio
            var nameValue = inputName.value;
            console.log(nameValue.length);
            if(nameValue.trim() == "" || nameValue.length < 3){
                todoCorrecto = false;
                inputName.classList.add("error");
            }
            else{
                inputName.classList.remove("error");
            }
            
            //FIN COMPROBAR CAMPO NOMBRE
            
            
            //Si todo esta bien envio el formulario
            if(todoCorrecto == true){
                document.getElementById("myForm").submit();
            }
            else{
                alert("Hay errores");
            }
            
        }
    
    
    
    </script> 
    
    
</body>
</html>