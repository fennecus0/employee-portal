<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Latn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Vrednost treba da bude netačna.',
    'This value should be true.' => 'Vrednost treba da bude tačna.',
    'This value should be of type {{ type }}.' => 'Vrednost treba da bude tipa {{ type }}.',
    'This value should be blank.' => 'Vrednost treba da bude prazna.',
    'The value you selected is not a valid choice.' => 'Vrednost treba da bude jedna od ponuđenih.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izaberite bar {{ limit }} mogućnost.|Izaberite bar {{ limit }} mogućnosti.|Izaberite bar {{ limit }} mogućnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izaberite najviše {{ limit }} mogućnost.|Izaberite najviše {{ limit }} mogućnosti.|Izaberite najviše {{ limit }} mogućnosti.',
    'One or more of the given values is invalid.' => 'Jedna ili više vrednosti je nevalidna.',
    'This field was not expected.' => 'Ovo polje ne očekuje.',
    'This field is missing.' => 'Ovo polje nedostaje.',
    'This value is not a valid date.' => 'Vrednost nije validan datum.',
    'This value is not a valid datetime.' => 'Vrednost nije validan datum-vreme.',
    'This value is not a valid email address.' => 'Vrednost nije validna adresa elektronske pošte.',
    'The file could not be found.' => 'Datoteka ne može biti pronađena.',
    'The file is not readable.' => 'Datoteka nije čitljiva.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke nije validan ({{ type }}). Dozvoljeni mime tipovi su {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Vrednost treba da bude {{ limit }} ili manje.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Vrednost je predugačka. Treba da ima {{ limit }} karakter ili manje.|Vrednost je predugačka. Treba da ima {{ limit }} karaktera ili manje.|Vrednost je predugačka. Treba da ima {{ limit }} karaktera ili manje.',
    'This value should be {{ limit }} or more.' => 'Vrednost treba da bude {{ limit }} ili više.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Vrednost je prekratka. Treba da ima {{ limit }} karakter ili više.|Vrednost je prekratka. Treba da ima {{ limit }} karaktera ili više.|Vrednost je prekratka. Treba da ima {{ limit }} karaktera ili više.',
    'This value should not be blank.' => 'Vrednost ne treba da bude prazna.',
    'This value should not be null.' => 'Vrednost ne treba da bude null.',
    'This value should be null.' => 'Vrednost treba da bude null.',
    'This value is not valid.' => 'Vrednost je nevalidna.',
    'This value is not a valid time.' => 'Vrednost nije validno vreme.',
    'This value is not a valid URL.' => 'Vrednost nije validan URL.',
    'The two values should be equal.' => 'Obe vrednosti treba da budu jednake.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika. Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Datoteka je prevelika.',
    'The file could not be uploaded.' => 'Datoteka ne može biti otpremljena.',
    'This value should be a valid number.' => 'Vrednost treba da bude validan broj.',
    'This file is not a valid image.' => 'Ova datoteka nije validna slika.',
    'This is not a valid IP address.' => 'Ovo nije validna IP adresa.',
    'This value is not a valid language.' => 'Vrednost nije validan jezik.',
    'This value is not a valid locale.' => 'Vrednost nije validan lokal.',
    'This value is not a valid country.' => 'Vrednost nije validna zemlja.',
    'This value is already used.' => 'Vrednost je već iskorišćena.',
    'The size of the image could not be detected.' => 'Veličina slike ne može biti određena.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je prevelika ({{ width }}px). Najeća dozvoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premala ({{ width }}px). Najmanja dozvoljena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Visina slike je prevelika ({{ height }}px). Najeća dozvoljena visina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Visina slike je premala ({{ height }}px). Najmanja dozvoljena visina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Vrednost treba da bude trenutna korisnička lozinka.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Vrednost treba da ima tačno {{ limit }} karakter.|Vrednost treba da ima tačno {{ limit }} karaktera.|Vrednost treba da ima tačno {{ limit }} karaktera.',
    'The file was only partially uploaded.' => 'Datoteka je samo parcijalno otpremljena.',
    'No file was uploaded.' => 'Datoteka nije otpremljena.',
    'No temporary folder was configured in php.ini.' => 'Privremeni direktorijum nije konfigurisan u php.ini.',
    'Cannot write temporary file to disk.' => 'Nemoguće pisanje privremene datoteke na disk.',
    'A PHP extension caused the upload to fail.' => 'PHP ekstenzija je prouzrokovala neuspeh otpremanja datoteke.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ova kolekcija treba da sadrži {{ limit }} ili više elemenata.|Ova kolekcija treba da sadrži {{ limit }} ili više elemenata.|Ova kolekcija treba da sadrži {{ limit }} ili više elemenata.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ova kolekcija treba da sadrži {{ limit }} ili manje elemenata.|Ova kolekcija treba da sadrži {{ limit }} ili manje elemenata.|Ova kolekcija treba da sadrži {{ limit }} ili manje elemenata.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ova kolekcija treba da sadrži tačno {{ limit }} element.|Ova kolekcija treba da sadrži tačno {{ limit }} elementa.|Ova kolekcija treba da sadrži tačno {{ limit }} elemenata.',
    'Invalid card number.' => 'Nevalidan broj kartice.',
    'Unsupported card type or invalid card number.' => 'Nevalidan broj kartice ili tip kartice nije podržan.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ovo nije validan međunarodni broj bankovnog računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ovo nije validan ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ovo nije validan ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ovo nije validan ISBN-10 ili ISBN-13.',
    'This value is not a valid ISSN.' => 'Ovo nije validan ISSN.',
    'This value is not a valid currency.' => 'Ovo nije validna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ova vrednost treba da bude {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ova vrednost treba da bude veća od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ova vrednost treba da bude veća ili jednaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrednost treba da bude identična sa {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ova vrednost treba da bude manja od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ova vrednost treba da bude manja ili jednaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ova vrednost ne treba da bude jednaka {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrednost ne treba da bude identična sa {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmera ove slike je prevelika ({{ ratio }}). Maksimalna dozvoljena razmera je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmera ove slike je premala ({{ ratio }}). Minimalna očekivana razmera je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadratna ({{ width }}x{{ height }}px). Kvadratne slike nisu dozvoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je orijentacije pejzaža ({{ width }}x{{ height }}px). Pejzažna orijentacija slika nije dozvoljena.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je orijantacije portreta ({{ width }}x{{ height }}px). Portretna orijentacija slika nije dozvoljena.',
    'This form should not contain extra fields.' => 'Ovaj formular ne treba da sadrži dodatna polja.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Otpremljena datoteka je bila prevelika. Molim pokušajte otpremanje manje datoteke.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je nevalidna. Pokušajte ponovo.',
    'fos_user.username.already_used' => 'Korisničko ime već postoji.',
    'fos_user.username.blank' => 'Molimo, unesite korisničko ime.',
    'fos_user.username.short' => 'Korisničko ime je prekratko.',
    'fos_user.username.long' => 'Korisničko ime je predugo.',
    'fos_user.email.already_used' => 'Adresa e-pošte već postoji.',
    'fos_user.email.blank' => 'Molimo, unesite adresu e-pošte.',
    'fos_user.email.short' => 'Adresa e-pošte je prekratka.',
    'fos_user.email.long' => 'Adresa e-pošte je preduga.',
    'fos_user.email.invalid' => 'Adresa e-pošte nije validna.',
    'fos_user.password.blank' => 'Molimo, unesite lozinku.',
    'fos_user.password.short' => 'Lozinka je prekratka.',
    'fos_user.new_password.blank' => 'Molimo, unesite novu lozinku.',
    'fos_user.new_password.short' => 'Nova lozinka je prekratka.',
    'fos_user.current_password.invalid' => 'Lozinka nije validna.',
    'fos_user.group.blank' => 'Molimo unesite naziv.',
    'fos_user.group.short' => 'Naziv je prekratak.',
    'fos_user.group.long' => 'Naziv je predug.',
    'fos_group.name.already_used' => 'Ovo ime već postoji.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Izuzetak pri autentifikaciji.',
    'Authentication credentials could not be found.' => 'Autentifikacioni podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Zahtev za autentifikaciju ne može biti obrađen zbog sistemskih problema.',
    'Invalid credentials.' => 'Nevalidni podaci za autentifikaciju.',
    'Cookie has already been used by someone else.' => 'Kolačić je već iskorišćen od strane nekog drugog.',
    'Not privileged to request the resource.' => 'Nemate prava pristupa ovom resursu.',
    'Invalid CSRF token.' => 'Nevalidan CSRF token.',
    'Digest nonce has expired.' => 'Vreme kriptografskog ključa je isteklo.',
    'No authentication provider found to support the authentication token.' => 'Autentifikacioni provajder za podršku tokena nije pronađen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nije dostupna, istekla je ili su kolačići isključeni.',
    'No token could be found.' => 'Token ne može biti pronađen.',
    'Username could not be found.' => 'Korisničko ime ne može biti pronađeno.',
    'Account has expired.' => 'Nalog je istekao.',
    'Credentials have expired.' => 'Podaci za autentifikaciju su istekli.',
    'Account is disabled.' => 'Nalog je onemogućen.',
    'Account is locked.' => 'Nalog je zaključan.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Ažuriraj grupu',
    'group.show.name' => 'Naziv grupe',
    'group.new.submit' => 'Kreiraj grupu',
    'group.flash.updated' => 'Grupa je ažurirana.',
    'group.flash.created' => 'Grupa je kreirana.',
    'group.flash.deleted' => 'Grupa je obrisana.',
    'security.login.username' => 'Korisničko ime',
    'security.login.password' => 'Lozinka',
    'security.login.remember_me' => 'Zapamti me',
    'security.login.submit' => 'Prijavi se',
    'profile.show.username' => 'Korisničko ime',
    'profile.show.email' => 'Adresa e-pošte',
    'profile.edit.submit' => 'Ažuriraj',
    'profile.flash.updated' => 'Profil je ažuriran.',
    'change_password.submit' => 'Izmeni lozinku',
    'change_password.flash.success' => 'Lozinka je izmenjena.',
    'registration.check_email' => 'Poruka je poslata na adresu %email%. Ona sadrži aktivacioni link koji morate kliknuti da bi aktivirali Vaš nalog.',
    'registration.confirmed' => 'Čestitamo %username%, Vaš nalog je sada aktivan.',
    'registration.back' => 'Nazad na prethodnu stranu.',
    'registration.submit' => 'Registruj se',
    'registration.flash.user_created' => 'Korisnički nalog je uspešno kreiran.',
    'registration.email.subject' => 'Dobrodošli %username%!',
    'registration.email.message' => 'Zdravo %username%!

Da bi aktivirali Vaš nalog posetite %confirmationUrl%

Ovaj link možete upotrebiti samo jednom da biste potvrdili Vaš nalog.

S poštovanjem,
tim sajta.
',
    'resetting.check_email' => 'Poruka je poslata na adresu %email%. Ona sadrži link koji morate kliknuti da bi resetovali Vašu lozinku.',
    'resetting.request.username' => 'Korisničko ime ili adresa e-pošte',
    'resetting.request.submit' => 'Resetuj lozinku',
    'resetting.reset.submit' => 'Izmeni lozinku',
    'resetting.flash.success' => 'Lozinka je uspešno resetovana.',
    'resetting.email.subject' => 'Resetovanje lozinke',
    'resetting.email.message' => 'Zdravo %username%!

Da bi resetovali Vašu lozinku posetite %confirmationUrl%

S poštovanjem,
tim sajta.
',
    'layout.logout' => 'Odjavljivanje',
    'layout.login' => 'Prijavljivanje',
    'layout.register' => 'Registracija',
    'layout.logged_in_as' => 'Prijavljen kao %username%',
    'form.group_name' => 'Naziv grupe',
    'form.username' => 'Korisničko ime',
    'form.email' => 'Adresa e-pošte',
    'form.current_password' => 'Trenutna lozinka',
    'form.password' => 'Lozinka',
    'form.password_confirmation' => 'Potvrda lozinke',
    'form.new_password' => 'Nova lozinka',
    'form.new_password_confirmation' => 'Potvrda lozinke',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
));
$catalogue->addFallbackCatalogue($catalogueSr);
$catalogueDe = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
    'fos_user.username.already_used' => 'Dieser Benutzername wird bereits verwendet.',
    'fos_user.username.blank' => 'Bitte geben Sie einen Benutzernamen an.',
    'fos_user.username.short' => 'Dieser Benutzername ist zu kurz.',
    'fos_user.username.long' => 'Dieser Benutzername ist zu lang.',
    'fos_user.email.already_used' => 'Diese E-Mail-Adresse wird bereits verwendet.',
    'fos_user.email.blank' => 'Bitte geben Sie eine E-Mail-Adresse an.',
    'fos_user.email.short' => 'Diese E-Mail-Adresse ist zu kurz.',
    'fos_user.email.long' => 'Diese E-Mail-Adresse ist zu lang.',
    'fos_user.email.invalid' => 'Diese E-Mail-Adresse ist ungültig.',
    'fos_user.password.blank' => 'Bitte geben Sie ein Passwort an.',
    'fos_user.password.short' => 'Das Passwort ist zu kurz.',
    'fos_user.password.mismatch' => 'Die Passwörter stimmen nicht überein.',
    'fos_user.new_password.blank' => 'Bitte geben Sie ein neues Passwort an.',
    'fos_user.new_password.short' => 'Das neue Passwort ist zu kurz.',
    'fos_user.current_password.invalid' => 'Das angegebene Passwort ist ungültig.',
    'fos_user.group.blank' => 'Bitte geben Sie einen Namen an.',
    'fos_user.group.short' => 'Dieser Name ist zu kurz.',
    'fos_user.group.long' => 'Dieser Name ist zu lang.',
    'fos_group.name.already_used' => 'Dieser Name wird bereits verwendet.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Passwort ungültig.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'Digest nonce has expired.' => 'Digest nonce ist abgelaufen.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Email wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Vorherige',
    'label_next' => 'Nächste',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Gruppe aktualisieren',
    'group.show.name' => 'Gruppenname',
    'group.new.submit' => 'Gruppe erstellen',
    'group.flash.updated' => 'Die Gruppe wurde aktualisiert.',
    'group.flash.created' => 'Die Gruppe wurde erstellt.',
    'group.flash.deleted' => 'Die Gruppe wurde gelöscht.',
    'security.login.username' => 'Benutzername',
    'security.login.password' => 'Passwort',
    'security.login.remember_me' => 'An mich erinnern',
    'security.login.submit' => 'Anmelden',
    'profile.show.username' => 'Benutzername',
    'profile.show.email' => 'E-Mail',
    'profile.edit.submit' => 'Benutzer aktualisieren',
    'profile.flash.updated' => 'Das Benutzerprofil wurde aktualisiert.',
    'change_password.submit' => 'Passwort ändern',
    'change_password.flash.success' => 'Das Passwort wurde geändert.',
    'registration.check_email' => 'Eine E-Mail wurde an %email% gesendet. Sie enthält einen Link, den Sie anklicken müssen, um Ihr Benutzerkonto zu bestätigen.',
    'registration.confirmed' => 'Glückwunsch %username%, Ihr Benutzerkonto ist jetzt bestätigt.',
    'registration.back' => 'Zurück zur ursprünglichen Seite.',
    'registration.submit' => 'Registrieren',
    'registration.flash.user_created' => 'Der Benutzer wurde erfolgreich erstellt.',
    'registration.email.subject' => 'Willkommen %username%!',
    'registration.email.message' => 'Hallo %username%!

Besuchen Sie bitte folgende Seite, um Ihr Benutzerkonto zu bestätigen: %confirmationUrl%

Mit besten Grüßen,
das Team.
',
    'resetting.check_email' => 'Eine E-Mail wurde verschickt. Sie beinhaltet einen Link zum Zurücksetzen des Passwortes.
Hinweis: Ein neues Passwort kann nur alle %tokenLifetime% Stunden beantragt werden.

Eventuell wurde diese E-Mail als Spam markiert, wenn sie nicht angekommen ist.
',
    'resetting.request.username' => 'Benutzername oder E-Mail-Adresse',
    'resetting.request.submit' => 'Passwort zurücksetzen',
    'resetting.reset.submit' => 'Passwort ändern',
    'resetting.flash.success' => 'Das Passwort wurde erfolgreich zurückgesetzt.',
    'resetting.email.subject' => 'Passwort zurücksetzen',
    'resetting.email.message' => 'Hallo %username%!

Besuchen Sie bitte folgende Seite, um Ihr Passwort zurückzusetzen: %confirmationUrl%

Mit besten Grüßen,
das Team.
',
    'layout.logout' => 'Abmelden',
    'layout.login' => 'Anmelden',
    'layout.register' => 'Registrieren',
    'layout.logged_in_as' => 'Angemeldet als %username%',
    'form.group_name' => 'Gruppenname',
    'form.username' => 'Benutzername',
    'form.email' => 'E-Mail-Adresse',
    'form.current_password' => 'Derzeitiges Passwort',
    'form.password' => 'Passwort',
    'form.password_confirmation' => 'Passwort bestätigen',
    'form.new_password' => 'Neues Passwort',
    'form.new_password_confirmation' => 'Neues Passwort bestätigen',
  ),
));
$catalogueSr->addFallbackCatalogue($catalogueDe);

return $catalogue;
