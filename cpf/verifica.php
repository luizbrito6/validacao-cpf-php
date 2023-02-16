<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de CPF</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <style>
        .container-fluid{
            background-color: #94B2EC;
            height: 200px;
            width: 500px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            margin-top: 10%;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

        }

        h1{
            font-size: 40px;
            font-weight: bold;
            color: black;
            font-weight: bold;
        }

        button{
            padding: 5px; 
            margin: 30px 10px;
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

        @media (max-width: 500px) {

            .container-fluid{
                width: 300px;
                padding-top:10% ;
                display: block;

            }            

        }

        
    </style>


</head>
<body>

    <div class="container-fluid">

        <?php 
            $cpf = $_POST['cpf_string'];
            
            session_start(); 
            $_SESSION['cpf'] = $cpf;
            
            
            if (strlen($cpf) == 11 ) {
                
                
                if ($cpf == 11111111111 or $cpf == 22222222222 or $cpf == 33333333333 or $cpf == 44444444444 or $cpf == 55555555555 or $cpf == 66666666666 or $cpf == 77777777777 or $cpf == 88888888888 or $cpf == 99999999999 ) {
                    echo '<h1>CPF inválido</h1>';
                    echo '<a href="index.php"><button>Voltar</button></a>';

                }

                // VERIFICAÇÃO DO PRIMEIRO DIGITO ----->
                else{

                    
                    $cpf_lst = (str_split($cpf));
                    
                    $digitos = $cpf_lst;  
                    
                    array_pop($digitos);
                    array_pop($digitos);
                    
                    $dgtTeste_1 = $cpf_lst[9];
                    $dgtTeste_2 = $cpf_lst[10];
                    
                    $cont = 10;
                    $soma = 0;
                    
                    
                    foreach ($digitos as $num) {
                        
                        $multi = $num * $cont;
                        
                        $cont = $cont - 1  ; 
                        
                        $soma = $soma + $multi;    
                        
                    }
                    
                    $resto =  $soma % 11; 

                    if ($resto >= 2) {
                        $dgt1 = 11 - $resto;
                    }
                    else {
                        $dgt1 = 0 ; 
                    }
                    
                    
                    
                    // VERIFICAÇÃO DO PRIMEIRO DIGITO ----- // 



                    
                    // VERIFICAÇÃO DO SEGUNDO DIGITO ----->
                    
                    
                    $digitos_10 = $cpf_lst; 
                    array_pop($digitos_10);
                    
                    
                    $cont2 = 11;
                    $soma2 = 0;
                    
                    foreach ($digitos_10 as $num) {
                        
                        $multi = $num * $cont2;
                        
                        $cont2 = $cont2 - 1  ; 
                        
                        $soma2 = $soma2 + $multi;    
                        
                    }
                    
                    $resto2 =  $soma2 % 11; 
                    
                    if ($resto2 >= 2) {
                        $dgt2 = 11 - $resto2;
                    }
                    else {
                        $dgt2 = 0 ; 
                    }
                    
                    if ($dgtTeste_1 == $dgt1 and $dgtTeste_2 == $dgt2)  {


                        echo '<h1>CPF válido</h1>';

                        echo '<a href="cadastrar.php"><button> Prosseguir</button></a>';
                        echo '<a href="index.php"><button>Voltar</button></a>';


                    } else {
                        echo '<h1>CPF inválido</h1>';
                        echo '<a href="index.php"><button>Voltar</button></a>';



                    // VERIFICAÇÃO DO SEGUNDO DIGITO ----- //
                }
            }   

                
            }
            else {
                echo "<h1>CPF inválido</h1>";
                echo '<a href="index.php"><button>Voltar</button></a>';

            }
        ?>

    </div>


            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
