<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="?oldal=fooldal">Vizsga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($_GET['oldal'] == 'fooldal'|| $_GET['oldal'] == 'kilepes') ? 'nav-link active' : '' ?>" aria-current="page" href="?oldal=fooldal">Fő oldal</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link <?=  ($_GET['oldal'] == 'regisztracio') ? 'nav-link active' : '' ?>"  href="?oldal=regisztracio">Regisztrációs lap</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?=  ($_GET['oldal'] == 'bejelentkezes') ? 'nav-link active' : '' ?>" href="?oldal=bejelentkezes">Bejelenkezési lap</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?=  ($_GET['oldal'] == 'profilszerkeszto') ? 'nav-link active' : '' ?>" href="?oldal=profilszerkeszto">Profil szerkesztő lap</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?oldal=kilepes">Kilépés</a>
                    </li>

            </ul>
        </div>
    </div>
</nav>