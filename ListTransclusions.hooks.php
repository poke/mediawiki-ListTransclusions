<?php
/**
 * ListTransclusions extension hooks
 *
 * @author Patrick Westerhoff [poke]
 */
class ListTransclusionsHooks {
	/**
	 * SidebarBeforeOutput hook
	 *
	 * @param Skin $skin The skin
	 * @param Object $sidebar array of sidebar items
	 * @return bool always true
	 */
	public static function onSidebarBeforeOutput( Skin $skin, &$sidebar ) {
		$title = $skin->getOutput()->getTitle();
		if ( !$title->isSpecialPage() ) {
			$sidebar['TOOLBOX']['listtransclusions'] = [
				'href' => SpecialPage::getTitleFor( 'ListTransclusions', $skin->thispage )->getLocalUrl(),
				'id' => 't-listtransclusions'
			];
		}

		return true;
	}
}
