<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Administrador
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
 <!--  <script>
    $(document).ready(function() {
      $("#cerrar").click(function() {
        alert("Cerrar sesion");
        var usuario = $("#email").val();
        var clave = $("#contraseña").val();

        $.post("../validar.php", {
            u: usuario,
            c: clave
          },
          function(data, status) {
            //alert("valor:"+data+" Estado:"+status);
            if (data == 1) {
              location.href = 'index.php';
            }
          });
      });
    });
  </script> -->
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main" style="background: rgb(158, 7, 7);">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">

        <span class="ms-1 font-weight-bold text-white">

        </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active .bg-light" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../cerrar.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Cerrar Sesión</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Página</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Usuarios</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Buscar</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../cerrar.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Cerrar Sesión</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        var cedDocente = "";
        var opcion = "";
        $(".editar").click(function() {
          fila = $(this).closest("tr");
          docente_ced = fila.find('td:eq(0)').text();
          nombre1_docente = fila.find('td:eq(1)').text();
          nombre2_docente = fila.find('td:eq(2)').text();
          apellido1_docente = fila.find('td:eq(3)').text();
          apellido2_docente = fila.find('td:eq(4)').text();
          dir_docente = fila.find('td:eq(5)').text();
          email_docente = fila.find('td:eq(6)').text();
          clave_docente = fila.find('td:eq(7)').text();
          $("#cedDocente").val(docente_ced);
          $("#nombre1Docente").val(nombre1_docente);
          $("#nombre2Docente").val(nombre2_docente);
          $("#apellido1Docente").val(apellido1_docente);
          $("#apellido2Docente").val(apellido2_docente);
          $("#direccionDocente").val(dir_docente);
          $("#emailDocente").val(email_docente);
          $("#claveDocente").val(clave_docente);
          $("#modalCRUD").modal('show');
          opcion = 1;
        });
        $(".eliminar").click(function() {
          fila = $(this).closest("tr");
          nombre = fila.find('td:eq(1)').text();
          cedDocente = fila.find('td:eq(0)').text();
          $("#modalBorrar").modal('show');
          $(".contenido").text("Esta seguro de que quiere eliminar el usuario de: " + nombre + " con cédula " + cedDocente);
        });

        $("#formBorrar").click(function() {
          cedDocente;
          opcion = 2;
          $.ajax({
            url: "../validar.php",
            type: "POST",
            data: {
              cedDocente: cedDocente,
              opcion: opcion
            },
            success: function(resultado) {
              alert(cedDocente);
            }
          });
          location.reload();
        });

        $("#agregar").click(function() {
          $("#modalCRUD_DOC").modal("show");
          opcion = 3;
        });

        $("#formUsuarios").submit(function(e) {
          e.preventDefault();
          cedDocente = $("#cedDocente").val();
          nombre1Docente = $("#nombre1Docente").val();
          nombre2Docente = $("#nombre2Docente").val();
          apellido1Docente = $("#apellido1Docente").val();
          apellido2Docente = $("#apellido2Docente").val();
          direccionDocente = $("#direccionDocente").val();
          emailDocente = $("#emailDocente").val();
          claveDocente = $("#claveDocente").val();
          //opcion = 1;
          $.ajax({
            url: "../validar.php",
            type: "POST",
            data: {
              cedDocente: cedDocente,
              nombre1Docente: nombre1Docente,
              nombre2Docente: nombre2Docente,
              apellido1Docente: apellido1Docente,
              apellido2Docente: apellido2Docente,
              direccionDocente: direccionDocente,
              emailDocente: emailDocente,
              claveDocente: claveDocente,
              opcion: opcion
            },
            success: function(resultado) {
              alert(resultado);
            }
          });
          location.reload();
        });

        $("#mostrar").click(function(e) {
          alert($("#cedDocentei").val());
          cedDocente = $("#cedDocentei").val();
        });

        $("#formDocentes").submit(function(e) {
          e.preventDefault();
          opcion = 4;
          cedDocentei = $("#cedDocentei").val();
          nombre1Docentei = $("#nombre1Docentei").val();
          nombre2Docentei = $("#nombre2Docentei").val();
          apellido1Docentei = $("#apellido1Docentei").val();
          apellido2Docentei = $("#apellido2Docentei").val();
          direccionDocentei = $("#direccionDocentei").val();
          emailDocentei = $("#emailDocentei").val();
          claveDocentei = $("#claveDocentei").val();
          //opcion = 1;
          $.ajax({
            url: "../validar.php",
            type: "POST",
            data: {
              cedDocentei: cedDocentei,
              nombre1Docentei: nombre1Docentei,
              nombre2Docentei: nombre2Docentei,
              apellido1Docentei: apellido1Docentei,
              apellido2Docentei: apellido2Docentei,
              direccionDocentei: direccionDocentei,
              emailDocentei: emailDocentei,
              claveDocentei: claveDocentei,
              opcion: opcion
            },
            success: function(resultado) {
              alert(resultado + status);
            }
          });
          location.reload();
        });
      });
    </script>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <center>
            <button class="btn btn-info btn-raised btn-sm" style="background: rgb(138, 4, 4); padding: 16px; border-radius: 8px;" name="agregar" id="agregar">Agregar
              Usuarios</button>
          </center>
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="background: rgb(158, 7, 7);">
                <h6 class="text-white text-capitalize ps-3">Tabla Usuarios</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cedula</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellido</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rol</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include ("../../Model/conexion.php");
                    $con =  Conectar();
  
                    $query = $con->prepare("SELECT * FROM personal");
                    $query->execute();
                    $r = $query->fetchAll();
                    $filas = "";
                
                    foreach ($r as $resu) {
                      $filas .= '<tr>
                                         <td>' . $resu['CED_PER'] . '</td>
                                         <td>' . $resu['NOM_PER'] . '</td>
                                         <td>' . $resu['APE_PER'] . '</td>
                                         <td>' . $resu['ROL_PER'] . '</td>
                                         <td> 
                                             <Button class="editar">Editar</Button>
                                             <Button class="eliminar">Eliminar</Button>
                                         </td>
                                         </tr>';
                    
                    
                  }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="ejemplo" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              Editar datos
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><a href="Estudiantes.php">X</a></button>
            </div>
            <form id="formUsuarios">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="col-form-label">Cedula del estudiante</label>
                      <input type="text" id="cedDocente" name="cedDocente" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Nombre 1 del estudiante</label>
                      <input type="text" id="nombre1Docente" name="nombre1Docente" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Nombre 2 del estudiante</label>
                      <input type="text" id="nombre2Docente" name="nombre2Docente" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Apellido 1 del estudiante</label>
                      <input type="text" id="apellido1Docente" name="apellido1Docente" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Apellido 2 del estudiante</label>
                      <input type="text" id="apellido2Docente" name="apellido2Docente" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Dirección del estudiante</label>
                      <input type="text" id="direccionDocente" name="direccionDocente" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Email del estudiante</label>
                      <input type="text" id="emailDocente" name="emailDocente" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Clave del estudiante</label>
                      <input type="text" id="claveDocente" name="claveDocente" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="Estudiantes.php"><button class="btn" type="button">Cancelar</button></a>
                <button class="btn" type="submit">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--MODAL DE AGG DOCENTE-->
      <div class="modal fade" id="modalCRUD_DOC" tabindex="-1" role="dialog" aria-labelledby="ejemplo" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              Agregar Estudiante
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><a href="Estudiantes.php">X</a></button>
            </div>
            <form id="formDocentes">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="col-form-label">Cedula del estudiante</label>
                      <input type="text" id="cedDocentei" name="cedDocentei" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Nombre 1 del estudiante</label>
                      <input type="text" id="nombre1Docentei" name="nombre1Docentei" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Nombre 2 del estudiante</label>
                      <input type="text" id="nombre2Docentei" name="nombre2Docentei" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Apellido 1 del estudiante</label>
                      <input type="text" id="apellido1Docentei" name="apellido1Docentei" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Apellido 2 del estudiante</label>
                      <input type="text" id="apellido2Docentei" name="apellido2Docentei" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Dirección del estudiante</label>
                      <input type="text" id="direccionDocentei" name="direccionDocentei" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Email del estudiante</label>
                      <input type="text" id="emailDocentei" name="emailDocentei" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Clave del estudiante</label>
                      <input type="text" id="claveDocentei" name="claveDocentei" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="Estudiantes.php"><button class="btn" type="button">Cancelar</button></a>
                <button class="btn" type="submit">Guardar</button>


              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog" aria-labelledby="ejemplo" aria-hidden="true">
        <!--tabindex vacio es 0 no 1, en -1 es oculto aroa permite delimitar el area del modal-->
        <!--todo modal necesita de un role, con el aria hidden se oculta el archivo-->
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2>Eliminar Elemento</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="">X</button>
            </div>
            <form id="formBorrar">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">

                      <label class="col-form-label contenido">Esta seguro de que quiere eliminar el usuario: </label>

                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button class="btn" type="submit">Eliminar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>