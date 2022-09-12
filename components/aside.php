<aside id="sidebar" class="sidebar" id="navbarSupportedContent" id="navbarNav" style="position: fixed;z-index:1;top:0px;margin:0px;left:0px;">
      <div class="sidebar-heading">
        <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656445221/logos%20monfu%202022/Group_9_kpu2ef.png" alt="">
      </div>
      <h3 class="sidebar-heading">
        <span>Detalles</span>
      </h3>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="/" class="nav-link active" href="#">
          <i class="fa-solid fa-house-user"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="resume" class="nav-link" href="#">
          <i class="fa-brands fa-google"></i>
            <span>Google Analitycs</span>
          </a>
        </li>
      </ul>
      <h3 class="sidebar-heading">
        <span>Vistas Web </span>
      </h3>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a id="vista-inicio" class="nav-link" href="#">
          <i class="fas fa-file-invoice"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="vista-estadia" class="nav-link" href="#">
            <i class="fas fa-file-invoice"></i>
            <span>Estadía</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="vista-poster" class="nav-link" href="#">
            <i class="fas fa-file-invoice"></i>
            <span>Poster</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="vista-ponentes" class="nav-link" href="#">
            <i class="fas fa-file-invoice"></i>
            <span>Ponentes</span>
          </a>
        </li>
      </ul>
      <h3 class="sidebar-heading">
        <span>Usuarios</span>
      </h3>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" id="usuarios-detalles" href="#">
            <i class="fas fa-users"></i>
            <span>Detalles</span>
          </a>
        </li>
      </ul>
    </aside>

    <script>
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


    //fin de vistas del monfu
});
    </script>