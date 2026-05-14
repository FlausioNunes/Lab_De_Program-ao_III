<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Questoes_PHP</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

<div class="container">

<div class="row">
<h1 class="mt-4">Calcular IMC</h1>

<form action="q1.php" method="POST">

<div class="mb-3">
<label class="form-label">Peso em KG</label>
<input type="number" step="0.01" class="form-control" name="Peso">
</div>

<div class="mb-3">
<label class="form-label">Altura em Metros</label>
<input type="number" step="0.01" class="form-control" name="Altura">
</div>

<button type="submit" class="btn btn-success">Enviar</button>
<button type="reset" class="btn btn-danger">Limpar</button>

</form>
</div>



<div class="row">
<h1 class="mt-4">Sistema de faturamento</h1>

<form action="q2.php" method="POST">

<div class="mb-3">
<label class="form-label">Modelo de carro</label>
<select class="form-control" name="Carro">
<option value="popular">Popular</option>
<option value="luxo">Luxo</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Quantidade de dias</label>
<input type="number" class="form-control" name="Dias">
</div>

<div class="mb-3">
<label class="form-label">Quantidade de Quilômetros</label>
<input type="number" class="form-control" name="Km">
</div>

<button type="submit" class="btn btn-success">Enviar</button>
<button type="reset" class="btn btn-danger">Limpar</button>

</form>
</div>



<div class="row">
<h1 class="mt-4">Vida Saudável</h1>

<form action="q3.php" method="POST">

<div class="mb-3">
<label class="form-label">Horas de atividade mensais</label>
<input type="number" class="form-control" name="Horas">
</div>

<button type="submit" class="btn btn-success">Enviar</button>
<button type="reset" class="btn btn-danger">Limpar</button>

</form>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>