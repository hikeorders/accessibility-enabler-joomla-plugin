<?php
/**
 * @package Plugin Accessibility Enabler for Joomla! 3.8
 * @version 1.0.0
 * @author HikeOrders
 * @copyright (C) 2019 - HikeOrders.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; see LICENSE.txt
 * @website https://hikeorders.com/accessibility/home
 **/

// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgSystemA11yEnabler extends JPlugin
{
	
	
    function __construct( &$subject, $params )
    {

        parent::__construct($subject, $params);
		
    }

    function onBeforeCompileHead()
    {
        $document = JFactory::getDocument();

        // apply styles only to front-end
        if (substr(JURI::base(), -15) != "/administrator/")
        {
            $org_id = $this->params->get('org_id');
	    if($org_id != null) {
               $org_id = trim($org_id);
	    }


            if(empty($org_id) == false ) {
                $url = "https://jsappcdn.hikeorders.com/main/assets/js/hko-accessibility.min.js?orgId=".$org_id;
                $document->addScript($url, "text/javascript", false, true);
            }

        }
    }
}
