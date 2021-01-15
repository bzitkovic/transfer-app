
<br/> <br/>
<strong><p id="message" class="message">{$message}</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="{$server}" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="{$korisnik[0].Korisnik_ID}" readonly required><br>

            <label><b>Ime</b></label><br>
            <input id="ime" type="text" name="ime" value="{$korisnik[0].Ime}" required><br>

            <label><b>Prezime</b></label><br>
            <input id="prezime" type="text" name="prezime"  value="{$korisnik[0].Prezime}" required>
            <br/>

            <label><b>Korisničko ime</b></label><br>
            <input id="korIme" type="text" name="korIme"  value="{$korisnik[0].Korisnicko_ime}" required>
            <br/>

            <label><b>Lozinka</b></label><br>
            <input id="lozinka" type="text"  name="lozinka" value="{$korisnik[0].Lozinka}" required>
            <br/>

            <label><b>Lozinka SHA1</b></label><br>
            <input id="lozinkaSHA1" type="text" name="lozinkaSHA1"  value="{$korisnik[0].Lozinka_SHA1}" required>
            <br/>

            <label><b>Uvjeti</b></label><br>
            <input id="uvjeti" type="text" name="uvjeti"  value="{$korisnik[0].Uvjeti}" required>
            <br/>

            <label><b>Email</b></label><br>
            <input id="email" type="text"  name="email" value="{$korisnik[0].Email}" required>
            <br/>

            <label><b>Status</b></label><br>
            <input id="status" type="number" min="0" max="1" name="status"  value="{$korisnik[0].Status}" required>
            <br/>

            <label><b>Datum i vrijeme registracije</b></label><br>
            <input id="datumVrijemeRegistracije" type="text"  name="datumVrijemeregistracije" value="{$korisnik[0].Datum_Vrijeme_Registracije}" required>
            <br/>

            <label><b>ID uloge</b></label><br>
            <input id="ulogaId" type="number" name="ulogaId" min="0" max="1000000" value="{$korisnik[0].Uloga_Uloga_ID}" required>
            <br/>

            <label><b>Blokiran</b></label><br>
            <input id="blokiran" type="number" min="0" max="1" name="blokiran"  value="{$korisnik[0].Blokiran}" required>
            <br/>

            <label><b>verifikacijski kod</b></label><br>
            <input id="verifikacijskiKod" type="text"  name="verifikacijskiKod" value="{$korisnik[0].Verifikacijski_Kod}" required>
            <br/>

            <button name="submit" id="registriraj" type="submit" value="submit" class="btn-obrasci">Ažuriraj</button>
        </div>
    </form>
</div> 

<footer>
    <div class="grid-footer">
        <div class="footer-main">
            <div class="footer-description">
                <label>&copy; 2020 &nbsp; Bruno Žitković &nbsp; | &nbsp; <a href="mailto: bzitkovic@foi.hr ">bzitkovic@foi.hr</a></label>
            </div>
            <div class="footer-image">
                <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fbarka.foi.hr%2FWebDiP%2F2019%2Fzadaca_01%2Fbzitkovic%2Findex.html"><img class="icon " src="../multimedija/HTML5-icon.png " alt="HTMLSLika "></a>
                <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fbarka.foi.hr%2FWebDiP%2F2019%2Fzadaca_01%2Fbzitkovic%2Fcss%2Fbzitkovic.css&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"><img class="icon " src="../multimedija/CSS3-icon.png " alt="CSSSlika "></a>
            </div>
        </div>   
    </div>
</footer>   
</body>
</html>