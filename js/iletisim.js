const form = document.getElementById('form1');

var elements = form.elements;

form.addEventListener('submit', (event) => {
    let hataVarMi = false;

    for (var i = 0; i < 5; i++) {
        if (elements[i].value == '') {
            elements[i].className += " form-error";
            hataVarMi = true;
        }
        else {
            elements[i].className = elements[i].className.replace(/ form-error/g, "");
        }
    }

    if (!elements[5].checked && !elements[6].checked) {
        elements[5].className += " form-error";
        elements[6].className += " form-error";
        hataVarMi = true;
    }
    else {
        elements[5].className = elements[5].className.replace(/ form-error/g, "");
        elements[6].className = elements[6].className.replace(/ form-error/g, "");
    }

    if (elements[8].value == '') {
        elements[8].className += " form-error";
        hataVarMi = true;
    }
    else {
        elements[8].className = elements[8].className.replace(/ form-error/g, "");
    }

    if (hataVarMi) {
        event.preventDefault();
    }
});