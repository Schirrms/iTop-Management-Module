<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2019 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:ManagementModule' => 'Management Module',
	'Class:ManagementModule+' => 'An embedded card or a dedicated module for this device, like an iLO/Drake card for Servers...',
	'Class:ManagementModule/Attribute:connectableci_id' => 'Device hosting this management module',
	'Class:ManagementModule/Attribute:connectableci_name' => 'Device hosting this management module name',
	'Class:ManagementModule/Attribute:iosversion_id' => 'Firmware/Software version',
	'Class:ManagementModule/Attribute:iosversion_name' => 'Firmware/Software version Name',
	'Class:ManagementModule/Attribute:connectableci_id_finalclass_recall' => 'Device Type',
	'Class:ManagementModule/Attribute:connectableci_id_obsolescence_flag' => 'Status',
	'Class:ConnectableCI/Attribute:managementmodule_list' => 'Management module(s)',
	'Class:ConnectableCI/Attribute:managementmodule_list+' => 'Embedded or dedicated management module(s) of this device',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy' => 'Redundancy mode (normally set at 0, to allow the loss of the management)',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy/percent' => '%2$s is up if at least %1$s %% of Management Modules are up',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy/count' => '%2$s is up if at least %1$s Management Modules are up',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy+' => 'This should normally always be set to \'0%%\' as the device probably can work without it\'s management module',
));
?>
