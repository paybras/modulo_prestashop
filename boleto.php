<?php

/**
 * @author Andresa 
 * @copyright Consultoria da Web
 * @site http://www.consultoriadaweb.com.br
 **/

include(dirname(__FILE__).'/config/config.inc.php');


$boleto=Db::getInstance()->getValue("SELECT url_boleto_paybras FROM "._DB_PREFIX_."orders WHERE id_transacao_paybras='".$_GET['id']."' ");


if(!$boleto) die;

header("Location: $boleto");
exit;


?>
