<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuario</title>
    <style>
                * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 1rem;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        

        button {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            
        }

        button:hover{
            cursor: pointer;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        button.ghost:hover {
            cursor: pointer;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: left;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
            text-align: left;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 40%;
        }

        .select-container{
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 40%;
            
        }

        .form__input{
            width: 40%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                    0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        


        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container{
            transform: translateX(-100%);
        }

        .overlay {
            background: #3399ff;
            background: -webkit-linear-gradient(to right, #3377dd, #55aaff);
            background: linear-gradient(to right, #3399ff, #5577dd);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

    </style>
</head>
<body>
    <div class="container" id="container">
        <!-- sign in page -->
        <div class="form-container sign-in-container">

            
          <form method="get" action='{{url('/empleado/crear/done')}}' class="form" id="login">
            @csrf
            <h1 class="form__title">Registrarse</h1>

            <div class="form__input-group">
                <label>Tipo de documento:  </label>
                <select  name="emp_tipo_documento" class="select-container">
                    <option value="" selected disabled> Seleccione una opción</option>
                    <option value="cc">Cedula Ciudadania</option>
                    <option value="nit" >NIT</option>
                    <option value="ti">Tarjeta Identidad</option>
                </select> 
            </div>

            <div class="form__input-group">
            <label for="username">Numero documento: </label>
            <input type="text" class="form__input" name="emp_numero_documento" id="numero_documento" maxlength="20" required> 
            </div>

            <div class="form__input-group">
              <label for="username">Usuario medimas: </label>
              <input type="text" class="form__input" name="emp_usuario" id="usuario" maxlength="20" required> 
            </div>
            <div class="form__input-group">
              <label for="pass">Contraseña: </label>
              <input type="password" class="form__input" name="emp_password" id="password" maxlength="20" required> 
            </div>
            <div class="form__input-group">
                <label for="pass">Confirmar contraseña: </label>
                <input type="password" class="form__input"  name = "confirm_password" id="confirm_password" maxlength="20" required> 
            </div>
            <div class="form__input-group">
              <button type="submit" class="form__button">Submit</button>
            </div>
         </form>
        </div>
        
        
        
       <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>¿Ya tiene cuenta?</h1>
                    <p>Inicie sesion para ingresar a la plataforma!</p>
                    <button class="ghost" id="signUp">Iniciar sesion</button>
                </div>
            </div>
        </div>
     </div>

     <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            location="crear";
        });

        
    </script>
</body>
</html>