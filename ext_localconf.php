<?php
defined('TYPO3_MODE') or die('( ͡ಠ ʖ̯ ͡ಠ)╭∩╮');

if ((TYPO3_MODE === 'BE') && \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_branch) >= \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger('9.5')) {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1555874765127] = \MichielRoos\WizardCrpagetree\ContextMenu\ItemProvider::class;
}
