<?php
/**
 * ListTransclusions extension hooks
 *
 * @author Patrick Westerhoff [poke]
 */
class ListTransclusionsHooks {
	/**
	 * BaseTemplateToolbox hook
	 *
	 * @param $tpl Object the skin template
	 * @param $toolbox Object array of toolbox items
	 * @return boolean always true
	 */
	public static function onBaseTemplateToolbox( $tpl, &$toolbox ) {
		if ( $tpl->data['notspecialpage'] ) {
			$toolbox['listtransclusions'] = array(
				'href' => SpecialPage::getTitleFor( 'ListTransclusions', $tpl->getSkin()->thispage )->getLocalUrl(),
				'id' => 't-listtransclusions'
			);
		}
		return true;
	}
}
