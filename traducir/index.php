<?php 

putenv("LC_ALL=es_ES");
setlocale(LC_ALL,'es_ES');

bindtextdomain('actividad11','/opt/lampp/htdocs/actividad11/traducir/locale');
textdomain('actividad11');


echo gettext('Hola');
echo "<br/>";
echo _('Hola');




?>