<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('cssjsrendering', 'Configuration/TypoScript', 'CSS JS Rendering');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cssjsrendering_domain_model_mainrenderer', 'EXT:cssjsrendering/Resources/Private/Language/locallang_csh_tx_cssjsrendering_domain_model_mainrenderer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cssjsrendering_domain_model_mainrenderer');

    }
);
