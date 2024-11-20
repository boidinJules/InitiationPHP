function verifierFormulaire() {
    let baliseNom = document.getElementById('name1');
    let balisePrénom = document.getElementById("prénom1");
    let baliseEmail = document.getElementById("email1");
    let balisePassword = document.getElementById("password1");
    let baliseMessage = document.getElementById("message1");

    if (baliseNom.value == '') {
        baliseNom.style.borderColor = "red";
    } else {
        baliseNom.style.borderColor = "";
    }

    if (balisePrénom.value == '') {
        balisePrénom.style.borderColor = "red";
    } else {
        balisePrénom.style.borderColor = "";
    }

    if (baliseEmail.value.length < 7) {
        baliseEmail.style.borderColor = "red";
    } else {
        baliseEmail.style.borderColor = "";
    }

    if (balisePassword.value.length < 8) {
        balisePassword.style.borderColor = "red";
    } else {
        balisePassword.style.borderColor = "";
    }

    if (baliseMessage.value == '') {
        baliseMessage.style.borderColor = "red";
    } else {
        baliseMessage.style.borderColor = "";
    }

}
