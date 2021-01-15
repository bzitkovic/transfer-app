

    <div class="container-table">
        <table id="tablica">
            <thead>
                <tr>
                    <th>Ime kluba</th>
                    <th>Ukupna vrijednost</th>
                    <th></th>
                </tr>
            </thead>
    
            <tbody>
            
            </tbody>
    
        </table>    
    </div>
    
    <div class="pagination">
        {for $page=1 to $brojStranica}
            <a id="brojStranice" href="{$path}/ostalo/popisKlubova.php?page={$page}">{$page}</a>
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

</body>
</html>