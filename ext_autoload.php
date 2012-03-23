<?php
/*
 * Register necessary class names with autoloader
 *
 * $Id$
 */
return array(
	'tx_externalimport_importer' => t3lib_extMgm::extPath('external_import', 'class.tx_externalimport_importer.php'),
	'tx_externalimport_autosync_wrapper_scheduler' => t3lib_extMgm::extPath('external_import', 'autosync/class.tx_externalimport_autosync_wrapper_scheduler.php'),
	'tx_externalimport_autosync_scheduler_task' => t3lib_extMgm::extPath('external_import', 'autosync/class.tx_externalimport_autosync_scheduler_task.php'),
	'tx_externalimport_autosync_scheduler_additionalfieldprovider' => t3lib_extMgm::extPath('external_import', 'autosync/class.tx_externalimport_autosync_scheduler_additionalfieldprovider.php'),
		// NOTE: this needs to be autoloaded because it's not used in a proper Extbase context
	'tx_externalimport_domain_model_configuration' => t3lib_extMgm::extPath('external_import', 'Classes/Domain/Repository/ConfigurationRepository.php')
);
?>
