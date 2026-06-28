<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "CPS - Cursos"; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <li class="nav-item"><a class="nav-link active" href="cursos.php"><?php echo "Cursos"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="contato.php"><?php echo "Contato"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="gestao.php"><?php echo "Gestão"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="cadastro.php"><?php echo "Cadastro"; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container text-center">
    <div class="page-hero-label anim-in"><?php echo "Catálogo de cursos"; ?></div>
    <h1 class="page-title anim-up d1"><?php echo "Nossos Cursos"; ?></h1>
    <p class="page-subtitle anim-up d2"><?php echo "Encontre o curso ideal pelo turno que melhor se encaixa na sua rotina."; ?></p>
  </div>
</section>

<!-- CURSOS POR TURNO -->
<section class="features-section">
  <div class="container">

    <div class="section-label"><?php echo "Formação técnica"; ?></div>
    <h2 class="section-title text-center mb-2"><?php echo "Cursos por turno"; ?></h2>
    <p class="text-center mb-4" style="color:var(--ink3); font-size:0.9rem;">
      <?php echo "Cursos dvididos em técnico e médio-técnico. Filtre pelo turno desejado."; ?>
    </p>

    <!-- FILTRO -->
    <div class="turno-tabs">
      <button class="turno-tab active" data-turno="todos" onclick="filtrarTurno('todos',this)">
        <span class="tab-dot"></span><?php echo "Todos os turnos"; ?>
      </button>
      <button class="turno-tab" data-turno="manha" onclick="filtrarTurno('manha',this)">
        <span class="tab-dot"></span><?php echo "☀️ Manhã"; ?>
      </button>
      <button class="turno-tab" data-turno="tarde" onclick="filtrarTurno('tarde',this)">
        <span class="tab-dot"></span><?php echo "🌤️ Tarde"; ?>
      </button>
      <button class="turno-tab" data-turno="noite" onclick="filtrarTurno('noite',this)">
        <span class="tab-dot"></span><?php echo "🌙 Noite"; ?>
      </button>
    </div>

    <!-- ════════════════════════════
         MANHÃ — 4 cursos
         ════════════════════════════ -->
    <div class="turno-block" id="block-manha">
      <div class="turno-header">
        <div class="turno-pill manha"><span class="pill-dot"></span><?php echo "M-Tec manhã — 7h às 12h45min"; ?></div>
        <div class="turno-divider"></div>
        <span class="turno-count"><?php echo "4 cursos"; ?></span>
      </div>
      <div class="row g-4 mb-2">

        <div class="col-md-4 anim-up d1">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Desenvolvimento de Sistemas"; ?></h2>
            <p><?php echo "Aprenda lógica de programação, desenvolvimento web, banco de dados e muito mais."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 anos"; ?></span>
              <span class="curso-badge badge-manha"><?php echo "☀️ Manhã"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        <div class="col-md-4 anim-up d2">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Administração"; ?></h2>
            <p><?php echo "Gestão empresarial, finanças e planejamento estratégico."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 anos"; ?></span>
              <span class="curso-badge badge-manha"><?php echo "☀️ Manhã"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        <div class="col-md-4 anim-up d3">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Recursos Humano"; ?></h2>
            <p><?php echo " Recrutamento e seleção, treinamento e desenvolvimento e gestão de desempenho."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 anos"; ?></span>
              <span class="curso-badge badge-manha"><?php echo "☀️ Manhã"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        <div class="col-md-4 anim-up d4">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Contabilidade"; ?></h2>
            <p><?php echo "Fundamentos da contabilidade, utilização com empresas e pessoas."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 anos"; ?></span>
              <span class="curso-badge badge-manha"><?php echo "☀️ Manhã"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

      </div>
    </div>

    <!-- ════════════════════════════
         TARDE — 4 cursos
         ════════════════════════════ -->
    <div class="turno-block" id="block-tarde">
      <div class="turno-header">
        <div class="turno-pill tarde"><span class="pill-dot"></span><?php echo "M-Tec tarde — 13h às 18h15min"; ?></div>
        <div class="turno-divider"></div>
        <span class="turno-count"><?php echo "5 cursos"; ?></span>
      </div>
      <div class="row g-4 mb-2">

        <div class="col-md-4 anim-up d1">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Desenvolvimento de Sistemas-AMS"; ?></h2>
            <p><?php echo "Aprenda lógica de programação, desenvolvimento web, banco de dados com habilitação proficional no superior."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 5 anos"; ?></span>
              <span class="curso-badge badge-tarde"><?php echo "🌤️ Tarde"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        <div class="col-md-4 anim-up d2">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Logistica"; ?></h2>
            <p><?php echo "Produto certo, no local adequado, no momento certo e ao menor custo possível."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 anos"; ?></span>
              <span class="curso-badge badge-tarde"><?php echo "🌤️ Tarde"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        <div class="col-md-4 anim-up d3">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Administração"; ?></h2>
            <p><?php echo "Gestão empresarial, finanças e planejamento estratégico."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 2 anos"; ?></span>
              <span class="curso-badge badge-tarde"><?php echo "🌤️ Tarde"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        <div class="col-md-4 anim-up d4">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Serviços Jurídicos"; ?></h2>
            <p><?php echo "Atividades de suporte, consultoria, gestão e apoio administrativo."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 anos"; ?></span>
              <span class="curso-badge badge-tarde"><?php echo "🌤️ Tarde"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

         <div class="col-md-4 anim-up d4">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Recursos Humanos -AMS "; ?></h2>
            <p><?php echo " Recrutamento e seleção, treinamento e desenvolvimento e gestão de desempenho."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 5 anos"; ?></span>
              <span class="curso-badge badge-tarde"><?php echo "🌤️ Tarde"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>


      </div>
    </div>

    <!-- ════════════════════════════
         NOITE — 5 cursos
         ════════════════════════════ -->
    <div class="turno-block" id="block-noite">
      <div class="turno-header">
        <div class="turno-pill noite"><span class="pill-dot"></span><?php echo "Técnico noturno — Cargas horárias"; ?>
        </div>
        <div class="turno-divider"></div>
        <span class="turno-count"><?php echo "6 cursos"; ?></span>
      </div>
      <div class="row g-4">

        <div class="col-md-4 anim-up d1">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Desenvolvimento de Sistemas"; ?></h2>
            <p><?php echo "Aprenda lógica de programação, desenvolvimento web, banco de dados e muito mais."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 semestre - 1200 horas"; ?></span>
              <span class="curso-badge badge-noite"><?php echo "🌙 Noite"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        <div class="col-md-4 anim-up d2">
          <div class="feature-card curso-card">
            <div class="feature-icon"><?php echo "📊"; ?></div>
            <h2 class="feature-title"><?php echo "Administração"; ?></h2>
            <p><?php echo "Gestão empresarial, finanças, recursos humanos e planejamento estratégico."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 semestre - 1200 horas"; ?></span>
              <span class="curso-badge badge-noite"><?php echo "🌙 Noite"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        
        
        <div class="col-md-4 anim-up d4">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Contabilidade"; ?></h2>
            <p><?php echo "Fundamentos da contabilidade, utilização com empresas e pessoas."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 2 semestres - 800 horas"; ?></span>
              <span class="curso-badge badge-manha"><?php echo "🌙 Noite"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

       <div class="col-md-4 anim-up d2">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Logistica"; ?></h2>
            <p><?php echo "Produto certo, no local adequado, no momento certo e ao menor custo possível."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 semestre - 1200 horas"; ?></span>
              <span class="curso-badge badge-tarde"><?php echo "🌙 Noite"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

         <div class="col-md-4 anim-up d4">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Recursos Humanos "; ?></h2>
            <p><?php echo " Recrutamento e seleção, treinamento e desenvolvimento e gestão de desempenho."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 semestre - 1200 horas"; ?></span>
              <span class="curso-badge badge-tarde"><?php echo "🌙 Noite"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
        </div>

        <div class="col-md-4 anim-up d4">
          <div class="feature-card curso-card">
            <h2 class="feature-title"><?php echo "Serviços Jurídicos"; ?></h2>
            <p><?php echo "Atividades de suporte, consultoria, gestão e apoio administrativo."; ?></p>
            <div class="curso-meta">
              <span class="curso-badge"><?php echo "⏱ 3 semestre - 1200 horas"; ?></span>
              <span class="curso-badge badge-tarde"><?php echo "🌙 Noite"; ?></span>
            </div>
            <a href="contato.php" class="btn btn-azul mt-3" style="width:100%;justify-content:center;"><?php echo "Saiba Mais →"; ?></a>
          </div>
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
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function filtrarTurno(turno, btn) {
  document.querySelectorAll('.turno-tab').forEach(function(t) {
    t.classList.remove('active');
  });
  btn.classList.add('active');

  ['manha', 'tarde', 'noite'].forEach(function(t) {
    var el = document.getElementById('block-' + t);
    if (turno === 'todos' || turno === t) {
      el.classList.remove('hidden');
    } else {
      el.classList.add('hidden');
    }
  });
}
</script>
</body>
</html>