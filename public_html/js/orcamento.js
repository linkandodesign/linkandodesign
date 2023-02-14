existeOrcamento();

function existeOrcamento() {
  const idOrcamento = sessionStorage.getItem("id_orcamento");
  if (idOrcamento) {
    document.querySelector(".existe-mensagem").classList.remove("d-none");
  }
}

function esquecerOrcamento() {
  const step = sessionStorage.removeItem("step");
  const idOrcamento = sessionStorage.removeItem("id_orcamento");
  document.querySelector(".existe-mensagem").classList.add("d-none");
}

function continuarOrcamento() {
  const step = sessionStorage.getItem("step");
  const idOrcamento = sessionStorage.getItem("id_orcamento");
  document.querySelector(".existe-mensagem").classList.add("d-none");
  showStep(step, idOrcamento);
}

function mensagemSucesso(mensagem, step) {
  let tipo = "Valido";
  showMessage(mensagem, tipo, step);
  setTimeout(() => {
    hideMessage(tipo, step);
  }, 5000);
}

function mensagemErro(mensagem, step) {
  let tipo = "Invalido";
  showMessage(mensagem, tipo, step);
  setTimeout(() => {
    hideMessage(tipo, step);
  }, 5000);
}

function mensagemInfo(mensagem, step) {
  let tipo = "Info";
  showMessage(mensagem, tipo, step);
  let timeOutErro = setTimeout(() => {
    hideMessage(tipo, step);
  }, 5000);
  clearTimeout(timeOutErro);
}

function showMessage(msg = "", tipo = "Valido", step = 1) {
  document.getElementById("mensagemInfo1").style.opacity = "0";
  document.getElementById("mensagemInfo1").style.paddingBottom = "0";
  document.getElementById("mensagemInfo1").style.paddingTop = "0";
  document.getElementById("mensagemInfo1").style.height = "0";
  document.getElementById(`mensagem${tipo}${step}`).style.opacity = "1";
  document.getElementById(`mensagem${tipo}${step}`).style.paddingBottom =
    "1rem";
  document.getElementById(`mensagem${tipo}${step}`).style.paddingTop = "1rem";
  document.getElementById(`mensagem${tipo}${step}`).style.height = "auto";
  document.querySelector(`#mensagem${tipo}${step} label`).innerHTML = msg;
  document
    .querySelector(`.progress-bar${step}`)
    .classList.add(`progress${tipo}-active`);
}

function hideMessage(tipo, step) {
  document.getElementById(`mensagem${tipo}${step}`).style.opacity = "0";
  document.getElementById(`mensagem${tipo}${step}`).style.paddingBottom = "0";
  document.getElementById(`mensagem${tipo}${step}`).style.paddingTop = "0";
  document.getElementById(`mensagem${tipo}${step}`).style.height = "0";
  document.getElementById(`pills-${step}`).classList.remove("show", "active");
  document.getElementById(`pills-${step + 1}`).classList.add("show", "active");
  document.getElementById(`pills-${step}-tab`).classList.remove("active");
  document.getElementById(`pills-${step + 1}-tab`).classList.add("active");
  document
    .querySelector(`.progress-bar${step}`)
    .classList.remove(`progress${tipo}-active`);
  switch (step) {
    case 1:
      var scrollDiv =
        document.querySelector(".texto-orcamento").offsetTop - 140;
      window.scrollTo({ top: scrollDiv, behavior: "smooth" });
      document.querySelector(
        ".texto-orcamento"
      ).innerHTML = `<p class="mb-5">Muito bom! Agora queremos entender mais sobre seu negócio.</p>`;
      sessionStorage.setItem("step", 2);
      break;
    case 2:
      var scrollDiv =
        document.querySelector(".texto-orcamento").offsetTop - 140;
      window.scrollTo({ top: scrollDiv, behavior: "smooth" });
      document.querySelector(
        ".texto-orcamento"
      ).innerHTML = `<p>Chegamos! Agora só precisamos de mais estas informações para montar um orçamento mais assertivo.</p>`;
      sessionStorage.setItem("step", 3);
      break;
    default:
      break;
  }
}

function showStep(step, idOrcamento) {
  if (idOrcamento) {
    buscaOrcamento(idOrcamento);
  }
  if (step != null) {
    document.getElementById(`pills-1`).classList.remove("show", "active");
    document.getElementById(`pills-1-tab`).classList.remove("active");
  }
  step = parseInt(step);
  switch (step) {
    case 2:
      document.getElementById(`pills-${step}`).classList.add("show", "active");
      document.getElementById(`pills-${step}-tab`).classList.add("active");
      var scrollDiv =
        document.querySelector(".texto-orcamento").offsetTop - 140;
      window.scrollTo({ top: scrollDiv, behavior: "smooth" });
      document.querySelector(
        ".texto-orcamento"
      ).innerHTML = `<p class="mb-5">Muito bom! Agora queremos entender mais sobre seu negócio.</p>`;
      break;
    case 3:
      document.getElementById(`pills-${step}`).classList.add("show", "active");
      document.getElementById(`pills-${step}-tab`).classList.add("active");
      var scrollDiv =
        document.querySelector(".texto-orcamento").offsetTop - 140;
      window.scrollTo({ top: scrollDiv, behavior: "smooth" });
      document.querySelector(
        ".texto-orcamento"
      ).innerHTML = `<p>Chegamos! Agora só precisamos de mais estas informações para montar um orçamento mais assertivo.</p>`;
      break;
    default:
      break;
  }
}

function voltarForm(step) {
  switch (step) {
    case 2:
      var scrollDiv =
        document.querySelector(".texto-orcamento").offsetTop - 140;
      window.scrollTo({ top: scrollDiv, behavior: "smooth" });
      document.querySelector(
        ".texto-orcamento"
      ).innerHTML = `<p class="mb-5">Para te enviar uma proposta com o orçamento adequado, precisamos que responda algumas perguntas, vamos lá?</p><p>Primeiro, com quem estou falando?</p>`;
      sessionStorage.removeItem("step");
      break;
    case 3:
      var scrollDiv =
        document.querySelector(".texto-orcamento").offsetTop - 140;
      window.scrollTo({ top: scrollDiv, behavior: "smooth" });
      document.querySelector(
        ".texto-orcamento"
      ).innerHTML = `<p class="mb-5">Muito bom! Agora queremos entender mais sobre seu negócio.</p>`;
      sessionStorage.setItem("step", 2);
      break;
    default:
      break;
  }
  document.getElementById(`pills-${step}`).classList.remove("show", "active");
  document.getElementById(`pills-${step - 1}`).classList.add("show", "active");
  document.getElementById(`pills-${step}-tab`).classList.remove("active");
  document.getElementById(`pills-${step - 1}-tab`).classList.add("active");
}

function mascaraFone(evt) {
  evt.target.value = evt.target.value
    .replace(/[^0-9.]/g, "")
    .replace(/(\..*?)\..*/g, "$1")
    .substring(0, 12);
}
document.getElementById("whatsapp").addEventListener("input", mascaraFone);

document
  .getElementById("whatsapp")
  .addEventListener("focusout", buscaPrimeiroForm);

function mascaraEmail() {
  buscaPrimeiroForm();
  let input = document.getElementById("email");
  let re = /\S+@\S+\.\S+/;
  let valida = re.test(input.value);
  if (valida == true || input.value == "") {
    input.classList.remove("is-invalid");
  } else {
    input.classList.add("is-invalid");
  }
}
document.getElementById("email").addEventListener("focusout", mascaraEmail);

function primeiroForm(event) {
  event.preventDefault();
  grecaptcha.ready(function () {
    grecaptcha
      .execute("6Ld6bzgkAAAAAAg2_dNUDcSHb32fTnOUdmNWY1Rc", { action: "submit" })
      .then(function (token) {
        const form = document.querySelector("form#primeiroForm");
        let valida = validaPrimeiroForm(form);
        if (valida === true) {
          const nomeResponsavel = form.nomeResponsavel.value;
          const cargoResponsavel = form.cargoResponsavel.value;
          const tempoTrabalho = form.tempoTrabalho.value;
          const redeSiteEmpresa = form.redeSiteEmpresa.value;
          const optionPais = form.paisFone;
          const paisFone = optionPais.options[optionPais.selectedIndex].value;
          const whatsapp = form.whatsapp.value;
          const email = form.email.value;
          const cidade = form.cidade.value;
          const option = form.comoEncontrou;
          const comoEncontrou = option.options[option.selectedIndex].value;
          const idOrcamento = document.getElementById("idOrcamento").value;
          const dataInsert = document.getElementById("dataInsert").value;
          const dataUpdate = document.getElementById("dataUpdate").value;
          fetch("primeiroForm", {
            method: "POST",
            body: JSON.stringify({
              idOrcamento,
              token,
              dataInsert,
              dataUpdate,
              nomeResponsavel,
              cargoResponsavel,
              tempoTrabalho,
              redeSiteEmpresa,
              paisFone,
              whatsapp,
              email,
              cidade,
              comoEncontrou,
            }),
          })
            .then((response) => {
              if (response.ok) {
                mensagemSucesso("Sucesso!", 1);
              }
            })
            .catch((error) => {
              mensagemErro(error, 1);
            });
        }
      });
  });
}

function validaPrimeiroForm(form) {
  const nomeResponsavel = form.nomeResponsavel.value;
  const optionPais = form.paisFone;
  const paisFone = optionPais.options[optionPais.selectedIndex].value;
  const whatsapp = form.whatsapp.value;
  const email = form.email.value;
  const option = form.comoEncontrou;
  const comoEncontrou = option.options[option.selectedIndex].value;
  var validate = true;

  if (!nomeResponsavel) {
    form.nomeResponsavel.classList.add("is-invalid");
    validate = false;
  } else {
    form.nomeResponsavel.classList.remove("is-invalid");
  }

  if (!paisFone) {
    form.paisFone.classList.add("is-invalid");
    validate = false;
  } else {
    form.paisFone.classList.remove("is-invalid");
  }

  if (!whatsapp) {
    form.whatsapp.classList.add("is-invalid");
    validate = false;
  } else if (whatsapp && verificaDuplicidade) {
    validate = false;
  } else {
    form.whatsapp.classList.remove("is-invalid");
  }

  let re = /\S+@\S+\.\S+/;
  let validaEmail = re.test(form.email.value);
  if (!email) {
    form.email.classList.add("is-invalid");
    validate = false;
  } else if (validaEmail == false) {
    form.email.classList.add("is-invalid");
    validate = false;
  } else {
    form.email.classList.remove("is-invalid");
  }

  if (!comoEncontrou) {
    form.comoEncontrou.classList.add("is-invalid");
    validate = false;
  } else {
    form.comoEncontrou.classList.remove("is-invalid");
  }

  if (
    nomeResponsavel &&
    paisFone &&
    whatsapp &&
    email &&
    validaEmail == true &&
    comoEncontrou
  ) {
    validate = true;
  }

  return validate;
}

function buscaPrimeiroForm() {
  const form = document.querySelector("form#primeiroForm");
  const optionPais = form.paisFone;
  const paisFone = optionPais.options[optionPais.selectedIndex].value;
  const whatsapp = form.whatsapp.value;
  const email = form.email.value;
  const buscaForm = async () => {
    try {
      const response = await fetch("buscaContato", {
        method: "POST",
        body: JSON.stringify({ paisFone, whatsapp, email }),
        headers: {
          "Content-Type": "application/json",
          "X-Requested-With": "XMLHttpRequest",
        },
      });
      const data = await response.json();
      if (data.length >= 1) {
        if (data[0].email === email) {
          mensagemInfo(
            `E-mail <strong>"${email}"</strong> já cadastrado em nosso sistema!`,
            1
          );
          preenchePrimeiroForm(data[0]);
        }
        if (data[0].whatsapp === whatsapp) {
          mensagemInfo(
            `Whatsapp <strong>"${paisFone} ${whatsapp}"</strong> já cadastrado em nosso sistema!`,
            1
          );
          preenchePrimeiroForm(data[0]);
        }
      } else {
        document.getElementById("idOrcamento").value = "";
        document.getElementById("mensagemInfo1").style.opacity = "0";
        document.getElementById("mensagemInfo1").style.paddingBottom = "0";
        document.getElementById("mensagemInfo1").style.paddingTop = "0";
        document.getElementById("mensagemInfo1").style.height = "0";
      }
    } catch (err) {
      console.log(err);
    }
  };
  buscaForm();
}

function preenchePrimeiroForm(data) {
  sessionStorage.setItem("id_orcamento", data.id_orcamento);
  document.getElementById("idOrcamento").value = data.id_orcamento;
  document.getElementById("nomeResponsavel").value = data.nomeResponsavel;
  document.getElementById("cargoResponsavel").value = data.cargoResponsavel;
  document.getElementById("tempoTrabalho").value = data.tempoTrabalho;
  document.getElementById("redeSiteEmpresa").value = data.redeSiteEmpresa;
  document.getElementById("cidade").value = data.cidade;
  document.getElementById("comoEncontrou").value = data.comoEncontrou;
  const dataAtualFormatada = dataAtual();
  document.getElementById("dataInsert").value = data.dataInsert;
  document.getElementById("dataUpdate").value = dataAtualFormatada;
}

function buscaOrcamento(idOrcamento) {
  const showDataa = async () => {
    try {
      const response = await fetch("buscaOrcamento", {
        method: "POST",
        body: JSON.stringify({ idOrcamento }),
        headers: {
          "Content-Type": "application/json",
          "X-Requested-With": "XMLHttpRequest",
        },
      });
      const data = await response.json();
      if (data.length >= 1) {
        preencheOrcamento(data[0]);
      }
    } catch (err) {
      console.log(err);
    }
  };
  showDataa();
}

function preencheOrcamento(data) {
  document.getElementById("idOrcamento").value = data.id_orcamento;
  document.getElementById("nomeResponsavel").value = data.nomeResponsavel;
  document.getElementById("cargoResponsavel").value = data.cargoResponsavel;
  document.getElementById("tempoTrabalho").value = data.tempoTrabalho;
  document.getElementById("redeSiteEmpresa").value = data.redeSiteEmpresa;
  document.getElementById("paisFone").value = data.paisFone;
  document.getElementById("whatsapp").value = data.whatsapp;
  document.getElementById("email").value = data.email;
  document.getElementById("cidade").value = data.cidade;
  document.getElementById("comoEncontrou").value = data.comoEncontrou;
  const dataAtualFormatada = dataAtual();
  document.getElementById("dataInsert").value = data.dataInsert;
  document.getElementById("dataUpdate").value = dataAtualFormatada;
}

function dataAtual() {
  const dataAtual = new Date();
  const dataAno = dataAtual.toLocaleString("pt-BR", { year: "numeric" });
  const dataMes = dataAtual.toLocaleString("pt-BR", { month: "2-digit" });
  const dataDia = dataAtual.toLocaleString("pt-BR", { day: "2-digit" });
  return `${dataAno}-${dataMes}-${dataDia}`;
}

function verificaDuplicidade() {
  const form = document.querySelector("form#primeiroForm");
  const optionPais = form.paisFone;
  const paisFone = optionPais.options[optionPais.selectedIndex].value;
  const whatsapp = form.whatsapp.value;
  const email = form.email.value;
  const duplicado = true;
  fetch("verificaDuplicidade", {
    headers: {
      "Content-Type": "application/json",
      "X-Requested-With": "XMLHttpRequest",
    },
    method: "POST",
    body: JSON.stringify({
      paisFone,
      whatsapp,
      email,
    }),
  })
    .then((response) => {
      if (response.ok) {
        const data = response.json();
        // console.log(data[0]);
        if (data.length >= 1) {
          if (data[0].email === email) {
            alert("whats");
            mensagemInfo(
              `E-mail <strong>"${email}"</strong> já cadastrado em nosso sistema, não é possível inserir novamente!`,
              1
            );
            duplicado = true;
          }
          if (data[0].whatsapp === whatsapp) {
            alert("whats");
            mensagemInfo(
              `Whatsapp <strong>"${paisFone} ${whatsapp}"</strong> já cadastrado em nosso sistema, não é possível inserir novamente!`,
              1
            );
            duplicado = true;
          }
        }
      }
    })
    .catch((error) => {
      mensagemErro(error, 1);
    });
  return duplicado;
}

function segundoForm(event) {
  event.preventDefault();
  mensagemSucesso("", 2);
  document.querySelector(".texto-orcamento").innerHTML =
    "<p>Chegamos! Agora só precisamos de mais estas informações para montar um orçamento mais assertivo.</p>";
  // grecaptcha.ready(function() {
  //     grecaptcha.execute('6Ld6bzgkAAAAAAg2_dNUDcSHb32fTnOUdmNWY1Rc', {action: 'submit'}).then(function(token) {
  //         if(validaSegundoForm() === true){
  //             const form = document.querySelector('form');
  //             const nomeResponsavel = form.nomeResponsavel.value;
  //             const cargoResponsavel = form.cargoResponsavel.value;
  //             const tempoTrabalho = form.tempoTrabalho.value;
  //             const redeSiteEmpresa = form.redeSiteEmpresa.value;
  //             const optionPais = form.paisFone;
  //             const paisFone = optionPais.options[optionPais.selectedIndex].value;
  //             const whatsapp = form.whatsapp.value;
  //             const email = form.email.value;
  //             const cidade = form.cidade.value;
  //             const option = form.comoEncontrou;
  //             const comoEncontrou = option.options[option.selectedIndex].value;
  //             fetch('segundoForm', {
  //                 method: "POST",
  //                 body: JSON.stringify({
  //                     nomeResponsavel,
  //                     cargoResponsavel,
  //                     tempoTrabalho,
  //                     redeSiteEmpresa,
  //                     paisFone,
  //                     whatsapp,
  //                     email,
  //                     cidade,
  //                     comoEncontrou,
  //                     token
  //                 })
  //             })
  //             .then((res) => {
  //                 console.log('aqui: '+res);
  //             })
  //             .catch((err) => {
  //                 console.log('não foi');
  //             });
  //         }
  //     });
  // });
}

function terceiroForm(event) {
  event.preventDefault();
  mensagemSucesso("", 3);
  // grecaptcha.ready(function() {
  //     grecaptcha.execute('6Ld6bzgkAAAAAAg2_dNUDcSHb32fTnOUdmNWY1Rc', {action: 'submit'}).then(function(token) {
  //         if(validaTerceiroForm() === true){
  //             const form = document.querySelector('form');
  //             const nomeResponsavel = form.nomeResponsavel.value;
  //             const cargoResponsavel = form.cargoResponsavel.value;
  //             const tempoTrabalho = form.tempoTrabalho.value;
  //             const redeSiteEmpresa = form.redeSiteEmpresa.value;
  //             const optionPais = form.paisFone;
  //             const paisFone = optionPais.options[optionPais.selectedIndex].value;
  //             const whatsapp = form.whatsapp.value;
  //             const email = form.email.value;
  //             const cidade = form.cidade.value;
  //             const option = form.comoEncontrou;
  //             const comoEncontrou = option.options[option.selectedIndex].value;
  //             fetch('terceiroForm', {
  //                 method: "POST",
  //                 body: JSON.stringify({
  //                     nomeResponsavel,
  //                     cargoResponsavel,
  //                     tempoTrabalho,
  //                     redeSiteEmpresa,
  //                     paisFone,
  //                     whatsapp,
  //                     email,
  //                     cidade,
  //                     comoEncontrou,
  //                     token
  //                 })
  //             })
  //             .then((res) => {
  //                 console.log('aqui: '+res);
  //             })
  //             .catch((err) => {
  //                 console.log('não foi');
  //             });
  //         }
  //     });
  // });
}
