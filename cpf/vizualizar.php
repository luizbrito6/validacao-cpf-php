<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados -  Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .container-fluid{
            background-color: #94B2EC;
            height: 430px;
            width: 600px;
            padding: 30px;
            border-radius: 10px;
            margin-top: 10%;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-size: 20px;
            font-weight: 500;
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
           
        }

        button:hover {
            background-color: #0315B8;
        }


        a{
            text-decoration: none;
            color: #ffffff;
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
        
        <?php


            $name = $_POST['nome'];
            
            $endereco = $_POST['end'];

            $mail = $_POST['email'];

            $nascimento = $_POST['data'];

            session_start();


            // Idade atualizada
            $nascimento = substr($nascimento, 0, -6);
            $m = substr($nascimento, 0, -6);
            $ano =  date('Y');
            $idade = $ano - $nascimento; 
        

            echo $m;
            echo "CPF: " . $_SESSION['cpf'] . '<br><br>';
            echo "Nome: $name <br><br>";
            echo "Endereço: $endereco <br><br>";
            echo "Email: $mail <br><br>";
            echo "Idade: $idade  anos<br><br>";

        ?>
        <button><a href="index.php">Voltar</a></button>
    </div>
    
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

