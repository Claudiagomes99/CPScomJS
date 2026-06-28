<?php
$pageTitulo = "CPS - Cadastro";
$tituloSecao = "Faça seu cadastro";
$subtituloSecao = "Preencha seus dados para se inscrever em um de nossos cursos técnicos.";

$cursosDisponiveis = [
    "Administração",
    "Desenvolvimento de Sistemas",
    "Logística",
    "Recursos Humanos",
    "Contabilidade",
    "Marketing",
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
        <li class="nav-item"><a class="nav-link" href="Contato.php"><?php echo "Contato"; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="Gestao.php"><?php echo "Gestão"; ?></a></li>
        <li class="nav-item"><a class="nav-link active" href="Cadastro.php"><?php echo "Cadastro"; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="page-hero">
  <div class="container text-center">
    <div class="page-hero-label anim-in"><?php echo "Inscrições abertas"; ?></div>
    <h1 class="page-title anim-up d1"><?php echo $tituloSecao; ?></h1>
    <p class="page-subtitle anim-up d2"><?php echo $subtituloSecao; ?></p>
  </div>
</section>

<section class="features-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="feature-card">
          <h2 class="feature-title mb-1" style="font-size:1.3rem;"><?php echo "📝 Formulário de Cadastro"; ?></h2>
          <p style="color:var(--ink3); font-size:0.85rem; margin-bottom:0;"><?php echo "Os campos marcados são obrigatórios."; ?></p>

          <form id="form-cadastro" action="ProcessaCadas.php" method="POST" novalidate>

            <div class="form-section-label"><?php echo "Dados pessoais"; ?></div>

            <div class="mb-3">
              <label class="form-label form-label-custom" for="cad-nome"><?php echo "Nome completo"; ?></label>
              <input type="text" class="form-control form-control-custom" id="cad-nome" name="nome" placeholder="Seu nome completo" required>
            </div>

            <div class="form-row mb-3">
              <div>
                <label class="form-label form-label-custom" for="cad-cpf"><?php echo "CPF"; ?></label>
                <input type="text" class="form-control form-control-custom" id="cad-cpf" name="cpf" placeholder="000.000.000-00" maxlength="14" required>
              </div>
              <div>
                <label class="form-label form-label-custom" for="cad-nascimento"><?php echo "Data de nascimento"; ?></label>
                <input type="date" class="form-control form-control-custom" id="cad-nascimento" name="nascimento" required>
              </div>
            </div>

            <div class="form-section-label"><?php echo "Contato"; ?></div>

            <div class="form-row mb-3">
              <div>
                <label class="form-label form-label-custom" for="cad-email"><?php echo "E-mail"; ?></label>
                <input type="email" class="form-control form-control-custom" id="cad-email" name="email" placeholder="seu@email.com" required>
              </div>
              <div>
                <label class="form-label form-label-custom" for="cad-telefone"><?php echo "Telefone"; ?></label>
                <input type="tel" class="form-control form-control-custom" id="cad-telefone" name="telefone" placeholder="(11) 99999-9999" maxlength="15" required>
              </div>
            </div>

            <div class="form-section-label"><?php echo "Curso de interesse"; ?></div>

            <div class="mb-3">
              <label class="form-label form-label-custom" for="cad-curso"><?php echo "Selecione o curso"; ?></label>
              <select class="form-control form-control-custom" id="cad-curso" name="curso" required>
                <option value="" selected disabled><?php echo "Escolha um curso..."; ?></option>
                <?php foreach ($cursosDisponiveis as $curso): ?>
                <option value="<?php echo htmlspecialchars($curso); ?>"><?php echo $curso; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-section-label"><?php echo "Acesso"; ?></div>

            <div class="form-row mb-1">
              <div>
                <label class="form-label form-label-custom" for="cad-senha"><?php echo "Senha"; ?></label>
                <input type="password" class="form-control form-control-custom" id="cad-senha" name="senha" placeholder="Crie uma senha" required>
              </div>
              <div>
                <label class="form-label form-label-custom" for="cad-confirma-senha"><?php echo "Confirmar senha"; ?></label>
                <input type="password" class="form-control form-control-custom" id="cad-confirma-senha" name="confirma_senha" placeholder="Repita a senha" required>
              </div>
            </div>
            <p class="password-hint mb-3"><?php echo "Mínimo de 6 caracteres, com letras e números."; ?></p>

            <div class="form-check-custom">
              <input type="checkbox" id="cad-termos" name="termos">
              <label for="cad-termos">
                <?php echo "Li e aceito os "; ?><a href="#" onclick="return false;"><?php echo "termos de uso"; ?></a><?php echo " e a "; ?><a href="#" onclick="return false;"><?php echo "política de privacidade"; ?></a><?php echo "."; ?>
              </label>
            </div>

            <button type="submit" class="btn btn-primary-custom w-100"><?php echo "Concluir Cadastro"; ?></button>
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
    <div class="footer-links">
      <a href="Index.php"><?php echo "Home"; ?></a>
      <a href="Cursos.php"><?php echo "Cursos"; ?></a>
      <a href="Contato.php"><?php echo "Contato"; ?></a>
      <a href="Gestao.php"><?php echo "Gestão"; ?></a>
      <a href="Cadastro.php"><?php echo "Cadastro"; ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="Form.js"></script>
</body>
</html>