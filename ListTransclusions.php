<?php
/**
 * ListTransclusions extension
 *
 * @author Patrick Westerhoff [poke]
 */
if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

$wgExtensionCredits['specialpage'][] = array(
	'path'           => __FILE__,
	'name'           => 'ListTransclusions',
	'author'         => 'Patrick Westerhoff',
	'url'            => 'http://mediawiki.org/wiki/Extension:ListTransclusions',
	'description'    => 'Lists all transcluded templates and used images of a given page',
	'descriptionmsg' => 'listtransclusions-desc',
);

/* Extension setup */
$dir = dirname( __FILE__ ) . '/';
$wgAutoloadClasses['ListTransclusionsHooks'] = $dir . 'ListTransclusions.hooks.php';
$wgAutoloadClasses['SpecialListTransclusions'] = $dir . 'SpecialListTransclusions.php';
$wgMessagesDirs['ListTransclusions'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['ListTransclusionsAlias'] = $dir . 'ListTransclusions.alias.php';

$wgSpecialPages['ListTransclusions'] = 'SpecialListTransclusions';

/* Extension hooks */
$wgHooks['BaseTemplateToolbox'][] = 'ListTransclusionsHooks::onBaseTemplateToolbox';
