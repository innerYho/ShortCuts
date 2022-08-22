</br>
<hr>

<h6>Última Conexión</h6>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script type="text/javascript">
    function getTimeAJAX() {
        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    
        var time = $.ajax({
            url: 'time.php', //indicamos la ruta donde se genera la hora
            dataType: 'text', //indicamos que es de tipo texto plano
            async: false //ponemos el parámetro asyn a falso
        }).responseText;
        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("myWatch").innerHTML = time;
    }
    //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
    setInterval(getTimeAJAX, 1000);
</script>
<p id='myWatch'></p>
<!--- ACTUALIZAR CUMPLEAÑOS --->
<hr>