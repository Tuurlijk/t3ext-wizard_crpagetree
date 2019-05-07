<?php
defined('TYPO3_MODE') or die('( ͡ಠ ʖ̯ ͡ಠ)╭∩╮');

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1555874765127] = \MichielRoos\WizardCrpagetree\ContextMenu\ItemProvider::class;
}
