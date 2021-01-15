{if $profilPostoji == 1}
    <div class="grid-main">
        <div class="main-author">
            <section>
                <div class="author-image">
                    <figure>
                        {if {$profil[0][11]} == 1 || {$profil[0][10]} == 1}<img src="{$profil[0][3]}" alt="slikaIgraca"/> {else} <img src="../multimedija/noProfilePicture.png" alt="slikaIgraca"/>{/if}
                    </figure>
                </div>
            </section>
                     
            <section>
                <div class="author-description">
                    <hr>
                    <label><strong>Ime Prezime</strong></label>
                    <p>{$profil[0][0]} {$profil[0][1]}</p>
                    <hr>
                    <label><strong>Nacionalnost</strong></label>
                    <label><p>{$profil[0][2]}</p></label>
                    <hr>
                    <label><strong>Klub</strong></label>
                    {if !isset($profil[0][11])}<p>Nema</p> {else}<p>{$profil[0][7]}</p>  {/if}
                    <hr>
                </div>
            </section>    
              <section>
                <div class="author-description">
                    <hr>
                    <label><strong>Visina</strong></label>
                    <p>{$profil[0][5]} cm</p>
                    <hr>
                    <label><strong>Težina</strong></label>
                    <p>{$profil[0][4]} kg</p>
                    <hr>
                    <label><strong>Cijena</strong></label>
                    <p>{$profil[0][6]} €</p>
                    <hr>
                </div>
            </section>   
            <section>
                <div class="author-description">
                    <hr>
                    <label><strong>Pozicija</strong></label>
                    {if !isset($profil[0][11])}<p>{$profil[0][7]}</p> {else}<p>{$profil[0][8]}</p>  {/if}
                    <hr>
                    <label><strong>Mjesto rođenja</strong></label>
                    {if !isset($profil[0][11])}<p>{$profil[0][8]}</p> {else}<p>{$profil[0][9]}</p>  {/if}
                    <hr>
                    <label><strong>Datum rođenja</strong></label>
                    {if !isset($profil[0][11])}<p>{$profil[0][9]}</p> {else}<p>{$profil[0][10]}</p>  {/if}
                    <hr>
                </div>
            </section>                  
        </div>    
    </div>
    <strong><p id="message" class="message"></p></strong>
    <div class="igrac-info">
       
        <table id="tablicaTransfera">
            <caption>Povijest transfera</caption><br/>
            <thead>
                <tr>
                    <th>Klub</th>
                    <th>Vrijeme provedeno</th>
                </tr>  
            </thead>
            <tbody>
             
                <tr class="neparni-red">
                </tr>
               
            </tbody>
        </table>
        <div class="buttonTransferi-container">
            <button class="btn-prikazi" value="prikaziTransfere" id="prikaziTranfere"> Prikaži transfere </button>
        </div>
         
    </div>

    {if isset($profil[0][11])}
    <div class="igrac-info">
        <table id="tablicaZahtjevaZaTransferom">
            <caption>Zahtjevi za transferom</caption><br/>
            <thead>
                <tr>
                    <th>Klub</th>
                    <th>Ponuđeni iznos</th>
                    <th></th>
                    <th></th>
                </tr>   
            </thead>
            <tbody>
                <tr class="neparni-red">
                </tr>                
            </tbody>
        </table>
        <div class="buttonZahtjevaZaTransferom-container">
            <button class="btn-prikazi" value="prikaziZahtjeveZaTransferom" id="prikaziZahtjeveZaTransferom"> Prikaži zahtjeve </button>
        </div>

    </div>
    {/if}

    {if !isset($profil[0][11])}
    <div class="igrac-info">   
        <table id="tablicaPonuda">
            <caption>Popis ponuda za kupnjom</caption><br/>
            <thead>
                <tr>
                    <th>Klub</th>
                    <th>Ponuđeni iznos</th>
                    <th></th>
                </tr>   
            </thead>
            <tbody>
                <tr class="neparni-red">
                </tr>                
            </tbody>
        </table>
        <div class="buttonPonude-container">
            <button class="btn-prikazi" value="prikaziPonude" id="prikaziPonude"> Prikaži ponude </button>
        </div>
    </div>
    {/if}

    <div class="igrac-info">
         {if isset($profil[0][11])}<strong><p>Zahtjev za napuštanjem kluba: </strong> <input id="zahtjevZaNapustanje" type="button" class="btn-prikazi" value="Zatraži"></p> </div>{/if}
    </div>

{else}
    <div class="registration-container">
        <form id="registracija-form" novalidate method="POST" action="{$server}" enctype="multipart/form-data">
            <div class="form-container">
                <label><b>Ime</b></label><br>
                <input type="text" placeholder="Unesite vaše ime" name="ime" required><br>

                <label><b>Prezime</b></label><br>
                <input type="text" placeholder="Unesite vaše prezime" name="prezime" required><br>

                <label><b>Slika</b></label><br>
                <input type="url" placeholder="Unesite vaš url do slike" name="slika-profila" required><br>

                <label><b>Nacionalnost</b></label><br>
                <input type="text" placeholder="Unesite vašu nacionalnost" name="nacionalnost" required><br>

                <label><b>Datum rođenja</b></label><br>
                <input type="date" placeholder="Unesite datum vašeg rođenja" name="datum-rodenja" required><br>

                <label><b>Mjesto rođenja</b></label><br>
                <input  type="text" placeholder="Unesite mjesto vašeg rođenja" name="mjesto-rodenja" required>
                <br/>

                <label><b>Težina</b></label><br>
                <input id="tezina" type="text" placeholder="Unesite tezinu igrača . . ." name="tezina" required>
                <br/>

                <label><b>Visina</b></label><br>
                <input id="visina" type="number" placeholder="Unesite visinu igrača . . ." name="visina" required>
                <br/>

                <label><b>Suglasnot slike</b></label><br>
                <input id="suglasnostSlike" type="number" name="suglasnostSlike" min="0" max="1" required>
                <br/>

                <label><b>Odaberite vaš sport</b></label><br>
                <select name="sportProfila" id="sportProfila">
                    {section name=i loop=$sportovi}
                        <option value="{$sportovi[i][0]}">{$sportovi[i][0]}</option>
                    {/section}
                </select><br/>

                <label><b>Pozicija</b></label><br>
                <input type="text" placeholder="Unesite vašu poziciju" name="pozicija" required>
                <br/>
               

                <button name="submit" id="postaviProfil" type="submit" value="submit" class="btn-obrasci">Pošalji</button>
            </div>
        </form>
    </div>
{/if}
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