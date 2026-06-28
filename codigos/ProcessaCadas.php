<?php
$nome       = isset($_POST['nome'])       ? htmlspecialchars(trim($_POST['nome']))       : '';
$cpf        = isset($_POST['cpf'])        ? htmlspecialchars(trim($_POST['cpf']))        : '';
$email      = isset($_POST['email'])      ? htmlspecialchars(trim($_POST['email']))      : '';
$telefone   = isset($_POST['telefone'])   ? htmlspecialchars(trim($_POST['telefone']))   : '';
$nascimento = isset($_POST['nascimento']) ? htmlspecialchars(trim($_POST['nascimento'])) : '';
$curso      = isset($_POST['curso'])      ? htmlspecialchars(trim($_POST['curso']))      : '';

$nascimentoFormatado = $nascimento ? date('d/m/Y', strtotime($nascimento)) : '';

$mensagemPrincipal = "Bem-vindo(a), " . $nome . ". Seu cadastro para o curso de " . $curso . " foi recebido.";
$pageTitulo = "CPS - Cadastro Concluído";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitulo; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Css.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
  <div class="cps-header__container">
    <div class="cps-header__logo">
      <a href="https://www.cps.sp.gov.br/" rel="home" title="Centro Paula Souza">
        <img width="122" height="79" src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2022/09/logo-cps-2022.svg" class="custom-logo" alt="Centro Paula Souza" decoding="async" />
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="Index.php"><?php echo "Home"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="Cursos.php"><?php echo "Cursos"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="Contato.php"><?php echo "Contato"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="Gestao.php"><?php echo "Gestão"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="Cadastro.php"><?php echo "Cadastro"; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="page-hero">
  <div class="container text-center">
    <h1 class="page-title"><?php echo "Cadastro Concluído!"; ?></h1>
    <p class="page-subtitle"><?php echo $mensagemPrincipal; ?></p>
  </div>
</section>

<section class="features-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">

        <h2 class="feature-title mb-3" style="font-size:1rem;"><?php echo "Dados cadastrados"; ?></h2>
        <ul class="confirm-data-list">
          <li><strong><?php echo "Nome:"; ?></strong> <?php echo $nome; ?></li>
          <li><strong><?php echo "CPF:"; ?></strong> <?php echo $cpf; ?></li>
          <li><strong><?php echo "Data de nascimento:"; ?></strong> <?php echo $nascimentoFormatado; ?></li>
          <li><strong><?php echo "E-mail:"; ?></strong> <?php echo $email; ?></li>
          <li><strong><?php echo "Telefone:"; ?></strong> <?php echo $telefone; ?></li>
          <li><strong><?php echo "Curso:"; ?></strong> <?php echo $curso; ?></li>
        </ul>

        <div class="text-center mt-4">
          <a href="Index.php" class="btn btn-primary-custom me-2"><?php echo "Voltar para Home"; ?></a>
          <a href="Cursos.php" class="btn btn-outline-custom"><?php echo "Ver Cursos"; ?></a>
        </div>

      </div>
    </div>
  </div>
</section>

<footer class="site-footer">
  <div class="container text-center">
    <p class="footer-brand"><?php echo "CPS"; ?></p>
    <p class="footer-text"><?php echo "© 2026 CPS. Todos os direitos reservados."; ?></p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>