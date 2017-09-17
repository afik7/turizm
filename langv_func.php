
<?php

  function transliterate( $text )
{
 $cyrlet = '�����Ũ��������������������������'.
           '��������������������������������';
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
     case '�':
       $ct = 'Je';
       break;
     case '�':
       $ct = 'e';
       break;
     case '�':
       $ct = 'Jo';
       break;
     case '�':
       $ct = 'jo';
       break;
     case '�':
       $ct = 'Zh';
       break;
     case '�':
       $ct = 'zh';
       break;
     case '�':
       $ct = 'Ch';
       break;
     case '�':
       $ct = 'ch';
       break;
     case '�':
       $ct = 'Sh';
       break;
     case '�':
       $ct = 'sh';
       break;
     case '�':
       $ct = 'Sch';
       break;
     case '�':
       $ct = 'sch';
       break;
     case '�':
       $ct = 'Ju';
       break;
     case '�':
       $ct = 'ju';
       break;
     case '�':
       $ct = 'Ja';
       break;
     case '�':
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