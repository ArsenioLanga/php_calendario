<?php 

#CAMINHOS ABSOLUTOS
$directoryInt="";  #Variavel a ser definida caso o website esteja num subdirectorio no servidor
define('DIRECTORYRYPAGE', "http://{$_SERVER['HTTP_HOST']}/{$directoryInt}");
$barra= (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/')? "":"/"; #Garantir a consistencia acrestando "/" no fim caso o DOCUMENT_ROOT nao defina por padrao
define('DIRECTORYREQUEST', "{$_SERVER['DOCUMENT_ROOT']}{$barra}{$directoryInt}");

#BASE DE DADOS
define('HOST', 'localhost');
define('DBNAME', 'calculadora');
define('USER', 'root');
define('PASSWORD', '');


#EMAIL

#INCLUIR ARQUIVOS 
include('lib/vendor/autoload.php');


?>