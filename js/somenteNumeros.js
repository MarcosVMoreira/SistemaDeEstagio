function somenteNumeros(e) {

	var charCode = e.charCode ? e.charCode : e.keyCode;

	// charCode 8 = backspace   
	// charCode 9 = tab

	if (charCode != 8 && charCode != 9) {
		// charCode 48 equivale a 0   
		// charCode 57 equivale a 9
		if (charCode < 48 || charCode > 57) {
        	return false;
		}
	}
}

function somenteNumerosEVirgula(e) {

	var charCode = e.charCode ? e.charCode : e.keyCode;

	// charCode 8 = backspace
	// charCode 9 = tab
	if (charCode != 8 && charCode != 9) {
		// charCode 48 equivale a 0   
		// charCode 57 equivale a 9
		// charCode 44 = vírgula
		if ((charCode < 48 || charCode > 57) && charCode != 44) {
        	return false;
		}
	}

}

function somenteNumerosEPontoEBarraEHifen(e) {

	var charCode = e.charCode ? e.charCode : e.keyCode;

	// charCode 8 = backspace
	// charCode 9 = tab
	if (charCode != 8 && charCode != 9) {
		// charCode 48 equivale a 0   
		// charCode 57 equivale a 9
		// charCode 44 = vírgula
		// charCode 45 = hífen
		// charCode 46 = ponto
		// charCode 47 = barra
		if ((charCode < 48 || charCode > 57) && charCode != 44 && charCode != 45 && charCode != 46 && charCode != 47) {
        	return false;
		}
	}

}

function somenteNumerosEPontoEHifen(e) {

	var charCode = e.charCode ? e.charCode : e.keyCode;

	// charCode 8 = backspace
	// charCode 9 = tab
	if (charCode != 8 && charCode != 9) {
		// charCode 48 equivale a 0   
		// charCode 57 equivale a 9
		// charCode 45 = hífen
		// charCode 46 = ponto
		if ((charCode < 48 || charCode > 57) && charCode != 45 && charCode != 46) {
        	return false;
		}
	}

}

function somenteNumerosEHifen(e) {

	var charCode = e.charCode ? e.charCode : e.keyCode;

	// charCode 8 = backspace
	// charCode 9 = tab
	if (charCode != 8 && charCode != 9) {
		// charCode 48 equivale a 0   
		// charCode 57 equivale a 9
		// charCode 45 = hífen
		if ((charCode < 48 || charCode > 57) && charCode != 45) {
        	return false;
		}
	}

}


function somenteNumerosEParenteseEHifen(e) {

	var charCode = e.charCode ? e.charCode : e.keyCode;

	// charCode 8 = backspace
	// charCode 9 = tab
	if (charCode != 8 && charCode != 9) {
		// charCode 48 equivale a 0   
		// charCode 57 equivale a 9
		// charCode 45 equivale a hífen
		// charCode 40 equivale a abertura de parêntese
		// charCode 41 equivale a fechamento de parêntese
		if ((charCode < 48 || charCode > 57) && charCode != 45 && charCode != 40 && charCode != 41) {
	    	return false;
		}
	}
}