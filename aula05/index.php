<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class= "container" >
        <form action= "processa.php" method= "POST">
    
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form1Example1" class="form-control" name="email"/>
                <label class="form-label" for="form1Example1">Email address</label>
            </div>

         
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form1Example2" class="form-control" name="senha" />
                <label class="form-label" for="form1Example2">Password</label>
            </div>
    
         
                <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <div class="col">

        
               <a href="#!">Forgot password?</a>
            </div>
            </div>

                <input type="submit" class="btn btn-primary btn-block" value="Sign in">
        </form>

    </div>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>