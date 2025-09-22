<?php
//000000000000
 exit();?>
s:265:"SELECT `a`.* FROM `ey_archives` `a` WHERE  (  a.typeid IN (13,14,21,22,23,25,31,32,33,34,35) AND  (a.is_recom = 1)  AND a.channel IN (2) AND a.arcrank > -1 AND a.status = 1 AND a.is_del = 0 )  AND `a`.`lang` = 'en' ORDER BY a.sort_order asc, a.add_time desc LIMIT 4";