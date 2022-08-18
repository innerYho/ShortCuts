<?php
//consulta brigada 22 08 18
$req_brigada = mysqli_query($conexion, "SELECT COUNT(*) brigada FROM brigada2208 WHERE bri_cc_usu = '$cc'");
while ($consultaBri = mysqli_fetch_array($req_brigada)) {
    $res_brigada = $consultaBri['brigada'];
}
?>

<!-- modalBrigada -->
<form action="dashboard.php" method="post">
    <div class="modal fade" id="modalBrigada" aria-hidden="true" aria-labelledby="modalVotoLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 70%;">
            <div class="modal-content">
                <div class="modal-header " style="background-color: #cf152d; justify-content: center">
                    <center>
                        <h5 class="modal-title" id="modalVotoLabel" style="color: white; ">Convocatoria para brigadistas 2022</h5></br>
                        <!-- <h6 class="" style="color: white; "><cite title="Source Title">2022</cite> -->
                        </h6>
                    </center>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-12 cardColor" id="divInteres">
                            <center>
                                <div class="card-body">
                                    <h6 class="card-title"><strong>¿Le gustaría ser parte de la brigada de emergencia de la compañia?</strong><strong class="asteriscos"> *</strong></h6>
                                    <select id="interesado" name="interesado" class="form-select" onchange="val1(this.value)">
                                        <option value="">Seleccione</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>

                                </div>
                            </center>
                        </div>
                        <div id="divBrigadista" style="display: none;">
                            <div class="row">
                                <div class="col-md-6 cardColor" id="divFueBrigadista" style="display: block;">
                                    <center>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="lblbrigadista" class="form-label">¿Ha sido parte de las anteriores brigadas? <strong class="asteriscos"> *</strong></label>
                                                <select id="brigadista" name="brigadista" class="form-select">
                                                    <option value="">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-md-6 cardColor" id="divCapEmergencia" style="display: block;">
                                    <center>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="lblemergencia" class="form-label">¿Cuenta con capacitación de emergencia? <strong class="asteriscos"> *</strong></label>
                                                <select id="emergencia" name="emergencia" class="form-select" onchange="val2(this.value)">
                                                    <option value="">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div id="div2" style="display: none;">
                                                <label for="lblemergenciaTxt" class="form-label">¿Cuál? </label>
                                                <textarea type="text" name="emergenciaTxt" id="emergenciaTxt" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-md-6 cardColor" id="divsst">
                                    <center>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="lblsst" class="form-label">¿Cuenta con formación en Seguridad y salud en el trabajo? <strong class="asteriscos"> *</strong></label>
                                                <select id="sst" name="sst" class="form-select" onchange="val3(this.value)">
                                                    <option value="">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div id="div3" style="display: none;">
                                                <label for="lblsstTxt" class="form-label">¿Cuál? </label>
                                                <textarea type="text" name="sstTxt" id="sstTxt" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-md-6 cardColor" id="divenfermeria">
                                    <center>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="lblenfermeria" class="form-label">¿Cuenta con formación en enfermería o afines? <strong class="asteriscos"> *</strong></label>
                                                <select id="enfermeria" name="enfermeria" class="form-select" onchange="val4(this.value)">
                                                    <option value="">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div id="div4" style="display: none;">
                                                    <label for="lblenfermeriaTxt" class="form-label">¿Cuál? </label>
                                                    <textarea type="text" name="enfermeriaTxt" id="enfermeriaTxt" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">

                    <input type="submit" name="btn_briga" id="btn_briga" class="btn-lg btn-danger " value="Enviar">
                </div>
            </div>
        </div>
    </div>
</form>

<?php
// Envío a la base de datos
if (isset($_POST['btn_briga'])) {
    $cc = $_SESSION['user'];
    $nom = $_SESSION['name'];
    $interesado = $_POST['interesado'];
    $brigadista = $_POST['brigadista'];
    $emergencia = $_POST['emergencia'];
    $emergenciaTxt = $_POST['emergenciaTxt'];
    $sst = $_POST['sst'];
    $sstTxt = $_POST['sstTxt'];
    $enfermeria = $_POST['enfermeria'];
    $enfermeriaTxt = $_POST['enfermeriaTxt'];

    include("abrir_conexion.php");
    if ($interesado === 'No') {
        $createNoBrigada = ("INSERT INTO brigada2208
                (bri_cc_usu,
                bri_nombre,
                bri_interesado
                ) 
                VALUES
                ('$cc', '$nom', '$interesado')");
        mysqli_query($conexion, $createNoBrigada);
    } else {
        $createBrigada = ("INSERT INTO brigada2208
(bri_cc_usu,
bri_nombre,
bri_interesado,
bri_fue_brigadista,
bri_cap_emergencia,
bri_cap_emergencia_txt,
bri_cap_sst,
bri_cap_sst_txt,
bri_cap_enfermeria,
bri_cap_enfermeria_txt
) 
VALUES
('$cc', '$nom', '$interesado', '$brigadista', '$emergencia', '$emergenciaTxt', 
'$sst', '$sstTxt','$enfermeria', '$enfermeriaTxt')");
        mysqli_query($conexion, $createBrigada);
    }
    include("cerrar_conexion.php");
    header('Location:dashboard.php');
}

?>


<script type="text/javascript">
    var res_brigada = '<?php echo $res_brigada ?>'; //modalBrigada
    if (res_brigada <= 0) {
        $(document).ready(function() {
            $('#modalBrigada').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#modalBrigada').modal('toggle')
            document.getElementById("btn_briga").disabled = true;
        });
    }

    function val1(valInteres) {
        // divBrigadista = document.getElementById("divBrigadista");
        if (valInteres === "Si") {
            divBrigadista.style.display = "block";
            btn_briga.style.display = "block";
            document.getElementById("btn_briga").disabled = false;
        } else if (valInteres === "No") {
            btn_briga.style.display = "block";
            divBrigadista.style.display = "none";
            document.getElementById("btn_briga").disabled = false;
        } else {
            document.getElementById("btn_briga").disabled = true;
        }
    }

    function val2(valInteres2) {
        if (valInteres2 === "Si") {
            div2.style.display = "block";
        } else if (valInteres2 === "No") {
            div2.style.display = "none";
        }
    }

    function val3(valInteres3) {
        if (valInteres3 === "Si") {
            div3.style.display = "block";
        } else if (valInteres3 === "No") {
            div3.style.display = "none";
        }
    }

    function val4(valInteres4) {
        if (valInteres4 === "Si") {
            div4.style.display = "block";
        } else if (valInteres4 === "No") {
            div4.style.display = "none";
        }
    }
</script>


CREATE TABLE `brigada2208` (
`bri_id` int primary key auto_increment NOT NULL,
`bri_cc_usu` bigint NOT NULL,
`bri_nombre` varchar(60) DEFAULT NULL,
`bri_interesado` varchar(2) DEFAULT NULL,
`bri_fue_brigadista` varchar(2) DEFAULT NULL,
`bri_cap_emergencia` varchar(2) DEFAULT NULL,
`bri_cap_emergencia_txt` varchar(150) DEFAULT NULL,
`bri_cap_sst` varchar(2) DEFAULT NULL,
`bri_cap_sst_txt` varchar(150) DEFAULT NULL,
`bri_cap_enfermeria` varchar(2) DEFAULT NULL,
`bri_cap_enfermeria_txt` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


1014305799 Katherine Sanchez