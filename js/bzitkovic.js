var brojPokusaja = 0;
$(document).ready(function(){
    var stranica = $(document).find('h1').text();
    
    postaviTemuIzKolacica();
    switch(stranica){
        case "Početna stranica":
            ProvjeriUvjeteKoristenja();
            break;
        case "Prijava":
           
            $("#submit").click(ProvjeriBrojUlogiranja);
            ProvjeriCookie();
            ZapamtiKorisnika();
            $('#zaboravljenaLozinka').click(PosaljiEmail);
            break;     
        case "Registracija":
            KreirajCaptcha();
            $("#korisnicko-ime").keyup(ProvjeriKorisnickoImeUBazi);
            $("#korisnicko-ime").focusout(ProvjeriKorisnickoIme);
            $("#lozinka").focusout(ProvjeriLozinku);
            $("#potvrda-lozinke").focusout(ProvjeriPodudarnostLozinka);
            $("#lozinka").focusout(ProvjeriPodudarnostLozinka);
            $("#email").focusout(ProvjeriEmail);       
            $('#captchaInput').change(ValidirajCaptcha);
            break;
        case "Popis klubova":
            DohvatiKlubove();
            break;
        case "Galerija igrača":
            $("#pretraziSve").click(DohvatiSveIgrace);
            $("#pretrazivanaVrijednost").keyup(DohvatiIgrace);
            $("#sportovi").change(DohvatiIgrace);
            $("#sortNaziv").change(DohvatiIgrace);
            break;
        case "Profil igrača":
            $(".igrac-info").on("click", "#prikaziTranfere", PopuniTransfere);
            $(".igrac-info").on("click", "#prikaziTranfere", UkloniPostaviGumbTransferi);
            $(".igrac-info").on("click", "#sakrijTransfere", SakrijTransfere);

            $(".igrac-info").on("click", "#prikaziPonude", PopuniPonude);
            $(".igrac-info").on("click", "#prikaziPonude", UkloniPostaviGumbPonude);
            $(".igrac-info").on("click", "#sakrijPonude", SakrijPonude);

            $(".igrac-info").on("click", "#prikaziZahtjeveZaTransferom", PopuniZahtjeve);
            $(".igrac-info").on("click", "#prikaziZahtjeveZaTransferom", UkloniPostaviGumbZahtjeva);
            $(".igrac-info").on("click", "#sakrijZahtjeve", SakrijZahtjeve);

            $("#tablicaZahtjevaZaTransferom").on('click','.prihvatiZahtjev', PrihvatiZahtjevZaTransferom);
            $("#tablicaZahtjevaZaTransferom").on('click','.odbijZahtjev', OdbijZahtjevZaTransferom) 

            $("#tablicaPonuda").on('click','.prihvatiPonudu', PrihvatiPonudu);

            $("#zahtjevZaNapustanje").click(PodnesizahtjevZaNapustanje)
            
            break;

        case "Profil vlasnika":
            $(".vlasnik-info").on("click", "#prikaziSlobodneIgrace", PopuniSlobodneIgrace);
            $(".vlasnik-info").on("click", "#prikaziSlobodneIgrace", UkloniPostaviGumbSlobodniIgraci);
            $(".vlasnik-info").on("click", "#sakrijSlobodneIgrace", SakrijSlobodneIgrace);

            $(".vlasnik-info").on("click", "#prikaziIgrace", PopuniIgrace);
            $(".vlasnik-info").on("click", "#prikaziIgrace", UkloniPostaviGumbIgraciUKlubu);
            $(".vlasnik-info").on("click", "#sakrijIgrace", SakrijIgrace);

            $(".vlasnik-info").on("click", "#prikaziZahtjeveZaTransferom", PopuniTransferneZahtjeve);
            $(".vlasnik-info").on("click", "#prikaziZahtjeveZaTransferom", UkloniPostaviGumbTransferniZahtjevi);
            $(".vlasnik-info").on("click", "#sakrijTransferneZahtjeve", SakrijTransferneZahtjeve);

            $("#tablicaSlobodnihIgraca").on('click','.kupiIgraca', PošaljiPonuduZaSlobodnogIgraca);
            $("#tablicaIgracaUKlubovima").on('click','.kupiIgraca', PošaljiPonuduZaIgracaUKlubu);

            $("#tablicaZahtjevaZaTransferomUKlubu").on('click','.prihvatiZahtjev', Prihvatizahtjev);
            $("#tablicaZahtjevaZaTransferomUKlubu").on('click','.odbijzahtjev', OdbijZahtjeZaTransferModerator);

            $(".vlasnik-grid").on("click", "#prikaziTransferePoDatumu", PopuniTransferePoDatumu);
            $(".vlasnik-grid").on("click", "#prikaziTransferePoDatumu", UkloniPostaviGumbTransferiPoDatumu);
            $(".vlasnik-grid").on("click", "#sakrijTransferePoDatumu", SakrijTransferePoDatumu);
            break;

        case "Popis igrača":
            $(".vlasnik-info").on("click", "#prikaziTablicuIgracaUVlasnistvu", PopuniPopisIgraca);
            $(".vlasnik-info").on("click", "#prikaziTablicuIgracaUVlasnistvu", UkloniPostaviGumbIgracaUVlasnistvu);
            $(".vlasnik-info").on("click", "#sakrijPodatkeIgracaUVlasnistvu", SakrijIgraceUVlasnistvu);

            $("#tablicaIgraca").on('click','.azuriraj', Preusmjeri);
            break;
        
        case "Kreiraj sport":
            $('#submit').click(KreirajNoviSport);
            break;

        case "Kreiraj klub":
            $('#submit').click(KreirajNoviKlub);
            break;

        case "Profil administratora":
            $(".admin-info").on("click", "#prikaziZahtjeveZaNapustanje", PopuniZahtjeveZaNapustanje);
            $(".admin-info").on("click", "#prikaziZahtjeveZaNapustanje", UkloniPostaviGumbZahtjeviZaNapustanje);
            $(".admin-info").on("click", "#sakrijZahtjeveZaNapustanje", SakrijZahtjeveZaNapustanje);

            $(".admin-info").on("click", "#prihvatiZahtjev", PrihvacenZahtjevZaNapustanje);
            $(".admin-info").on("click", "#odbijZahtjev", OdbijenZahtjevZaNapustanje);

            $(".admin-info").on("click", "#prikaziBlokiraneKorisnike", PopuniBlokiraneKorisnike);
            $(".admin-info").on("click", "#prikaziBlokiraneKorisnike", UkloniPostaviGumbBlokiraniKorisnici);
            $(".admin-info").on("click", "#sakrijKorisnike", SakrijBlokiraneKorisnike);

            $(".admin-info").on("click", "#otkljucaj", OtkljucajKorisnika);
            break;

        case "Podaci sustava":
            $(".admin-info").on("click", "#prikaziTablicuDnevnik", PopuniTablicuPodacimaIzDnevnika);
            $(".admin-info").on("click", "#prikaziTablicuDnevnik", UkloniPostaviGumbPodaciDnevnika);
            $(".admin-info").on("click", "#sakrijPodatkeDnevnika", SakrijPodatkeDnevnika);

            $(".admin2-info").on("click", "#prikaziTablicuKlub", PopuniTablicuPodacimaIzKluba);
            $(".admin2-info").on("click", "#prikaziTablicuKlub", UkloniPostaviGumbPodaciKluba);
            $(".admin2-info").on("click", "#sakrijPodatkeKluba", SakrijPodatkeKluba);

            $(".admin2-info").on("click", "#prikaziTablicuKorisnik", PopuniTablicuPodacimaIzKorisnika);
            $(".admin2-info").on("click", "#prikaziTablicuKorisnik", UkloniPostaviGumbPodaciKorisnika);
            $(".admin2-info").on("click", "#sakrijPodatkeKorisnika", SakrijPodatkeKorisnika);

            $(".admin-info").on("click", "#prikaziTablicuPonuda", PopuniTablicuPodacimaIzPonuda);
            $(".admin-info").on("click", "#prikaziTablicuPonuda", UkloniPostaviGumbPodaciPonuda);
            $(".admin-info").on("click", "#sakrijPodatkePonuda", SakrijPodatkePonuda);

            $(".admin2-info").on("click", "#prikaziTablicuProfil", PopuniTablicuPodacimaIzProfila);
            $(".admin2-info").on("click", "#prikaziTablicuProfil", UkloniPostaviGumbPodaciProfila);
            $(".admin2-info").on("click", "#sakrijPodatkeProfila", SakrijPodatkeProfila);

            $(".admin-info").on("click", "#prikaziTablicuSporta", PopuniTablicuPodacimaIzSporta);
            $(".admin-info").on("click", "#prikaziTablicuSporta", UkloniPostaviGumbPodaciSporta);
            $(".admin-info").on("click", "#sakrijPodatkeSporta", SakrijPodatkeSporta);

            $(".admin-info").on("click", "#prikaziTablicuTipa", PopuniTablicuPodacimaIzTipa);
            $(".admin-info").on("click", "#prikaziTablicuTipa", UkloniPostaviGumbPodaciTipa);
            $(".admin-info").on("click", "#sakrijPodatkeTipa", SakrijPodatkeTipa);

            $(".admin-info").on("click", "#prikaziTablicuTransfera", PopuniTablicuPodacimaIzTransfera);
            $(".admin-info").on("click", "#prikaziTablicuTransfera", UkloniPostaviGumbPodaciTransfera);
            $(".admin-info").on("click", "#sakrijPodatkeTransfera", SakrijPodatkeTransfera);

            $(".admin-info").on("click", "#prikaziTablicuTransferneZahtjeve", PopuniTablicuPodacimaIzTransfernihZahtjeva);
            $(".admin-info").on("click", "#prikaziTablicuTransferneZahtjeve", UkloniPostaviGumbPodaciTransferniZahtjevi);
            $(".admin-info").on("click", "#sakrijPodatkeTransferneZahtjeve", SakrijPodatkeTransfernihZahtjeva);

            $(".admin-info").on("click", "#prikaziTablicuUloga", PopuniTablicuPodacimaIUloga);
            $(".admin-info").on("click", "#prikaziTablicuUloga", UkloniPostaviGumbPodaciUloga);
            $(".admin-info").on("click", "#sakrijPodatkeUloga", SakrijPodatkeUloga);

            $("#tablicaDnevnik").on('click','.urediDnevnik', PreusmjeriNauredivanjeDnevnika);
            $("#tablicaKlub").on('click','.urediKlub', PreusmjeriNauredivanjeKluba);
            $("#tablicaKorisnik").on('click','.urediKorisnika', PreusmjeriNauredivanjeKorisnika);
            $("#tablicaPonuda").on('click','.urediPonudu', PreusmjeriNauredivanjePonude);
            $("#tablicaProfil").on('click','.urediProfil', PreusmjeriNauredivanjeProfila);
            $("#tablicaSport").on('click','.urediSport', PreusmjeriNauredivanjeSporta);
            $("#tablicaTip").on('click','.urediTip', PreusmjeriNauredivanjeTipa);
            $("#tablicaTransfera").on('click','.urediTransfer', PreusmjeriNauredivanjeTransfera);
            $("#tablicaTransfernizahtjevi").on('click','.urediTransfernizahtjev', PreusmjeriNauredivanjeTransfernogZahtjeva);
            $("#tablicaUloga").on('click','.urediUlogu', PreusmjeriNauredivanjeUloge);
            break;
    }

})

function ProvjeriBrojUlogiranja(){
    event.preventDefault();
    brojPokusaja = brojPokusaja + 1;
    if(brojPokusaja == 3){
        var korisnickoIme = $('#korisnicko-ime').val();
        $.ajax({
            url: '../obrasci/prijava.php',
            type: 'POST',
            data: {BrojPokusaja: brojPokusaja, KorisnickoIme: korisnickoIme},
            dataType: 'json',
            success: function(response){
                $('#message').text(response);
                brojPokusaja = 0;
            }
        });
    }
    else {
        var korisnickoImeDobro = $('#korisnicko-ime').val();
        var lozinka = $('#lozinka').val();
        $.ajax({
            url: '../obrasci/prijava.php',
            type: 'POST',
            data: {KorisnickoImeDobro: korisnickoImeDobro, Lozinka: lozinka},
            dataType: 'json',
            success: function(response){
                if(response == "Prijava ok"){
                    window.location.replace("../index.php");
                }
                $('#message').text(response);
            }
        });
    }
}

function ProvjeriCookie(){
    var korisnik = $('input[name="korisnicko-ime"]');
    if (document.cookie != ""){
        kolaci = document.cookie.split(";");
        for (var i = 0; i < kolaci.length; i++) {
            cookie = kolaci[i].trim().split("=");
            if (cookie[0] == 'Korisnik') {
                var text = cookie[1];
                korisnik.val(text);
            }
        }
    }
}

function ZapamtiKorisnika(){
    $(".btn-obrasci").on('click',function(){ 
        var korisnik = $('input[name="korisnicko-ime"]').val();
        var zapamtiMe = $('input[name="zapamtiMe"]').is(":checked");
        if(zapamtiMe){
            $.ajax({
                url: "../obrasci/prijava.php",
                type: 'POST',
                success: function(){
                    document.cookie = "Korisnik=" + korisnik + ";" + "path=/";
                }   
            });
        }    
    });
}

function PosaljiEmail(){
    var korisnickoIme = $('input[name="korisnicko-ime"]').val();
    $.ajax({
        url: '../obrasci/prijava.php',
        type: 'POST',
        data: {KorisnickoImeEmail: korisnickoIme},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
         }
     });
}

function ProvjeriKorisnickoImeUBazi(){
    var korisnickoIme = $('input[name="korisnicko-ime"]').val();
    $.ajax({
        url: '../obrasci/registracija.php',
        type: 'POST',
        data: {Korisnicko_ime: korisnickoIme},
        dataType: 'json',
        success: function(response){
           $('#message').text(response["poruka"])

         }
     });
}

function ProvjeriKorisnickoIme(){
    var korisnickoIme = $('input[name="korisnicko-ime"]').val();
    var messsage = $('#message');
    if(korisnickoIme.length < 5){
        messsage.text("Korisničko ime manje od 5 znakova!");
    }
}

function ProvjeriLozinku(){
    var lozinka = $('input[name="lozinka"]').val();
    var messsage = $('#message');
    var brojULozinki = 0;
    if(lozinka.length < 5){
        messsage.text("Lozinka manja od 5 znakova!");
    }
    for(var i=0; i<=lozinka.length; i++){
        if(!isNaN(lozinka[i])){
            brojULozinki++;
        }
        
    }

    if(brojULozinki == 0){
        console.log(lozinka);
        messsage.text("Lozinka mora sadržavati barem 1 broj!");
    }
    else {
        messsage.text("");
    }
}

function ProvjeriPodudarnostLozinka(){
    var lozinka = $('input[name="lozinka"]').val();
    var ponovljenaLozinka = $('input[name="potvrda-lozinke"]').val();
    var messsage = $('#message');

    if(lozinka !== ponovljenaLozinka){
        messsage.text("Lozinke se ne podudaraju!");
    }
    else{
        messsage.text("");
    }
}

function ProvjeriEmail(){
    var email = $('input[name="email"]').val();
    var messsage = $('#message');
    const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regexEmail.test(String(email).toLowerCase())){
        messsage.text("Email je pogrešno unesen!");
    }
}

// Izmjena tamne i svijetle teme
function upaliUgasiSvijetlo() {
    if (document.cookie != ""){
        kolaci = document.cookie.split(";");
        for (var i = 0; i < kolaci.length; i++) {
            cookie = kolaci[i].trim().split("=");
            if (cookie[0] == 'tema') {
                document.cookie = "tema" + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT " + "; path=/";
            }
        }
    }
    var body = document.getElementById('body')
    var klasaBody = body.className == 'dark-mode' ? 'light-mode' : 'dark-mode'
    body.className = klasaBody
    document.cookie = 'tema=' + (klasaBody == 'light-mode' ? 'light' : 'dark') + "; path=/";
  }

function provjeriSelektiranuBoju() {
    return document.cookie.match(/tema=dark/i) != null
}

function postaviTemuIzKolacica() {
    var body = document.getElementById('body')
    body.className = provjeriSelektiranuBoju() ? 'dark-mode' : 'light-mode'
}

function KreirajCaptcha() {
    document.getElementById('captcha').innerHTML = "";
    var znakovniNiz =
    "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
    var duzina = 7;
    var captcha = [];
    for (var i = 0; i < duzina; i++) {
      var index = Math.floor(Math.random() * znakovniNiz.length + 1);
      if (captcha.indexOf(znakovniNiz[index]) == -1)
        captcha.push(znakovniNiz[index]);
      else i--;
    }

    var canvas = document.createElement("canvas");
    canvas.id = "captcha";
    canvas.width = 115;
    canvas.height = 50;
    var ctx = canvas.getContext("2d");
    ctx.fillStyle = "green";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.font = "26px Helvetica black";
    ctx.strokeText(captcha.join(""), 0, 32);
    code = captcha.join("");
    document.getElementById("captcha").appendChild(canvas);
}

function ValidirajCaptcha() {
    event.preventDefault();
    
    if (document.getElementById("captchaInput").value == code) {
      alert("Forma uspješno validirana!");
      $('#captcha-img').attr('src', '../ostalo/captchaImg.php');
      $('#registriraj').attr('disabled', false);
    }else{
      alert("Pogrešan Captcha kod. Pokušajte ponovo!");
      $('#registriraj').attr('disabled', true);
      createCaptcha();
    }
  }


function ProvjeriUvjeteKoristenja(){
    var nadeno = false;
    if (document.cookie != ""){
        kolaci = document.cookie.split(";");
        for (var i = 0; i < kolaci.length; i++) {
            cookie = kolaci[i].trim().split("=");
            if (cookie[0] == 'UvjetiKoristenja') {
                nadeno = true;
            }
        }

        if(!nadeno){
            alert("Molimo prihvatite uvjete korištenja!");
            var date = new Date(),
            expires = 'expires=';
            date.setDate(date.getDate() + 2);
            expires += date.toGMTString();
            document.cookie = "UvjetiKoristenja=" + "prihvaceni" + ";" + expires + "; path=/";
        }
    }
}

function DohvatiKlubove(){
    var brojStranice = window.location.href.split("=")[1];
    if(brojStranice == undefined){
        brojStranice = 1;
    }
    $.ajax({
        url: '../ostalo/popisKlubova.php',
        type: 'POST',
        dataType: 'json',
        data: {Page: brojStranice},
        success: function(response){
            var tablica = $("#tablica tbody");
            for(var i = 0; i < response.length; i++){
                if(response[i][2] == null){
                    response[i][2] = '0';
                }
                tablica.append(
                    "<tr class='neparni-red'><td>"+response[i][1]+
                    "</td><td>"+response[i][2]+ " €" +
                    "</td><td>"+ "<a href='../ostalo/galerija.php?id="+response[i][0]+"'>" + "Galerija" + "</a>" +
                    "</td></tr>"
                );
            }
         }
     });
}

function DohvatiIgrace(){
    var pretrazivanaVrijednost = $('input[name="pretrazivanaVrijednost"]').val().toLowerCase().trim();
    var pretraziSve =  $("#pretraziSve").text();
    var sportovi = $( "#sportovi option:selected" ).text().trim();
    var sortiranja = $( "#sortNaziv option:selected" ).text();
  
    $.ajax({
        url: '../ostalo/galerija.php',
        type: 'POST',
        data: {Pretrazivana_vrijednost: pretrazivanaVrijednost, Sportovi: sportovi, Sortiranja: sortiranja, PretraziSve: pretraziSve},
        dataType: 'json',
        success: function(response){
            $(".gallery-grid" ).empty();
            for(var i = 0; i < response.length; i++){
                if(response[i]["Ime"].toLowerCase().includes(pretrazivanaVrijednost) || response[i]["Prezime"].toLowerCase().includes(pretrazivanaVrijednost)){
                    var node = document.createElement("div");
                    node.classList.add("img-container");
                    var slika =  document.createElement("img");
                    if(response[i]["Suglasnost"] == 0){
                        slika.src = "../multimedija/noProfilePicture.png";
                    }
                    else {
                        slika.src = response[i]["Slika"];
                    }
                    
                    var paragraf = document.createElement("p");
                    paragraf.innerText = response[i]["Ime"] + " " + response[i]["Prezime"];
                    node.append(slika);
                    node.append(paragraf);
                    $(".gallery-grid" ).append(node);
                }
            }
         }      
     });
}

function DohvatiSveIgrace(){
    var pretraziSve =  $("#pretraziSve").text();
    
    $.ajax({
        url: '../ostalo/galerija.php',
        type: 'POST',
        data: {PretraziSve: pretraziSve},
        dataType: 'json',
        success: function(response){
            $(".gallery-grid" ).empty();
            for(var i = 0; i < response.length; i++){            
                console.log(response[i]["Ime"]);
                var node = document.createElement("div");
                node.classList.add("img-container");
                var slika =  document.createElement("img");
                if(response[i]["Suglasnost"] == 0){
                    slika.src = "../multimedija/noProfilePicture.png";
                }
                else {
                    slika.src = response[i]["Slika"];
                }
                
                var paragraf = document.createElement("p");
                paragraf.innerText = response[i]["Ime"] + " " + response[i]["Prezime"];
                node.append(slika);
                node.append(paragraf);
                $(".gallery-grid" ).append(node);
            }
         }      
     });
}

function PopuniTransfere(){
    var prikaziTransfere = $("#prikaziTransfere").text();

    var danas = new Date();
    var dd = String(danas.getDate()).padStart(2, '0');
    var mm = String(danas.getMonth() + 1).padStart(2, '0'); 
    var yyyy = danas.getFullYear();
    var danasnjiDatum = yyyy + '/' + mm + '/' + dd;
    danasnjiDatum = Date.parse(danasnjiDatum);
   
    $.ajax({
        url: '../ostalo/profilIgraca.php',
        type: 'POST',
        data: {PrikaziTransfere: prikaziTransfere},
        dataType: 'json',
        success: function(response){
            var tablica = $("#tablicaTransfera tbody");
            if(response.length != 1){
                for(var i = 0; i < response.length; i++){
                    if(response[i+1] === undefined){
                        var datum = Math.ceil((Date.parse(response[i][1]) - Date.parse(response[i-1][1]))/86400000) + " dana";
                        var ime = response[i][0];
                        
                    }   
                    else {
                        var datum = Math.ceil((danasnjiDatum- Date.parse(response[i][1]))/86400000) + " dana";
                        var ime = response[i][0];
                    }             
                    tablica.append(
                        "<tr class='neparni-red'><td>"+ime+
                        "</td><td>"+ datum +
                        "</td></tr>"
                    );
                }
            }
            else {
                var datum = "PRvi klub";
                var ime = response[0][0];

                tablica.append(
                    "<tr class='neparni-red'><td>"+ime+
                    "</td><td>"+ datum +
                    "</td></tr>"
                );
            }       
         }      
     });
}

function UkloniPostaviGumbTransferi(){
    $(this).remove();
    var gumbSakrijTransfere = document.createElement("BUTTON");
    gumbSakrijTransfere.innerText = "Sakrij transfere";
    gumbSakrijTransfere.id = "sakrijTransfere";
    gumbSakrijTransfere.classList.add("btn-prikazi");
    $(".buttonTransferi-container").append(gumbSakrijTransfere);
}

function SakrijTransfere(){
    $("#tablicaTransfera tbody").empty();
    $(this).remove();
    var gumbPrikaziTransfere = document.createElement("BUTTON");
    gumbPrikaziTransfere.innerText = "Prikaži transfere";
    gumbPrikaziTransfere.id = "prikaziTranfere";
    gumbPrikaziTransfere.classList.add("btn-prikazi");
    $(".buttonTransferi-container").append(gumbPrikaziTransfere);
}

function PopuniPonude(){
    var prikaziPonude = $("#prikaziPonude").text();
   
    $.ajax({
        url: '../ostalo/profilIgraca.php',
        type: 'POST',
        data: {PrikaziPonude: prikaziPonude},
        dataType: 'json',
        success: function(response){
        var tablica = $("#tablicaPonuda tbody");
            for(var i = 0; i < response.length; i++){
                var klub = response[i][1];
                var ponudeniIznos =response[i][0];           
                tablica.append(
                    "<tr class='neparni-red'><td>"+ klub +
                    "</td><td>"+ ponudeniIznos + " €" +
                    "</td><td> <a class='prihvatiPonudu' href='#'> Prihvati </a>" +
                    "</td></tr>"
                );
            }
        }      
     });
}

function UkloniPostaviGumbPonude(){
    $(this).remove();
    var gumbSakrijPonude = document.createElement("BUTTON");
    gumbSakrijPonude.innerText = "Sakrij ponude";
    gumbSakrijPonude.id = "sakrijPonude";
    gumbSakrijPonude.classList.add("btn-prikazi");
    $(".buttonPonude-container").append(gumbSakrijPonude);
}

function SakrijPonude(){
    $("#tablicaPonuda tbody").empty();
    $(this).remove();
    var gumbPrikaziPonude = document.createElement("BUTTON");
    gumbPrikaziPonude.innerText = "Prikaži ponude";
    gumbPrikaziPonude.id = "prikaziPonude";
    gumbPrikaziPonude.classList.add("btn-prikazi");
    $(".buttonPonude-container").append(gumbPrikaziPonude);
}

function PopuniZahtjeve(){
    var prikaziZahtjeve = $("#prikaziZahtjeveZaTransferom").text();
   
    $.ajax({
        url: '../ostalo/profilIgraca.php',
        type: 'POST',
        data: {PrikaziZahtjeve: prikaziZahtjeve},
        dataType: 'json',
        success: function(response){
        var tablica = $("#tablicaZahtjevaZaTransferom tbody");
            for(var i = 0; i < response.length; i++){
                var klub = response[i][0];
                var ponudeniIznos =response[i][1];           
                tablica.append(
                    "<tr class='neparni-red'><td>"+ klub +
                    "</td><td>"+ ponudeniIznos + " €" +
                    "</td><td> <a class='prihvatiZahtjev' href='#'> Prihvati </a>" +
                    "</td><td> <a class='odbijZahtjev' href='#'> Odbij </a>" +
                    "</td></tr>"
                );
            }
        }      
     });
}

function UkloniPostaviGumbZahtjeva(){
    $(this).remove();
    var gumbSakrijZahtjeve = document.createElement("BUTTON");
    gumbSakrijZahtjeve.innerText = "Sakrij zahtjeve";
    gumbSakrijZahtjeve.id = "sakrijZahtjeve";
    gumbSakrijZahtjeve.classList.add("btn-prikazi");
    $(".buttonZahtjevaZaTransferom-container").append(gumbSakrijZahtjeve);
}

function SakrijZahtjeve(){
    $("#tablicaZahtjevaZaTransferom tbody").empty();
    $(this).remove();
    var gumbPrikaziZahtjeve = document.createElement("BUTTON");
    gumbPrikaziZahtjeve.innerText = "Prikaži zahtjeve";
    gumbPrikaziZahtjeve.id = "prikaziZahtjeveZaTransferom";
    gumbPrikaziZahtjeve.classList.add("btn-prikazi");
    $(".buttonZahtjevaZaTransferom-container").append(gumbPrikaziZahtjeve);
}

function PrihvatiZahtjevZaTransferom(){
    var trenutniRed = $(this).closest("tr"); 
    var imeKluba = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var cijenaTransfera = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac

    $.ajax({
        url: '../ostalo/profilIgraca.php',
        type: 'POST',
        data: {ImeKluba: imeKluba, CijenaTransfera: cijenaTransfera},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
            trenutniRed.empty();
        }      
     });
}

function OdbijZahtjevZaTransferom(){
    var trenutniRed = $(this).closest("tr"); 
    var imeKluba = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var cijenaTransfera = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac
    
    $.ajax({
        url: '../ostalo/profilIgraca.php',
        type: 'POST',
        data: {ImeKlubaOdbij: imeKluba, CijenaTransfera: cijenaTransfera},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
            trenutniRed.empty();
        }      
     });
}

function PodnesizahtjevZaNapustanje(){
    var gumbZahtjev = $("#zahtjevZaNapustanje").text();
    $.ajax({
        url: '../ostalo/profilIgraca.php',
        type: 'POST',
        data: {GumbZahtjev: gumbZahtjev},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
        }      
     });
}

function PrihvatiPonudu(){
    var trenutniRed = $(this).closest("tr"); 
    var imeKlubaPonude = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var ponudeniIznos = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac

    $.ajax({
        url: '../ostalo/profilIgraca.php',
        type: 'POST',
        data: {ImeKlubaPonude: imeKlubaPonude, PonudeniIznos: ponudeniIznos},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
            trenutniRed.empty();
        }      
     });
}

function PopuniSlobodneIgrace(){
    var prikaziSlobodneIgrace = $("#prikaziSlobodneIgrace").text();
   
    $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {PrikaziSlobodneIgrace: prikaziSlobodneIgrace},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaSlobodnihIgraca tbody");
            for(var i = 0; i < response.length; i++){
                var ime = response[i][0];
                var prezime = response[i][1];
                var cijena = response[i][2];

                tablica.append(
                    "<tr class='neparni-red'><td>"+ime+
                    "</td><td>"+ prezime +
                    "</td><td>"+ cijena +
                    "</td><td> <a class='kupiIgraca' href='#'> Pošalji ponudu </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbSlobodniIgraci(){
    $(this).remove();
    var gumbsakrijSlobodneIgrace = document.createElement("BUTTON");
    gumbsakrijSlobodneIgrace.innerText = "Sakrij slobodne igrače";
    gumbsakrijSlobodneIgrace.id = "sakrijSlobodneIgrace";
    gumbsakrijSlobodneIgrace.classList.add("btn-prikazi");
    $(".buttonSlobodniIgraci-container").append(gumbsakrijSlobodneIgrace);
}

function SakrijSlobodneIgrace(){
    $("#tablicaSlobodnihIgraca tbody").empty();
    $(this).remove();
    var gumbPrikaziSlobodneIgrace = document.createElement("BUTTON");
    gumbPrikaziSlobodneIgrace.innerText = "Prikaži slobodne igrače";
    gumbPrikaziSlobodneIgrace.id = "prikaziSlobodneIgrace";
    gumbPrikaziSlobodneIgrace.classList.add("btn-prikazi");
    $(".buttonSlobodniIgraci-container").append(gumbPrikaziSlobodneIgrace);
}


function PopuniIgrace(){
    var prikaziIgrace = $("#prikaziIgrace").text();
   
    $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {PrikaziIgrace: prikaziIgrace},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaIgracaUKlubovima tbody");
            for(var i = 0; i < response.length; i++){
                var ime = response[i][0];
                var prezime = response[i][1];
                var trenutnaCijena = response[i][2];

                tablica.append(
                    "<tr class='neparni-red'><td>"+ime+
                    "</td><td>"+ prezime +
                    "</td><td>"+ trenutnaCijena + " €" +
                    "</td><td> <a class='kupiIgraca' href='#'> Pošalji ponudu </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbIgraciUKlubu(){
    $(this).remove();
    var gumbSakrijIgrace = document.createElement("BUTTON");
    gumbSakrijIgrace.innerText = "Sakrij igrače";
    gumbSakrijIgrace.id = "sakrijIgrace";
    gumbSakrijIgrace.classList.add("btn-prikazi");
    $(".buttonIgraciUKlubovima-container").append(gumbSakrijIgrace);
}

function SakrijIgrace(){
    $("#tablicaIgracaUKlubovima tbody").empty();
    $(this).remove();
    var gumbPrikaziIgrace = document.createElement("BUTTON");
    gumbPrikaziIgrace.innerText = "Prikaži igrače";
    gumbPrikaziIgrace.id = "prikaziIgrace";
    gumbPrikaziIgrace.classList.add("btn-prikazi");
    $(".buttonIgraciUKlubovima-container").append(gumbPrikaziIgrace);
}

function PopuniTransferneZahtjeve(){
    var prikaziTransferneZahtjeve = $("#prikaziZahtjeveZaTransferom").text();

    $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {PrikaziTransferneZahtjeve: prikaziTransferneZahtjeve},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaZahtjevaZaTransferomUKlubu tbody");
            for(var i = 0; i < response.length; i++){
                var ime = response[i][0];
                var prezime = response[i][1];
                var cijenaTransfera = response[i][2];

                tablica.append(
                    "<tr class='neparni-red'><td>"+ime+
                    "</td><td>"+ prezime +
                    "</td><td>"+ cijenaTransfera + " €" +
                    "</td><td> <a class='prihvatiZahtjev' href='#'> Prihvati zahtjev </a>" +
                    "</td><td> <a class='odbijzahtjev' href='#'> Odbij zahtjev </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbTransferniZahtjevi(){
    $(this).remove();
    var gumbSakrijTransferneZahtjeve = document.createElement("BUTTON");
    gumbSakrijTransferneZahtjeve.innerText = "Sakrij transferne zahtjeve";
    gumbSakrijTransferneZahtjeve.id = "sakrijTransferneZahtjeve";
    gumbSakrijTransferneZahtjeve.classList.add("btn-prikazi");
    $(".buttonTransferniZahtjevi-container").append(gumbSakrijTransferneZahtjeve);
}

function SakrijTransferneZahtjeve(){
    $("#tablicaZahtjevaZaTransferomUKlubu tbody").empty();
    $(this).remove();
    var gumbPrikaziTransferneZahtjeve = document.createElement("BUTTON");
    gumbPrikaziTransferneZahtjeve.innerText = "Prikaži zahtjeve";
    gumbPrikaziTransferneZahtjeve.id = "prikaziZahtjeveZaTransferom";
    gumbPrikaziTransferneZahtjeve.classList.add("btn-prikazi");
    $(".buttonTransferniZahtjevi-container").append(gumbPrikaziTransferneZahtjeve);
}

function PošaljiPonuduZaSlobodnogIgraca(){
    var trenutniRed = $(this).closest("tr"); 
    var imeIgraca = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var prezimeIgraca = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac

    var ponudaZaIgraca = window.prompt("Unesite željeni iznos ponude: ");

    $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {ImeIgraca: imeIgraca, PrezimeIgraca: prezimeIgraca, PonudaZaIgraca: ponudaZaIgraca},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
        }      
     });
}

function PošaljiPonuduZaIgracaUKlubu(){
    var trenutniRed = $(this).closest("tr"); 
    var imeIgraca = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var prezimeIgraca = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac

    var ponudaZaIgracaUKlubu = window.prompt("Unesite željeni iznos ponude: ");

    $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {ImeIgraca: imeIgraca, PrezimeIgraca: prezimeIgraca, PonudaZaIgracaUKlubu: ponudaZaIgracaUKlubu},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
        }      
     });
}

function Prihvatizahtjev(){
    var trenutniRed = $(this).closest("tr"); 
    var imeIgraca = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var prezimeIgraca = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac
    var ponudeniIznosZahtjeva = trenutniRed.find("td:eq(2)").text(); // Dohvati treći stupac

    $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {ImeIgraca: imeIgraca, PrezimeIgraca: prezimeIgraca, PonudeniIznosZahtjeva: ponudeniIznosZahtjeva},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
            trenutniRed.empty();
        }      
     });
}

function OdbijZahtjeZaTransferModerator(){
    var trenutniRed = $(this).closest("tr"); 
    var imeIgraca = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var prezimeIgraca = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac
    var ponudeniIznosZahtjevaOdbij = trenutniRed.find("td:eq(2)").text(); // Dohvati treći stupac

    $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {ImeIgraca: imeIgraca, PrezimeIgraca: prezimeIgraca, PonudeniIznosZahtjevaOdbij: ponudeniIznosZahtjevaOdbij},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
            trenutniRed.empty();
        }      
     });
}

function PopuniTransferePoDatumu(){
    var prikaziTransferePoDatumuDolazni = $("#prikaziTransferePoDatumu").text();
    var prikaziTransferePoDatumuOdlazni = $("#prikaziTransferePoDatumu").text();
    var datumOd = $("#datumOd").val();
    var datumDo = $("#datumDo").val();
    console.log(datumOd);
    console.log(datumDo);
   
    $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {PrikaziTransferePoDatumuDolazni: prikaziTransferePoDatumuDolazni, DatumOd: datumOd, DatumDo: datumDo},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaDolaznihTransfera tbody");
            for(var i = 0; i < response.length; i++){
                var imeKluba = response[i][0];
                var brojTransfera = response[i][1];

                tablica.append(
                    "<tr class='neparni-red'><td>"+imeKluba+
                    "</td><td>"+ brojTransfera +
                    "</td></tr>"
                )
            }
        }     
         
     });

     $.ajax({
        url: '../ostalo/profilVlasnika.php',
        type: 'POST',
        data: {PrikaziTransferePoDatumuOdlazni: prikaziTransferePoDatumuOdlazni, DatumOd: datumOd, DatumDo: datumDo},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaOdlaznihTransfera tbody");
            for(var i = 0; i < response.length; i++){
                var imeKluba = response[i][0];
                var brojTransfera = response[i][1];

                tablica.append(
                    "<tr class='neparni-red'><td>"+imeKluba+
                    "</td><td>"+ brojTransfera +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbTransferiPoDatumu(){
    $(this).remove();
    var gumbSakrijTransfere = document.createElement("BUTTON");
    gumbSakrijTransfere.innerText = "Sakrij transfere";
    gumbSakrijTransfere.id = "sakrijTransferePoDatumu";
    gumbSakrijTransfere.classList.add("btn-prikazi");
    $(".buttonTransferiPoDatumu-container").append(gumbSakrijTransfere);
}

function SakrijTransferePoDatumu(){
    $("#tablicaDolaznihTransfera tbody").empty();
    $("#tablicaOdlaznihTransfera tbody").empty();
    $("#datumOd").val("");
    $("#datumDo").val("");
    $(this).remove();
    var gumbPrikaziTransferePoDatumu = document.createElement("BUTTON");
    gumbPrikaziTransferePoDatumu.innerText = "Prikaži transfere";
    gumbPrikaziTransferePoDatumu.id = "prikaziTransferePoDatumu";
    gumbPrikaziTransferePoDatumu.classList.add("btn-prikazi");
    $(".buttonTransferiPoDatumu-container").append(gumbPrikaziTransferePoDatumu);
}

function KreirajNoviSport(){
    event.preventDefault();

    var poruka = $('#message');
    var nazivSporta = $("#nazivSporta").val();
    var opisSporta = $("#opisSporta").val();
    var pravilaSporta = $("#pravilaSporta").val();
    var popularnostSporta = $("#popularnostSporta :selected").val();
    var godinaSporta = $("#godinanastankaSporta").val();

    if(nazivSporta == "" || opisSporta == "" || pravilaSporta == "" || godinaSporta == 0){
        poruka.text("Sva polja moraju biti popunjena!");
    }
    else {
        $.ajax({
            url: '../obrasci/kreirajSport.php',
            type: 'POST',
            data: {
                NazivSporta: nazivSporta, 
                OpisSporta: opisSporta, 
                PravilaSporta: pravilaSporta,
                PopularnostSporta: popularnostSporta,
                GodinaSporta: godinaSporta
            },
            dataType: 'json',
            success: function(response){
                $('#message').text(response);
                $("#registracija-form").trigger("reset");
            }     
             
         });
    }
}

function KreirajNoviKlub(){
    event.preventDefault();

    var poruka = $('#message');
    var nazivKluba = $("#nazivKluba").val();
    var datumOsnutka = $("#datumOsnutka").val();
    var adresaKluba = $("#adresaKluba").val();
    var iban = $("#iban").val();
    var mjestoKluba = $("#mjestoKluba").val();
    var stadionKluba = $("#stadionKluba").val();
    var titule = $("#titule").val();
    var predsjednikKluba = $("#predsjednikKluba").val();
    var vlasnikKluba = $("#vlasnikKluba :selected").val();
    var sportKluba = $("#sportKluba :selected").val();


    if(nazivKluba == "" || datumOsnutka == "" || adresaKluba == "" || iban == "" || mjestoKluba == "" || stadionKluba == "" || titule == "" || predsjednikKluba == "" || vlasnikKluba == ""  || sportKluba == ""){
        poruka.text("Sva polja moraju biti popunjena!");
    }
    else {
        $.ajax({
            url: '../obrasci/kreirajKlub.php',
            type: 'POST',
            data: {
                NazivKluba: nazivKluba, 
                DatumOsnutka: datumOsnutka, 
                AdresaKluba: adresaKluba,
                Iban: iban,
                MjestoKluba: mjestoKluba,
                StadionKluba: stadionKluba,
                Titule: titule,
                PredsjednikKluba: predsjednikKluba,
                VlasnikKluba: vlasnikKluba,
                SportKluba: sportKluba,

            },
            dataType: 'json',
            success: function(response){
                $('#message').text(response);
                $("#registracija-form").trigger("reset");
            }     
             
         });
    }
}

function PopuniZahtjeveZaNapustanje(){
    var prikaziZahtjeveZaNapustanje = $("#prikaziZahtjeveZaNapustanje").text();
   
    $.ajax({
        url: '../ostalo/profilAdministratora.php',
        type: 'POST',
        data: {PrikaziZahtjeveZaNapustanje: prikaziZahtjeveZaNapustanje},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaZahtjevaZaNapustanje tbody");
            for(var i = 0; i < response.length; i++){
                var ime = response[i][0];
                var prezime = response[i][1];

                tablica.append(
                    "<tr class='neparni-red'><td>"+ime+
                    "</td><td>"+ prezime +
                    "</td><td> <a id='prihvatiZahtjev' class='prihvatiZahtjev' href='#'> Prihvati </a>" +
                    "</td><td> <a id='odbijZahtjev' class='odbijZahtjev' href='#'> Odbij </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbZahtjeviZaNapustanje(){
    $(this).remove();
    var gumbsakrijzahtjeveZaNapustanje = document.createElement("BUTTON");
    gumbsakrijzahtjeveZaNapustanje.innerText = "Sakrij zahtjeve";
    gumbsakrijzahtjeveZaNapustanje.id = "sakrijZahtjeveZaNapustanje";
    gumbsakrijzahtjeveZaNapustanje.classList.add("btn-prikazi");
    $(".buttonZahtjeviZaNapustanje-container").append(gumbsakrijzahtjeveZaNapustanje);
}

function SakrijZahtjeveZaNapustanje(){
    $("#tablicaZahtjevaZaNapustanje tbody").empty();
    $(this).remove();
    var gumbPrikaziZahtjeveZaNapustanje = document.createElement("BUTTON");
    gumbPrikaziZahtjeveZaNapustanje.innerText = "Prikaži zahtjeve";
    gumbPrikaziZahtjeveZaNapustanje.id = "prikaziZahtjeveZaNapustanje";
    gumbPrikaziZahtjeveZaNapustanje.classList.add("btn-prikazi");
    $(".buttonZahtjeviZaNapustanje-container").append(gumbPrikaziZahtjeveZaNapustanje);
}

function PrihvacenZahtjevZaNapustanje(){
    var trenutniRed = $(this).closest("tr"); 
    var imeIgraca = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var prezimeIgraca = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac

    $.ajax({
        url: '../ostalo/profilAdministratora.php',
        type: 'POST',
        data: {ImeIgracaPrihvacen: imeIgraca, PrezimeIgraca: prezimeIgraca},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
        }      
     });
}

function OdbijenZahtjevZaNapustanje(){
    var trenutniRed = $(this).closest("tr"); 
    var imeIgraca = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var prezimeIgraca = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac

    $.ajax({
        url: '../ostalo/profilAdministratora.php',
        type: 'POST',
        data: {ImeIgracaOdbijen: imeIgraca, PrezimeIgraca: prezimeIgraca},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
        }       
     });
}

function PopuniBlokiraneKorisnike(){
    var prikaziBlokiraneKorisnike = $("#prikaziBlokiraneKorisnike").text();
   
    $.ajax({
        url: '../ostalo/profilAdministratora.php',
        type: 'POST',
        data: {PrikaziBlokiraneKorisnike: prikaziBlokiraneKorisnike},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaBlokiranihKorisnika tbody");
            for(var i = 0; i < response.length; i++){
                var ime = response[i][0];
                var prezime = response[i][1];

                tablica.append(
                    "<tr class='neparni-red'><td>"+ime+
                    "</td><td>"+ prezime +
                    "</td><td> <a id='blokiraj' class='blokiraj' href='#'> Blokiraj </a>" +
                    "</td><td> <a id='otkljucaj' class='otkljucaj' href='#'> Otključaj </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbBlokiraniKorisnici(){
    $(this).remove();
    var gumbsakrijBlokiraneKorisnike = document.createElement("BUTTON");
    gumbsakrijBlokiraneKorisnike.innerText = "Sakrij korisnike";
    gumbsakrijBlokiraneKorisnike.id = "sakrijKorisnike";
    gumbsakrijBlokiraneKorisnike.classList.add("btn-prikazi");
    $(".buttonBlokiraniKorisnici-container").append(gumbsakrijBlokiraneKorisnike);
}

function SakrijBlokiraneKorisnike(){
    $("#tablicaBlokiranihKorisnika tbody").empty();
    $(this).remove();
    var gumbPrikaziBlokiraneKorisnike = document.createElement("BUTTON");
    gumbPrikaziBlokiraneKorisnike.innerText = "Prikaži korisnike";
    gumbPrikaziBlokiraneKorisnike.id = "prikaziBlokiraneKorisnike";
    gumbPrikaziBlokiraneKorisnike.classList.add("btn-prikazi");
    $(".buttonBlokiraniKorisnici-container").append(gumbPrikaziBlokiraneKorisnike);
}

function OtkljucajKorisnika(){
    var trenutniRed = $(this).closest("tr"); 
    var imeKorisnikaOtkljucaj = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    var prezimeKorisnikaOtkljucaj = trenutniRed.find("td:eq(1)").text(); // Dohvati drugi stupac

    $.ajax({
        url: '../ostalo/profilAdministratora.php',
        type: 'POST',
        data: {ImeKorisnikaOtkljucaj: imeKorisnikaOtkljucaj, PrezimeKorisnikaOtkljucaj: prezimeKorisnikaOtkljucaj},
        dataType: 'json',
        success: function(response){
            $('#message').text(response);
        }      
     });
}

function PopuniTablicuPodacimaIzDnevnika(){
    var prikaziTablicuDnevnik = $("#prikaziTablicuDnevnik").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuDnevnik: prikaziTablicuDnevnik},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaDnevnik tbody");
            for(var i = 0; i < response.length; i++){
                var dnevnikId = response[i][0];
                var datumVrijemeRadnje = response[i][1];
                var radnja = response[i][2];
                var upit = response[i][3];
                var korisnikId = response[i][4];
                var tipId = response[i][5];

                tablica.append(
                    "<tr class='neparni-red'><td>"+dnevnikId+
                    "</td><td>"+ datumVrijemeRadnje +
                    "</td><td>"+ radnja +
                    "</td><td>"+ upit +
                    "</td><td>"+ korisnikId +
                    "</td><td>"+ tipId +
                    "</td><td> <a id='urediDnevnik' class='urediDnevnik' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciDnevnika(){
    $(this).remove();
    var gumbSakrijPodatkeDnevnika = document.createElement("BUTTON");
    gumbSakrijPodatkeDnevnika.innerText = "Sakrij podatke";
    gumbSakrijPodatkeDnevnika.id = "sakrijPodatkeDnevnika";
    gumbSakrijPodatkeDnevnika.classList.add("btn-prikazi");
    $(".buttonDnevnik-container").append(gumbSakrijPodatkeDnevnika);
}

function SakrijPodatkeDnevnika(){
    $("#tablicaDnevnik tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeDnevnika = document.createElement("BUTTON");
    gumbPrikaziPodatkeDnevnika.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeDnevnika.id = "prikaziTablicuDnevnik";
    gumbPrikaziPodatkeDnevnika.classList.add("btn-prikazi");
    $(".buttonDnevnik-container").append(gumbPrikaziPodatkeDnevnika);
}

function PopuniTablicuPodacimaIzKluba(){
    var prikaziTablicuKlub = $("#prikaziTablicuKlub").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuKlub: prikaziTablicuKlub},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaKlub tbody");
            for(var i = 0; i < response.length; i++){
                var klubId = response[i][0];
                var naziv = response[i][1];
                var datumOsnutka = response[i][2];
                var adresa = response[i][3];
                var iban = response[i][4];
                var mjesto = response[i][5];
                var stadion = response[i][6];
                var titule = response[i][7];
                var predsjednik = response[i][8];
                var vlasnikId = response[i][9];
                var sportId = response[i][10];


                tablica.append(
                    "<tr class='neparni-red'><td>"+klubId+
                    "</td><td>"+ naziv +
                    "</td><td>"+ datumOsnutka +
                    "</td><td>"+ adresa +
                    "</td><td>"+ iban +
                    "</td><td>"+ mjesto +
                    "</td><td>"+ stadion +
                    "</td><td>"+ titule +
                    "</td><td>"+ predsjednik +
                    "</td><td>"+ vlasnikId +
                    "</td><td>"+ sportId +
                    "</td><td> <a id='urediKlub' class='urediKlub' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciKluba(){
    $(this).remove();
    var gumbSakrijPodatkeKluba = document.createElement("BUTTON");
    gumbSakrijPodatkeKluba.innerText = "Sakrij podatke";
    gumbSakrijPodatkeKluba.id = "sakrijPodatkeKluba";
    gumbSakrijPodatkeKluba.classList.add("btn-prikazi");
    $(".buttonKlub-container").append(gumbSakrijPodatkeKluba);
}

function SakrijPodatkeKluba(){
    $("#tablicaKlub tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeKluba = document.createElement("BUTTON");
    gumbPrikaziPodatkeKluba.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeKluba.id = "prikaziTablicuKlub";
    gumbPrikaziPodatkeKluba.classList.add("btn-prikazi");
    $(".buttonKlub-container").append(gumbPrikaziPodatkeKluba);
}

function PopuniTablicuPodacimaIzKorisnika(){
    var prikaziTablicuKorisnik = $("#prikaziTablicuKorisnik").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuKorisnik: prikaziTablicuKorisnik},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaKorisnik tbody");
            for(var i = 0; i < response.length; i++){
                var korisnikId = response[i][0];
                var ime = response[i][1];
                var prezime = response[i][2];
                var korIme = response[i][3];
                var lozinka = response[i][4];
                var lozinkaSha1 = response[i][5];
                var prihvaceniUvjeti = response[i][6];
                var email = response[i][7];
                var status = response[i][8];
                var datumVrijemeRegistracije = response[i][9];
                var ulogaId = response[i][10];
                var blokiran = response[i][11];
             

                tablica.append(
                    "<tr class='neparni-red'><td>"+korisnikId+
                    "</td><td>"+ ime +
                    "</td><td>"+ prezime +
                    "</td><td>"+ korIme +
                    "</td><td>"+ lozinka +
                    "</td><td>"+ lozinkaSha1 +
                    "</td><td>"+ prihvaceniUvjeti +
                    "</td><td>"+ email +
                    "</td><td>"+ status +
                    "</td><td>"+ datumVrijemeRegistracije +
                    "</td><td>"+ ulogaId +
                    "</td><td>"+ blokiran +
                    "</td><td> <a id='urediKorisnika' class='urediKorisnika' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciKorisnika(){
    $(this).remove();
    var gumbSakrijPodatkeKorisnika = document.createElement("BUTTON");
    gumbSakrijPodatkeKorisnika.innerText = "Sakrij podatke";
    gumbSakrijPodatkeKorisnika.id = "sakrijPodatkeKorisnika";
    gumbSakrijPodatkeKorisnika.classList.add("btn-prikazi");
    $(".buttonKorisnik-container").append(gumbSakrijPodatkeKorisnika);
}

function SakrijPodatkeKorisnika(){
    $("#tablicaKorisnik tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeKorisnika = document.createElement("BUTTON");
    gumbPrikaziPodatkeKorisnika.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeKorisnika.id = "prikaziTablicuKorisnik";
    gumbPrikaziPodatkeKorisnika.classList.add("btn-prikazi");
    $(".buttonKorisnik-container").append(gumbPrikaziPodatkeKorisnika);
}

function PopuniTablicuPodacimaIzPonuda(){
    var prikaziTablicuPonuda = $("#prikaziTablicuPonuda").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuPonuda: prikaziTablicuPonuda},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaPonuda tbody");
            for(var i = 0; i < response.length; i++){
                var ponudaId = response[i][0];
                var iznos = response[i][1];
                var datum = response[i][2];
                var pristanakIgraca = response[i][3];
                var igracId = response[i][4];
                var vlasnikId = response[i][5];
             

                tablica.append(
                    "<tr class='neparni-red'><td>"+ponudaId+
                    "</td><td>"+ iznos +
                    "</td><td>"+ datum +
                    "</td><td>"+ pristanakIgraca +
                    "</td><td>"+ igracId +
                    "</td><td>"+ vlasnikId +
                    "</td><td> <a id='urediPonudu' class='urediPonudu' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciPonuda(){
    $(this).remove();
    var gumbSakrijPodatkePonuda = document.createElement("BUTTON");
    gumbSakrijPodatkePonuda.innerText = "Sakrij podatke";
    gumbSakrijPodatkePonuda.id = "sakrijPodatkePonuda";
    gumbSakrijPodatkePonuda.classList.add("btn-prikazi");
    $(".buttonPonuda-container").append(gumbSakrijPodatkePonuda);
}

function SakrijPodatkePonuda(){
    $("#tablicaPonuda tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkePonuda = document.createElement("BUTTON");
    gumbPrikaziPodatkePonuda.innerText = "Prikaži podatke";
    gumbPrikaziPodatkePonuda.id = "prikaziTablicuPonuda";
    gumbPrikaziPodatkePonuda.classList.add("btn-prikazi");
    $(".buttonPonuda-container").append(gumbPrikaziPodatkePonuda);
}

function PopuniTablicuPodacimaIzProfila(){
    var prikaziTablicuProfil = $("#prikaziTablicuProfil").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuProfil: prikaziTablicuProfil},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaProfil tbody");
            for(var i = 0; i < response.length; i++){
                var profilId = response[i][0];
                var ime = response[i][1];
                var prezime = response[i][2];
                var nacionalnost = response[i][3];
                var datumRodenja = response[i][4];
                var mjestoRodenja = response[i][5];
                var tezina = response[i][6];
                var cijena = response[i][7];
                var visina = response[i][9];
                var sport = response[i][10];
                var pozicija = response[i][11];
                var zahtjevZaNapustanje = response[i][12];
                var suglasnost = response[i][12];
                var klubId = response[i][15];
               

                tablica.append(
                    "<tr class='neparni-red'><td>"+profilId+
                    "</td><td>"+ ime +
                    "</td><td>"+ prezime +
                    "</td><td>"+ nacionalnost +
                    "</td><td>"+ datumRodenja +
                    "</td><td>"+ mjestoRodenja +
                    "</td><td>"+ tezina +
                    "</td><td>"+ cijena + "€" +
                    "</td><td>"+ visina +
                    "</td><td>"+ sport +
                    "</td><td>"+ pozicija +
                    "</td><td>"+ zahtjevZaNapustanje +
                    "</td><td>"+ suglasnost +
                    "</td><td>"+ klubId +
                    "</td><td> <a id='urediProfil' class='urediProfil' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciProfila(){
    $(this).remove();
    var gumbSakrijPodatkeProfila = document.createElement("BUTTON");
    gumbSakrijPodatkeProfila.innerText = "Sakrij podatke";
    gumbSakrijPodatkeProfila.id = "sakrijPodatkeProfila";
    gumbSakrijPodatkeProfila.classList.add("btn-prikazi");
    $(".buttonProfil-container").append(gumbSakrijPodatkeProfila);
}

function SakrijPodatkeProfila(){
    $("#tablicaProfil tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeProfila = document.createElement("BUTTON");
    gumbPrikaziPodatkeProfila.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeProfila.id = "prikaziTablicuProfil";
    gumbPrikaziPodatkeProfila.classList.add("btn-prikazi");
    $(".buttonProfil-container").append(gumbPrikaziPodatkeProfila);
}

function PopuniTablicuPodacimaIzSporta(){
    var prikaziTablicuSport = $("#prikaziTablicuSport").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuSport: prikaziTablicuSport},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaSport tbody");
            for(var i = 0; i < response.length; i++){
                var sportId = response[i][0];
                var naziv = response[i][1];
                var opis = response[i][2];
                var pravila = response[i][3];
                var popularnost = response[i][4];
                var godinaNastanka = response[i][5];

                tablica.append(
                    "<tr class='neparni-red'><td>"+sportId+
                    "</td><td>"+ naziv +
                    "</td><td>"+ opis +
                    "</td><td>"+ pravila +
                    "</td><td>"+ popularnost +
                    "</td><td>"+ godinaNastanka +
                    "</td><td> <a id='urediSport' class='urediSport' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciSporta(){
    $(this).remove();
    var gumbSakrijPodatkeSporta = document.createElement("BUTTON");
    gumbSakrijPodatkeSporta.innerText = "Sakrij podatke";
    gumbSakrijPodatkeSporta.id = "sakrijPodatkeSporta";
    gumbSakrijPodatkeSporta.classList.add("btn-prikazi");
    $(".buttonSport-container").append(gumbSakrijPodatkeSporta);
}

function SakrijPodatkeSporta(){
    $("#tablicaSport tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeSporta = document.createElement("BUTTON");
    gumbPrikaziPodatkeSporta.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeSporta.id = "prikaziTablicuSporta";
    gumbPrikaziPodatkeSporta.classList.add("btn-prikazi");
    $(".buttonSport-container").append(gumbPrikaziPodatkeSporta);
}

function PopuniTablicuPodacimaIzTipa(){
    var prikaziTablicuTipa = $("#prikaziTablicuTipa").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuTipa: prikaziTablicuTipa},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaTip tbody");
            for(var i = 0; i < response.length; i++){
                var tipId = response[i][0];
                var naziv = response[i][1];
                var opis = response[i][2];

                tablica.append(
                    "<tr class='neparni-red'><td>"+tipId+
                    "</td><td>"+ naziv +
                    "</td><td>"+ opis +
                    "</td><td> <a id='urediTip' class='urediTip' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciTipa(){
    $(this).remove();
    var gumbSakrijPodatkeTipa = document.createElement("BUTTON");
    gumbSakrijPodatkeTipa.innerText = "Sakrij podatke";
    gumbSakrijPodatkeTipa.id = "sakrijPodatkeTipa";
    gumbSakrijPodatkeTipa.classList.add("btn-prikazi");
    $(".buttonTip-container").append(gumbSakrijPodatkeTipa);
}

function SakrijPodatkeTipa(){
    $("#tablicaTip tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeTipa = document.createElement("BUTTON");
    gumbPrikaziPodatkeTipa.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeTipa.id = "prikaziTablicuTipa";
    gumbPrikaziPodatkeTipa.classList.add("btn-prikazi");
    $(".buttonTip-container").append(gumbPrikaziPodatkeTipa);
}

function PopuniTablicuPodacimaIzTransfera(){
    var prikaziTablicuTransfera = $("#prikaziTablicuTransfera").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuTransfera: prikaziTablicuTransfera},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaTransfera tbody");
            for(var i = 0; i < response.length; i++){
                var transferId = response[i][0];
                var datum = response[i][1];
                var iznos = response[i][2];
                var klubId = response[i][3];
                var dolazniOdlazni = response[i][4];
                var igracId = response[i][5];
                var vlasnikId = response[i][6];

                tablica.append(
                    "<tr class='neparni-red'><td>"+transferId+
                    "</td><td>"+ datum +
                    "</td><td>"+ iznos + "€" +
                    "</td><td>"+ klubId +
                    "</td><td>"+ dolazniOdlazni +
                    "</td><td>"+ igracId +
                    "</td><td>"+ vlasnikId +
                    "</td><td> <a id='urediTransfer' class='urediTransfer' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciTransfera(){
    $(this).remove();
    var gumbSakrijPodatkeTransfera = document.createElement("BUTTON");
    gumbSakrijPodatkeTransfera.innerText = "Sakrij podatke";
    gumbSakrijPodatkeTransfera.id = "sakrijPodatkeTransfera";
    gumbSakrijPodatkeTransfera.classList.add("btn-prikazi");
    $(".buttonTransfer-container").append(gumbSakrijPodatkeTransfera);
}

function SakrijPodatkeTransfera(){
    $("#tablicaTransfera tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeTransfera = document.createElement("BUTTON");
    gumbPrikaziPodatkeTransfera.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeTransfera.id = "prikaziTablicuTransfera";
    gumbPrikaziPodatkeTransfera.classList.add("btn-prikazi");
    $(".buttonTransfer-container").append(gumbPrikaziPodatkeTransfera);
}

function PopuniTablicuPodacimaIzTransfernihZahtjeva(){
    var prikaziTablicuTransferneZahtjeve = $("#prikaziTablicuTransferneZahtjeve").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuTransferneZahtjeve: prikaziTablicuTransferneZahtjeve},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaTransfernizahtjevi tbody");
            for(var i = 0; i < response.length; i++){
                var transferId = response[i][0];
                var cijena = response[i][1];
                var datum = response[i][2];
                var pristanakIgraca = response[i][3];
                var pristanakVlasnika = response[i][4];
                var igracId = response[i][5];
                var vlasnikId = response[i][6];

                tablica.append(
                    "<tr class='neparni-red'><td>"+transferId+
                    "</td><td>"+ cijena + "€" +
                    "</td><td>"+ datum +
                    "</td><td>"+ pristanakIgraca +
                    "</td><td>"+ pristanakVlasnika +
                    "</td><td>"+ igracId +
                    "</td><td>"+ vlasnikId +
                    "</td><td> <a id='urediTransfernizahtjev' class='urediTransfernizahtjev' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciTransferniZahtjevi(){
    $(this).remove();
    var gumbSakrijPodatkeTransfernihZahtjeva = document.createElement("BUTTON");
    gumbSakrijPodatkeTransfernihZahtjeva.innerText = "Sakrij podatke";
    gumbSakrijPodatkeTransfernihZahtjeva.id = "sakrijPodatkeTransferneZahtjeve";
    gumbSakrijPodatkeTransfernihZahtjeva.classList.add("btn-prikazi");
    $(".buttonTransferniZahtjevi-container").append(gumbSakrijPodatkeTransfernihZahtjeva);
}

function SakrijPodatkeTransfernihZahtjeva(){
    $("#tablicaTransfernizahtjevi tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeTraansfernihZahtjeva = document.createElement("BUTTON");
    gumbPrikaziPodatkeTraansfernihZahtjeva.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeTraansfernihZahtjeva.id = "prikaziTablicuTransferneZahtjeve";
    gumbPrikaziPodatkeTraansfernihZahtjeva.classList.add("btn-prikazi");
    $(".buttonTransferniZahtjevi-container").append(gumbPrikaziPodatkeTraansfernihZahtjeva);
}

function PopuniTablicuPodacimaIUloga(){
    var prikaziTablicuUloga = $("#prikaziTablicuUloga").text();
   
    $.ajax({
        url: '../ostalo/podaciAdmin.php',
        type: 'POST',
        data: {PrikaziTablicuUloga: prikaziTablicuUloga},
        dataType: 'json',
        success: function(response){
        
            var tablica = $("#tablicaUloga tbody");
            for(var i = 0; i < response.length; i++){
                var ulogaId = response[i][0];
                var naziv = response[i][1];
                var obveze = response[i][2];
                var opis = response[i][3];

                tablica.append(
                    "<tr class='neparni-red'><td>"+ulogaId+
                    "</td><td>"+ naziv +
                    "</td><td>"+ obveze +
                    "</td><td>"+ opis +
                    "</td><td> <a id='urediUlogu' class='urediUlogu' href='#'> Uredi </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbPodaciUloga(){
    $(this).remove();
    var gumbSakrijPodatkeUloga = document.createElement("BUTTON");
    gumbSakrijPodatkeUloga.innerText = "Sakrij podatke";
    gumbSakrijPodatkeUloga.id = "sakrijPodatkeUloga";
    gumbSakrijPodatkeUloga.classList.add("btn-prikazi");
    $(".buttonUloga-container").append(gumbSakrijPodatkeUloga);   
}

function SakrijPodatkeUloga(){
    $("#tablicaUloga tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeUloga = document.createElement("BUTTON");
    gumbPrikaziPodatkeUloga.innerText = "Prikaži podatke";
    gumbPrikaziPodatkeUloga.id = "prikaziTablicuUloga";
    gumbPrikaziPodatkeUloga.classList.add("btn-prikazi");
    $(".buttonUloga-container").append(gumbPrikaziPodatkeUloga);
}

function PopuniPopisIgraca(){
    var prikaziTablicuIgracaUVlasnistvu = $("#prikaziTablicuIgracaUVlasnistvu").text();
    $.ajax({
        url: '../ostalo/popisIgracaUVlasnistvu.php',
        type: 'POST',
        dataType: 'json',
        data: {PrikaziTablicuIgracaUVlasnistvu: prikaziTablicuIgracaUVlasnistvu},
        success: function(response){
        
            var tablica = $("#tablicaIgraca tbody");
            for(var i = 0; i < response.length; i++){
                var igracId = response[i][0]
                var imeIgraca = response[i][1];
                var prezimeIgraca = response[i][2];
                var pozicija = response[i][3];

                tablica.append(
                    "<tr class='neparni-red'><td>"+igracId+
                    "</td><td>"+ imeIgraca +
                    "</td><td>"+ prezimeIgraca +
                    "</td><td>"+ pozicija +
                    "</td><td> <a id='azuriraj' class='azuriraj' href='#'> Ažuriraj </a>" +
                    "</td></tr>"
                )
            }
        }     
         
     });
}

function UkloniPostaviGumbIgracaUVlasnistvu(){
    $(this).remove();
    var gumbSakrijPodatkeIgracaUVlasnistvu = document.createElement("BUTTON");
    gumbSakrijPodatkeIgracaUVlasnistvu.innerText = "Sakrij igrače";
    gumbSakrijPodatkeIgracaUVlasnistvu.id = "sakrijPodatkeIgracaUVlasnistvu";
    gumbSakrijPodatkeIgracaUVlasnistvu.classList.add("btn-prikazi");
    $(".buttonIgraci-container").append(gumbSakrijPodatkeIgracaUVlasnistvu);  
}

function SakrijIgraceUVlasnistvu(){
    $("#tablicaIgraca tbody").empty();
    $(this).remove();
    var gumbPrikaziPodatkeIgracauVlasnistvu = document.createElement("BUTTON");
    gumbPrikaziPodatkeIgracauVlasnistvu.innerText = "Prikaži igrače";
    gumbPrikaziPodatkeIgracauVlasnistvu.id = "prikaziTablicuIgracaUVlasnistvu";
    gumbPrikaziPodatkeIgracauVlasnistvu.classList.add("btn-prikazi");
    $(".buttonIgraci-container").append(gumbPrikaziPodatkeIgracauVlasnistvu);
}

function Preusmjeri(){
    var trenutniRed = $(this).closest("tr"); 
    var profilId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/azurirajProfilIgraca.php?id="+profilId);
} 

function PreusmjeriNauredivanjeDnevnika(){
    var trenutniRed = $(this).closest("tr"); 
    var dnevnikId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediDnevnik.php?id="+dnevnikId);
}

function PreusmjeriNauredivanjeKluba(){
    var trenutniRed = $(this).closest("tr"); 
    var klubId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediKlub.php?id="+klubId);
}

function PreusmjeriNauredivanjeKorisnika(){
    var trenutniRed = $(this).closest("tr"); 
    var korisnikId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediKorisnika.php?id="+korisnikId);
}

function PreusmjeriNauredivanjePonude(){
    var trenutniRed = $(this).closest("tr"); 
    var ponudaId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediPonudu.php?id="+ponudaId);
}

function PreusmjeriNauredivanjeProfila(){
    var trenutniRed = $(this).closest("tr"); 
    var profilId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediProfil.php?id="+profilId);
}

function PreusmjeriNauredivanjeSporta(){
    var trenutniRed = $(this).closest("tr"); 
    var sportId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediSport.php?id="+sportId);
}

function PreusmjeriNauredivanjeTipa(){
    var trenutniRed = $(this).closest("tr"); 
    var tipId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediTip.php?id="+tipId);
}

function PreusmjeriNauredivanjeTransfera(){
    var trenutniRed = $(this).closest("tr"); 
    var tipId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediTransfer.php?id="+tipId);
}

function PreusmjeriNauredivanjeTransfernogZahtjeva(){
    var trenutniRed = $(this).closest("tr"); 
    var transferniZahtjevId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediTransferniZahtjev.php?id="+transferniZahtjevId);
}

function PreusmjeriNauredivanjeUloge(){
    var trenutniRed = $(this).closest("tr"); 
    var ulogaId = trenutniRed.find("td:eq(0)").text(); // Dohvati prvi stupac
    window.location.replace("../obrasci/urediUlogu.php?id="+ulogaId);
}