<!DOCTYPE html>
<?php
function fibonacci($n1)
{
    $sequencia = array();
    $sequencia[1] = 2;
    $sequencia[2] = 2;

    for ($i = 3; $i < $n1; $i++) {
        $sequencia[$i] = $sequencia[$i - 1] + $sequencia[$i - 2];
    }
    return $sequencia[$n1 - 1];
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
            background: linear-gradient(90deg, rgba(135, 228, 247, 1) 0%, rgba(9, 107, 121, 1) 53%, rgba(83, 78, 176, 1) 100%);
            height: 100vh;
            color: white;
            text-align: center;
            align-items: center;
            justify-content: center;

        }

        .formulario {
            width: 100%;
            margin: auto;
            padding: 25px;
            border: solid 1px;

        }

        .conteiner {
            border-radius: 25px;
            box-shadow: 3px 2px 10px rgb(78, 78, 78);
            color: white;
            background-color: #00d4ff;
        }

        .resultado {
            height: 5vh;
            color: white;
            text-align: center;
            align-items: center;
            justify-content: center;
            border-radius: 25px;
            box-shadow: 3px 2px 10px rgb(78, 78, 78);
            background-color: #00d4ff;
        }
        .form-control{
            align-items: center;
            justify-content: center;
            text-align: center;

        }
    </style>
</head>

<body class="formulario">
    <h1>Calculadora Fibonacci</h1>
    <form method="post">
        <div class="conteiner">
            <div class="mb-3">
                <label class="form-label">Posicao</label>
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
         
                    <h3><?php echo fibonacci($_POST["posicao"]); ?></h3>
            

            <?php
            }
            ?>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>