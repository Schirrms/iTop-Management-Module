<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:ManagementModule' => 'Management Module',
	'Class:ManagementModule/Attribute:connectableci_id' => 'Device hosting this management module',
	'Class:ManagementModule/Attribute:iosversion_id' => 'Firmware/Software version',
	'Class:ConnectableCI/Attribute:managementmodule_list' => 'Management module(s)',
	'Class:ConnectableCI/Attribute:managementmodule_list+' => 'Embedded or dedicated management module(s) of this device',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy' => 'Redundancy mode',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy+' => 'This should normally always be set to \'0%\' as the device probably can work without it\'s management module',
));
?>
