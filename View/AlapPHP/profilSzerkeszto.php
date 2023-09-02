<div class="container">
    <div class="row mt-2">

        <div class="col-3"></div>

        <div class="col-6 ">

            <h1 class="mt-4 mb-4">Profil szerkesztő</h1>

            <p class="text-center">
                <a href="profile.php?id=1" target="_blank">Publikus profil linkje</a>
            </p>

            <hr class="mt-5">



            <!-- Alap adatok --------------------------------------------------------------------------------------- -->
            <br>
            <p class="text-center">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#alapadatok"
                    aria-expanded="false" name="alapadatNyitocsuko" onclick="alapAdatokBeallitFormon()">
                    Alap adatok
                </button>
            </p>

            <div class="collapse mb-5" id="alapadatok">
                <Form class="mt-3" name="form_alapadatok" id="form_alapadatok">

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label><br>
                        <input class="form-control" type="text" name="email" id="email"
                            spaceholder="valami@valami.hu">
                    </div>

                    <div class="mb-3">
                        <label for="vnev" class="form-label">Vezetéknév</label><br>
                        <input class="form-control" type="text" name="vnev" id="vnev">
                    </div>

                    <div class="mb-3">
                        <label for="knev" class="form-label">Keresztnév</label><br>
                        <input class="form-control" type="text" name="knev" id="knev">
                    </div>

                    <div class="mb-3">
                        <label for="unev" class="form-label">Utónév</label><br>
                        <input class="form-control" type="text" name="unev" id="unev">
                    </div>

                    <div class="mb-3">
                        <label for="orszag" class="form-label">Ország</label><br>
                        <input class="form-control" type="text" name="orszag" id="orszag">
                    </div>

                    <div class="mb-3">
                        <label for="telepules" class="form-label">Település</label><br>
                        <input class="form-control" type="text" name="telepules" id="telepules">
                    </div>

                    <div class="mb-3">
                        <label for="irsz" class="form-label">Irányítószám</label><br>
                        <input class="form-control" type="text" name="irsz" id="irsz">
                    </div>

                    <div class="mb-3">
                        <label for="szuletesidatum" class="form-label">Születési dátum</label><br>
                        <input type="date" id="szuletesidatum" name="szuletesidatum" value="2023-08-01" min="2023-08-01"
                            max="3000-12-31" />
                    </div>

                    <input type="hidden" id="muvelet" name="muvelet" value="mentes">
                </Form>
                <button type="submit" class="btn btn-success mb-3" onclick="alapAdatokMentFormrol()">Mentés</button>
            </div>

            <hr class="mt-5 mb-5">



            <!-- Másodlagos adatok --------------------------------------------------------------------------------------- -->
            <p class="text-center">
                <button class="btn btn-primary " type="button" data-bs-toggle="collapse"
                    data-bs-target="#masodlagosadatok" aria-expanded="false" onclick="masodlagosAdatokBeallitFormon()">
                    Másodlagos adatok
                </button>
            </p>

            <div class="collapse" id="masodlagosadatok">
                <Form class="mt-3" name="form_masodlagosadatok" id="form_masodlagosadatok"> 
                    <div class="mb-3">
                        <label for="allampolgarsag" class="form-label">Állampolgárság</label><br>
                        <input class="form-control" type="text" name="allampolgarsag" id="allampolgarsag">
                    </div>

                    <div class="mb-3">
                        <label for="bemutatkozas" class="form-label">Bemutatkozás</label><br>
                        <textarea class="form-control" type="text" name="bemutatkozas" id="bemutatkozas">input here...</textarea>
                    </div>
                    
                    <input type="hidden" id="muvelet" name="muvelet" value="mentes">

                </Form>
                <button type="submit" class="btn btn-success mb-3" onclick="masodlagosAdatokMentFormrol()">Mentés</button>
            </div>
            <hr class="mt-5 mb-5">



            <!-- Jelszo csere --------------------------------------------------------------------------------------- -->
            <br>
            <p class="text-center">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" 
                data-bs-target="#jelszocsere" aria-expanded="false" onclick="jelszoAdatokBeallitFormon()">
                    Jelszó csere
                </button>
            </p>

            <div class="collapse mb-3" id="jelszocsere">
                <Form class="mt-3" name="form_jelszoAdatok" id="form_jelszoAdatok">

                    <div class="mb-3">
                        <label for="password_regi" class="form-label">Régi jelszó</label>
                        <input type="password" id="password_regi" name="password_regi" class="form-control" aria-describedby="passwordHelpBlock" value="">
                        <div id="passwordHelpBlock" class="form-text">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password_uj" class="form-label">Új jelszó</label>
                        <input type="password" id="password_uj"  name="password_uj" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                            Használj biztonságos jelszót, tartalmazon kis- és nagybetüket, számokat.
                            Ne tartalmazon speciális karaktereket.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password_uj2" class="form-label">Az új jelszó még egyszer</label>
                        <input type="password" id="password_uj2" name="password_uj2" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                            Használj biztonságos jelszót, tartalmazon kis- és nagybetüket, számokat.
                            Ne tartalmazon speciális karaktereket.
                        </div>
                    </div>

                    <input type="hidden" id="muvelet" name="muvelet" value="mentes">

                </Form>
                <button type="submit" class="btn btn-success mb-3" onclick="jelszoAdatokMentFormrol()">Mentés</button>
            </div>
            <hr class="mt-5 mb-5">


            <!-- Kepek --------------------------------------------------------------------------------------- -->
            <p class="text-center">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#kepek"
                    aria-expanded="false">
                    Képek
                </button>
            </p>

            <div class="collapse" id="kepek">
                <Form class="mt-3">
                    <div class="row mt-5">
                        <img class="col-4" src="Kepek/molo.jpg" alt="Nature" onclick="myFunction(this);">
                        <img class="col-4" src="Kepek/kis-tigris.jpg" alt="Snow" onclick="myFunction(this);">
                        <img class="col-4" src="Kepek/2-szocske.webp" alt="Mountains" onclick="myFunction(this);">
                    </div>

                    <div class="form-check col-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">Profilkép</label>
                    </div>
                    <div class="form-check col-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">Profilkép</label>
                    </div>

                    <div class="form-check col-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">Profilkép</label>
                    </div>

                    <button type="submit" class="btn btn-success mb-3">Mentés</button>

                    <div class="row mt-2 mb-3">
                        <img id="expandedImg" style="width:100%">
                        <div id="imgtext"></div>
                    </div>

                </Form>
            </div>



            <!-- Vége --------------------------------------------------------------------------------------- -->
            <div class="col-3 "> </div>
        </div>
    </div>
</div>