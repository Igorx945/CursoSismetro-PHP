<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(red, orange);
            height: 100vh;
        }


        .formulario {
            width: 100%;
            margin: auto;
            padding: 25px;
            border: solid 1px;
        }
    </style>
</head>

<body class="formulario">
    <form  method="post">
        <div class="mb-3">
            <label class="form-label">Posicao</label>
            <input type="text" name="posicao" class="form-control" placeholder="posicao da sequencia de fibonacci" value="<?php if(isset($_POST["posicao"])) echo $_POST["posicao"]; ?>">;
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>