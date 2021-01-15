<br/><br/><strong><p id="message" class="message"></p></strong>
<div class="vlasnik-info">
    <table id="tablicaSlobodnihIgraca">
        <caption>Slobodni igrači</caption><br/>
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Cijena</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
            <tr class="neparni-red">
            </tr>
            
        </tbody>
    </table>
    <div class="buttonSlobodniIgraci-container">
        <button class="btn-prikazi" value="prikaziSlobodneIgrace" id="prikaziSlobodneIgrace"> Prikaži slobodne igrače </button>
    </div>
</div>

<div class="vlasnik-info">
    <table id="tablicaIgracaUKlubovima">
        <caption>Popis igrača u klubovima</caption><br/>
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Trenutna cijena</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
            <tr class="neparni-red">
            </tr>
            
        </tbody>
    </table>
    <div class="buttonIgraciUKlubovima-container">
        <button class="btn-prikazi" value="prikaziIgrace" id="prikaziIgrace"> Prikaži igrače </button>
    </div>  
</div>

<div class="vlasnik-info">
    <table id="tablicaZahtjevaZaTransferomUKlubu">
        <caption>Popis zahtjeva za transferom</caption><br/>
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Iznos</th>
                <th></th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
            <tr class="neparni-red">
            </tr>
            
        </tbody>
    </table>
    <div class="buttonTransferniZahtjevi-container">
        <button class="btn-prikazi" value="prikaziZahtjeveZaTransferom" id="prikaziZahtjeveZaTransferom"> Prikaži zahtjeve </button>
    </div> 
</div>

<div class="vlasnik-grid">
    <div>
        <table id="tablicaDolaznihTransfera">
            <caption>Statistika transfera</caption><br/>
            <thead>
                <tr>
                    <th>Ime kluba</th>
                    <th>Dolazni transferi</th>
                </tr>  
            </thead>
            <tbody>
                <tr class="neparni-red">
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table id="tablicaOdlaznihTransfera">
            <caption>Statistika transfera</caption><br/>
            <thead>
                <tr>
                    <th>Ime kluba</th>
                    <th>Odlazni transferi</th>
                </tr>  
            </thead>
            <tbody>
                <tr class="neparni-red">
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="vlasnik-grid">
    <label>Datum od</label>
    <input id="datumOd" type="date">
     <label>Datum do</label>
    <input id="datumDo" type="date"><br/>
    <div class="buttonTransferiPoDatumu-container">
        <button class="btn-prikazi" value="prikaziTransferePoDatumu" id="prikaziTransferePoDatumu"> Pretraži transfere </button>
    </div>
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