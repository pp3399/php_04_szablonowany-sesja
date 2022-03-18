<?php

// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';

require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

//$smarty = new Smarty();

//$smarty->assign('app_url', _APP_URL);
//$smarty->assign('root_path', _ROOT_PATH);


include _ROOT_PATH . '/app/security/check.php';

//pobranie parametrów
function getParams(&$varArray) {
    $varArray['amt'] = isset($_REQUEST['amt']) ? $_REQUEST['amt'] : null;
    $varArray['yrs'] = isset($_REQUEST['yrs']) ? $_REQUEST['yrs'] : null;
    $varArray['rt'] = isset($_REQUEST['rt']) ? $_REQUEST['rt'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$varArray, &$infos, &$messages) {
    if (!(isset($varArray['amt']) && isset($varArray['yrs']) && isset($varArray['rt']))) {
        return false;
    }
    $infos [] = 'Przekazano parametry.';

    if ($varArray['amt'] == "") {
        $messages [] = 'Nie podano kwoty';
    }

    if ($varArray['yrs'] == "") {
        $messages [] = 'Nie podano liczby lat';
    }

    if ($varArray['rt'] == "") {
        $messages [] = 'Nie podano oprocentowania';
    }

//nie ma sensu walidować dalej gdy brak parametrów
    if (count($messages) != 0)
        return false;

    // sprawdzenie, czy $amt i $yrs i $rt są liczbami całkowitymi
    if (!is_numeric($varArray['amt'])) {
        $messages [] = 'Podana kwota nie jest liczbą całkowitą';
    }

    if (!is_numeric($varArray['yrs'])) {
        $messages [] = 'Podana liczba lat nie jest liczbą całkowitą';
    }

    if (!is_numeric($varArray['rt'])) {
        $messages [] = 'Podane oprocentowanie nie jest liczbą całkowitą';
    }


    if (count($messages) != 0)
        return false;

    // sprawdzenie, czy $amt i $yrs i $rt są liczbami dodatnimi
    if ($varArray['amt'] < 0) {
        $messages [] = 'Kwota musi być dodatnia (większa od 0)';
    }

    if ($varArray['yrs'] < 0) {
        $messages [] = 'Liczba lat musi być dodatnia (większa od 0)';
    }

    if ($varArray['rt'] < 0) {
        $messages [] = 'Oprocentowanie musi być dodatnie (większe od zera)';
    }

    if (count($messages) != 0)
        return false;
    else
        return true;
}

function process(&$varArray, &$infos, &$messages, &$result) {
    global $role;

    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    //konwersja parametrów na int
    $amount = intval($varArray['amt']);
    $years = intval($varArray['yrs']);
    $rate = floatval($varArray['rt']);




    //wykonanie operacji
    $years = $years * 12;
    $rate = $rate / 100;

    $result = ($amount * $rate) / (12 * (1 - ((12 / (12 + $rate)) ** $years))); //wzór na raty równe
    $result = number_format($result, 2, ',', ' '); //zaokrąglanie do 2 miejsc po przecinku - ? notacja francuska ?
}

//function check_if_set(&$x) {
//    if (!(isset($x))) {
//        $x = null;
//    } else {
//        //nie rób nic, zostaw zmienną taką jaka jest
//    }
//}
//
//
//check_if_set($_SESSION['amt']);
//check_if_set($_SESSION['yrs']);
//check_if_set($_SESSION['rt']);
//check_if_set($_SESSION['result']);
//$messages = [];
//
//
//$amt = $_SESSION['amt'];
//$yrs = $_SESSION['yrs'];
//$rt = $_SESSION['rt'];
//definicja zmiennych kontrolera
$varArray = [];
$infos = [];
$messages = [];
$result = null;


//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($varArray);
if (validate($varArray, $infos, $messages)) {
    process($varArray, $infos, $messages, $result);
}

// 4. Przygotowanie danych dla szablonu
$smarty->assign('page_title', 'Kalkulator kredytowy');

//$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty - kalkulator');
//$smarty->assign('page_header','Szablony Smarty w kalkulatorze');
//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('varArray', $varArray);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);
$smarty->assign('role', $role);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH . '/app/calc_cred.tpl');
