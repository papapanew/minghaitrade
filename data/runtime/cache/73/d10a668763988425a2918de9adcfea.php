<?php
//000000000000
 exit();?>
s:239:"SELECT `a`.* FROM `ey_archives` `a` WHERE  (  a.typeid IN (2,8,15,16,17,9,18,19,20,10,11) AND a.channel IN (2) AND a.arcrank > -1 AND a.status = 1 AND a.is_del = 0 )  AND `a`.`lang` = 'cn' ORDER BY a.sort_order asc, a.add_time desc LIMIT 8";