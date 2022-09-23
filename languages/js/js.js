//Dictionary

// Callback : =>{} send function like argument
getUser(1, (user) => { console.log('user1') })

    // terminal node app-non-blocking.js


    < script type = "text/javascript" >
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
</script >

    // selected checkbox
    <div class="form-checkbox">
        <input type="checkbox" id="cbAdicional" name="cbAdicional">
            <label>Adicional</label>
    </div>
    <div class="form-checkbox" style="display:none; padding-left: 40px;" id="groupCB">
                    <div class="form-checkbox">
                        <input type="checkbox" id="cbHBO" name="cbHBO">
                        <label>HBO</label>
                    </div>
                    <div class="form-checkbox">
                        <input type="checkbox" id="cbNetflix" name="cbNetflix">
                        <label>Netflix</label>
                    </div>
                    </div>


var checkbox = document.getElementById('cbAdicional');
checkbox.addEventListener("change", function () {
    checkbox.checked ?
        document.getElementById('groupCB').style.display = "block" :
        document.getElementById('groupCB').style.display = "none",
        resetCB();
});


//cahnge visibility of div 
<div class="col-4" id="divPauta" style="display: none;">
    <small>Red pautada</small>
    <select class="form-control" type="text" name="pauta_redes">
        <option value="">Seleccione pauta</option>
        <option value="Facebook">Facebook</option>
        <option value="Instagram">Instagram</option>
        <option value="Telegram">Telegram</option>
        <option value="TikTok">TikTok</option>
        <option value="WhatsApp">WhatsApp</option>
    </select>
</div>
function funcpauta() {
    var divPauta = document.getElementById("divPauta");
    var fuente = document.getElementById("fuente").value;

    if (fuente == "Pauta Paga") {
        divPauta.style.display = 'block';
    } else {
        divPauta.style.display = 'none';
    }
}