
         <div class="mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vista Usuarios</h1><hr>
          </div>
      <div id="central" class="container-fluid py-4">
       
        <!-- Content Row -->
        <div class="row">
          <!-- Content Column -->
          <div class="col-lg-12 mb-4">


          <div class="row">
              <div class="col-lg-12 mb-4">

          <iframe title="usuarios - usuarios" width="100%" height="800px" src="https://app.powerbi.com/view?r=eyJrIjoiYzZjYmNjOTctNWYxYy00NjM4LWI3NzctZmFlMzIyNjQwYzkxIiwidCI6Ijk1N2ZlODNhLTdmM2MtNGQwMS04MjM1LTUwYzhlZTY5ZTBlYSIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>
              </div>
          </div>
          </div>
        </div>

        <div id="central" class="container-fluid py-4">




        <div class="col-xl-12 col-md-12 mb-5">
<div class="row py-5">
  <div class="col-auto">
    <h3>Últimas consultas del chatbot </h3>
  </div>
  <div class="col-12">
    <table id="example" class="table table-hover responsive nowrap">
      <thead>
        <tr>
          <th scope="row">Usuarios</th>
          <th>Consulta</th>
          <th>Fecha</th>
          <th>Correo</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php include_once("../models/chatbot/consultas.php");
        foreach (array_reverse($datoss) as $consultaschatbot) {
        ?>
            <tr>
            <td>
              <a href="#">
                <div class="d-flex align-items-center">
                  <div class="avatar mr-3" style="background-image: url('<?php echo $consultaschatbot['profilepicurl'] ?>') !important;	width: 2.75rem;
height: 2.75rem;
line-height: 3rem;
border-radius: 50%;
display: inline-block;
position: relative;
text-align: center;
font-weight: 700;
vertical-align: bottom;
font-size: 1rem;
"></div>

                  <div class="">
                    <p class="font-weight-bold mb-0"><?php echo $consultaschatbot['firstname'] . " " . $consultaschatbot['lastname'] ?></p>
                    <p class="text-muted mb-0"><?php echo $consultaschatbot['ubicacionuser'] ?></p>
                  </div>
                </div>
              </a>
            </td>
            <td><?php echo $consultaschatbot['consultausermonfu'] ?></td>

            <td><?php echo $consultaschatbot['date']; ?></td>
            <td>
              <a href="" id="" data-toggle="modal" data-target="#myModal" data-remote="false">
                <div class="badge badge-success badge-success-alt">Responder</div>
              </a>
            </td>
            <td>
              Respondido

            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>

<hr>





<div class="col-xl-12 col-md-12 mb-5">
<div class="row py-5">
  <div class="col-auto">
    <h3>Últimas consultas desde el Footer </h3>
  </div>
  <div class="col-12">
    <table id="example" class="table table-hover responsive nowrap">
      <thead>
        <tr>
         
          <th scope="row">Consulta</th>
          <th>Fecha</th>
          <th>Correo</th>
          <th>Location</th>
          <th>Action</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php include_once ("../models/formulario/consultas.php"); 
        foreach (array_reverse($datosdelfooter) as $consultasfooter) {
        ?>
          <tr>
         
            <td><?php echo $consultasfooter['Mensaje'] ?></td>

            <td><?php echo $consultasfooter['Date']; ?></td>
            <td><?php echo $consultasfooter['Correo']; ?></td>
            <td><?php echo $consultasfooter['location']; ?></td>
            <td>
              <a href="" id="" data-toggle="modal" data-target="#myModal" data-remote="false">
                <div class="badge badge-success badge-success-alt">Responder</div>
              </a>
            </td>
            <td>
              Respondido

            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>
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


