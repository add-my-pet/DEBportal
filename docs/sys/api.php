<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8" />
<title>MediaWiki API help - DEBwiki</title>
<meta name="generator" content="MediaWiki 1.25.3" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="/wiki/opensearch_desc.php" title="DEBwiki (en)" />
<link rel="EditURI" type="application/rsd+xml" href="http://www.DEBtheory.org/wiki/api.php?action=rsd" />
<link rel="alternate" hreflang="x-default" href="/wiki/index.php?title=Special%3AApiHelp" />
<link rel="alternate" type="application/atom+xml" title="DEBwiki Atom feed" href="/wiki/index.php?title=Special%3ARecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="http://www.DEBtheory.org/wiki/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.sectionAnchor%7Cmediawiki.skinning.interface%7Cmediawiki.ui.button&amp;only=styles&amp;skin=apioutput&amp;*" />
<meta name="ResourceLoaderDynamicStyles" content="" />
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
/* cache key: DEBwiki:resourceloader:filter:minify-css:7:0a55de4300b59c1251ed0a36228832d7 */</style>
<script src="http://www.DEBtheory.org/wiki/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=apioutput&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"Special","wgCanonicalSpecialPageName":"ApiHelp","wgNamespaceNumber":-1,"wgPageName":"Special:ApiHelp","wgTitle":"ApiHelp","wgCurRevisionId":0,"wgRevisionId":0,"wgArticleId":0,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Special:ApiHelp","wgRelevantArticleId":0,"wgIsProbablyEditable":false});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"variant":"en"});});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\"});});
/* cache key: DEBwiki:resourceloader:filter:minify-js:7:a5c52c063dc436c1ca7c9f456936a5e9 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.apihelp","mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns--1 ns-special mw-special-ApiHelp page-Special_ApiHelp skin-apioutput action-view">

		<div class="mw-body" role="main">
			<h1 class="firstHeading">MediaWiki API help</h1>
			<div class="mw-body-content">
				<div id="mw-content-text"><p>This is an auto-generated MediaWiki API documentation page.
</p><p>Documentation and examples: <a target="_blank" class="external free" href="https://www.mediawiki.org/wiki/API">https://www.mediawiki.org/wiki/API</a>
</p><h2 id="main" class="apihelp-header">Main module</h2>

<div class="hlist plainlinks api-main-links">
<ul><li> <a href="https://www.mediawiki.org/wiki/API%3AMain_page" class="extiw" title="mw:API:Main page">Documentation</a></li>
<li> <a href="https://www.mediawiki.org/wiki/API%3AFAQ" class="extiw" title="mw:API:FAQ">FAQ</a></li>
<li> <a rel="nofollow" target="_blank" class="external text" href="https://lists.wikimedia.org/mailman/listinfo/mediawiki-api">Mailing list</a></li>
<li> <a rel="nofollow" target="_blank" class="external text" href="https://lists.wikimedia.org/mailman/listinfo/mediawiki-api-announce">API Announcements</a></li>
<li> <a rel="nofollow" target="_blank" class="external text" href="https://phabricator.wikimedia.org/maniphest/query/GebfyV4uCaLd/#R">Bugs &amp; requests</a></li></ul></div>
<p><strong>Status:</strong> All features shown on this page should be working, but the API is still in active development, and may change at any time. Subscribe to <a rel="nofollow" target="_blank" class="external text" href="https://lists.wikimedia.org/pipermail/mediawiki-api-announce/">the mediawiki-api-announce mailing list</a> for notice of updates.
</p><p><strong>Erroneous requests:</strong> When erroneous requests are sent to the API, an HTTP header will be sent with the key "MediaWiki-API-Error" and then both the value of the header and the error code sent back will be set to the same value. For more information see <a href="https://www.mediawiki.org/wiki/API%3AErrors_and_warnings" class="extiw" title="mw:API:Errors and warnings">API: Errors and warnings</a>.
</p>

<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt>action</dt><dd class="description"><p>Which action to perform.
</p></dd><dd class="info">One value: <a href="/wiki/api.php?action=help&amp;modules=block">block</a>, <a href="/wiki/api.php?action=help&amp;modules=checktoken">checktoken</a>, <a href="/wiki/api.php?action=help&amp;modules=clearhasmsg">clearhasmsg</a>, <a href="/wiki/api.php?action=help&amp;modules=compare">compare</a>, <a href="/wiki/api.php?action=help&amp;modules=createaccount">createaccount</a>, <a href="/wiki/api.php?action=help&amp;modules=delete">delete</a>, <a href="/wiki/api.php?action=help&amp;modules=edit">edit</a>, <a href="/wiki/api.php?action=help&amp;modules=emailuser">emailuser</a>, <a href="/wiki/api.php?action=help&amp;modules=expandtemplates">expandtemplates</a>, <a href="/wiki/api.php?action=help&amp;modules=feedcontributions">feedcontributions</a>, <a href="/wiki/api.php?action=help&amp;modules=feedrecentchanges">feedrecentchanges</a>, <a href="/wiki/api.php?action=help&amp;modules=feedwatchlist">feedwatchlist</a>, <a href="/wiki/api.php?action=help&amp;modules=filerevert">filerevert</a>, <a href="/wiki/api.php?action=help&amp;modules=help">help</a>, <a href="/wiki/api.php?action=help&amp;modules=imagerotate">imagerotate</a>, <a href="/wiki/api.php?action=help&amp;modules=import">import</a>, <a href="/wiki/api.php?action=help&amp;modules=login">login</a>, <a href="/wiki/api.php?action=help&amp;modules=logout">logout</a>, <a href="/wiki/api.php?action=help&amp;modules=managetags">managetags</a>, <a href="/wiki/api.php?action=help&amp;modules=move">move</a>, <a href="/wiki/api.php?action=help&amp;modules=opensearch">opensearch</a>, <a href="/wiki/api.php?action=help&amp;modules=options">options</a>, <a href="/wiki/api.php?action=help&amp;modules=paraminfo">paraminfo</a>, <a href="/wiki/api.php?action=help&amp;modules=parse">parse</a>, <a href="/wiki/api.php?action=help&amp;modules=patrol">patrol</a>, <a href="/wiki/api.php?action=help&amp;modules=protect">protect</a>, <a href="/wiki/api.php?action=help&amp;modules=purge">purge</a>, <a href="/wiki/api.php?action=help&amp;modules=query">query</a>, <a href="/wiki/api.php?action=help&amp;modules=revisiondelete">revisiondelete</a>, <a href="/wiki/api.php?action=help&amp;modules=rollback">rollback</a>, <a href="/wiki/api.php?action=help&amp;modules=rsd">rsd</a>, <a href="/wiki/api.php?action=help&amp;modules=setnotificationtimestamp">setnotificationtimestamp</a>, <a href="/wiki/api.php?action=help&amp;modules=stashedit">stashedit</a>, <a href="/wiki/api.php?action=help&amp;modules=tag">tag</a>, <a href="/wiki/api.php?action=help&amp;modules=tokens">tokens</a>, <a href="/wiki/api.php?action=help&amp;modules=unblock">unblock</a>, <a href="/wiki/api.php?action=help&amp;modules=undelete">undelete</a>, <a href="/wiki/api.php?action=help&amp;modules=upload">upload</a>, <a href="/wiki/api.php?action=help&amp;modules=userrights">userrights</a>, <a href="/wiki/api.php?action=help&amp;modules=watch">watch</a></dd><dd class="info">Default: help</dd><dt>format</dt><dd class="description"><p>The format of the output.
</p></dd><dd class="info">One value: <a href="/wiki/api.php?action=help&amp;modules=dbg">dbg</a>, <a href="/wiki/api.php?action=help&amp;modules=dbgfm">dbgfm</a>, <a href="/wiki/api.php?action=help&amp;modules=dump">dump</a>, <a href="/wiki/api.php?action=help&amp;modules=dumpfm">dumpfm</a>, <a href="/wiki/api.php?action=help&amp;modules=json">json</a>, <a href="/wiki/api.php?action=help&amp;modules=jsonfm">jsonfm</a>, <a href="/wiki/api.php?action=help&amp;modules=none">none</a>, <a href="/wiki/api.php?action=help&amp;modules=php">php</a>, <a href="/wiki/api.php?action=help&amp;modules=phpfm">phpfm</a>, <a href="/wiki/api.php?action=help&amp;modules=rawfm">rawfm</a>, <a href="/wiki/api.php?action=help&amp;modules=txt">txt</a>, <a href="/wiki/api.php?action=help&amp;modules=txtfm">txtfm</a>, <a href="/wiki/api.php?action=help&amp;modules=wddx">wddx</a>, <a href="/wiki/api.php?action=help&amp;modules=wddxfm">wddxfm</a>, <a href="/wiki/api.php?action=help&amp;modules=xml">xml</a>, <a href="/wiki/api.php?action=help&amp;modules=xmlfm">xmlfm</a>, <a href="/wiki/api.php?action=help&amp;modules=yaml">yaml</a>, <a href="/wiki/api.php?action=help&amp;modules=yamlfm">yamlfm</a></dd><dd class="info">Default: jsonfm</dd><dt>maxlag</dt><dd class="description"><p>Maximum lag can be used when MediaWiki is installed on a database replicated cluster. To save actions causing any more site replication lag, this parameter can make the client wait until the replication lag is less than the specified value. In case of excessive lag, error code <samp>maxlag</samp> is returned with a message like <samp>Waiting for $host: $lag seconds lagged</samp>.<br>See <a href="https://www.mediawiki.org/wiki/Manual%3AMaxlag_parameter" class="extiw" title="mw:Manual:Maxlag parameter">Manual: Maxlag parameter</a> for more information.
</p></dd><dt>smaxage</dt><dd class="description"><p>Set the <code>s-maxage</code> header to this many seconds. Errors are never cached.
</p></dd><dd class="info">Default: 0</dd><dt>maxage</dt><dd class="description"><p>Set the <code>max-age</code> header to this many seconds. Errors are never cached.
</p></dd><dd class="info">Default: 0</dd><dt>assert</dt><dd class="description"><p>Verify the user is logged in if set to <kbd>user</kbd>, or has the bot userright if <kbd>bot</kbd>.
</p></dd><dd class="info">One value: user, bot</dd><dt>requestid</dt><dd class="description"><p>Any value given here will be included in the response. May be used to distinguish requests.
</p></dd><dt>servedby</dt><dd class="description"><p>Include the hostname that served the request in the results.
</p></dd><dt>curtimestamp</dt><dd class="description"><p>Include the current timestamp in the result.
</p></dd><dt>origin</dt><dd class="description"><p>When accessing the API using a cross-domain AJAX request (CORS), set this to the originating domain. This must be included in any pre-flight request, and therefore must be part of the request URI (not the POST body). This must match one of the origins in the <code>Origin</code> header exactly, so it has to be set to something like <kbd><a rel="nofollow" target="_blank" class="external free" href="https://en.wikipedia.org">https://en.wikipedia.org</a></kbd> or <kbd><a rel="nofollow" target="_blank" class="external free" href="https://meta.wikimedia.org">https://meta.wikimedia.org</a></kbd>. If this parameter does not match the <code>Origin</code> header, a 403 response will be returned. If this parameter matches the <code>Origin</code> header and the origin is whitelisted, an <code>Access-Control-Allow-Origin</code> header will be set.
</p></dd><dt>uselang</dt><dd class="description"><p>Language to use for message translations. A list of codes may be fetched from <kbd><a href="/wiki/api.php?action=help&amp;modules=query%2Bsiteinfo">action=query&amp;meta=siteinfo</a></kbd> with <kbd>siprop=languages</kbd>, or specify <kbd>user</kbd> to use the current user's language preference, or specify <kbd>content</kbd> to use this wiki's content language.
</p></dd><dd class="info">Default: user</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Help for the main module.</dt><dd><a href="/wiki/api.php?action=help">api.php?action=help</a></dd><dt>All help in one page.</dt><dd><a href="/wiki/api.php?action=help&amp;recursivesubmodules=1">api.php?action=help&amp;recursivesubmodules=1</a></dd></dl></div>
<div class="apihelp-block apihelp-permissions"><div class="apihelp-block-head">Permissions:</div><dl><dt>writeapi</dt><dd>Use of the write API</dd><dd>Granted to: all, user, bot</dd><dt>apihighlimits</dt><dd>Use higher limits in API queries (slow queries: 500; fast queries: 5000). The limits for slow queries also apply to multivalue parameters.</dd><dd>Granted to: bot, sysop</dd></dl></div>

<h3 id="+credits" class="apihelp-header">Credits</h3><p>API developers:
</p>
<ul><li> Roan Kattouw (lead developer Sep 2007–2009)</li>
<li> Victor Vasiliev</li>
<li> Bryan Tong Minh</li>
<li> Sam Reed</li>
<li> Yuri Astrakhan (creator, lead developer Sep 2006–Sep 2007)</li>
<li> Brad Jorsch (lead developer 2013–present)</li></ul><p>Please send your comments, suggestions and questions to mediawiki-api@lists.wikimedia.org
or file a bug report at <a rel="nofollow" target="_blank" class="external free" href="https://phabricator.wikimedia.org/">https://phabricator.wikimedia.org/</a>.
</p></div><div class="printfooter">
Retrieved from "<a dir="ltr" href="http://www.DEBtheory.org/wiki/index.php?title=Special%3AApiHelp">http://www.DEBtheory.org/wiki/index.php?title=Special%3AApiHelp</a>"</div>
			</div>
		</div>

		<script>if(window.jQuery)jQuery.ready();</script><script>if(window.mw){
mw.loader.state({"site":"ready","user":"ready","user.groups":"ready"});
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest"],null,true);
}</script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":2781});
}</script>		</body></html>

