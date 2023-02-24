<?php
if (isset($_POST['name']))
    $jmeno = $_POST['name'];
else
    $jmeno = null;

if (isset($_POST['number']))
    $cislo = $_POST['number'];
else
    $cislo = null;

if (isset($_POST['text']))
    $email = $_POST['text'];
else
    $email = null;

if (isset($_POST['textarea']))
    $poznamka = $_POST['textarea'];
else
    $poznamka = null;

$obsah = 'JMÉNO' . $jmeno . '\n' . 'ČÍSLO' . $cislo . '\n' . 'MAIL' . $email . '\n' . $poznamka

mb_send_mail('tvujmail', 'predmet', $obsah);

// https://doc.nette.org/cs/mail