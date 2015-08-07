function display(nav,subnav) {
	var thisnav = document.getElementById(nav);
	var thissubnav = document.getElementById(subnav);
	
	if (thissubnav.className=="show") {
		thissubnav.className="hide";
		if(document.all) thisnav.innerText  = '+';
		else thisnav.textContent  = '+';
	} else {
		thissubnav.className="show";
		if(document.all) thisnav.innerText  = '-';
		else thisnav.textContent  = '-';
	}
}
