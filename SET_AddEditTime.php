<?php
# (C) 2008 Steren Giannini
# Licensed under the GNU GPLv2 (or later).

    //Last revision may not have been created at the time of the parse.
    $revision = Revision::newFromTitle( $parser->getTitle() );
    if($revision)
    {   
    //Edit Time
        $rev_timestamp = $revision->getTimestamp();
            //$rev_t = getdate();
            //$rev_timestamp = date('YmdHis',$rev_t[0]);            

    //Edit User
        $rev_user_txt = 'User:' . $revision->getUserText();
            //$rev_user = User::newFromSession();
            //$rev_user_txt = 'User:' . $rev_user->getName();          
    
    SMWFactbox::addProperty(/*propertyname:*/ 'Revision time' , /*value*/ $rev_timestamp, /*caption*/ false);
    SMWFactbox::addProperty(/*propertyname:*/ 'Revision user' , /*value*/ $rev_user_txt, /*caption*/ false);
    }

?>
