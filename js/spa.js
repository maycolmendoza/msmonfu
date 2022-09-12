$(document).ready(function() {
    $('#div-btn1').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/usuarios.php');
        return false;
    });

    $('#div-btn2').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/products.php');
        return false;
    });

    $('#div-btn3').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/news.php');
        return false;
    });

    $('#div-btn4').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('components/heading.php');
        return false;
    });

    //vistas del monu
    $('#vista-inicio').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/inicio.php');
        return false;
    });
    $('#vista-estadia').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/estadia.php');
        return false;
    });
    $('#vista-ponentes').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/ponentes.php');
        return false;
    });
    $('#vista-poster').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/poster.php');
        return false;
    });

    $('#resume').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/google.php');
        return false;
    });

    $('#usuarios-detalles').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('views/usuarios.php');
        return false;
    });


    //fin de vistas del monfu
});