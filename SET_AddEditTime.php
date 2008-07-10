<?php
# (C) 2008 Steren Giannini
# Licensed under the GNU GPLv2 (or later).

//global $wgOut;
//if ($wgOut->isArticle()){ 
    //We can't use the Revision object because the last one hasn't been created yet
    //Edit Time
    $rev_t = getdate();
    $rev_timestamp = date('YmdHis',$rev_t[0]);            
    
    //Edit User
    $rev_user = User::newFromSession();
    $rev_user_txt = 'User:' . $rev_user->getName();          
    
    SMWFactbox::addProperty(/*propertyname:*/ 'Revision time' , /*value*/ $rev_timestamp, /*caption*/ false);
    SMWFactbox::addProperty(/*propertyname:*/ 'Revision user' , /*value*/ $rev_user_txt, /*caption*/ false);
//}
?>
