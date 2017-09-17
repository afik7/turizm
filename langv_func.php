
<?php

  function transliterate( $text )
{
 $cyrlet = 'ÀÁÂÃÄÅ¨ÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞß'.
           'àáâãäå¸æçèéêëìíîïðñòóôõö÷øùúûüýþÿ';
 $englet = 'ABVGD   ZIJKLMNOPRSTUFHC   `Y`E  '.
           'abvgd   zijklmnoprstufhc   `y`e  ';
 $result = '';
 for ( $i=0; $i<strlen($text); $i++ ) {
   $c1 = $text[ $i ];
   $p1 = strpos( $cyrlet, $c1 );
   if ( $p1 === FALSE ) { $result .= $c1; continue; }
   $ct = $englet[ $p1 ];
   if ( $ct != ' ' ) { $result .= $ct; continue; }
   switch ( $c1 )
   {
     case 'Å':
       $ct = 'Je';
       break;
     case 'å':
       $ct = 'e';
       break;
     case '¨':
       $ct = 'Jo';
       break;
     case '¸':
       $ct = 'jo';
       break;
     case 'Æ':
       $ct = 'Zh';
       break;
     case 'æ':
       $ct = 'zh';
       break;
     case '×':
       $ct = 'Ch';
       break;
     case '÷':
       $ct = 'ch';
       break;
     case 'Ø':
       $ct = 'Sh';
       break;
     case 'ø':
       $ct = 'sh';
       break;
     case 'Ù':
       $ct = 'Sch';
       break;
     case 'ù':
       $ct = 'sch';
       break;
     case 'Þ':
       $ct = 'Ju';
       break;
     case 'þ':
       $ct = 'ju';
       break;
     case 'ß':
       $ct = 'Ja';
       break;
     case 'ÿ':
       $ct = 'ja';
       break;
     default:
       $ct = '?';
   }
   $result .= $ct;
 }
 return $result;
}

?>