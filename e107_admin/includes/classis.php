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

while (list($key, $funcinfo) = each($newarray))
{
	$buts .= e107::getNav()->renderAdminButton($funcinfo[0], $funcinfo[1], $funcinfo[2], $funcinfo[3], $funcinfo[6], "classis");
}
if($buts != "")
{
    $text = "<div style='text-align:center'>
			<table style='".ADMIN_WIDTH."'>";
	$text .= $buts;
 	$text .= render_clean();
 	$text .= "</table></div>";
	$ns->tablerender(ADLAN_47." ".ADMINNAME, $mes->render().$text);
}
$text = "<div style='text-align:center'>
	<table style='".ADMIN_WIDTH."'>";

$text .= e107::getNav()->pluginLinks(E_32_PLUGMANAGER, "classis");

$text .= render_clean();

$text .= "</table></div>";

$ns->tablerender(ADLAN_CL_7, $text);

?>
