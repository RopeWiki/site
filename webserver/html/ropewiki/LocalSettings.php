<?php
# This file was automatically generated by the MediaWiki 1.19.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
    exit;
}

// This should be the last entry
error_reporting( -1 );
ini_set( 'display_errors', 1 );

require_once("$IP/SiteSpecificSettings.php");

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "";
$wgScriptExtension  = ".php";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## UPO means: this is also a user preference option

#$wgReadOnly = 'Upgrading to MediaWiki 1.23.6';

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "root@dav.me";
$wgPasswordSender   = "admin@ropewiki.com";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;
$wgEnotifWatchlist     = true;

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
#$wgMainCacheType    = CACHE_NONE;
$wgMainCacheType    = CACHE_ACCEL;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "http://creativecommons.org/licenses/by-nc-sa/3.0/";
$wgRightsText = "Creative Commons Attribution Non-Commercial Share Alike";
$wgRightsIcon = "{$wgStylePath}/common/images/cc-by-nc-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;

# End of automatically generated settings.
# Add more configuration options below.

# Custom settings
$wgFileExtensions[] = 'kml';
$wgFileExtensions[] = 'pdf';

$wgUseTidy=true;

$wgCapitalLinks = true;
$wgAllowDisplayTitle = true;

$wgShowExceptionDetails = true;
$wgEmailConfirmToEdit = true;

# Custom namespaces
define("NS_CONDITIONS", 190);
$wgExtraNamespaces[NS_CONDITIONS] = "Conditions";
$wgContentNamespaces[] = NS_CONDITIONS;
$wgExtraNamespaces[NS_CONDITIONS+1] = "Conditions_talk";

define("NS_PREPARATION", 192);
$wgExtraNamespaces[NS_PREPARATION] = "Preparation";
$wgContentNamespaces[] = NS_PREPARATION;
$wgExtraNamespaces[NS_PREPARATION+1] = "Preparation_talk";

define("NS_INCIDENTS", 194);
$wgExtraNamespaces[NS_INCIDENTS] = "Incidents";
$wgContentNamespaces[] = NS_INCIDENTS;
$wgExtraNamespaces[NS_INCIDENTS+1] = "Incidents_talk";

define("NS_VOTES", 196);
$wgExtraNamespaces[NS_VOTES] = "Votes";
#$wgContentNamespaces[] = NS_VOTES;
$wgExtraNamespaces[NS_VOTES+1] = "Votes_talk";

define("NS_EVENTS", 198);
$wgExtraNamespaces[NS_EVENTS] = "Events";
$wgContentNamespaces[] = NS_EVENTS;
$wgExtraNamespaces[NS_EVENTS+1] = "Events_talk";

#define("NS_LISTS", 200);
#$wgExtraNamespaces[NS_LISTS] = "Lists";
#$wgContentNamespaces[] = NS_LISTS;
#$wgExtraNamespaces[NS_LISTS+1] = "Lists_talk";

#require_once( "$IP/extensions/recaptcha/ReCaptcha.php" );
#$wgCaptchaClass = 'ReCaptcha';
#require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
#$wgCaptchaClass = 'ReCaptcha';
require_once "$IP/extensions/ConfirmEdit/QuestyCaptcha.php";
$wgCaptchaClass = 'QuestyCaptcha';
$wgGroupPermissions['emailconfirmed']['skipcaptcha'] = true;
$ceAllowConfirmedEmail = true;
$arr = array (
    'What do canyoneers do to go down a rope?  The answer starts with an "r", has six letters, and is often misspelled.  The first vowel is an "a" and the correct spelling can be found by searching for any spelling and "canyoneering" on Google.  Remember to <b>check your junk/spam folder for the confirmation email!</b>' => 'rappel',
);
foreach ( $arr as $key => $value ) {
    $wgCaptchaQuestions[] = array( 'question' => $key, 'answer' => $value );
}

# Extensions
# ===================================================

# Skin
require_once "$IP/skins/Vector/Vector.php";

# Admin tools
require_once "$IP/extensions/Nuke/Nuke.php";
require_once "$IP/extensions/TitleBlacklist/TitleBlacklist.php";
$wgGroupPermissions['sysop']['tboverride'] = false;
$wgTitleBlacklistSources = array(
    array(
        'type' => TBLSRC_LOCALPAGE,
        'src'  => 'MediaWiki:Titleblacklist'
    )
);
require_once "$IP/extensions/UserMerge/UserMerge.php";
$wgGroupPermissions['bureaucrat']['usermerge'] = true;
require_once "$IP/extensions/Renameuser/Renameuser.php";
#require_once "$IP/extensions/UserAdmin/UserAdmin.php";
require_once "$IP/extensions/MagicNoCache/MagicNoCache.php";
require_once "$IP/extensions/Preloader/Preloader.php";
$wgPreloaderSource[NS_CONDITIONS] = 'Template:ConditionsBoilerplate';
require_once "$IP/extensions/CheckUser/CheckUser.php";
require_once "$IP/extensions/ReplaceText/ReplaceText.php";

# Editor tools
require_once "$IP/extensions/WikiEditor/WikiEditor.php";
require_once "$IP/extensions/ParserFunctions/ParserFunctions.php";
$wgPFEnableStringFunctions = true;
require_once "$IP/extensions/Cite/Cite.php";
require_once "$IP/extensions/Scribunto/Scribunto.php";
require_once "$IP/extensions/EmbedVideo/EmbedVideo.php";
$wgScribuntoDefaultEngine = 'luastandalone';
require_once "$IP/vendor/mediawiki/header-footer/HeaderFooter.php";
require_once "$IP/extensions/KmlView/KmlView.php";
require_once "$IP/extensions/SimpleLink/SimpleLink.php";
require_once "$IP/extensions/IconSummary/IconSummary.php";

# Developer tools
require_once "$IP/extensions/UrlGetParameters/UrlGetParameters.php";
require_once "$IP/extensions/Arrays/Arrays.php";
require_once "$IP/extensions/Variables/Variables.php";
require_once "$IP/extensions/TreeToQuery/TreeToQuery.php";
require_once "$IP/extensions/MyVariables/MyVariables.php";

# Feature tools
require_once "$IP/extensions/MultimediaViewer/MultimediaViewer.php";
require_once "$IP/extensions/PdfHandler/PdfHandler.php";
require_once "$IP/extensions/CategoryTree/CategoryTree.php";
require_once "$IP/extensions/ContributionScores/ContributionScores.php"; 
$wgContribScoreIgnoreBots = true;          // Exclude Bots from the reporting - Can be omitted. 
$wgContribScoreIgnoreBlockedUsers = true;  // Exclude Blocked Users from the reporting - Can be omitted. 
$wgContribScoresUseRealName = true;        // Use real user names when available - Can be omitted. Only for MediaWiki 1.19 and later. 
$wgContribScoreDisableCache = false;       // Set to true to disable cache for parser function and inclusion of table. 

//Each array defines a report - 7,50 is "past 7 days" and "LIMIT 50" - Can be omitted. 
$wgContribScoreReports = array( 
    array(7,10), 
    array(30,10), 
    array(0,25)); 

# Semantic tools
enableSemantics($semanticServer);
$smwgQMaxInlineLimit=2000;
$smwgQMaxSize=100;
$smwgNamespacesWithSemanticLinks[NS_CONDITIONS] = true;
$smwgNamespacesWithSemanticLinks[NS_PREPARATION] = true;
$smwgNamespacesWithSemanticLinks[NS_INCIDENTS] = true;
$smwgNamespacesWithSemanticLinks[NS_VOTES] = true;
$smwgNamespacesWithSemanticLinks[NS_EVENTS] = true;

include_once "$IP/extensions/SemanticForms/SemanticForms.php";
require_once "$IP/extensions/SemanticFormsInputs/SemanticFormsInputs.php";
require_once "$IP/extensions/SemanticRating/SemanticRating.php";

#require_once( "$IP/extensions/Maps/Maps.php" );
$egMapsGMaps3Type = 'hybrid';

require_once "$IP/extensions/SemanticDrilldown/SemanticDrilldown.php";
require_once "$IP/extensions/SemanticCompoundQueries/SemanticCompoundQueries.php";

require_once "$IP/extensions/SemanticDependency/SemanticDependency.php";

# Rename edit tabs to "edit" and "edit source"
$sfgRenameEditTabs = true;

# ===================================================

require_once "$IP/extensions/googleAnalytics/googleAnalytics.php";
// Replace xxxxxxx-x with YOUR GoogleAnalytics UA number
$wgGoogleAnalyticsAccount = "UA-51086630-1"; 
// Optional Variables (both default to true)
$wgGoogleAnalyticsIgnoreSysops = false;
$wgGoogleAnalyticsIgnoreBots = false;
// If you use AdSense as well and have linked your accounts, set this to true to enable tracking
$wgGoogleAnalyticsAddASAC = false;

#These failed to work and had to be set in Maps/Maps_Settings.php
$egMapsCoordinateNotation = 'Maps_COORDS_FLOAT';
$egMapsCoordinateDirectional = false;

# See discussion about using these: https://github.com/RopeWiki/app/pull/58
# but regardless, set them to an empty string to just stop log spew.
$egMapsGMaps3ApiKey = "";
$egMapsGMaps3ApiVersion = ""; 

# Upload limits are set in php.ini (upload_max_filesize)
#$wgUploadSizeWarning = 5242880;
#$wgMaxUploadSize = 5242880;

#Broken settings for url redirect stuff
$wgScriptPath	    = "";
$wgArticlePath      = "/$1";
$wgUsePathInfo      = true;
$wgScriptExtension  = ".php";

$wgSearchType = "SphinxMWSearch";
require_once "$IP/extensions/SphinxSearch/SphinxSearch.php";
$wgEnableSphinxPrefixSearch = true;

# With this config we don't need to install & configure sendmail inside
# the webserver container (which php's mail() will try and use by default).
$wgSMTP = array(
    'host' => 'ropewiki_mailserver',
    'port' => 25,
    'auth' => false
);

# Use the X-Forwarded-For IP address as the remote address
# See: https://www.mediawiki.org/wiki/Topic:Ra22sndx88fnifz1
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        # Mediawiki has a fit if multiple IPs are in the header, so always
        # pick the first, which should be the real client anyhow.
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $clientIP = trim($ips[0]);
        $_SERVER['REMOTE_ADDR'] = $clientIP;
}

# Make short urls for actions
#   Before: ropewiki.com/index.php?title=Lewis_River&action=formedit
#   After: ropewiki.com/Lewis_River/formedit
$actions = array(
    'delete',
    'edit',
    'formedit',
    'history',
    'info',
    'markpatrolled',
    'protect',
    'purge',
    'render',
    'revert',
    'rollback',
    'submit',
    'unprotect',
    'unwatch',
    'watch',
    // 'view',  # view is the default action so doesn't need its own path
);

foreach ( $actions as $action ) {
    $wgActionPaths[ $action ] = "/$1/$action";
}