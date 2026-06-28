<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "CPS - Gestão"; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Css.css">
  <style>
    /* ── Card de gestor com foto redonda ── */
    .gestor-card {
      background: #ffffff;
      border: 1px solid #e0e2ee;
      border-radius: 20px;
      padding: 2rem 1.5rem 1.75rem;
      text-align: center;
      transition: transform 0.22s, box-shadow 0.22s, border-color 0.22s;
      height: 100%;
    }
    .gestor-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 40px rgba(2, 2, 132, 0.1);
      border-color: #020284;
    }

    /* Área de foto redonda */
    .gestor-foto-wrap {
      width: 96px;
      height: 96px;
      margin: 0 auto 1.25rem;
    }
    .gestor-foto {
      width: 96px;
      height: 96px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      border: 3px solid #e0e2ee;
      transition: border-color 0.22s, box-shadow 0.22s;
    }
    /* Placeholder com iniciais (quando não há foto real) */
    .gestor-foto-placeholder {
      width: 96px;
      height: 96px;
      border-radius: 50%;
      background: linear-gradient(135deg, #020284 0%, #1a1ab8 100%);
      border: 3px solid #e0e2ee;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.45rem;
      font-weight: 800;
      color: #ffffff;
      font-family: 'Plus Jakarta Sans', sans-serif;
      letter-spacing: 0.04em;
      user-select: none;
      transition: border-color 0.22s, box-shadow 0.22s;
    }
    .gestor-card:hover .gestor-foto,
    .gestor-card:hover .gestor-foto-placeholder {
      border-color: #fab31c;
      box-shadow: 0 0 0 4px rgba(250, 179, 28, 0.2);
    }

    /* Badge de cargo */
    .gestor-cargo {
      display: inline-block;
      background: rgba(2, 2, 132, 0.07);
      color: #020284;
      border: 1px solid rgba(2, 2, 132, 0.15);
      font-family: 'DM Mono', monospace;
      font-size: 0.63rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      padding: 0.28rem 0.8rem;
      border-radius: 999px;
      margin-bottom: 0.6rem;
    }
    .gestor-nome {
      font-size: 0.98rem;
      font-weight: 700;
      color: #0d0e1a;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* Separador de grupo */
    .group-label {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 1.5rem;
      margin-top: 2.75rem;
      font-family: 'DM Mono', monospace;
      font-size: 0.64rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: #6b6e8a;
    }
    .group-label:first-of-type { margin-top: 0; }
    .group-label::after { content: ''; flex: 1; height: 1px; background: #e0e2ee; }
  </style>
</head>
<body>

<!-- TICKER -->
<div class="info-ticker" aria-hidden="true">
  <div class="info-ticker-inner">
    <span>Etec Zona Leste — Centro Paula Souza</span>
    <span class="ticker-sep">◆</span>
    <span>1.200 alunos matriculados</span>
    <span class="ticker-sep">◆</span>
    <span>85 professores</span>
    <span class="ticker-sep">◆</span>
    <span>Taxa de aprovação: 92%</span>
    <span class="ticker-sep">◆</span>
    <span>6 cursos técnicos</span>
    <span class="ticker-sep">◆</span>
    <span>Etec Zona Leste — Centro Paula Souza</span>
    <span class="ticker-sep">◆</span>
    <span>1.200 alunos matriculados</span>
    <span class="ticker-sep">◆</span>
    <span>85 professores</span>
    <span class="ticker-sep">◆</span>
    <span>Taxa de aprovação: 92%</span>
    <span class="ticker-sep">◆</span>
    <span>6 cursos técnicos</span>
    <span class="ticker-sep">◆</span>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
  <div class="cps-header__container">
    <div class="cps-header__logo">
      <a href="https://www.cps.sp.gov.br/" rel="home" title="Centro Paula Souza">
        <img width="122" height="79"
             src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2022/09/logo-cps-2022.svg"
             class="custom-logo" alt="Centro Paula Souza" decoding="async" />
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="index.php"><?php echo "Home"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="cursos.php"><?php echo "Cursos"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="contato.php"><?php echo "Contato"; ?></a></li>
        <li class="nav-item"><a class="nav-link active" href="gestao.php"><?php echo "Gestão"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="cadastro.php"><?php echo "Cadastro"; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container text-center">
    <div class="page-hero-label anim-in"><?php echo "Informações institucionais"; ?></div>
    <h1 class="page-title anim-up d1"><?php echo "Área de Gestão"; ?></h1>
    <p class="page-subtitle anim-up d2"><?php echo "Informações institucionais e indicadores da unidade escolar."; ?></p>
  </div>
</section>

<!-- INDICADORES -->
<section class="stats-section">
  <div class="container">
    <div class="row text-center g-4">

      <div class="col-md-3 col-6 anim-up d1">
        <div class="stat-card">
          <div class="stat-number"><?php echo "1.200"; ?></div>
          <div class="stat-label"><?php echo "Alunos Matriculados"; ?></div>
        </div>
      </div>

      <div class="col-md-3 col-6 anim-up d2">
        <div class="stat-card">
          <div class="stat-number"><?php echo "85"; ?></div>
          <div class="stat-label"><?php echo "Professores"; ?></div>
        </div>
      </div>

      <div class="col-md-3 col-6 anim-up d3">
        <div class="stat-card">
          <div class="stat-number"><?php echo "6"; ?></div>
          <div class="stat-label"><?php echo "Cursos Técnicos"; ?></div>
        </div>
      </div>

      <div class="col-md-3 col-6 anim-up d4">
        <div class="stat-card">
          <div class="stat-number"><?php echo "92%"; ?></div>
          <div class="stat-label"><?php echo "Taxa de Aprovação"; ?></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- EQUIPE GESTORA -->
<section class="features-section" style="padding-top:20px;">
  <div class="container">

    <div class="section-label"><?php echo "Equipe gestora"; ?></div>
    <h2 class="section-title text-center mb-2"><?php echo "Quem nos lidera"; ?></h2>
    <p class="text-center mb-4" style="color:var(--ink3); font-size:0.9rem;">
      <?php echo "Conheça os responsáveis pela direção e coordenação da nossa unidade."; ?>
    </p>

    <!-- DIREÇÃO -->
    <div class="group-label"><?php echo "Direção"; ?></div>
    <div class="row g-4 justify-content-center mb-2">

      <div class="col-md-3 col-sm-6 anim-up d1">
        <div class="gestor-card">
          <div class="gestor-foto-wrap">
            <?php /* Para usar foto real, substitua o div abaixo por:
                     <img src="fotos/ana-paula.jpg" alt="Profa. Ana Paula Silva" class="gestor-foto"> */ ?>
            <div class="gestor-foto-placeholder"><?php echo "AP"; ?></div>
          </div>
          <div class="gestor-cargo"><?php echo "Diretora"; ?></div>
          <div class="gestor-nome"><?php echo "Amanda Perreira "; ?></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 anim-up d2">
        <div class="gestor-card">
          <div class="gestor-foto-wrap">
            <div class="gestor-foto-placeholder"><?php echo "PS"; ?></div>
          </div>
          <div class="gestor-cargo"><?php echo "Diretora de Serviços"; ?></div>
          <div class="gestor-nome"><?php echo "Profa. Patricia Silva"; ?></div>
        </div>
      </div>

    </div>

    <!-- COORDENAÇÃO -->
    <div class="group-label"><?php echo "Coordenação"; ?></div>
    <div class="row g-4 justify-content-center">

      <div class="col-md-3 col-sm-6 anim-up d3">
        <div class="gestor-card">
          <div class="gestor-foto-wrap">
            <div class="gestor-foto-placeholder"><?php echo "AS"; ?></div>
          </div>
          <div class="gestor-cargo"><?php echo "Coord. Técnico"; ?></div>
          <div class="gestor-nome"><?php echo "Profa. Andeza Silva"; ?></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 anim-up d4">
        <div class="gestor-card">
          <div class="gestor-foto-wrap">
            <div class="gestor-foto-placeholder"><?php echo "IV"; ?></div>
          </div>
          <div class="gestor-cargo"><?php echo "Coord. Administrativo"; ?></div>
          <div class="gestor-nome"><?php echo "Profa. Ivonete Alvez"; ?></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PROJETOS INSTITUCIONAIS -->
<section class="features-section" style="padding-top:20px;">
  <div class="container">
    <div class="section-label"><?php echo "Iniciativas"; ?></div>
    <h2 class="section-title text-center mb-4"><?php echo "Projetos Institucionais"; ?></h2>
    <div class="row g-4">

      <div class="col-md-4 anim-up d1">
        <div class="feature-card">
          <div class="feature-icon"><?php echo "🌱"; ?></div>
          <div class="projeto-status"><?php echo "Em andamento"; ?></div>
          <h2 class="feature-title"><?php echo "Projeto Verde CPS"; ?></h2>
          <p><?php echo "Iniciativa de sustentabilidade com horta escolar, coleta seletiva e conscientização ambiental."; ?></p>
        </div>
      </div>

      <div class="col-md-4 anim-up d2">
        <div class="feature-card">
          <div class="feature-icon"><?php echo "🤝"; ?></div>
          <div class="projeto-status"><?php echo "Ativo"; ?></div>
          <h2 class="feature-title"><?php echo "Parceria Empresarial"; ?></h2>
          <p><?php echo "Convênios com mais de 30 empresas da região para estágio e empregabilidade dos alunos."; ?></p>
        </div>
      </div>

      <div class="col-md-4 anim-up d3">
        <div class="feature-card">
          <div class="feature-icon"><?php echo "📚"; ?></div>
          <div class="projeto-status"><?php echo "Em andamento"; ?></div>
          <h2 class="feature-title"><?php echo "Nivelamento Digital"; ?></h2>
          <p><?php echo "Programa de inclusão digital para alunos ingressantes com oficinas gratuitas de informática."; ?></p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="container text-center">
    <p class="footer-brand"><?php echo "CPS"; ?></p>
    <p class="footer-text"><?php echo "© 2026 Centro Paula Souza — Etec Zona Leste. Todos os direitos reservados."; ?></p>
    <div class="footer-links">
      <a href="index.php"><?php echo "Home"; ?></a>
      <a href="cursos.php"><?php echo "Cursos"; ?></a>
      <a href="contato.php"><?php echo "Contato"; ?></a>
      <a href="gestao.php"><?php echo "Gestão"; ?></a>
      <a href="cadastro.php"><?php echo "Cadastro"; ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>