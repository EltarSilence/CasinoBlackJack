<?php


$langs = [
    'it'    => 'Italian',
    'en'    => 'English',
];

if(isset($_POST['lang'])){
    $_SESSION['lang'] = $_POST['lang'];
	$_SESSION['language_changed'] = true;
}
else if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'en';
}

function trans($index, $replace = ''){
    global $langs;
    $text = include('lang/'.$langs[$_SESSION['lang']].'.php');
    $text = $text[$index];
    if($replace !== ''){
        foreach($replace as $key => $word){
            $text = str_replace(':'.$key, $word, $text);
        }
    }
    $text = htmlentities($text);
    $text = str_replace(["&lt;i&gt;", "&lt;b&gt;", "&lt;/i&gt;", "&lt;/b&gt;", "&lt;br /&gt;", "&lt;br/&gt;"], ["<i>", "<b>", "</i>", "</b>", "<br />", "<br />"], $text);
    return $text;
}
