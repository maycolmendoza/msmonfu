<div id="loadingCard" class="loadingContainer" style="background: rgba( 255, 255, 255, 0.25 );

backdrop-filter: blur( 0px );
-webkit-backdrop-filter: blur( 0px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_kDfr8a.json" background="transparent" speed="1" style="width: 100%; height: 72%;" loop autoplay></lottie-player><br><br>
  <h1 style="text-align:center;font-family: 'Nunito Sans', sans-serif;">MS - MONFU 2022</h1>
</div>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital@1&display=swap" rel="stylesheet">
<script>
  // Loading time in miliseconds (1s = 1000ms)
  const time = 100
  const planetFound = ``
  setInterval(function() {
    //Replace something when loading finish
    $('#loadingCard').html(planetFound)
  }, time)
</script>
<?php require_once("./components/head.php"); ?>
<div class="dashboard-layout">
  <?php require_once("./components/aside.php"); ?>
  <main id="main" class="main">
    <?php require_once("./components/nav.php"); ?>
    <div id="central" class="container-fluid py-4">
      <!--
          <div class="mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
          </div>--->
      <div class="row">
        <?php require_once("./components/heading.php"); ?>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Visitas <small>(Hoy dia)</small></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">6,450</div>
                </div>
                <div class="col-auto">

                  <i class="fa-solid fa-eye fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Visitas <small>(Mensuales)</small></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">84,326</div>
                </div>
                <div class="col-auto">
                  <i class="fa-solid fa-calendar-days fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Usuarios Activos</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">22</div>
                </div>
                <div class="col-auto">
                  <i class="fa-solid fa-user fa-2x  text-gray-300"></i>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Compartidos</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">14</div>
                </div>
                <div class="col-auto">
                  <i class="fa-solid fa-share fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Content Row -->
      <div class="row">
        <!-- Content Column -->
        <div class="col-lg-12 ">
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card bg-primary text-white shadow">
                <div class="card-body">
                  Participantes Registrados desde el Chatbot
                  <div class="card-text">
                    <?php include_once("./models/chatbot/invitacion.php");
                    foreach ($datoss as $participanteschatbos) {
                      if ($participanteschatbos["timestamp"] == "2022-08-08T22:15:04.000Z") {
                    ?>
                        <h1><?php echo $participanteschatbos["Total"]; ?></h1>
                    <?php
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Consultas desde el Footer
                  <div class="card-text">
                    <?php include_once("./models/formulario/consultas.php");
                   
                    foreach ($datosdelfooter as $suscriptoresfooter) {
                      if ($suscriptoresfooter["Date"] == "2022-08-23T19:58:42.696Z") {
                    ?>
                        <h1><?php echo $suscriptoresfooter["Total"]; ?></h1>
                    <?php
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">
              <div class="card bg-warning text-white shadow">
                <div class="card-body">
                  Pagina con más visitas
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  Suscriptores
                  <div class="card-text">
                    <?php include_once("./models/newsletter/suscription.php");
                    foreach ($datoss as $suscriptores) {
                      if ($suscriptores["Date"] == "2022-09-05T04:00:00.000Z") {
                    ?>
                        <h1><?php echo $suscriptores["Total"];; ?></h1>
                    <?php
                      }
                    }
                    ?>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>





      <div id="central" class="container-fluid py-4">
  
      <?php include_once('./components/totalconsultas.php')?>
      </div>



      <!-- Default bootstrap modal example -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              <h4 class="modal-title" id="myModalLabel">Enviar Mensaje</h4>&nbsp; <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form action="">
                <input type="text" class="form-control" placeholder="" required="on">
                <textarea name="" id="" class="form-control" required="on"></textarea>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </div>
      </div>
      <script>
        $("#myModal").on("show.bs.modal", function(e) {
          var link = $(e.relatedTarget);
          $(this).find(".modal-body").load(link.attr("href"));
        });
      </script>
      <!-- partial -->
      <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js'></script>
      <script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>
      <script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'></script>
      <script src="./script.js"></script>
      <style>
        .table {
          overflow-x: scroll;
        }

        .table td,
        .table th {
          vertical-align: middle;
          margin-bottom: 10px;
          border: none;
        }

        .table thead tr,
        .table thead th {
          border: 1px solid #eee;
          font-size: 12px;
          letter-spacing: 1px;
          text-transform: uppercase;
          background: transparent;
        }

        .table td {
          background: #fff;
        }

        .table td:first-child {
          border-top-left-radius: 10px;
          border-bottom-left-radius: 10px;
        }

        .table td:last-child {
          border-top-right-radius: 10px;
          border-bottom-right-radius: 10px;
        }

        .avatar {
          width: 2.75rem;
          height: 2.75rem;
          line-height: 3rem;
          border-radius: 50%;
          display: inline-block;
          background: transparent;
          position: relative;
          text-align: center;
          color: #868e96;
          font-weight: 700;
          vertical-align: bottom;
          font-size: 1rem;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .avatar-sm {
          width: 2.5rem;
          height: 2.5rem;
          font-size: 0.83333rem;
          line-height: 1.5;
        }

        .avatar-img {
          width: 100%;
          height: 100%;
          -o-object-fit: cover;
          object-fit: cover;
        }

        .avatar-blue {
          background-color: #c8d9f1;
          color: #467fcf;
        }

        table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child:before {
          top: 28px;
          left: 14px;
          border: none;
          box-shadow: none;
        }

        table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child,
        table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child {
          padding-left: 48px;
        }

        table.dataTable>tbody>tr.child ul.dtr-details {
          width: 100%;
        }

        table.dataTable>tbody>tr.child span.dtr-title {
          min-width: 50%;
        }

        table.dataTable.dtr-inline.collapsed>tbody>tr>td.child,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th.child,
        table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty {
          padding: 0.75rem 1rem 0.125rem;
        }

        div.dataTables_wrapper div.dataTables_length label,
        div.dataTables_wrapper div.dataTables_filter label {
          margin-bottom: 0;
        }

        @media (max-width: 767px) {
          div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
            margin-top: 1rem;
          }
        }

        .btn-icon {
          background: #fff;
        }

        .btn-icon .bx {
          font-size: 20px;
        }

        .btn .bx {
          vertical-align: middle;
          font-size: 20px;
        }

        .dropdown-menu {
          padding: 0.25rem 0;
        }

        .dropdown-item {
          padding: 0.5rem 1rem;
        }

        .badge {
          padding: 0.5em 0.75em;
        }

        .badge-success-alt {
          background-color: #d7f2c2;
          color: #7bd235;
        }

        .table a {
          color: #212529;
        }

        .table a:hover,
        .table a:focus {
          text-decoration: none;
        }

        table.dataTable {
          margin-top: 12px !important;
        }

        .icon>.bx {
          display: block;
          min-width: 1.5em;
          min-height: 1.5em;
          text-align: center;
          font-size: 1.0625rem;
        }

        .btn {
          font-size: 0.9375rem;
          font-weight: 500;
          padding: 0.5rem 0.75rem;
        }

        .avatar-blue {
          background-color: #c8d9f1;
          color: #467fcf;
        }

        .avatar-pink {
          background-color: #fcd3e1;
          color: #f66d9b;
        }
      </style>
    </div>
  </main>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'>