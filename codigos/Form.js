/* ================================================
   FORM.JS — CPS Etec Zona Leste
   Validação client-side dos formulários de Contato
   e Cadastro de Aluno.
   ================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ===== EXPRESSÕES REGULARES ===== */
  var REGEX = {
    nome:     /^[A-Za-zÀ-ÖØ-öø-ÿ]+(\s[A-Za-zÀ-ÖØ-öø-ÿ]+)+$/,
    telefone: /^\(\d{2}\)\s?\d{4,5}-\d{4}$/,
    email:    /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/,
    cpf:      /^\d{3}\.\d{3}\.\d{3}-\d{2}$/,
    senha:    /^(?=.*[A-Za-z])(?=.*\d).{6,}$/
  };

  /* ===== Helpers de erro (compartilhados) ===== */
  function getErroEl(input) {
    var erroId = input.id + '-erro';
    var erroEl = document.getElementById(erroId);
    if (!erroEl) {
      erroEl = document.createElement('div');
      erroEl.id = erroId;
      erroEl.className = 'erro-validacao';
      erroEl.style.color = '#e3342f';
      erroEl.style.fontSize = '0.8rem';
      erroEl.style.marginTop = '0.3rem';
      erroEl.style.display = 'none';
      input.insertAdjacentElement('afterend', erroEl);
    }
    return erroEl;
  }

  function mostrarErro(input, mensagem) {
    input.classList.add('is-invalid');
    input.style.borderColor = '#e3342f';
    var erroEl = getErroEl(input);
    erroEl.textContent = mensagem;
    erroEl.style.display = 'block';
  }

  function limparErro(input) {
    input.classList.remove('is-invalid');
    input.style.borderColor = '';
    var erroEl = getErroEl(input);
    erroEl.style.display = 'none';
    erroEl.textContent = '';
  }

  function mostrarSucesso(input) {
    input.classList.remove('is-invalid');
    input.classList.add('is-valid');
    input.style.borderColor = '#1a9e5c';
  }

  /* ===== Helpers de erro específicos para checkbox (termos) ===== */
  function getErroElCheckbox(input) {
    var erroId = input.id + '-erro';
    var erroEl = document.getElementById(erroId);
    if (!erroEl) {
      erroEl = document.createElement('div');
      erroEl.id = erroId;
      erroEl.className = 'erro-validacao';
      erroEl.style.color = '#cc0000';
      erroEl.style.fontSize = '0.8rem';
      erroEl.style.marginTop = '0.3rem';
      erroEl.style.display = 'none';
      // Para checkbox, o erro vai depois do elemento pai (.form-check-custom)
      var container = input.closest('.form-check-custom') || input.parentElement;
      container.insertAdjacentElement('afterend', erroEl);
    }
    return erroEl;
  }

  function mostrarErroCheckbox(input, mensagem) {
    var erroEl = getErroElCheckbox(input);
    erroEl.textContent = mensagem;
    erroEl.style.display = 'block';
  }

  function limparErroCheckbox(input) {
    var erroEl = getErroElCheckbox(input);
    erroEl.style.display = 'none';
    erroEl.textContent = '';
  }

  /* ============================================================
     FORMULÁRIO DE CONTATO (contato.php)
     ============================================================ */
  (function initFormContato() {
    var form = document.querySelector('form[action="Processa.php"]');
    if (!form) return;

    var campos = {
      nome:     document.getElementById('nome'),
      endereco: document.getElementById('endereco'),
      telefone: document.getElementById('telefone'),
      email:    document.getElementById('email')
    };

    function validarNome() {
      var valor = campos.nome.value.trim();
      if (valor === '') { mostrarErro(campos.nome, 'Por favor, informe seu nome completo.'); return false; }
      if (!REGEX.nome.test(valor)) { mostrarErro(campos.nome, 'Informe nome e sobrenome, apenas letras.'); return false; }
      mostrarSucesso(campos.nome);
      return true;
    }

    function validarEndereco() {
      var valor = campos.endereco.value.trim();
      if (valor === '') { mostrarErro(campos.endereco, 'Por favor, informe seu endereço.'); return false; }
      if (valor.length < 5) { mostrarErro(campos.endereco, 'Endereço muito curto. Informe rua e número.'); return false; }
      mostrarSucesso(campos.endereco);
      return true;
    }

    function validarTelefone() {
      var valor = campos.telefone.value.trim();
      if (valor === '') { mostrarErro(campos.telefone, 'Por favor, informe seu telefone.'); return false; }
      if (!REGEX.telefone.test(valor)) { mostrarErro(campos.telefone, 'Telefone inválido. Use o formato (11) 99999-9999.'); return false; }
      mostrarSucesso(campos.telefone);
      return true;
    }

    function validarEmail() {
      var valor = campos.email.value.trim();
      if (valor === '') { mostrarErro(campos.email, 'Por favor, informe seu e-mail.'); return false; }
      if (!REGEX.email.test(valor)) { mostrarErro(campos.email, 'E-mail inválido. Verifique o formato digitado.'); return false; }
      mostrarSucesso(campos.email);
      return true;
    }

    var validadores = {
      nome: validarNome,
      endereco: validarEndereco,
      telefone: validarTelefone,
      email: validarEmail
    };

    Object.keys(campos).forEach(function (chave) {
      campos[chave].addEventListener('blur', validadores[chave]);
      campos[chave].addEventListener('input', function () {
        if (campos[chave].classList.contains('is-invalid')) validadores[chave]();
      });
    });

    form.addEventListener('submit', function (evento) {
      evento.preventDefault();

      var nomeOk     = validarNome();
      var enderecoOk = validarEndereco();
      var telefoneOk = validarTelefone();
      var emailOk    = validarEmail();

      var tudoValido = nomeOk && enderecoOk && telefoneOk && emailOk;

      if (tudoValido) {
        form.submit();
        return;
      }

      var primeiroInvalido = form.querySelector('.is-invalid');
      if (primeiroInvalido) primeiroInvalido.focus();
    });
  })();

  /* ============================================================
     FORMULÁRIO DE CADASTRO (cadastro.php)
     ============================================================ */
  (function initFormCadastro() {
    var form = document.getElementById('form-cadastro');
    if (!form) return;

    var campos = {
      nome:        document.getElementById('cad-nome'),
      cpf:         document.getElementById('cad-cpf'),
      email:       document.getElementById('cad-email'),
      telefone:    document.getElementById('cad-telefone'),
      nascimento:  document.getElementById('cad-nascimento'),
      curso:       document.getElementById('cad-curso'),
      senha:       document.getElementById('cad-senha'),
      confirmaSenha: document.getElementById('cad-confirma-senha')
    };

    /* Máscara automática de CPF: 000.000.000-00 */
    campos.cpf.addEventListener('input', function () {
      var v = campos.cpf.value.replace(/\D/g, '').slice(0, 11);
      if (v.length > 9) v = v.replace(/^(\d{3})(\d{3})(\d{3})(\d{1,2})$/, '$1.$2.$3-$4');
      else if (v.length > 6) v = v.replace(/^(\d{3})(\d{3})(\d{1,3})$/, '$1.$2.$3');
      else if (v.length > 3) v = v.replace(/^(\d{3})(\d{1,3})$/, '$1.$2');
      campos.cpf.value = v;
    });

    /* Máscara automática de telefone: (00) 00000-0000 */
    campos.telefone.addEventListener('input', function () {
      var v = campos.telefone.value.replace(/\D/g, '').slice(0, 11);
      if (v.length > 6) v = v.replace(/^(\d{2})(\d{4,5})(\d{0,4})$/, '($1) $2-$3');
      else if (v.length > 2) v = v.replace(/^(\d{2})(\d{0,5})$/, '($1) $2');
      else if (v.length > 0) v = v.replace(/^(\d{0,2})$/, '($1');
      campos.telefone.value = v.trim();
    });

    function validarNome() {
      var valor = campos.nome.value.trim();
      if (valor === '') { mostrarErro(campos.nome, 'Por favor, informe seu nome completo.'); return false; }
      if (!REGEX.nome.test(valor)) { mostrarErro(campos.nome, 'Informe nome e sobrenome, apenas letras.'); return false; }
      mostrarSucesso(campos.nome);
      return true;
    }

    function validarCpf() {
      var valor = campos.cpf.value.trim();
      if (valor === '') { mostrarErro(campos.cpf, 'Por favor, informe seu CPF.'); return false; }
      if (!REGEX.cpf.test(valor)) { mostrarErro(campos.cpf, 'CPF inválido. Use o formato 000.000.000-00.'); return false; }
      mostrarSucesso(campos.cpf);
      return true;
    }

    function validarEmail() {
      var valor = campos.email.value.trim();
      if (valor === '') { mostrarErro(campos.email, 'Por favor, informe seu e-mail.'); return false; }
      if (!REGEX.email.test(valor)) { mostrarErro(campos.email, 'E-mail inválido. Verifique o formato digitado.'); return false; }
      mostrarSucesso(campos.email);
      return true;
    }

    function validarTelefone() {
      var valor = campos.telefone.value.trim();
      if (valor === '') { mostrarErro(campos.telefone, 'Por favor, informe seu telefone.'); return false; }
      if (!REGEX.telefone.test(valor)) { mostrarErro(campos.telefone, 'Telefone inválido. Use o formato (11) 99999-9999.'); return false; }
      mostrarSucesso(campos.telefone);
      return true;
    }

    function validarNascimento() {
      var valor = campos.nascimento.value;
      if (valor === '') { mostrarErro(campos.nascimento, 'Por favor, informe sua data de nascimento.'); return false; }
      var dataNasc = new Date(valor + 'T00:00:00');
      var hoje = new Date();
      var idade = hoje.getFullYear() - dataNasc.getFullYear();
      var aindaNaoFezAniversario = (hoje.getMonth() < dataNasc.getMonth()) ||
        (hoje.getMonth() === dataNasc.getMonth() && hoje.getDate() < dataNasc.getDate());
      if (aindaNaoFezAniversario) idade--;
      if (dataNasc > hoje) { mostrarErro(campos.nascimento, 'Data de nascimento inválida.'); return false; }
      if (idade < 14) { mostrarErro(campos.nascimento, 'É necessário ter ao menos 14 anos para se cadastrar.'); return false; }
      if (idade > 110) { mostrarErro(campos.nascimento, 'Data de nascimento inválida.'); return false; }
      mostrarSucesso(campos.nascimento);
      return true;
    }

    function validarCurso() {
      var valor = campos.curso.value;
      if (valor === '') { mostrarErro(campos.curso, 'Selecione o curso de seu interesse.'); return false; }
      mostrarSucesso(campos.curso);
      return true;
    }

    function validarSenha() {
      var valor = campos.senha.value;
      if (valor === '') { mostrarErro(campos.senha, 'Por favor, crie uma senha.'); return false; }
      if (!REGEX.senha.test(valor)) { mostrarErro(campos.senha, 'A senha deve ter ao menos 6 caracteres, com letras e números.'); return false; }
      mostrarSucesso(campos.senha);
      if (campos.confirmaSenha.value !== '') validarConfirmaSenha();
      return true;
    }

    function validarConfirmaSenha() {
      var valor = campos.confirmaSenha.value;
      if (valor === '') { mostrarErro(campos.confirmaSenha, 'Confirme a senha digitada.'); return false; }
      if (valor !== campos.senha.value) { mostrarErro(campos.confirmaSenha, 'As senhas não coincidem.'); return false; }
      mostrarSucesso(campos.confirmaSenha);
      return true;
    }

    var termos = document.getElementById('cad-termos');

    function validarTermos() {
      if (!termos) return true;
      if (!termos.checked) {
        mostrarErroCheckbox(termos, 'Você precisa aceitar os termos para continuar.');
        return false;
      }
      limparErroCheckbox(termos);
      return true;
    }

    var validadores = {
      nome: validarNome,
      cpf: validarCpf,
      email: validarEmail,
      telefone: validarTelefone,
      nascimento: validarNascimento,
      curso: validarCurso,
      senha: validarSenha,
      confirmaSenha: validarConfirmaSenha
    };

    Object.keys(campos).forEach(function (chave) {
      var evento = (campos[chave].tagName === 'SELECT') ? 'change' : 'blur';
      campos[chave].addEventListener(evento, validadores[chave]);
      campos[chave].addEventListener('input', function () {
        if (campos[chave].classList.contains('is-invalid')) validadores[chave]();
      });
    });

    /* Revalida os termos assim que o usuário marca/desmarca a caixa */
    if (termos) {
      termos.addEventListener('change', validarTermos);
    }

    form.addEventListener('submit', function (evento) {
      // Bloqueia o envio por padrão; só libera se TUDO estiver correto.
      evento.preventDefault();

      var nomeOk           = validarNome();
      var cpfOk            = validarCpf();
      var emailOk          = validarEmail();
      var telefoneOk       = validarTelefone();
      var nascimentoOk     = validarNascimento();
      var cursoOk          = validarCurso();
      var senhaOk          = validarSenha();
      var confirmaSenhaOk  = validarConfirmaSenha();
      var termosOk         = validarTermos();

      var tudoValido = nomeOk && cpfOk && emailOk && telefoneOk &&
        nascimentoOk && cursoOk && senhaOk && confirmaSenhaOk && termosOk;

      if (tudoValido) {
        // Envia o formulário de verdade somente quando passou em todas as checagens.
        form.submit();
        return;
      }

      // Foca o primeiro campo de texto/select inválido. Se só os termos
      // estiverem pendentes, rola a tela até a caixa de aceite.
      var primeiroInvalido = form.querySelector('.is-invalid');
      if (primeiroInvalido) {
        primeiroInvalido.focus();
      } else if (!termosOk && termos) {
        termos.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  })();

});