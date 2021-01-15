
<br/> <br/>
<strong><p id="message" class="message">{$message}</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="{$server}" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>Naziv kluba</b></label><br/>
            <input id="nazivKluba" type="text" placeholder="Unesite naziv sporta . . ." name="naziv-sporta" required><br>

            <label><b>Datum osnutka</b></label><br/>
            <input id="datumOsnutka" type="date" placeholder="Unesite datum osnutka kluba . . ." name="datum-osnutka" required><br>

            <label><b>Adresa kluba</b></label><br/>
            <input id="adresaKluba" type="text" placeholder="Unesite adresu kluba . . ." name="adresa-kluba" required><br>

            <label><b>IBAN kluba</b></label><br/>
            <input id="iban" type="text" placeholder="Unesite IBAN kluba . . ." name="iban" required><br>

            <label><b>Mjesto kluba</b></label><br/>
            <input id="mjestoKluba" type="text" placeholder="Unesite mjesto gdje se klub nalazi . . ." name="mjesto" required><br>

            <label><b>Stadion kluba</b></label><br/>
            <input id="stadionKluba" type="text" placeholder="Unesite stadion kluba . . ." name="stadion-kluba" required><br>

            <label><b>Titule</b></label><br/>
            <input id="titule" type="number" placeholder="Unesite titule kluba . . ." name="titule" min="0" max="100" required><br>

            <label><b>Predsjednik kluba</b></label><br/>
            <input id="predsjednikKluba" type="text" placeholder="Unesite predsjednika kluba . . ." name="predsjednik-kluba" required><br>

            <label><b>Odaberite vlasnika</b></label><br>
            <select id="vlasnikKluba">
                {section name=i loop=$vlasnici}
                    <option value="{$vlasnici[i][0]}">{$vlasnici[i][1]} {$vlasnici[i][2]}</option>
                {/section}
            </select><br>

            <label><b>Odaberite sport</b></label><br>
            <select id="sportKluba">
                {section name=i loop=$sportovi}
                    <option value="{$sportovi[i][0]}">{$sportovi[i][1]}</option>
                {/section}
            </select><br>

            <button id="submit" name="submit" type="submit" class="btn-obrasci">Unesi</button> <br/> <br/>
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