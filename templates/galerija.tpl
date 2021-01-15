<form novalidate method="POST" action="{$server}">
    <div class="search-container">
        <input id="pretrazivanaVrijednost" type="text" name="pretrazivanaVrijednost" placeholder="Pretraži igrača . . .">
        <label> Sortiraj po nazivu: </label>
        <select id="sortNaziv" name="sortiranja">  
            <option></option>
            <option>sport</option>
            <option>klub</option>
        </select>
        <label> Pretraži po sportu: </label>
        <select id="sportovi" name="sportovi">
            <option></option>
            {section name=i loop=$sportovi}
            <option> {$sportovi[i].Naziv} </option>
            {/section}
        </select>
        <!-- <button id="pretrazi" name="pretrazi" value="submit" type="submit" class="btn-gallery">Pretraži</button> -->
         <input type="button" id="pretraziSve" value="Pretrazi sve" name="pretraziSve" class="btn-gallery">

    </div>
   
    </form>


<div class="gallery-grid">
    {section name=i loop=$profili}
        <div class="img-container">
            {if {$profili[i][3]} == 0}<img src="../multimedija/noProfilePicture.png" alt="slikaIgraca"/> {else} <img src="{$profili[i].Slika}" alt="slikaIgraca"/>{/if}
            <p> {$profili[i].Ime}  {$profili[i].Prezime}</p>
        </div>
    {/section}

</div>



<div class="pagination">
    {for $page=1 to $brojStranica}
        <a href="{$path}/ostalo/galerija.php?page={$page}">{$page}</a>
    {/for}
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