<?php

include("abrir_conexion.php");
//consulta beneficiarios Baqll 2022 / 06
$req_bene = mysqli_query($conexion, "SELECT COUNT(*) bene FROM beneficiario_ccf WHERE ccf_id_agent = '$cc'");
while ($consultaBene = mysqli_fetch_array($req_bene)) {
    $res_beneficiario = $consultaBene['bene'];
}
include("cerrar_conexion.php");

?>

<!-- modal beneficiario -->
<div class="modal fade" id="modalBrigada" aria-hidden="true" aria-labelledby="modalVotoLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 70%;">
        <div class="modal-content">
            <form action="dashboard.php" method="post" name="f1">
                <div class="modal-header " style="background-color: #cf152d; justify-content: center">
                    <center>
                        <h5 class="modal-title" id="modalVotoLabel" style="color: white; ">Beneficiarios CCF</h5></br>
                        <!-- <h6 class="" style="color: white; "><cite title="Source Title">2022</cite> -->
                        </h6>
                    </center>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-12 cardColor" id="divInteres">
                            <center>
                                <div class="card-body">
                                    <!-- <h1> - Beneficiario CCF - </h1></br> -->
                                    </br>
                                    <!-- http://localhost/intranet/Bogota/movil/apps/beneficiarioCCF.php -->
                                    <label>Si su beneficiario NO ha sido ingresado a la caja de compensación, se le solicita de su colaboración aportando los documentos pertinentes según el tipo de beneficiario: </label>
                                    <ul>

                                        <li><a> Menores de 7 Años Registro Civil.</a></li>
                                        <li><a> Certificado Escolar (12 Años en adelante).</a></li>
                                        <li><a> Mayores de 7 a los 17 años Tarjeta de Identidad.</a></li>
                                        <li><a> Fotocopia de Documento del Colaborador.</a></li>
                                        <li><a> Fotocopia de C.C. de Padres mayores de 60 Años y Registro Civil del colaborador (únicamente si dependen del colaborador)..</a></li>
                                        <li><a> Certificado de EPS (NO ADRESS).</a></li>
                                    </ul>

                                    <label>Si su beneficiario dejo de recibir beneficios de caja de compensación (SI APLICA, conforme las condiciones) lo que se requiere es la actualización del mismo, se le solicita de su colaboración aportando los documentos pertinentes según el tipo de beneficiario: </label>
                                    </br> <label>Actualizaciones:</label>

                                    <ul>
                                        <li><a> Menores de 7 Años Registro Civil.</a></li>
                                        <li><a> Certificado Escolar (12 Años en adelante).</a></li>
                                        <li><a> Mayores de 7 a los 17 años Tarjeta de Identidad.</a></li>
                                    </ul>
                            </center>
                        </div>



                    </div>


                    <div class="card-body">
                        <center>
                            <h3>Datos del trabajador</h3>
                        </center>
                        <div class="row" style="border-style: solid;">
                            <div class="col-9">

                                <label>Nombre</label>
                                <input class="form-control" type="text" name="ccf_nom_agent" value="<?php echo $_SESSION['name'] ? $_SESSION['name'] : ''; ?>" readonly="readonly">
                                <!-- <input class="form-control" type="text" name="ccf_nom_agent"> -->
                            </div>
                            <div class="col-3">
                                <label>Campaña</label>
                                <input class="form-control" type="text" name="ccf_camp" value="<?php echo $_SESSION['cam'] ? $_SESSION['cam'] : ''; ?>" readonly="readonly">
                            </div>

                            <div class="col-6">
                                <label>Tipo de documento</label>
                                <select class="form-control" name="ccf_tipo_doc" type="text" required oninvalid="this.setCustomValidity('¡Este campo es requerido!')" oninput="this.setCustomValidity('')">
                                    <option value="">Seleccione</option>
                                    <option value="CC">CC</option>
                                    <option value="PAS">PAS</option>
                                    <option value="PEP">PEP</option>
                                    <option value="PPT">PPT</option>
                                    <option value="CE">CE</option>
                                    <!-- <option value="Otro">Otro:</option> -->
                                </select>
                            </div>

                            <div class="col-6">
                                <label>Número de documento</label>
                                <!-- <input class="form-control" type="number" name="ccf_id_agent" value="<php echo $_SESSION['user'] ? $_SESSION['user'] : ''; ?>"> -->
                                <input class="form-control" type="number" name="ccf_id_agent" value="<?php echo $_SESSION['user']; ?>" readonly="readonly">
                            </div>
                            <div class="col-6">
                                <label>Cargo</label>
                                <input class="form-control" type="text" name="ccf_cargo" required>
                            </div>
                            <div class="col-6">
                                <label>Beneficiario</label>
                                <select class="form-control" name="ccf_beneficiario" type="text" required oninvalid="this.setCustomValidity('¡Este campo es requerido!')" oninput="this.setCustomValidity('')">
                                    <option value="">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <label>
                                Para el personal extranjero en caso de tener mas un tipo de documento diligenciar este campo y el siguiente.
                                <strong style="color: red">*</strong>
                            </label>
                            <div class="col-6">
                                <label>Tipo de documento</label>

                                <select class="form-control" name="ccf_tipo_doc_2" type="text">
                                    <option value="N/A">N/A</option>
                                    <option value="CC">CC</option>
                                    <option value="PAS">PAS</option>
                                    <option value="PEP">PEP</option>
                                    <option value="PPT">PPT</option>
                                    <option value="CE">CE</option>
                                    <!-- <option value="Otro">Otro:</option> -->
                                </select>
                            </div>

                            <div class="col-6">
                                <label>Número de documento</label>
                                <input class="form-control" type="number" name="ccf_id_agent_2" value="0">
                            </div>


                            </br>
                        </div>
                    </div>
                </div>

                </br>
                <div class="col-12 cardColor" id="divsst">
                    <center>
                        <div class="card-body">
                            <center>
                                <h4 style="color: rgb(199, 0, 0);">Datos del beneficiario <strong>#1</strong></h4>
                            </center>
                            <div class="row" style="border-style: solid; ">
                                <div class="col-3">
                                    <label>tipo de beneficiario</label>
                                    <select class="form-control" name="ccf_bene_tipo_bene_1" type="text" onchange="tipoBene1(this.value)">>
                                        <option value="">Seleccione</option>
                                        <option value="HIJOS">HIJOS</option>
                                        <option value="PADRES">PADRES</option>
                                        <option value="ESPOSO(A)">ESPOSO(A)</option>
                                        <option value="COMPAÑERO(A) PERMANENTE">COMPAÑERO(A) PERMANENTE</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <div class="" style="display:none;" id="divTipoBene1">
                                        <label>tipo de beneficiario</label>
                                        <input class="form-control" type="text" name="ccf_bene_tipo_bene_adi_1">
                                    </div>
                                </div>
                                <div class="col-9">

                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="ccf_bene_nom_1">
                                </div>

                                <div class="col-12">
                                    <center><label style="color: rgb(199, 0, 0);">Tipo de documento</label></center>
                                    <div class="row">
                                        <div class="col-6">

                                            <label>Registro civil para menores de 7 años</label>
                                            <label>TI (Tarjeta de identidad) Mayores de 7 años</label>
                                        </div>

                                        <div class="col-6">
                                            <select class="form-control" name="ccf_bene_tipo_doc_1" type="text">
                                                <option value="">Seleccione</option>
                                                <option value="Registro civil">Registro civil</option>
                                                <option value="TI">TI</option>
                                                <option value="CC">CC</option>
                                                <option value="PAS">PAS</option>
                                                <option value="PEP">PEP</option>
                                                <option value="PPT">PPT</option>
                                                <option value="CE">CE</option>
                                                <!-- <option value="Otro">Otro:</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Número de documento</label>
                                        <input class="form-control" type="number" name="ccf_bene_num_doc_1" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-12 cardColor mx-auto" id="divenfermeria">
                    <center>
                        <div class="card-body">
                            <center>
                                <h4 style="color: rgb(199, 0, 0);">Datos del beneficiario <strong>#2</strong></h4>
                            </center>
                            <div class="row" style="border-style: solid; ">
                                <div class="col-3">
                                    <label>tipo de beneficiario</label>
                                    <select class="form-control" name="ccf_bene_tipo_bene_2" type="text" onchange="tipoBene2(this.value)">
                                        <option value="">Seleccione</option>
                                        <option value="HIJOS">HIJOS</option>
                                        <option value="PADRES">PADRES</option>
                                        <option value="ESPOSO(A)">ESPOSO(A)</option>
                                        <option value="COMPAÑERO(A) PERMANENTE">COMPAÑERO(A) PERMANENTE</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <div class="" style="display:none;" id="divTipoBene2">
                                        <label>tipo de beneficiario</label>
                                        <input class="form-control" type="text" name="ccf_bene_tipo_bene_adicional_2">
                                    </div>
                                </div>
                                <div class="col-9">

                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="ccf_bene_nom_2">
                                </div>

                                <div class="col-12">
                                    <center><label style="color: rgb(199, 0, 0);">Tipo de documento</label></center>
                                    <div class="row">
                                        <div class="col-6">

                                            <label>Registro civil para menores de 7 años</label>
                                            <label>TI (Tarjeta de identidad) Mayores de 7 años</label>
                                        </div>

                                        <div class="col-6">
                                            <select class="form-control" name="ccf_bene_tipo_doc_2" type="text">
                                                <option value="">Seleccione</option>
                                                <option value="Registro civil">Registro civil</option>
                                                <option value="TI">TI</option>
                                                <option value="CC">CC</option>
                                                <option value="PAS">PAS</option>
                                                <option value="PEP">PEP</option>
                                                <option value="PPT">PPT</option>
                                                <option value="CE">CE</option>
                                                <!-- <option value="Otro">Otro:</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Número de documento</label>
                                        <input class="form-control" type="number" name="ccf_bene_num_doc_2" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>


                <div class="col-12 cardColor mx-auto" id="divenfermeria">
                    <center>
                        <div class="card-body">
                            <center>
                                <h4 style="color: rgb(199, 0, 0);">Datos del beneficiario <strong>#3</strong></h4>
                            </center>
                            <div class="row" style="border-style: solid; ">
                                <div class="col-3">
                                    <label>tipo de beneficiario</label>
                                    <select class="form-control" name="ccf_bene_tipo_bene_3" type="text" onchange="tipoBene3(this.value)">
                                        <option value="">Seleccione</option>
                                        <option value="HIJOS">HIJOS</option>
                                        <option value="PADRES">PADRES</option>
                                        <option value="ESPOSO(A)">ESPOSO(A)</option>
                                        <option value="COMPAÑERO(A) PERMANENTE">COMPAÑERO(A) PERMANENTE</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <div class="" style="display:none;" id="divTipoBene3">
                                        <label>tipo de beneficiario</label>
                                        <input class="form-control" type="text" name="ccf_bene_tipo_bene_adicional_3">
                                    </div>
                                </div>
                                <div class="col-9">

                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="ccf_bene_nom_3">
                                </div>

                                <div class="col-12">
                                    <center><label style="color: rgb(199, 0, 0);">Tipo de documento</label></center>
                                    <div class="row">
                                        <div class="col-6">

                                            <label>Registro civil para menores de 7 años</label>
                                            <label>TI (Tarjeta de identidad) Mayores de 7 años</label>
                                        </div>

                                        <div class="col-6">
                                            <select class="form-control" name="ccf_bene_tipo_doc_3" type="text">
                                                <option value="">Seleccione</option>
                                                <option value="Registro civil">Registro civil</option>
                                                <option value="TI">TI</option>
                                                <option value="CC">CC</option>
                                                <option value="PAS">PAS</option>
                                                <option value="PEP">PEP</option>
                                                <option value="PPT">PPT</option>
                                                <option value="CE">CE</option>
                                                <!-- <option value="Otro">Otro:</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Número de documento</label>
                                        <input class="form-control" type="number" name="ccf_bene_num_doc_3" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>



                </br></br>
                <input class="form-control btn-success" type="submit" name="btn_beneficiario" value="Guardar">
            </form>
        </div>
    </div>
</div>

<?php
// Envío a la base de datos
if (isset($_POST['btn_beneficiario'])) {
    $ccf_fch           =  date('Y-m-d');
    $ccf_nom_agent = $_POST['ccf_nom_agent'];
    $ccf_camp = $_POST['ccf_camp'];
    $ccf_tipo_doc          = $_POST['ccf_tipo_doc'];
    $ccf_id_agent          = $_POST['ccf_id_agent'];
    $ccf_cargo  = $_POST['ccf_cargo'];
    $ccf_beneficiario  = $_POST['ccf_beneficiario'];
    $ccf_tipo_doc_2  = $_POST['ccf_tipo_doc_2'];
    $ccf_id_agent_2  = $_POST['ccf_id_agent_2'];

    $ccf_bene_tipo_bene_1  = $_POST['ccf_bene_tipo_bene_1'];
    $ccf_bene_tipo_bene_adi_1  = $_POST['ccf_bene_tipo_bene_adi_1'];
    $ccf_bene_nom_1  = $_POST['ccf_bene_nom_1'];
    $ccf_bene_tipo_doc_1  = $_POST['ccf_bene_tipo_doc_1'];
    $ccf_bene_num_doc_1  = $_POST['ccf_bene_num_doc_1'];

    $ccf_bene_tipo_bene_2  = $_POST['ccf_bene_tipo_bene_2'];
    $ccf_bene_tipo_bene_adi_2  = $_POST['ccf_bene_tipo_bene_adi_2'];
    $ccf_bene_nom_2  = $_POST['ccf_bene_nom_2'];
    $ccf_bene_tipo_doc_2  = $_POST['ccf_bene_tipo_doc_2'];
    $ccf_bene_num_doc_2  = $_POST['ccf_bene_num_doc_2'];

    $ccf_bene_tipo_bene_3  = $_POST['ccf_bene_tipo_bene_3'];
    $ccf_bene_tipo_bene_adi_3  = $_POST['ccf_bene_tipo_bene_adi_3'];
    $ccf_bene_nom_3  = $_POST['ccf_bene_nom_3'];
    $ccf_bene_tipo_doc_3  = $_POST['ccf_bene_tipo_doc_3'];
    $ccf_bene_num_doc_3  = $_POST['ccf_bene_num_doc_3'];

    include("abrir_conexion.php");
    // include("../movilabrir_conexion.php");


    $sql = "INSERT INTO beneficiario_ccf(
            ccf_fch, 
            ccf_nom_agent, 
            ccf_camp, 
            ccf_tipo_doc,
            ccf_id_agent, 
            ccf_cargo,
            ccf_beneficiario,
            ccf_tipo_doc_2,
            ccf_id_agent_2,
            ccf_bene_tipo_bene_1,
            ccf_bene_tipo_bene_adi_1,
            ccf_bene_nom_1,
            ccf_bene_tipo_doc_1,
            ccf_bene_num_doc_1,

            ccf_bene_tipo_bene_2,
            ccf_bene_tipo_bene_adi_2,
            ccf_bene_nom_2,
            ccf_bene_tipo_doc_2,
            ccf_bene_num_doc_2,

            ccf_bene_tipo_bene_3,
            ccf_bene_tipo_bene_adi_3,
            ccf_bene_nom_3,
            ccf_bene_tipo_doc_3,
            ccf_bene_num_doc_3
       ) values(
            '$ccf_fch',
            '$ccf_nom_agent',
            '$ccf_camp',
            '$ccf_tipo_doc',
            '$ccf_id_agent',
            '$ccf_cargo',
            '$ccf_beneficiario',
            '$ccf_tipo_doc_2',
            '$ccf_id_agent_2',
            '$ccf_bene_tipo_bene_1',
            '$ccf_bene_tipo_bene_adi_1',
            '$ccf_bene_nom_1',
            '$ccf_bene_tipo_doc_1',
            '$ccf_bene_num_doc_1',
            '$ccf_bene_tipo_bene_2',
            '$ccf_bene_tipo_bene_adi_2',
            '$ccf_bene_nom_2',
            '$ccf_bene_tipo_doc_2',
            '$ccf_bene_num_doc_2',
            '$ccf_bene_tipo_bene_3',
            '$ccf_bene_tipo_bene_adi_3',
            '$ccf_bene_nom_3',
            '$ccf_bene_tipo_doc_3',
            '$ccf_bene_num_doc_3'
       )";

    mysqli_query($conexion, $sql);


    include("cerrar_conexion.php");
    // include("../movil/cerrar_conexion.php");

    header('Location:dashboard.php');
}

?>
<?php
include("footer.php");

?>
<script type="text/javascript">
    var res_beneficiario = '<?php echo $res_beneficiario ?>'; //modalBrigada
    // console.log(res_beneficiario);
    // alert(res_brigada);
    if (res_beneficiario <= 0) {
        $(document).ready(function() {
            $('#modalBrigada').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#modalBrigada').modal('toggle')
            // document.getElementById("btn_beneficiario").disabled = true;
        });
    }

    function tipoBene1(val1) {
        if (val1 === "Otro") {
            divTipoBene1.style.display = "block";
        } else {
            divTipoBene1.style.display = "none";
        }
    }

    function tipoBene2(val2) {
        if (val2 === "Otro") {
            divTipoBene2.style.display = "block";
        } else {
            divTipoBene2.style.display = "none";
        }
    }

    function tipoBene3(val3) {
        if (val3 === "Otro") {
            divTipoBene3.style.display = "block";
        } else {
            divTipoBene3.style.display = "none";
        }
    }
</script>