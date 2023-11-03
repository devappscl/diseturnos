<?php
require "../template/header.php";
?>
<div class="container-xxl flex-grow-1 container-p-y">
              <div class="card mb-4">
                <h5 class="card-header">Funcionarios <button type="button" Onclick="modalagregar()" class="btn btn-primary float-right">Agregar Funcionario</button></h5>
                <div class="card-body">
                <?php include("agregar_usuario.php"); ?>
                <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table border-top" id="TablaUsuarios">
                        <thead class="thead-light">
                            <tr>
                                <th>Funcioario</th>
                                <th>Cedula</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Especialidad</th>
                                <th>Box</th>
                                <th>Estado</th>
                                <th>Nivel</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                </div>
              </div>
            </div>
<?php
require "../template/footer.php";
?>
<script src="../../controllers/usuariosController.js"></script>