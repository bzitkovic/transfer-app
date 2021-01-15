
<br/> <br/>
<strong><p id="message" class="message">{$message}</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="{$server}" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="{$igrac[0].Profil_ID}" readonly required><br>

            <label><b>Ime</b></label><br>
            <input type="text" placeholder="Unesite ime igrača . . ." name="ime" value="{$igrac[0].Ime}" required><br>

            <label><b>Prezime</b></label><br>
            <input type="text" placeholder="Unesite prezime igrača . . ." name="prezime"  value="{$igrac[0].Prezime}" required><br>

            <label><b>Nacionalnost</b></label><br>
            <input id="nacionalnost" type="text" placeholder="Unesite nacionalnost igraca . . ." name="nacionalnost" size="15" maxlength="15" value="{$igrac[0].Nacionalnost}" required><br>

            <label><b>Datum rođenja</b></label><br>
            <input id="datum-rodenja" type="date" placeholder="Unesite datum rođenja igrača . . ." name="datum-rodenja" value="{$igrac[0].Godina_Rodenja}" required><br>

            <label><b>Mjesto rođenja</b></label><br>
            <input id="mjesto-rodenja" type="text" placeholder="Unesite mjesto rodenja igrača . . ." name="mjesto-rodenja" value="{$igrac[0].Mjesto_Rodenja}" required><br>

            <label><b>Težina</b></label><br>
            <input id="tezina" type="number" placeholder="Unesite tezinu igrača . . ." name="tezina" min="40" max="150"  value="{$igrac[0].Tezina}" required>
            <br/>

            <label><b>Cijena</b></label><br>
            <input id="cijena" type="number" placeholder="Unesite cijenu igrača . . ." name="cijena" min="0" max="1000000" value="{$igrac[0].Cijena}" required>
            <br/>

            <label><b>Slika igrača</b></label><br>
            <input id="slika-igraca" type="url" placeholder="Unesite url slike igrača . . ." name="slika-igraca" value="{$igrac[0].Slika}" required>
            <br/>

            <label><b>Visina</b></label><br>
            <input id="visina" type="number" placeholder="Unesite visinu igrača . . ." name="visina" value="{$igrac[0].Visina}" required>
            <br/>

            <label><b>Pozicija</b></label><br>
            <input id="pozicija" type="text" placeholder="Unesite poziciju igrača . . ." name="pozicija" value="{$igrac[0].Pozicija}" required>
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