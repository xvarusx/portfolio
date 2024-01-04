<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['packages'] = 'EXT:packages/Configuration/RTE/Default.yaml';
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('test.packages', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('test.packages', 'Content');

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:packages/Configuration/TsConfig/Page/All.tsconfig">');
