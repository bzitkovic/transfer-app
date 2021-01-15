
<br/> <br/>
<strong><p id="message" class="message">{$message}</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="{$server}" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="{$klub[0].Klub_ID}" readonly required><br>

            <label><b>Naziv</b></label><br>
            <input id="naziv" type="text" name="naziv" value="{$klub[0].Naziv}" required><br>

            <label><b>Datum osnutka</b></label><br>
            <input id="datumOsnutka" type="text" name="datumOsnutka"  value="{$klub[0].Godina_Osnutka}" required>
            <br/>

            <label><b>Adresa</b></label><br>
            <input id="adresa" type="text" name="adresa"  value="{$klub[0].Adresa}" required>
            <br/>

            <label><b>IBAN</b></label><br>
            <input id="iban" type="text"  name="iban" value="{$klub[0].IBAN}" required>
            <br/>

            <label><b>Mjesto</b></label><br>
            <input id="mjesto" type="text" name="mjesto"  value="{$klub[0].Mjesto}" required>
            <br/>

            <label><b>Stadion</b></label><br>
            <input id="stadion" type="text" name="stadion"  value="{$klub[0].Stadion}" required>
            <br/>

            <label><b>Titule</b></label><br>
            <input id="titule" type="number"  name="titule" min="0" max="1000000" value="{$klub[0].Titule}" required>
            <br/>

            <label><b>Predsjednik</b></label><br>
            <input id="predsjednik" type="text" name="predsjednik"  value="{$klub[0].Predsjednik}" required>
            <br/>

            <label><b>ID vlasnika</b></label><br>
            <input id="vlasnik-id" type="number"  name="vlasnik-id" min="0" max="1000000" value="{$klub[0].Korisnik_Korisnik_ID}" required>
            <br/>

            <label><b>ID Sporta</b></label><br>
            <input id="sport-id" type="number" name="sport-id" min="0" max="1000000" value="{$klub[0].Sport_Sport_ID}" required>
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