<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_6</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<body>

<div class="container">
    <div class="row">
        <h2 class="mt-4">Maratona de Programacao</h2>

        <form action="q1.php" method="POST">

            
            <div class="mb-3">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="nome" required>
            </div>


            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <select class="form-select" name="categoria" required>
                    <option value="">Selecione</option>
                    <option value="Iniciante">Iniciante</option>
                    <option value="Intermediario">Intermediario</option>
                    <option value="Avancado">Avancado</option>
                </select>
            </div>

           
            <div class="mb-3">
                <label class="form-label">Linguagem Principal</label><br>

                <input type="radio" name="linguagem" value="Python"> Python <br>
                <input type="radio" name="linguagem" value="Java"> Java <br>
                <input type="radio" name="linguagem" value="PHP"> PHP <br>
                <input type="radio" name="linguagem" value="C++"> C++
            </div>

           
            <div class="mb-3">
                <label class="form-label">Areas de Interesse</label><br>

                <input type="checkbox" name="areas[]" value="Desenvolvimento Web"> Desenvolvimento Web <br>
                <input type="checkbox" name="areas[]" value="Inteligencia Artificial"> Inteligencia Artificial <br>
                <input type="checkbox" name="areas[]" value="Banco de Dados"> Banco de Dados <br>
                <input type="checkbox" name="areas[]" value="Seguranca da Informacao"> Seguranca da Informacao
            </div>

            
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-danger">Apagar</button>

        </form>
   
        <h2>Consulta de Linguagens</h2>

        <form action="q2.php" method="GET">

        <div class="mb-3">
        <label class="form-label">Digite uma linguagem</label>
        <input type="text" class="form-control" name="linguagem">
        </div>

    <button type="submit" class="btn btn-success">Buscar</button>
    <button type="reset" class="btn btn-danger">Limpar</button>

</form>




</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>