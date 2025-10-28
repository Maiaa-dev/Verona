<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá, bem-vindo(a)!</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="principal">
            <div class="esquerda">
                <br>
                <h1 class="tx1">Login</h1><br>
                <form action="login.php" method="post" id="formu">
                <div class="mb-3 caixa">
                    <label for="InputEmail" class="form-label text-white fonteInput">Email</label>
                    <input type="email" class="form-control" id="InputEmail" name="email">
                </div>
                <div class="mb-3 caixa">
                    <label for="InputSenha" class="form-label text-white fonteInput">Senha</label>
                    <input type="password" class="form-control" id="InputSenha" name="senha">
                </div>
                <div class="col-12">
                        <button type="submit" class="btn text-white botao">Entrar</button>
                </div>
                </form>
            </div>
            <hr class="divisao">
            <div class="direita">
                <br>
                <h1 class="tx1">Cadastro</h1>
                <form class="row g-3" action="cadastro.php" method="post">
                    <div class="col-md-6">
                        <label for="InputNome" class="form-label text-white fonteInput">Nome</label>
                        <input type="text" class="form-control" id="InputNome" name="nome">
                    </div>
                    <div class="col-md-6">
                        <label for="InputSobren" class="form-label text-white fonteInput">Sobrenome</label>
                        <input type="text" class="form-control" id="InputSobren" name="sobrenome">
                    </div>
                    <div class="col-6">
                        <label for="InputEmail" class="form-label text-white fonteInput">Email</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="Digite com '@'" name="email">
                    </div>
                    <div class="col-6">
                        <label for="InputData" class="form-label text-white fonteInput">Data de nascimento</label>
                        <input type="date" class="form-control" id="InputData" name="dataNasc">
                    </div>
                    <div class="col-md-6">
                        <label for="InputCpf" class="form-label text-white fonteInput">CPF</label>
                        <input type="text" class="form-control" id="InputCpf" placeholder="Não utilize traços!" name="cpf">
                    </div>
                    <div class="col-md-6">
                        <label for="InputTel" class="form-label text-white fonteInput">Telefone</label>
                        <input type="tel" class="form-control" id="InputTel" name="tel">
                    </div>
                    <div class="col-md-6">
                        <label for="InputSenha" class="form-label text-white fonteInput">Crie uma senha</label>
                        <input type="password" class="form-control" id="InputSenha" name="criesenha">
                    </div>
                    <div class="col-md-6">
                        <label for="InputConfs" class="form-label text-white fonteInput">Confirme a senha</label>
                        <input type="password" class="form-control" id="InputConfs" name="confisenha">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn text-white botao">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>