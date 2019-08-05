<div class="text-right" style="margin-top: 5px; margin-bottom: 5px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddUser"><i class="fas fa-plus-circle"></i> Añadir cliente </button>
</div>

<!-- Modal add user form begin -->
<div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Añadir cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $data = array('onsubmit' => "return validarCampos()");?>
        <?= form_open('/Home/createUser', $data); ?>
        <?php

        $nombre = array(
          'name' => 'Name',
          'placeholder' => 'Nombre',
          'type' => 'text',
          'class' => 'form-control input-lg phcenter',
          'required' => ''
        );
        $apellido = array(
          'name' => 'LastName',
          'placeholder' => 'Apellido',
          'type' => 'text',
          'class' => 'form-control input-lg phcenter',
          'required' => ''
        );
        $correo = array(
          'name' => 'Email',
          'placeholder' => 'Correo',
          'type' => 'email',
          'class' => 'form-control input-lg phcenter',
          'required' => ''
        );

        $fecha = array(
          'name' => 'Birthdate',
          'placeholder' => 'Fecha de nacimiento',
          'type' => 'date',
          'class' => 'form-control input-lg phcenter',
          'max' => date("Y-m-d"),
          'required' => ''
        );

        $identificacion = array(
          'name' => 'Identification',
          'placeholder' => 'Número de documento',
          'class' => 'form-control input-lg phcenter',
          'required' => ''
        );

        $registrarme = array(
          'name' => 'Registrar',
          'class' => 'btn btn-primary',
          'value' => 'Añadir'
        );
        ?>

        <?= form_input($nombre) ?>
        <br>

        <?= form_input($apellido) ?>
        <br>

        <?= form_input($identificacion) ?>
        <br>

        <?= form_input($correo) ?>
        <br>

        <select name="Gender" class="form-control">
          <option value='Masculino'>Masculino</option>
          <option value='Femenino'>Femenino</option>
        </select>
        <br>

        <?= form_input($fecha) ?>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
      <?= form_close(); ?>
    </div>
  </div>
</div>
<!-- Modal form end -->

<!-- Table customers -->
<div class="table-responsive">
  <table class="table table-bordered table-hover table-principal">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
          <h5 class="text-center">Nombres</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Apellidos</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Correo</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Fecha de nacimiento</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Género</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Documento</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Acciones</h5>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($customers->result() as $customer) { ?>
        <tr>
          <td>
            <center><?= $customer->Name; ?></center>
          </td>
          <td>
            <center><?= $customer->LastName; ?></center>
          </td>
          <td>
            <center><?= $customer->Email; ?></center>
          </td>
          <td>
            <center><?= $customer->Birthdate; ?></center>
          </td>
          <td>
            <center><?= $customer->Gender; ?></center>
          </td>
          <td>
            <center><?= $customer->Identification; ?></center>
          </td>
          <td>
            <center>
              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" role="button" onclick="showModal(<?= $customer->Id ?>)"><i class="fas fa-edit" style="color: white;"></i></button>
              <a class="btn btn-danger btn-sm" href="<?= base_url('index.php/Home/deleteUser/') . $customer->Id ?>" role="button"><i class="fas fa-trash"></i></a>
            </center>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <!-- Table customers end-->

  <!-- Modal update user form begin -->
  <div class="modal fade" id="updateUser" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modificar cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="#" method="post" accept-charset="utf-8" id="updateForm">

            <input id="inputName" type="text" name="Name" placeholder="Nombre" class="form-control input-lg phcenter" required="">
            <br>

            <input id="inputLastName" type="text" name="LastName" placeholder="Apellido" class="form-control input-lg phcenter" required="">
            <br>

            <input id="inputIdentification" type="text" name="Identification" placeholder="Número de documento" class="form-control input-lg phcenter" required="">
            <br>

            <input id="inputEmail" type="email" name="Email" placeholder="Correo" class="form-control input-lg phcenter" required="">
            <br>

            <select name="Gender" class="form-control" id="select-gender">
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
            <br>

            <input id="inputDate" type="date" name="Birthdate" max="<?= date("Y-m-d") ?>" placeholder="Fecha de nacimiento" class="form-control input-lg phcenter" max="2019-07-31" required="">
            <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal update user form end -->