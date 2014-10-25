<?php

#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|         HABBOPHP
- http://habbobeta.fr                             #|
#|         Copyright © 2012 Valentin & Robin. All rights reserved.        #|
#|																		  #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

require'init.php';

$tpl->assign('groups','shop');
$badgeData = $db->query('SELECT * FROM habbophp_shop_badges',true);

$tpl->assign('token',Tools::generate_token());
$tpl->assign('badges',$badgeData);

$tpl->display('header.tpl');
$tpl->display('badges.tpl');	
$tpl->display('footer.tpl');

?>http://www.google.dz/imgres?imgurl=http%3A%2F%2Fadodreams.e-monsite.com%2Fmedias%2Fimages%2F22612332badge-habbo-staff-1-gif.gif%253Ffx%253Dr_120_120&imgrefurl=http%3A%2F%2Fadodreams.e-monsite.com%2Fpages%2Fquizze-sur-habbo.html&h=120&w=120&tbnid=WVeXmLMm5zOb2M%3A&zoom=1&docid=jEgZVoLMeX9vrM&hl=fr&ei=6J5LVKT-DdDias_OgDg&tbm=isch&ved=0CFkQMyg0MDQ&iact=rc&uact=3&dur=1351&page=3&start=48&ndsp=27
