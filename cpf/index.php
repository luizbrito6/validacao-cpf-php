<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verficador de CPF</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .container-fluid{
            background-color: #94B2EC;
            height: 400px;
            width: 420px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            margin-top: 10%;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

           
        }   

        form h1{
            font-size: 40px;
            font-weight: bold;
            color: black;
            font-weight: bold;

        }

        form p{ 
            font-size: 15px;
            font-weight: 500;
        }

        form .form-control{ 
            width: 90%;
            height: 40px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-size: 15px;
            color: gray;
            padding-left: 20px;

        }

        form button{
           padding: 5px; 
           margin: 30px 15px;
           width: 100px;
           background-color: #4A55BE;
           border: none;
           border-radius: 5px;
           color: #ffffff;
           transition: 0.2s;
           font-weight: 500;
        }

        form button:hover {
            background-color: #0315B8;
        }







        @media (max-width: 500px) {

            .container-fluid{
                width: 350px;
                margin-top: 30%;
            }            
            
        }

        

        

    


    </style>
</head>
<body>
    <div class="container-fluid">

        <form action="verifica.php" method="post">
            
            <h1>Verficador de CPF</h1>
            <p>Informe o CPF para validação do cadastro</p>


            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="cpf_string" required autofocus>            
        
            <button type="submit">Validar</button>


            <button type="reset">Limpar</button>
            
            
            
        </form>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>