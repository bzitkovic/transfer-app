<header>
    <div class="grid-header">
    
        <div class="header-main">
            <figure>
                <a href="{$path}/index.php"><img src="{$path}/multimedija/logo.png" alt="TransMarktLogo"> </a>
            </figure>            
            
            <h1>{$trenutnaStranica}</h1>
            {if isset($smarty.session.korisnik)} <p> Prijavljeni ste kao: <strong> {$prijavljeniKorisnik} </strong> </p> {/if}
            <button class="darkModeButton" name="dark_light" onclick="upaliUgasiSvijetlo()" title="Toggle dark/light mode">🌓</button>
        </div>
  
    </div>
</header>