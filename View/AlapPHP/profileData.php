<div class="container">

    <h1 class="text-center mt-4">Profil</h1>
    <br>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-9">

            <div class="mb-3">
                <label for="teljesnev" class="form-label">Név</label><br>
                <input class="form-control" type="text" name="teljesnev" id="teljesnev" value="Readonly input here..." readonly>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label><br>
                <input class="form-control" type="text" name="email" id="email" value="Readonly input here..." readonly>
            </div>

            <div class="mb-3">
                <label for="telefonszamok" class="form-label">Telefonszám(ok)</label><br>
                <ul name="telefonszamok" id="telefonszamok">
                    <li>tel 1</li>
                    <li>tel 1</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img src="Kepek/kis-tigris.jpg" class="rounded-circle img-fluid w-100 d-inline-block" alt="Molo">
        </div>


        <hr class="mt-5 mb-3">

        <div class="row">
            <div class="mb-3">
                <label for="orszag" class="form-label">Ország</label><br>
                <input class="form-control" type="text" name="orszag" id="orszag" value="Readonly input here..." readonly>
            </div>

            <div class="mb-3">
                <label for="telepules" class="form-label">Település</label><br>
                <input class="form-control" type="text" name="telepules" id="telepules" value="Readonly input here..." readonly>
            </div>

            <div class="mb-3">
                <label for="irsz" class="form-label">Irányitószám</label><br>
                <input class="form-control" type="text" name="irsz" id="irsz" value="Readonly input here..." readonly>
            </div>

            <div class="mb-3">
                <label for="szuletesidatum" class="form-label">Születési dátum</label><br>
                <input class="form-control" type="text" name="szuletesidatum" id="szuletesidatum" value="Readonly input here..." readonly>
            </div>

            <div class="mb-3">
                <label for="allampolgarsag" class="form-label">Állampolgárság</label><br>
                <input class="form-control" type="text" name="allampolgarsag" id="allampolgarsag" value="Readonly input here..." readonly>
            </div>

            <div class="mb-3">
                <label for="bemutatkozas" class="form-label">Bemutatkozás</label><br>
                <textarea class="form-control" type="text" name="bemutatkozas" id="bemutatkozas" readonly>Readonly input here...</textarea>
            </div>

            <div class="mb-3">
                <label for="Hobbik" class="form-label" >Hobbi(k)</label><br>
                <ul name="hobbik" id="hobbik">
                    <li>hobbi 1</li>
                    <li>hobbi 1</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="row mt-3">
        <img class="col-4" src="Kepek/molo.jpg" alt="Nature" onclick="myFunction(this);">
        <img class="col-4" src="Kepek/kis-tigris.jpg" alt="Snow" onclick="myFunction(this);">
        <img class="col-4" src="Kepek/2-szocske.webp" alt="Mountains" onclick="myFunction(this);">
    </div>


    <div class="row mt-2 mb-3" style="display: block">
        <img id="expandedImg" style="width:100%">
        <div id="imgtext"></div>

    </div>
</div>

<script>
    window.addEventListener("load", (event) => {
       
   var xhr = new XMLHttpRequest();
   xhr.open("POST", "Controller/formFeldolgozo_alapadat.php");
   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
         console.log(JSON.parse(xhr.responseText)[0]);
         var elemek = JSON.parse(xhr.responseText)[0];
         document.getElementById("email").value = elemek["email"];
         document.getElementById("teljesnev").value = elemek["vnev"]+" "+elemek["knev"]+" "+elemek["unev"];
         document.getElementById("orszag").value = elemek["orszag"];
         document.getElementById("telepules").value = elemek["telepules"];
         document.getElementById("irsz").value = elemek["irsz"];
         document.getElementById("szuletesidatum").value = elemek["szuletesidatum"];
         document.getElementById("allampolgarsag").value = elemek["allampolgarsag"];
         document.getElementById("bemutatkozas").value = elemek["bemutatkozas"];
      }
   };
   xhr.send("muvelet=profile&userid=<?= $userid ?>");

});
</script>

