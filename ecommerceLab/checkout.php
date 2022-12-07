<!DOCTYPE html>
<html>
<head>
    <?php include('./head.php') ?>
</head>
<body>
    <?php include('./header.php') ?>
    <img class="background-img"
        src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/Untitled%20design.png"
        alt="white-sand">
    <div class="page-template">
        <section class="section-template">
            <form action = "insert.php" method = "POST">
                <div class="checkout-row">
                    <div class="checkout-left-section">
                        <div class="checkout-form">
                            <p class="checkout-section-title">Osobné údaje</p>
                            <input class="checkout-field" type="text" name="meno" placeholder="Meno"><br>
                            <input class="checkout-field" type="text" name="priezvisko" placeholder="Priezvisko"><br>
                            <input class="checkout-field" type="email" name="email" placeholder="E-mail"><br>
                            <input class="checkout-field" type="text" name="telefon" placeholder="Telefónny kontakt"><br>
                            <input class="checkout-field" type="text" name="ulica" placeholder="Ulica"><br>
                            <input class="checkout-field" type="text" name="mesto" placeholder="Mesto"><br>
                            <input class="checkout-field" type="text" name="psc" placeholder="PSČ"><br>
                        </div>
                    </div>
                    <div class="checkout-right-section">
                        <p class="checkout-section-title">Zhrnutie objednávky</p>
                        <div class="checkout-info-color">
                            Bankové spojenie: SLSP a.s. <br>
                            Číslo účtu: 5124836961 / 0900 <br>
                            IBAN: SK0709000000005124836961 <br>
                            SWIFT: GIBASKBX <br>
                            Fakturačné informácie: <br>
                            Moitin s.r.o. <br>
                            Miletičova 5B <br>
                            821 08 Bratislava <br>
                            Slovenská republika <br>
                            IČO: 47349069 <br>
                            IČ DPH: SK2023823131 <br>
                        </div><br>
                        <input type="checkbox" class="" name="" id="" required>
                        <span class="checkout-box">Bol som oboznámený so <span class="accept"><a
                                    href="/ecommerceLab/obchodne-podmienky.php">Všeobecnými
                                    podmienkami</a></span></span><br>
                        <button type="submit" class="button-checkout">Rezervovať</button><br>
                        <div class="checkout-text">Kurz vám potvrdíme mailom</div>
                    </div>
                </div>
                <div class="checkout-row">
                    <div class="checkout-left-section">
                        <div class="checkout-form">
                            <p class="checkout-section-title">Info o kurze</p>
                            <div class="checkout-field">Dátum a trvanie kurzu: 14.5.2023</div>
                            <div class="checkout-field">Cena: 25€</div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>
<footer>
    <?php include('./footer.php') ?>
</footer>
</html>
