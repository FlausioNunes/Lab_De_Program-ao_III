<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulários</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

  
  <div class="row mb-5">
    <h1>Aprovação Escolar</h1>
    <form action="q1.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Nota 1</label>
        <input type="number" step="0.01" class="form-control" name="not1" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nota 2</label>
        <input type="number" step="0.01" class="form-control" name="not2" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nota 3</label>
        <input type="number" step="0.01" class="form-control" name="not3" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Frequência (%)</label>
        <input type="number" step="0.01" class="form-control" name="freq" required>
      </div>
      <button type="submit" class="btn btn-success">Enviar</button>
      <button type="reset" class="btn btn-danger">Limpar</button>
    </form>
  </div>

  <!-- Formulário Tarifa de Energia -->
  <div class="row mb-5">
    <h1>Tarifa de Energia</h1>
    <form action="q2.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Tipo de Instalação</label>
        <select class="form-select" name="lugar" required>
          <option value="">Selecione</option>
          <option value="1">Residencial</option>
          <option value="2">Industrial</option>
          <option value="3">Comercial</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Quantidade de kWh</label>
        <input type="number" step="0.01" class="form-control" name="quant" required>
      </div>
      <button type="submit" class="btn btn-success">Calcular</button>
      <button type="reset" class="btn btn-danger">Limpar</button>
    </form>
  </div>


<div class="row mb-5">
  <h1>Sistema de Descontos</h1>
  <form action="q3.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Valor da Compra</label>
      <input type="number" step="0.01" class="form-control" name="valor" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Categoria do Cliente</label>
      <select class="form-select" name="categoria" required>
        <option value="">Selecione</option>
        <option value="comum">Cliente Comum</option>
        <option value="vip">Cliente VIP</option>
        <option value="premium">Cliente Premium</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Calcular Desconto</button>
    <button type="reset" class="btn btn-danger">Limpar</button>
  </form>
</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>