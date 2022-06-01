
<?php
include ('header.html');
$email=$_POST['email'];
$jegy=$_POST['azonosito'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP(); // SMTP-n keresztuli kuldes
$mail->Host = 'smtp.gmail.com'; // SMTP szerverek
$mail->SMTPAuth = true; // SMTP
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SMTP titkosítás
$mail->Port = 465; // SMTP port

$mail->Username = 'taylordzsi.g@gmail.com'; // SMTP felhasználo
$mail->Password = 'Gittaszabo1991'; // SMTP jelszo

$mail->From = 'taylordzsi.g@gmail.com'; // Felado e-mail cime
$mail->FromName = 'BaLog Zálog'; // Felado neve
$mail->AddAddress($email, 'Név'); // Cimzett es neve
$mail->AddReplyTo('gitta.szabo@hotmail.com', 'Név'); // Valaszlevel ide

$mail->WordWrap = 80; // Sortores allitasa
$mail->IsHTML(true); // Kuldes HTML-kent
$mail->CharSet = 'UTF-8';   
$mail->Subject = 'Lejárt Zálogjegy'; // A level targya
$mail->Body = '<b>Tisztelt Ügyfelünk!</b><br><br>
Értesíteni szeretnénk, hogy 10 nap múlva  ' .$jegy. ' számú zálogjegye lejár!.<br>
Amennyiben nem szeretné, hogy ékszerei elvesszenek, kérjük fáradjon be üzletünkbe.<br>
<br>
Üdvözlettel: <br><br>
<b>BaLog Zálog</b><br>
+36-30/854-4814<br>
Kecskemét, Horog utca 1.'; // A level tartalma
$mail->AltBody = 'Szövegtörzs text-only '; // A level szoveges tartalma

if (!$mail->Send()) {
echo 'A levél nem került elküldésre';
echo 'A felmerült hiba: ' . $mail->ErrorInfo;
exit;
}

echo 'A levelet sikeresen kiküldtük';


include ('../Model/ertesites1.classes.php');
$obj = new Ertesitesketto($jegy);
$obj->ertketto($jegy);

?>