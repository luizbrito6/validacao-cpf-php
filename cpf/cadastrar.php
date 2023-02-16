<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .container-fluid{
            background-color: #94B2EC;
            height: 600px;
            width: 70%;
            border-radius: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            margin-top: 50px;
            

           
        } 
        h1{
            padding: 10px 50px;
            color: black;
            font-weight: 700;
        } 

        form{
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        form .form-control{ 
            width: 50%;
            height: 40px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-size: 15px;
            padding-left: 20px;
            font-weight: 500;

        }

        form .cpf{
            width: 50%;
            height: 40px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-size: 15px;
            padding-left: 20px;
            background-color: #ffffff;
            padding: 8px 15px;
            font-weight: 400;
            font-weight: 500;
            
        }


        .btn {
            display: flex;
            margin: 0 auto;
        
        }
        
        button{
           padding: 5px; 
           width: 100px;
           background-color: #4A55BE;
           border: none;
           border-radius: 5px;
           color: #ffffff;
           transition: 0.2s;
           font-weight: 500;
           margin: 0 30px;
        }

        button:hover {
            background-color: #0315B8;
        }
        

        a{
            text-decoration: none;
            color: #ffffff;
        }

        
        @media (max-width: 700px) {

            .container-fluid{
                width: 350px;
                margin-top: 10%;
            }    
            
            .btn{ 
                flex-direction: column;
                gap: 10px;
            }

        }





        

        
        
        
    </style>


    
</head>
<body>
    <div class="container-fluid">
        <form action="vizualizar.php" method="post">
            <h1>Cadastro</h1>

            <?php session_start(); ?>

            
                
            <h1 class="h1 cpf">CPF <?php echo $_SESSION['cpf'];?></h1>

            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome" name="nome" required>
            
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Endereço" name="end" required>

            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email" required>

            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="data" required>

            <li class="btn">
                <button type="submit">Enviar</button>
                
                <button type="reset">Limpar</button>

                <button><a href="index.php">Voltar</a></button>
            </li>
            
        </form>


    </div>
    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    
</body>
</html>