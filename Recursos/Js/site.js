function addEmail() {
    const div = document.getElementById("divEmail");
    const input = document.getElementById("inpEmail");
    const count = document.getElementById("divGroupEmail").childElementCount;
    let num = count - 3;

    if (document.getElementById("Correo") == null) {
        let html = '<div id="listemail' + num + '" class="input-group"><div class="input-group-prepend ps-1"><div class="input-group-text"><label name="Correo">Correos a enviar:</label></div></div><textarea id="Correo" name="Correo" class="form-control"></textarea></div>';
        div.insertAdjacentHTML("afterend", html);
        const input2 = document.getElementById("Correo");
        if (input.value != null) {
            if (input2.value.toString() != null) {
                var newinput = input.value.toString() + "; ";
                input2.value = newinput.toString();
            } else {
                input2.value = input.value;
            }
        }
    } else {
        const input2 = document.getElementById("Correo");
        if (input.value != null) {
            if (input2.value != null) {
                var newinput = input2.value + input.value + "; ";
                input2.value = newinput.toString();
            } else {
                input2.value = input.value;
            }
        }
    }
}

function myimg() {
    const [file] = document.getElementById("Archivo").files;
    var showimg = document.getElementById("muestra");
    var value = URL.createObjectURL(file);
    showimg.src = value;
}

function disabledSelect(w) {
    document.getElementById(w).removeAttribute("disabled");
}

function valSel(x, y, z) {
    const select = document.getElementById(x);
    const valor = select.value;
    const selectnew = select.children;
    const select2 = document.getElementById(y);
    const select2new = select2.children;
    const select3 = document.getElementById(z);
    const select3new = select3.children;

    for (k = 0; k < selectnew.length; k++) {
        if (selectnew[k].value == valor) {
            selectnew[k].setAttribute("selected", "");
        } else {
            selectnew[k].removeAttribute("selected");
        }
    }

    for (i = 0; i < select2new.length; i++) {
        if (select2new[i].value == valor) {
            select2new[i].setAttribute("selected", "");
        } else {
            select2new[i].removeAttribute("selected");
        }
    }

    for (j = 0; j < select3new.length; j++) {
        if (select3new[j].value == valor) {
            select3new[j].setAttribute("selected", "");
        } else {
            select3new[j].removeAttribute("selected");
        }
    }
}

function regimenCambio(x) {
    const entry = document.getElementById(x);
    const fisica = document.getElementById("RegimenFisica");
    const moral = document.getElementById("RegimenMoral");

    if (entry.localName == "input") {

        let count = entry.value.length;

        if (count == 13) {
            fisica.setAttribute("disabled", "");
            fisica.setAttribute("hidden", "");
            moral.removeAttribute("disabled");
            moral.removeAttribute("hidden");
        } else if (count == 14) {
            moral.setAttribute("disabled", "");
            moral.setAttribute("hidden", "");
            fisica.removeAttribute("disabled");
            fisica.removeAttribute("hidden");
        }

    } else if (entry.localName == "select") {
        const valOpt = entry.value;
        const selectnew = entry.children;

        for (i = 0; i < selectnew.length; i++) {

            const val = selectnew[i].value;

            if (selectnew[i].value == "" + valOpt + "") {
                let valorText = selectnew[i].textContent.length;

                if (valorText == 13) {
                    fisica.setAttribute("disabled", "");
                    fisica.setAttribute("hidden", "");
                    moral.removeAttribute("disabled");
                    moral.removeAttribute("hidden");
                } else if (valorText == 14) {
                    moral.setAttribute("disabled", "");
                    moral.setAttribute("hidden", "");
                    fisica.removeAttribute("disabled");
                    fisica.removeAttribute("hidden");
                }
            }
        }
    }
}