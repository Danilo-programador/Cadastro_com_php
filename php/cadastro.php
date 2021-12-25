<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="">
            <form method="POST" action="./tratamento/cadastro.php" class="mt-5 position-absolute top-0 start-50 translate-middle-x">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label fs-5">Nome:</label>
                    <div class="col-sm-20">
                        <input type="text" name="nome" class="form-control" id="inputEmail3" maxlength="40" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label fs-5">Telefone:</label>
                    <div class="col-sm-20">
                        <input type="text" name="telefone" class="form-control" id="inputEmail3" maxlength="11" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label fs-5">E-mail:</label>
                    <div class="col-sm-20">
                        <input type="email" name="email" class="form-control" id="inputEmail3" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label fs-5">Senha:</label>
                    <div class="col-sm-20">
                        <input type="password" name="senha" class="form-control" id="inputPassword3" required>
                    </div>
                </div>
                <div>
                    <button type="submit" name="cadastrar" class="btn btn-primary p-2">Cadastrar</button>
                    <button type="reset" name="limpar" class="btn btn-primary p-2">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>