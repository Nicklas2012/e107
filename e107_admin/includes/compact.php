<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $URL$
 * $Id$
 */

if (!defined('e107_INIT')) { exit; }

require_once(e_HANDLER."message_handler.php");
$mes = e107::getMessage();

$buts = "";
$text = "<div style='text-align:center'>
	<table style='".ADMIN_WIDTH."'>";

while (list($key, $funcinfo) = each($newarray)) {
	$buts .= e107::getNav()->renderAdminButton($funcinfo[0], $funcinfo[1], $funcinfo[2], $funcinfo[3], $funcinfo[5], 'default');
}
$text .= $buts;

$text_cat = '';
while ($td <= 5) {
	$text_cat .= "<td class='td' style='width:20%;' ></td>";
	$td++;
}
$td = 1;

$text .= "</tr></table></div>";

if($buts !=""){
	$ns->tablerender(ADLAN_47." ".ADMINNAME, $mes->render().$text);
}

$text = "<div style='text-align:center'>
	<table style='".ADMIN_WIDTH."'>";


$text .= e107::getNav()->pluginLinks( E_16_PLUGMANAGER, 'default');


$text .= "</tr>
	</table></div>";

$ns->tablerender(ADLAN_CL_7, $text);

echo admin_info();

?>