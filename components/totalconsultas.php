



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
        <?php include_once("./models/chatbot/consultas.php");
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
        <?php include_once ("./models/chatbot/consultas.php"); 
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