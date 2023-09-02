<div class="container">
    <div class="row mt-2">

        <div class="col-3"></div>

        <div class="col-6 ">

            <h1 class="mt-4 mb-4">Regisztráció</h1>

            <Form class="mt-3" name="form_regisztraciosAdatok" id="form_regisztraciosAdatok">

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label><br>
                    <input class="form-control" type="text" id="email" name="email" spaceholder="valami@valami.hu">
                </div>

                <div class="mb-3">
                    <label for="vnev" class="form-label">Vezetéknév</label><br>
                    <input class="form-control" type="text" id="vnev" name="vnev">
                </div>

                <div class="mb-3">
                    <label for="knev" class="form-label">Keresztnév</label><br>
                    <input class="form-control" type="text" id="knev" name="knev">
                </div>

                <div class="mb-3">
                    <label for="unev" class="form-label">Utónév</label><br>
                    <input class="form-control" type="text" id="unev" name="unev">
                </div>

                <div class="mb-3">
                    <label for="orszag" class="form-label">Ország</label><br>
                    <input class="form-control" type="text" id="orszag" name="orszag">
                </div>

                <div class="mb-3">
                    <label for="telepules" class="form-label">Település</label><br>
                    <input class="form-control" type="text" id="telepules" name="telepules">
                </div>

                <div class="mb-3">
                    <label for="irsz" class="form-label">Irányítószám</label><br>
                    <input class="form-control" type="text" id="irsz" name="irsz">
                </div>

                <div class="mb-3">
                    <label for="szuletesidatum" class="form-label">Születési dátum</label><br>
                    <input type="date" id="szuletesidatum" name="szuletesidatum" value="2023-08-01" min="2023-08-01"
                        max="3000-12-31" />
                </div>

                <div class="mb-3">
                    <label for="jelszo" class="form-label">Jelszó</label>
                    <input type="password" id="jelszo" name="jelszo" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                            Használj biztonságos jelszót, tartalmazon kis- és nagybetüket, számokat. 
                            Ne tartalmazon speciális karaktereket.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="jelszo2" class="form-label">Jelszó újra</label>
                    <input type="password2" id="jelszo2" name="jelszo2" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                            Használj biztonságos jelszót, tartalmazon kis- és nagybetüket, számokat. 
                            Ne tartalmazon speciális karaktereket.
                    </div>
                </div>

                <input type="hidden" id="regisztracio" value="">

            </Form>
            <button type="submit" class="btn btn-primary mb-3" onclick="regisztracioFormrol()" >Regisztráció</button>
        </div>

        <div class="col-3 "> </div>

    </div>
</div>