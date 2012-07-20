<?php

########################################################################
# Extension Manager/Repository config file for ext "external_import".
#
# Auto generated 20-07-2012 18:08
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'External Data Import',
	'description' => 'Tool for importing data from external sources into the TYPO3 database, using an extended TCA syntax. Provides a BE module, a Scheduler task and an API.',
	'category' => 'module',
	'author' => 'Francois Suter (Cobweb)',
	'author_email' => 'typo3@cobweb.ch',
	'shy' => '',
	'dependencies' => 'svconnector,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => 'mod1',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '2.0.3',
	'constraints' => array(
		'depends' => array(
			'svconnector' => '2.0.0-0.0.0',
			'extbase' => '1.3.0-0.0.0',
			'fluid' => '1.3.0-0.0.0',
			'typo3' => '4.5.0-4.7.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'externalimport_tut' => '',
			'scheduler' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:34:{s:9:"ChangeLog";s:4:"dbf3";s:36:"class.tx_externalimport_importer.php";s:4:"4dc2";s:16:"ext_autoload.php";s:4:"7dbf";s:21:"ext_conf_template.txt";s:4:"d019";s:12:"ext_icon.gif";s:4:"d913";s:17:"ext_localconf.php";s:4:"7e2b";s:14:"ext_tables.php";s:4:"11d0";s:13:"locallang.xml";s:4:"0d91";s:10:"README.txt";s:4:"3fcc";s:40:"Classes/Controller/ListingController.php";s:4:"68bf";s:53:"Classes/Domain/Repository/ConfigurationRepository.php";s:4:"b35d";s:49:"Classes/Domain/Repository/SchedulerRepository.php";s:4:"224c";s:28:"Classes/ExtDirect/Server.php";s:4:"2f79";s:43:"Classes/ViewHelpers/Be/HeaderViewHelper.php";s:4:"bb12";s:40:"Resources/Private/Language/locallang.xml";s:4:"cd76";s:37:"Resources/Private/Layouts/Module.html";s:4:"e11a";s:47:"Resources/Private/Templates/Listing/NoSync.html";s:4:"acd3";s:45:"Resources/Private/Templates/Listing/Sync.html";s:4:"384d";s:39:"Resources/Public/Icons/preview_data.gif";s:4:"526a";s:43:"Resources/Public/Icons/refresh_animated.gif";s:4:"e1d4";s:38:"Resources/Public/Images/moduleIcon.png";s:4:"de79";s:42:"Resources/Public/JavaScript/Application.js";s:4:"6a4f";s:46:"Resources/Public/StyleSheet/ExternalImport.css";s:4:"c3c4";s:79:"autosync/class.tx_externalimport_autosync_scheduler_additionalfieldprovider.php";s:4:"c12a";s:60:"autosync/class.tx_externalimport_autosync_scheduler_task.php";s:4:"42f3";s:14:"doc/manual.pdf";s:4:"e8e1";s:14:"doc/manual.sxw";s:4:"5374";s:54:"interfaces/interface.tx_externalimport_datahandler.php";s:4:"dcca";s:18:"mod1/locallang.xml";s:4:"6afa";s:37:"mod1/locallang_csh_externalimport.xml";s:4:"06dd";s:22:"mod1/locallang_mod.xml";s:4:"4c34";s:15:"mod1/README.txt";s:4:"c753";s:51:"samples/class.tx_externalimport_transformations.php";s:4:"7ba9";s:47:"tests/class.tx_externalimport_importer_Test.php";s:4:"1014";}',
	'suggests' => array(
	),
);

?>