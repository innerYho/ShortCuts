<!-- modalPausaActiva -->
<form action="dashboard.php" method="post">
    <div class="modal fade" id="modalBrigada" aria-hidden="true" aria-labelledby="modalVotoLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 70%;">
            <div class="modal-content">
                <div class="modal-header " style="background-color: #cf152d; justify-content: center">
                    <center>
                        <h5 class="modal-title" id="modalVotoLabel" style="color: white; ">Convocatoria para líderes de pausas activas 2022</h5></br>
                        <!-- <h6 class="" style="color: white; "><cite title="Source Title">2022</cite> -->
                        </h6>
                    </center>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-12 cardColor" id="divInteres">
                            <center>
                                <div class="card-body">
                                    <h6 class="card-title"><strong>¿Le gustaría ser parte de nuestro equipo de líderes de pausas activas?</strong><strong class="asteriscos"> *</strong></h6>
                                    <select id="interesado" name="interesado" class="form-select" onchange="val1(this.value)">
                                        <option value="">Seleccione</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>

                                </div>
                            </center>
                        </div>
                        <div id="divBrigadista" style="display: none;">
                            <div class="row">
                                <div class="col-md-6 cardColor" id="divCapEmergencia" style="display: block;">
                                    <center>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="lblfue_entrenador" class="form-label">¿Ha ejecutado pausas activas anteriormente? <strong class="asteriscos"> *</strong></label>
                                                <select id="fue_entrenador" name="fue_entrenador" class="form-select" onchange="val2(this.value)">
                                                    <option value="">Seleccione</option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div id="div2" style="display: none;">

                                                <label for="lblentrenador_txt" class="form-label">Comentanos al respecto</label>
                                                <textarea type="text" name="entrenador_txt" id="entrenador_txt" class="form-control" placeholder="250 carácteres"></textarea>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-md-6 cardColor" id="divsst">
                                    <center>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="lbldanza" class="form-label">¿Tiene conocimiento y actitud frente a danzas? <strong class="asteriscos"> *</strong></label>
                                                <select id="danza" name="danza" class="form-select" onchange="val3(this.value)">
                                                    <option value="">Seleccione</option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div id="div3" style="display: none;">
                                                <label for="lbldanza_txt" class="form-label">Comentanos al respecto </label>
                                                <textarea type="text" name="danza_txt" id="danza_txt" class="form-control" placeholder="250 carácteres"></textarea>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-md-6 cardColor mx-auto" id="divenfermeria">
                                    <center>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="lblact_fisica" class="form-label">¿Tiene conocimiento y actitud frente a actividad física? <strong class="asteriscos"> *</strong></label>
                                                <select id="act_fisica" name="act_fisica" class="form-select" onchange="val4(this.value)">
                                                    <option value="">Seleccione</option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                                <div id="div4" style="display: none;">
                                                    <label for="lblact_fisicaTxt" class="form-label">Comentanos al respecto </label>
                                                    <textarea type="text" name="act_fisica_txt" id="act_fisica_txt" class="form-control" placeholder="250 carácteres"></textarea>
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

    $fue_entrenador = $_POST['fue_entrenador'];
    $entrenador_txt = $_POST['entrenador_txt'];
    $danza = $_POST['danza'];
    $danza_txt = $_POST['danza_txt'];
    $act_fisica = $_POST['act_fisica'];
    $act_fisica_txt = $_POST['act_fisica_txt'];

    include("abrir_conexion.php");

    if ($interesado === '0') {
        $createNoBrigada = ("INSERT INTO pausa_activa2022
            (pa_cc_usu,
            pa_nombre,
            pa_interesado
            ) 
            VALUES
            ('$cc', '$nom', '$interesado')");
        mysqli_query($conexion, $createNoBrigada);
    } else {


        $createBrigada = ("INSERT INTO pausa_activa2022
(pa_cc_usu,
pa_nombre,
pa_interesado,
pa_fue_entrenador,
pa_entrenador_txt,
pa_danza,
pa_danza_txt,
pa_act_fisica,
pa_act_fisica_txt
) 
VALUES
('$cc', '$nom', '$interesado', '$fue_entrenador', '$entrenador_txt', '$danza', 
'$danza_txt', '$act_fisica','$act_fisica_txt')");
        mysqli_query($conexion, $createBrigada);
    }
    include("cerrar_conexion.php");
    header('Location:dashboard.php');
}

?>

<script type="text/javascript">
    var res_pausa_activa = '<?php echo $res_pausa_activa ?>'; //modalBrigada
    // alert(res_brigada);
    if (res_pausa_activa <= 0) {
        $(document).ready(function() {
            $('#modalBrigada').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#modalBrigada').modal('toggle')
            document.getElementById("btn_briga").disabled = true;
        });
    } else {
        if (exm_hoy <= 0) {
            $(document).ready(function() {
                $('#modalDiario').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $('#modalDiario').modal('toggle')
            });
            document.getElementById("btn_salud").disabled = true;
        }
    }

    function val1(valInteres) {
        // divBrigadista = document.getElementById("divBrigadista");
        if (valInteres === "1") {
            divBrigadista.style.display = "block";
            document.getElementById("btn_briga").disabled = false;
        } else if (valInteres === "0") {
            divBrigadista.style.display = "none";
            document.getElementById("btn_briga").disabled = false;
        } else {
            document.getElementById("btn_briga").disabled = true;
        }
    }

    function val2(valInteres2) {
        if (valInteres2 === "1") {
            div2.style.display = "block";
        } else if (valInteres2 === "0") {
            div2.style.display = "none";
        }
    }

    function val3(valInteres3) {
        if (valInteres3 === "1") {
            div3.style.display = "block";
        } else if (valInteres3 === "0") {
            div3.style.display = "none";
        }
    }

    function val4(valInteres4) {
        if (valInteres4 === "1") {
            div4.style.display = "block";
        } else if (valInteres4 === "0") {
            div4.style.display = "none";
        }
    }
</script>