<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2019 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:ManagementModule' => 'Module de Management',
	'Class:ManagementModule' => 'Une carte intégrée ou un module dédié à l\'administration de ce CI. Genre carte iLO/Drake pour les serveurs...',
	'Class:ManagementModule/Attribute:connectableci_id' => 'L\'équipement géré par ce module',
	'Class:ManagementModule/Attribute:connectableci_name' => 'Le nom de l\'équipement géré par ce module',
	'Class:ManagementModule/Attribute:iosversion_id' => 'Version du Firmware ou du Logiciel intégré',
	'Class:ManagementModule/Attribute:iosversion_name' => 'Le nom de la version du Firmware ou du Logiciel intégré',
	'Class:ConnectableCI/Attribute:managementmodule_list' => 'Module(s) de management ',
	'Class:ConnectableCI/Attribute:managementmodule_list+' => 'Le(s) module(s) intégré(s) ou dédié(s) au management de cet équipement',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy' => 'Mode de redondance (Normalement à 0, pour accepter la perte du management)',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy/percent' => '%2$s est opérationnel si au moins %1$s %% des modules de management sont actifs',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy/count' => '%2$s est opérationnel si au moins %1$s module(s) de management est(sont) actifs',
	'Class:ConnectableCI/Attribute:ManagementModuleRedundancy+' => 'Cette valeur devrait toujours être à \'0\' ou  \'0%%\' car l\'équipement peut probablement fonctionner sans le(s) module(s) de management',
));
?>
