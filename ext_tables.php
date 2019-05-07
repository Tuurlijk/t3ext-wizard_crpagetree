<?php
defined('TYPO3_MODE') || die('( ͡ಠ ʖ̯ ͡ಠ)╭∩╮');

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_func',
        \MichielRoos\WizardCrpagetree\CreatePageTree::class,
        null,
        'LLL:EXT:wizard_crpagetree/Resources/Private/Language/locallang.xlf:title'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_web_func',
        'EXT:wizard_crpagetree/Resources/Private/Language/ContextSensitiveHelp/default.xlf'
    );
}
