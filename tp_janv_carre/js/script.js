function verifie() {
	var dh = new Date();
	var d = dh.toLocaleDateString(); 
	var h = dh.toLocaleTimeString(); 
	f.dateHeure.value = d + ' ' + h;
	var nomPrenom = f.nomPrenom.value;
	var mail = f.email.value;
	var mess = f.message.value;
	var mess1 = document.getElementById('mess1');
	var mess2 = document.getElementById('mess2');
	var mess3 = document.getElementById('mess3');
	var stat = document.getElementById('status');
	mess1.style.display = 'none';
	mess2.style.display = 'none';
	mess3.style.display = 'none';
	var formOK = true;
	if (nomPrenom == '') {
		mess1.style.display = 'inline';
		formOK = false;
	}
	if (mail == '') {
		mess2.style.display = 'inline';
		formOK = false;
	}
	if (mess == '') {
		mess3.style.display = 'inline';
		formOK = false;
	}
	stat.style.display = 'inline';
	if (!formOK)
		stat.innerHTML = 'Attention : le formulaire n\'a pas été envoyé';
	else
		alert('Votre formulaire a été envoyé');
	return formOK;
}