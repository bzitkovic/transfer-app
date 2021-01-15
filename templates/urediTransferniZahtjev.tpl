
<br/> <br/>
<strong><p id="message" class="message">{$message}</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="{$server}" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="{$zahtjev[0].Trasferni_zahtjevi_ID}" readonly required><br>

            <label><b>Cijena</b></label><br>
            <input id="cijena" type="text" name="cijena" value="{$zahtjev[0].Cijena}" required><br>

            <label><b>Datum</b></label><br>
            <input id="datum" type="text" name="datum"  value="{$zahtjev[0].Datum_zahtjeva}" required>
            <br/>

            <label><b>Pristanak igrača</b></label><br>
            <input id="pristanakIgraca" type="number" min="0" max="1" name="pristanakIgraca"  value="{$zahtjev[0].Pristanak_Igraca}" required>
            <br/>

            <label><b>Pristanak vlasnika</b></label><br>
            <input id="pristanakVlasnika" type="number" min="0" max="1" name="pristanakVlasnika"  value="{$zahtjev[0].Pristanak_Vlasnika}" required>
            <br/>

            <label><b>ID igrača</b></label><br>
            <input id="igracId" type="number" name="igracId" min="0" max="1000000" value="{$zahtjev[0].Profil_Profil_ID}" required>
            <br/>

            <label><b>ID vlasnika</b></label><br>
            <input id="vlasnikId" type="number" min="0" max="1000000" name="vlasnikId"  value="{$zahtjev[0].Korisnik_Korisnik_ID}" required>
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