<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca ETEC MCM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
    ?>
    <h2>Formulario para cadastro de livro</h2>
    <div class="container">
    <form>
        <div class="mb-3">
            <input placeholder="Digite o título do livro " type="text" class="form-control">
        </div>
        <div class="mb-3">
            <input placeholder="Digite o título do livro " type="text" class="form-control">
        </div>
        <div class="mb-3">
            <input placeholder="Digite o título do livro " type="text" class="form-control">
        </div>
        <div class="mb-3">
            <input placeholder="Digite o título do livro " type="text" class="form-control">
        </div>
        <div class="mb-3">
            <input placeholder="Digite quantidade de páginas do Livro " type="text" class="form-control">
        </div>
        <a href="index.php" type="button" class="btn btn-danger">Voltar</a>
        <a href="pedaco.pho" type="button" class="btn btn-danger">Cadastrar</a>
    </form>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>