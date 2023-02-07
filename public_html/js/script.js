var animation = {
  duration: 50000,
  easing: (t) => t,
};

var slider = new KeenSlider("#sliderHeader", {
  loop: true,
  renderMode: "performance",
  slides: {
    perView: "auto",
  },
  created(s) {
    s.moveToIdx(11, true, animation);
  },
  updated(s) {
    s.moveToIdx(s.track.details.abs + 11, true, animation);
  },
  animationEnded(s) {
    s.moveToIdx(s.track.details.abs + 11, true, animation);
  },
});

var myNav = document.querySelector(".navbar-fixed-top");

window.onscroll = function () {
  "use strict";
  if (document.body.scrollTop >= 1 || document.documentElement.scrollTop >= 1) {
    myNav.classList.add("scrolled");
  } else {
    myNav.classList.remove("scrolled");
  }
};

window.onload = function () {
  if (document.body.scrollTop >= 1 || document.documentElement.scrollTop >= 1) {
    myNav.classList.add("scrolled");
  } else {
    myNav.classList.remove("scrolled");
  }
};

function pesquisa(servico) {
  var input, filter, div, div_item, ahref, i, txtValue;
  input = document.getElementById(`pesquisa${servico}`);
  filter = input.value.toUpperCase();
  div = document.getElementById(`accordionFlush${servico}`);
  div_item = div.getElementsByTagName("div");

  for (i = 0; i < div_item.length; i++) {
    ahref = div_item[i].getElementsByTagName("button")[0];
    if (ahref) {
      txtValue = ahref.textContent || ahref.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        div_item[i].style.display = "";
      } else {
        div_item[i].style.display = "none";
      }
    }
  }
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
  document.getElementById("status").value = "true";
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
      break;
    case 2:
      var scrollDiv =
        document.querySelector(".texto-orcamento").offsetTop - 140;
      window.scrollTo({ top: scrollDiv, behavior: "smooth" });
      document.querySelector(
        ".texto-orcamento"
      ).innerHTML = `<p>Chegamos! Agora só precisamos de mais estas informações para conseguir montar o seu orçamento.</p>`;
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
      break;
    case 3:
      var scrollDiv =
        document.querySelector(".texto-orcamento").offsetTop - 140;
      window.scrollTo({ top: scrollDiv, behavior: "smooth" });
      document.querySelector(
        ".texto-orcamento"
      ).innerHTML = `<p class="mb-5">Muito bom! Agora queremos entender mais sobre seu negócio.</p>`;
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
document.getElementById("whatsapp").addEventListener("keyup", mascaraFone);

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
          const statusForm = document.getElementById("status").value;
          fetch("primeiroForm", {
            method: "POST",
            body: JSON.stringify({
              statusForm,
              token,
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
              mensagemSucesso(error, 1);
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
  var validate = false;

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
  const showData = async () => {
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
          document.getElementById("status").value = "false";
          document.querySelector(".texto-orcamento").innerHTML = "";
          mensagemInfo(
            `E-mail <strong>"${email}"</strong> já cadastrado em nosso sistema!`,
            1
          );
          preenchePrimeiroForm(data[0]);
        }
        if (data[0].whatsapp === whatsapp) {
          document.getElementById("status").value = "false";
          document.querySelector(".texto-orcamento").innerHTML = "";
          mensagemInfo(
            `Whatsapp <strong>"${whatsapp}"</strong> já cadastrado em nosso sistema!`,
            1
          );
          preenchePrimeiroForm(data[0]);
        }
      } else {
        document.getElementById("status").value = "true";
        document.getElementById("mensagemInfo1").style.opacity = "0";
        document.getElementById("mensagemInfo1").style.paddingBottom = "0";
        document.getElementById("mensagemInfo1").style.paddingTop = "0";
        document.getElementById("mensagemInfo1").style.height = "0";
      }
    } catch (err) {
      console.log(err);
    }
  };
  showData();
}

function preenchePrimeiroForm(data) {
  document.getElementById("nomeResponsavel").value = data.nomeResponsavel;
  document.getElementById("cargoResponsavel").value = data.cargoResponsavel;
  document.getElementById("tempoTrabalho").value = data.tempoTrabalho;
  document.getElementById("redeSiteEmpresa").value = data.redeSiteEmpresa;
  document.getElementById("paisFone").value = data.paisFone;
  document.getElementById("cidade").value = data.cidade;
  document.getElementById("comoEncontrou").value = data.comoEncontrou;
}

function segundoForm(event) {
  event.preventDefault();
  mensagemSucesso("", 2);
  document.querySelector(".texto-orcamento").innerHTML =
    "<p>Chegamos! Agora só precisamos de mais estas informações para conseguir montar o seu orçamento.</p>";
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
