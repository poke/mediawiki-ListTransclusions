# ListTransclusions
*ListTransclusions* is a [MediaWiki](https://mediawiki.org) extension that adds a special page `Special:ListTransclusions` which lists all used images and templates of a given page. It also adds a link to the toolbox portlet to quickly access the list for the currently shown page.

The extension was created to make sure that attribution information for licenses such as the GFDL is easily accessible even if an article uses multiple nested templates or images with the [`link` parameter](https://mediawiki.org/wiki/Help:Images#Syntax), which makes it impossible to reach the image description page without browsing through the page’s source code.

* [*Extension:ListTransclusions* on MediaWiki.org](https://mediawiki.org/wiki/Extension:ListTransclusions).

## Installation
To install this extension, extract the extension’s files into a folder `ListTransclusions` in the `extensions/` directory and add the following line at the bottom of your [`LocalSettings.php`](https://mediawiki.org/wiki/Manual:LocalSettings.php):

    wfLoadExtension( 'ListTransclusions' );

## Configuration
The extension generally works without any configuration. You can modify two messages within the `MediaWiki` namespace to show additional texts at the beginning or the end of the displayed list of the special page. Both messages are empty by default and will only be displayed if the target page exists. The messages are:

* `MediaWiki:listtransclusions-header` – for the beginning of the list
* `MediaWiki:listtransclusions-footer` – for the end of the list

The messages will be parsed by the MediaWiki parser, so you can use wiki code inside. In addition you can access the name of the current targetted page using `$1` within the message code.
