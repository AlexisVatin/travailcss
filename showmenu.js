function showmenu() {
    var divcon = document.getElementById('divconnexion');
    var divinsc = document.getElementById('divinscription');
    if (divinsc.style.visibility == 'hidden') {

        divcon.style.visibility = 'hidden';
        divinsc.style.visibility = 'visible';
    }
    else if (divcon.style.visibility == 'hidden')
    {
        divinsc.style.visibility = 'hidden';
        divcon.style.visibility = 'visible';
    }

}
