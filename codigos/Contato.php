<?php
$pageTitulo = "CPS - Contato";
$tituloSecao = "Entre em contato com nossa secretária";
$subtituloSecao = "Preencha o formulário abaixo e entraremos em contato em breve.";

$infoCards = [
    ["icon" => "📍", "titulo" => "Endereço",  "info" => "Rua Exemplo, 123 - Zona Leste, São Paulo - SP"],
    ["icon" => "📞", "titulo" => "Telefone",  "info" => "(11) 1234-5678"],
    ["icon" => "📧", "titulo" => "E-mail",    "info" => "contato@eteczonaleste.edu.br"],
    ["icon" => "🕐", "titulo" => "Horário",   "info" => "Segunda a Sexta: 7h às 22h"],
];
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

<!-- TICKER -->
<div class="info-ticker" aria-hidden="true">
  <div class="info-ticker-inner">
    <span>Etec Zona Leste — Centro Paula Souza</span>
    <span class="ticker-sep">◆</span>
    <span>6 cursos técnicos disponíveis</span>
    <span class="ticker-sep">◆</span>
    <span>Inscrições abertas para 2026</span>
    <span class="ticker-sep">◆</span>
    <span>Turnos: Manhã, Tarde e Noite</span>
    <span class="ticker-sep">◆</span>
    <span>Etec Zona Leste — Centro Paula Souza</span>
    <span class="ticker-sep">◆</span>
    <span>6 cursos técnicos disponíveis</span>
    <span class="ticker-sep">◆</span>
    <span>Inscrições abertas para 2026</span>
    <span class="ticker-sep">◆</span>
    <span>Turnos: Manhã, Tarde e Noite</span>
    <span class="ticker-sep">◆</span>
  </div>
</div>

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
        <li class="nav-item"><a class="nav-link active" href="Contato.php"><?php echo "Contato"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="Gestao.php"><?php echo "Gestão"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="Cadastro.php"><?php echo "Cadastro"; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="page-hero">
  <div class="container text-center">
    <h1 class="page-title"><?php echo $tituloSecao; ?></h1>
    <p class="page-subtitle"><?php echo $subtituloSecao; ?></p>
  </div>
</section>

<section class="features-section">
  <div class="container">

    <div class="row g-3 mb-5">
      <?php foreach ($infoCards as $card): ?>
      <div class="col-md-3 col-sm-6">
        <div class="stat-card text-center">
          <div style="font-size:1.8rem; margin-bottom:0.5rem;"><?php echo $card['icon']; ?></div>
          <div class="stat-label" style="color:var(--accent2); font-weight:600; margin-bottom:0.3rem;"><?php echo $card['titulo']; ?></div>
          <div style="color:var(--text); font-size:0.85rem;"><?php echo $card['info']; ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="feature-card">
          <h2 class="feature-title mb-4" style="font-size:1.3rem;"><?php echo "📬 Formulário de Contato"; ?></h2>
          <form action="Processa.php" method="POST" novalidate>

            <div class="mb-3">
              <label class="form-label form-label-custom" for="nome"><?php echo "Nome completo"; ?></label>
              <input type="text" class="form-control form-control-custom" id="nome" name="nome" placeholder="Seu nome" required>
            </div>

            <div class="mb-3">
              <label class="form-label form-label-custom" for="endereco"><?php echo "Endereço"; ?></label>
              <input type="text" class="form-control form-control-custom" id="endereco" name="endereco" placeholder="Rua, número, bairro" required>
            </div>

            <div class="mb-3">
              <label class="form-label form-label-custom" for="telefone"><?php echo "Telefone"; ?></label>
              <input type="tel" class="form-control form-control-custom" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
            </div>

            <div class="mb-4">
              <label class="form-label form-label-custom" for="email"><?php echo "E-mail"; ?></label>
              <input type="email" class="form-control form-control-custom" id="email" name="email" placeholder="seu@email.com" required>
            </div>


            <button type="submit" class="btn btn-primary-custom w-100"><?php echo "Enviar Mensagem"; ?></button>
          </form>
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
<script src="Form.js"></script>
</body>
</html>