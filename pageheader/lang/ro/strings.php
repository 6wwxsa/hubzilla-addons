<?php

if(! function_exists("string_plural_select_ro")) {
function string_plural_select_ro($n){
	return ($n==1?0:((($n%100>19)||(($n%100==0)&&($n!=0)))?2:1));;
}}
;
App::$strings["\"pageheader\" Settings"] = "Configurări \"Pageheader\"";
App::$strings["Submit"] = "Trimite";
App::$strings["pageheader Settings saved."] = "Configurările antetului de pagină au fost salvate.";
