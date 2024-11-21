function verifierFormulaire() {
    const baliseNom = document.getElementById('name1');
    const balisePrénom = document.getElementById("prénom1");
    const baliseEmail = document.getElementById("email1");
    const balisePassword = document.getElementById("password1");
    const BaliseErrorpassword = document.querySelector('.form-group small');
    const baliseMessage = document.getElementById("message1");
    const baliseCheckbox = document.getElementById('formCheck-1');
    const baliseLabel = document.getElementById('formCheckLabel');

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

    if (baliseEmail.value == '' || !baliseEmail.value.includes('@')) {
        baliseEmail.style.borderColor = "red";
    } else {
        baliseEmail.style.borderColor = "";
    }

    if (balisePassword.value == '') {
        balisePassword.style.borderColor = "red";
    } else if (balisePassword.value.length < 8){
        BaliseErrorpassword.classList.remove('invisible');
        balisePassword.style.borderColor = "red";
    } else {
        balisePassword.style.borderColor = "";
        BaliseErrorpassword.classList.add('invisible');
    }

    if (baliseMessage.value == '') {
        baliseMessage.style.borderColor = "red";
    } else {
        baliseMessage.style.borderColor = "";
    }

    if (baliseCheckbox.checked) {
        baliseLabel.style.color = "";
    } else {
        baliseLabel.style.color = "red";
    }

}
