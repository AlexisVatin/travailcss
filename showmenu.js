function showmenu() {

    var divcon = document.getElementById('divconnexion');
    var divinsc = document.getElementById('divinscription');

    if (divinsc.style.visibility == 'hidden') {

        divcon.style.visibility = 'visible';
        divinsc.style.visibility = 'hidden';
    }
    else if (divcon.style.visibility == 'hidden' || divcon.style.visibility == 'visible' )
    {
        divinsc.style.visibility = 'visible';
        divcon.style.visibility = 'hidden';
    }

}
