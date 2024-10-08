document.addEventListener('DOMContentLoaded', function (){
    menuhamburguesa ();

    darkMode();

});
function darkMode() {
    
        const prefiereDarkMode = window.matchMedia('(preferes-color-scheme)');
        console.log(prefiereDarkMode);


if (prefiereDarkMode.matches){
    document.body.classList.add('dark-mode');
} else {
    document.body.classList.remove('dark-mode');
}
}




function darkMode(){
    const botonDarkMode =document.querySelector('.dark-mode-boton')

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}



function menuhamburguesa() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionresponsive);

}

function navegacionresponsive (){
    
    const navegacion = document.querySelector('.navegacion');

    if (navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');

    }
    else
    {
        navegacion.classList.add('mostrar');
    }


}