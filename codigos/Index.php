<?php
$pageTitulo = "CPS - Home";
$heroTitulo = "Aprenda. Evolua.<br><span class='highlight'>Destaque-se.</span>";
$heroSubtitulo = "Cursos com foco no mercado real.";
$heroDesc = "Mais de 2000 alunos formados. Professores experientes. Certificado reconhecido.";
$heroBadge = "Etec da Zona Leste";

$stats = [
    ["numero" => "2000+", "label" => "Alunos Formados"],
    ["numero" => "6",     "label" => "Cursos Disponíveis"],
    ["numero" => "99%",   "label" => "Satisfação dos Alunos"],
];

$features = [
    ["icon" => "🎯", "titulo" => "Conteúdo Focado",        "desc" => "Currículo desenvolvido com base nas demandas reais do mercado."],
    ["icon" => "🧑‍🏫", "titulo" => "Professores Experientes","desc" => "Instrutores com atuação ativa na indústria, trazendo casos reais para sala de aula."],
    ["icon" => "📜", "titulo" => "Certificado Reconhecido", "desc" => "Certificação valorizada pelas principais empresas do mercado."],
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
        <li class="nav-item"><a class="nav-link active" href="index.php"><?php echo "Home"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="cursos.php"><?php echo "Cursos"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="contato.php"><?php echo "Contato"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="gestao.php"><?php echo "Gestão"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="cadastro.php"><?php echo "Cadastro"; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero-section">
  <div class="container text-center">
    <div class="hero-badge"><?php echo $heroBadge; ?></div>
    <h1 class="hero-title"><?php echo $heroTitulo; ?></h1>
    <h2 class="hero-subtitle"><?php echo $heroSubtitulo; ?></h2>
    <p class="hero-desc"><?php echo $heroDesc; ?></p>
    <div class="hero-btns">
      <a href="cursos.php" class="btn btn-primary-custom"><?php echo "Ver Cursos"; ?></a>
      <a href="contato.php" class="btn btn-outline-custom"><?php echo "Falar Conosco"; ?></a>
    </div>
  </div>
  <div class="hero-bg-shape"></div>
</section>

<section class="stats-section">
  <div class="container">
    <div class="row text-center g-4">
      <?php foreach ($stats as $stat): ?>
      <div class="col-md-4">
        <div class="stat-card">
          <div class="stat-number"><?php echo $stat['numero']; ?></div>
          <div class="stat-label"><?php echo $stat['label']; ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="features-section">
  <div class="container">
    <h2 class="section-title text-center"><?php echo "Um pouco sobre"; ?></h2>
    <div class="row g-4 mt-3">
      <?php foreach ($features as $f): ?>
      <div class="col-md-4">
        <div class="feature-card">
          <div class="feature-icon"><?php echo $f['icon']; ?></div>
          <h2 class="feature-title"><?php echo $f['titulo']; ?></h2>
          <p><?php echo $f['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
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