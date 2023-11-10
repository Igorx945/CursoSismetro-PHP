<!DOCTYPE html>
<?php
function numero_primo($posicao)
{
    $primos = array(2);

    $n = 3;
    while (count($primos) < $posicao) {
        $e_primo = true;
        foreach ($primos as $primo) {
            if ($n % $primo == 0) {
                $e_primo = false;
            }
        }
        if ($e_primo) {
            $primos[] = $n;
        }
        $n++;
    }
    return $primos[$posicao - 1];
}

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(255,0,52,1) 100%);
            height: 100vh;
            color: white;
            text-align: center;
            align-items: center;
            justify-content: center;

        }

        .formulario {
            width: 50%;
            margin: auto;
            padding: 25px;
            height: 100vh;
            border-radius: 30px;
            box-shadow: 5px 4px 20px rgb(78, 78, 78);
            color: black;


        }

        .conteiner {
            border-radius: 25px;
            box-shadow: 3px 2px 10px rgb(78, 78, 78);
            color: black;
            background-color: #ff0034;

        }

        .resultado {
            height: 5vh;
            color: white;
            border-radius: 25px;
            box-shadow: 3px 2px 10px rgb(78, 78, 78);
            background-color: #ff0034;
        }

        
        img {
            max-width: 50%;
            max-height: 50%;
            margin: auto;
        }
        h1, h2{
            display: flex;
            text-align: start;

        }

    </style>
</head>

<body class="formulario">
    <div class="form">
        <h1>Calculadora de Numeros Primos</h1>
        <img src="primos.jpg" alt="">
        <form method="post">
            <div class="conteiner">
                <div class="mb-3">
                    <h1>Posição:</h1>
                    <input type="text" name="posicao" class="form-control" placeholder="posicao da sequencia de fibonacci" value="<?php if (isset($_POST["posicao"])) echo $_POST["posicao"]; ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
            <h2>Resultado:</h2>
            <div class="resultado">
                <?php
                if (isset($_POST["posicao"])) {
                ?>

                    <h3><?php echo numero_primo($_POST["posicao"]); ?></h3>


                <?php
                }
                ?>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
</body>

</html>