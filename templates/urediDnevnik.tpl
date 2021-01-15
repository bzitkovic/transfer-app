
<br/> <br/>
<strong><p id="message" class="message">{$message}</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="{$server}" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="{$dnevnik[0].Dnevnik_ID}" readonly required><br>

            <label><b>Datum - vrijeme radnje</b></label><br>
            <input id="datum-vrijeme-radnje" type="text" name="datum-vrijeme-radnje" value="{$dnevnik[0].Datum_Vrijeme_Radnje}" required><br>

            <label><b>Radnja</b></label><br>
            <input id="radnja" type="text" name="radnja" value="{$dnevnik[0].Radnja}" required><br>

            <label><b>Upit</b></label><br>
            <input id="upit" type="text" name="upit"  value="{$dnevnik[0].Upit}" required>
            <br/>

            <label><b>ID korisnika</b></label><br>
            <input id="korisnik-id" type="number"  name="korisnik-id" min="0" max="1000000" value="{$dnevnik[0].Korisnik_Korisnik_ID}" required>
            <br/>

            <label><b>ID tipa radnje</b></label><br>
            <input id="tip-id" type="number"  name="tip-id" min="0" max="1000000" value="{$dnevnik[0].Tip_Tip_ID}" required>
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