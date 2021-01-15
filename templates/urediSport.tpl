
<br/> <br/>
<strong><p id="message" class="message">{$message}</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="{$server}" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="{$sport[0].Sport_ID}" readonly required><br>

            <label><b>Naziv</b></label><br>
            <input type="text" name="naziv" value="{$sport[0].Naziv}" required><br>

            <label><b>Opis</b></label><br>
            <input type="text" name="opis"  value="{$sport[0].Opis}" required><br>

            <label><b>Pravila</b></label><br>
            <input id="pravila" type="text" name="pravila" value="{$sport[0].Pravila}" required><br>

            <label><b>Popularnost</b></label><br>
            <input id="popularnost" type="text" name="popularnost" value="{$sport[0].Popularnost}" required><br>

            <label><b>Godina nastanka</b></label><br>
            <input id="godinaNastanka" type="text" name="godinaNastanka" value="{$sport[0].Godina_nastanka}" required><br>
            
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