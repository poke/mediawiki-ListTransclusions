<?php
/**
 * ListTransclusions extension.
 */
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'ListTransclusions' );

	// Keep i18n globals so mergeMessageFileList.php doesn’t break
	$wgMessagesDirs['ListTransclusions'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['ListTransclusionsAlias'] = __DIR__ . '/ListTransclusions.alias.php';

	wfWarn(
		'Deprecated PHP entry point used for ListTransclusions extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the ListTransclusions extension requires MediaWiki 1.25+' );
}
