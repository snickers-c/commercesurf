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
        <form>
          <div class="checkout-row">
            <div class="checkout-left-section">
              <div class="checkout-form">
                <p class="checkout-section-title">Údaje účastníka kurzu</p>
                <div class="underline100"></div>
                  <input class="checkout-field" type="text" name="meno" placeholder="Meno"><br>
                  <input class="checkout-field" type="text" name="priezvisko" placeholder="Priezvisko"><br>
                  <input class="checkout-field" type="email" name="email" placeholder="E-mail"><br>
                  <input class="checkout-field" type="text" name="telefon" placeholder="Telefónny kontakt"><br>
                  <input class="checkout-field" type="text" name="ulica" placeholder="Ulica"><br>
                  <input class="checkout-field" type="text" name="mesto" placeholder="Mesto"><br>
                  <input class="checkout-field" type="text" name="psc" placeholder="PSČ"><br>
                  <select class="checkout-select" name="mesto">
                    <option value="sk">Slovenská republika</option>
                    <option value="cz">Česká republika</option>
                    <option value="ine">Íne</option>
                  </select>
              </div>
            </div>
            <div class="checkout-right-section">
              <p class="checkout-section-title">Zhrnutie objednávky</p>
              <div class="underline100"></div>
              <div class="checkout-info">
                <p>Nazov kurzu</p>
                <img style="width:100px;height:100px;" src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/Entrance.png">
                <p>datum</p>
                <p>pocet volnych miest</p>
                <p>celkova cena</p>
                <input type="checkbox" class="" name="" id="" required>
                <p>Bol som oboznámený so <span><a href="http://localhost/ecommerceLab/obchodne-podmienky.php">Všeobecnými podmienkami</a></span></p>
              </div>
            </div>
          </div>
          <div class="checkout-row">
            <div class="checkout-left-section">
                <div class="checkout-form">
                  <p class="checkout-section-title">Poznámka</p>
                  <div class="underline100"></div>
                    <input type="text" name="poznamka" class="checkout-text-field" placeholder="Povecte nám čo máte na mysli."><br>
                </div>
              </div>
              <div class="checkout-right-section">
                <p class="checkout-section-title">Platba</p>
                <div class="underline100"></div>
                <input type="radio" checked>
                <label>Platba bankovým prevodom</label><br>
                <p>
                  PLATOBNÉ INFORMÁCIE: <br>
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
                </p>
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
