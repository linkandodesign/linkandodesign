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

function mascaraEmail() {
  let input = document.getElementById("emailContato");
  let re = /\S+@\S+\.\S+/;
  let valida = re.test(input.value);
  if (valida == true || input.value == "") {
    input.classList.remove("is-invalid");
  } else {
    input.classList.add("is-invalid");
  }
}

function modalContato(event) {
  event.preventDefault();
  const divModal = document.getElementById("modalContato");
  const myModal = new bootstrap.Modal(divModal);
  myModal.show();
  divModal.addEventListener("shown.bs.modal", () => {
    document
      .getElementById("emailContato")
      .addEventListener("focusout", mascaraEmail);
  })
  divModal.addEventListener("hidden.bs.modal", () => {
    hideMessageContato();
  });
}

function formContato(event) {
  event.preventDefault();
  grecaptcha.ready(function () {
    grecaptcha
      .execute("6Ld6bzgkAAAAAAg2_dNUDcSHb32fTnOUdmNWY1Rc", { action: "submit" })
      .then(function (token) {
        const form = document.querySelector("form#formContato");
        let valida = validaContato(form);
        if (valida === true) {
          const nomeContato = form.nomeContato.value;
          const emailContato = form.emailContato.value;
          const mensagemContato = form.mensagemContato.value;
          fetch("formContato", {
            method: "POST",
            body: JSON.stringify({
              token,
              nomeContato,
              emailContato,
              mensagemContato,
            }),
          })
            .then((response) => {
              if (response.ok) {
                limpaContato();
                mensagemSucessoContato("Boa! Sua mensagem foi encaminhada para nossa equipe de atendimento, dentro de até 48 horas entraremos em contato!");
              }
            })
            .catch((error) => {
              mensagemErroContato(error);
            });
        }
      });
  });
}

function validaContato(form) {
  const emailContato = form.emailContato.value;
  const mensagemContato = form.mensagemContato.value;
  var validate = true;

  let re = /\S+@\S+\.\S+/;
  let validaEmail = re.test(form.emailContato.value);
  if (!emailContato) {
    form.emailContato.classList.add("is-invalid");
    validate = false;
  } else if (validaEmail == false) {
    form.emailContato.classList.add("is-invalid");
    validate = false;
  } else {
    form.emailContato.classList.remove("is-invalid");
  }

  if (!mensagemContato) {
    form.mensagemContato.classList.add("is-invalid");
    validate = false;
  } else {
    form.mensagemContato.classList.remove("is-invalid");
  }
  if (emailContato && validaEmail == true && mensagemContato) {
    validate = true;
  }

  return validate;
}

function mensagemSucessoContato(mensagem) {
  let tipo = "Valido";
  showMessageContato(mensagem, tipo);
}

function mensagemErroContato(mensagem) {
  let tipo = "Invalido";
  showMessageContato(mensagem, tipo);
}

function showMessageContato(msg = "", tipo = "Valido") {
  document.getElementById(`mensagem${tipo}`).style.opacity = "1";
  document.getElementById(`mensagem${tipo}`).style.paddingBottom = "1rem";
  document.getElementById(`mensagem${tipo}`).style.paddingTop = "1rem";
  document.getElementById(`mensagem${tipo}`).style.height = "auto";
  document.querySelector(`#mensagem${tipo} label`).innerHTML = msg;
}

function hideMessageContato() {
  document.getElementById("mensagemInvalido").style.opacity = "0";
  document.getElementById("mensagemInvalido").style.paddingBottom = "0";
  document.getElementById("mensagemInvalido").style.paddingTop = "0";
  document.getElementById("mensagemInvalido").style.height = "0";
  document.querySelector(`#mensagemInvalido label`).innerHTML = "";
  document.getElementById("mensagemValido").style.opacity = "0";
  document.getElementById("mensagemValido").style.paddingBottom = "0";
  document.getElementById("mensagemValido").style.paddingTop = "0";
  document.getElementById("mensagemValido").style.height = "0";
  document.querySelector(`#mensagemValido label`).innerHTML = "";
  limpaContato();
}

function limpaContato() {
  document.getElementById("nomeContato").value = "";
  document.getElementById("emailContato").value = "";
  document.getElementById("mensagemContato").value = "";
  document.getElementById("emailContato").classList.remove("is-invalid");
  document.getElementById("mensagemContato").classList.remove("is-invalid");
}