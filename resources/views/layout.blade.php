<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>
    <meta charset="UTF-8">
    <script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script>
    <script>class RocketLazyLoadScripts{constructor(){this.v="1.2.3",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",t=>{this.persisted=t.persisted}),window.addEventListener("DOMContentLoaded",()=>{this._preconnect3rdParties()}),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}_addUserInteractionListener(t){if(document.hidden){t._triggerListener();return}this.triggerEvents.forEach(e=>window.addEventListener(e,t.userEventHandler,{passive:!0})),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler)}_removeUserInteractionListener(){this.triggerEvents.forEach(t=>window.removeEventListener(t,this.userEventHandler,{passive:!0})),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"onclick","rocket-onclick"),this._pendingClickStarted())}_onTouchMove(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this._pendingClickFinished()}_onTouchEnd(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(t){t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this._pendingClickFinished()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach(t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))})}_waitForPendingClicks(){return new Promise(t=>{this._isClickPending?this._pendingClickFinished=t:t()})}_pendingClickStarted(){this._isClickPending=!0}_pendingClickFinished(){this._isClickPending=!1}_renameDOMAttribute(t,e,r){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(r,event.target.getAttribute(e)),event.target.removeAttribute(e))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(e=>{if(e.hasAttribute("src")){let r=new URL(e.src).origin;r!==location.origin&&t.push({src:r,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}}),t=[...new Map(t.map(t=>[JSON.stringify(t),t])).values()],this._batchInjectResourceHints(t,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(this),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._waitForPendingClicks().then(()=>{this._replayClicks()}),this._emptyTrash()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)})}async _transformScript(t){return new Promise((await this._littleBreath(),navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor)?e=>{let r=document.createElement("script");[...t.attributes].forEach(t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),r.setAttribute(e,t.nodeValue))}),t.text&&(r.text=t.text),r.hasAttribute("src")?(r.addEventListener("load",e),r.addEventListener("error",e)):(r.text=t.text,e());try{t.parentNode.replaceChild(r,t)}catch(i){e()}}:async e=>{function r(){t.setAttribute("data-rocket-status","failed"),e()}try{let i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");t.text,i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",function r(){t.setAttribute("data-rocket-status","executed"),e()}),t.addEventListener("error",r),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}catch(s){r()}})}async _loadScriptsFromList(t){let e=t.shift();return e&&e.isConnected?(await this._transformScript(e),this._loadScriptsFromList(t)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(t,e){var r=document.createDocumentFragment();t.forEach(t=>{let i=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(i){let n=document.createElement("link");n.href=i,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),r.appendChild(n),this.trash.push(n)}}),document.head.appendChild(r)}_delayEventListeners(t){let e={};function r(t,r){!function t(r){!e[r]&&(e[r]={originalFunctions:{add:r.addEventListener,remove:r.removeEventListener},eventsToRewrite:[]},r.addEventListener=function(){arguments[0]=i(arguments[0]),e[r].originalFunctions.add.apply(r,arguments)},r.removeEventListener=function(){arguments[0]=i(arguments[0]),e[r].originalFunctions.remove.apply(r,arguments)});function i(t){return e[r].eventsToRewrite.indexOf(t)>=0?"rocket-"+t:t}}(t),e[t].eventsToRewrite.push(r)}function i(t,e){let r=t[e];Object.defineProperty(t,e,{get:()=>r||function(){},set(i){t["rocket"+e]=r=i}})}r(document,"DOMContentLoaded"),r(window,"DOMContentLoaded"),r(window,"load"),r(window,"pageshow"),r(document,"readystatechange"),i(document,"onreadystatechange"),i(window,"onload"),i(window,"onpageshow")}_delayJQueryReady(t){let e;function r(r){if(r&&r.fn&&!t.allJQueries.includes(r)){r.fn.ready=r.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(r):document.addEventListener("rocket-DOMContentLoaded",()=>e.bind(document)(r)),r([])};let i=r.fn.on;r.fn.on=r.fn.init.prototype.on=function(){if(this[0]===window){function t(t){return t.split(" ").map(t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=t(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach(e=>{let r=arguments[0][e];delete arguments[0][e],arguments[0][t(e)]=r})}return i.apply(this,arguments),this},t.allJQueries.push(r)}e=r}r(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){r(t)}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach(t=>t(window).trigger("rocket-jquery-load")),await this._littleBreath();let t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){let t=new Map;document.write=document.writeln=function(e){let r=document.currentScript;r||console.error("WPRocket unable to document.write this: "+e);let i=document.createRange(),n=r.parentElement,s=t.get(r);void 0===s&&(s=r.nextSibling,t.set(r,s));let a=document.createDocumentFragment();i.setStart(a,0),a.appendChild(i.createContextualFragment(e)),n.insertBefore(a,s)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise(t=>setTimeout(t)):new Promise(t=>requestAnimationFrame(t))}_emptyTrash(){this.trash.forEach(t=>t.remove())}static run(){let t=new RocketLazyLoadScripts;t._addUserInteractionListener(t)}}RocketLazyLoadScripts.run();</script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript">
        (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "h4cjfdkm4y");
</script>

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://www.amp.tech/xmlrpc.php" />
    <link rel="shortcut icon" href="{{ asset("favicon.png") }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset("favicon.png") }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("favicon.png") }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("favicon.png") }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("favicon.png") }}" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <!-- This site is optimized with the Yoast SEO Premium plugin v21.1 (Yoast SEO v21.1) - https://yoast.com/wordpress/plugins/seo/ -->
    <title>ATMS</title>
    <link rel="preload" as="font" href="https://www.amp.tech/wp-content/themes/porto/fonts/fontawesome/fa-brands-400.woff2" crossorigin>
    <link rel="preload" as="font" href="https://www.amp.tech/wp-content/themes/porto/fonts/fontawesome/fa-solid-900.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecg.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDD4Z1xlFQ.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc4.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2" crossorigin>
    
    <meta name="description" content="Pioneers in energy management for EVs, AMP provides Charging, BMS, and cloud solutions for all-electric vehicle applications." />
    <link rel="canonical" href="https://www.amp.tech/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="01 Home" />
    <meta property="og:description" content="Pioneers in energy management for EVs, AMP provides Charging, BMS, and cloud solutions for all-electric vehicle applications." />
    <meta property="og:url" content="https://www.amp.tech/" />
    <meta property="og:site_name" content="AMP" />
    <meta property="article:modified_time" content="2023-07-31T16:38:19+00:00" />
    <meta property="og:image" content="{{ asset("images/amp.png") }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json" class="yoast-schema-graph">
    
    </script>
    <!-- / Yoast SEO Premium plugin. -->
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel="alternate" type="application/rss+xml" title="AMP &raquo; Feed" href="https://www.amp.tech/feed/" />
    <link rel="alternate" type="application/rss+xml" title="AMP &raquo; Comments Feed" href="https://www.amp.tech/comments/feed/" />
    <link rel="shortcut icon" href="{{ asset("favicon.png") }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset("favicon.png") }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("favicon.png") }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("favicon.png") }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("favicon.png") }}" />
    

    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/jquery/jquery.min.js?ver=3.7.0' id='jquery-core-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1' id='jquery-migrate-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/themes/amp/assets/js/custom.js?ver=6.3' id='custom-script-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js?ver=6.3' id='wow-script-js'></script>
    <link rel="https://api.w.org/" href="https://www.amp.tech/wp-json/" />
    <link rel="alternate" type="application/json" href="https://www.amp.tech/wp-json/wp/v2/pages/16" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.amp.tech/xmlrpc.php?rsd" />
    <link rel='shortlink' href='https://www.amp.tech/' />
    <link rel="alternate" type="application/json+oembed" href="https://www.amp.tech/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.amp.tech%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://www.amp.tech/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.amp.tech%2F&#038;format=xml" />
 
    <meta name="generator" content="Elementor 3.15.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <link rel="icon" href="https://www.amp.tech/wp-content/uploads/2022/02/am-favicon-150x150.png" sizes="32x32" />
    <link rel="icon" href="https:{{ asset("favicon.png") }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="https:{{ asset("favicon.png") }}" />
    <meta name="msapplication-TileImage" content="https:{{ asset("favicon.png") }}" />
 
</head>

<body class="home page-template-default page page-id-16 wp-embed-responsive porto-rounded porto-breadcrumbs-bb full blog-1 loading-overlay-showing elementor-default elementor-kit-3143 elementor-page elementor-page-16">

    <!-- End Google Tag Manager (noscript) -->
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div class="page-wrapper">
        <!-- page wrapper -->
        <!-- header wrapper -->
        <div class="header-wrapper">
            <header id="header" class="header-builder">
                <div class="header-top">
                    <div class="header-row container">
                        <div class="header-col header-right">
                            <div class="custom-html">
                                <a href="/careers/"><i class="fa fa-chevron-right tensizefont"></i> Careers </a>
                                <a href="/contact-us/"><i class="fa fa-chevron-right tensizefont"></i> Contact Us</a>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="header-main">
                    <div class="header-row container">
                        <div class="header-col header-left">
                            <h2 class="logo" style="line-height: 100%;">
                                <a href="/" title="ATMS - " rel="home">
                                    ATMS
                                </a>
                            </h2>
                        </div>
                        <div class="header-col header-right">
                            <ul id="menu-menu-5122022" class="main-menu mega-menu">

                                <li id="nav-menu-item-10547" class="hamberger menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub narrow">
                                    <a class="nolink" href="#">Solutions</a>
                                    <div class="popup">
                                        <div class="inner" style="">
                                            <ul class="sub-menu">
                                                <li id="nav-menu-item-10991" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="/ev-charging-solutions/">Charging</a></li>
                                                <li id="nav-menu-item-10993" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="/energy-management-system-for-ev/">Energy Management</a></li>
                                                <li id="nav-menu-item-10992" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="/battery-management-system/">Battery Management</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li> 
                                <li id="nav-menu-item-10995" class="menu-item menu-item-type-post_type menu-item-object-page narrow">
                                    <a href="/about-us/">About Us</a>
                                </li>
                                <li id="nav-menu-item-14080" class="desk-men menu-item menu-item-type-post_type menu-item-object-page narrow">
                                    <a href="/careers/">Careers</a>
                                </li>
                                <li id="nav-menu-item-19944" class="contact-usmenu menu-item menu-item-type-post_type menu-item-object-page narrow">
                                    <a href="/contact-us/">Contact Us</a>
                                </li>
                            </ul><span class="separator"></span>
                            
                            <a class="mobile-toggle" href="#" aria-label="Mobile Menu"><i class="fas fa-bars"></i></a>
                        </div>
                    </div>
                    <div id="nav-panel">
                        <div class="container">
                            <div class="mobile-nav-wrap">
                                <div class="menu-wrap">
                                    <ul id="menu-menu-5122023" class="mobile-menu accordion-menu">
                                        <li id="accordion-menu-item-10545" class="ampos menu-item menu-item-type-post_type menu-item-object-page"><a href="/connected-energy-management-system/">EMS</a></li>
                                        <li id="accordion-menu-item-10547" class="hamberger menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub"><a class="nolink" href="#">Solutions</a>
                                            <span class="arrow"></span>
                                            <ul class="sub-menu">
                                                <li id="accordion-menu-item-10991" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/ev-charging-solutions/">Charging</a></li>
                                                <li id="accordion-menu-item-10993" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/energy-management-system-for-ev/">Energy Management</a></li>
                                                <li id="accordion-menu-item-10992" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/battery-management-system/">Battery Management</a></li>
                                            </ul>
                                        </li>
                                        <li id="accordion-menu-item-19975" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/media/">Media</a></li>
                                        <li id="accordion-menu-item-10995" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/about-us/">About Us</a></li>
                                        <li id="accordion-menu-item-14080" class="desk-men menu-item menu-item-type-post_type menu-item-object-page"><a href="/careers/">Careers</a></li>
                                        <li id="accordion-menu-item-19944" class="contact-usmenu menu-item menu-item-type-post_type menu-item-object-page"><a href="/contact-us/">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- end header wrapper -->
        <div id="main" class="column1 wide clearfix no-breadcrumbs">
            <!-- main -->
            <div class="container-fluid">
                @yield('body')
            </div>
        </div><!-- end main -->
        <div class="footer-wrapper">
            <footer id="footer" class="footer footer-builder">
                <style></style>
                <div class="porto-block elementor elementor-9751" data-id="9751">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-b5ee3fe elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b5ee3fe" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d9c8ca1" data-id="d9c8ca1" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-83323ea elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-html" data-id="83323ea" data-element_type="widget" data-widget_type="html.default">
                                        <div class="elementor-widget-container">
                                            <script type="rocketlazyloadscript" data-rocket-type="text/javascript">
                                                function ZFAdvLead(){
                                            }
                                            ZFAdvLead.utmPValObj = ZFAdvLead.utmPValObj || {};

                                            ZFAdvLead.utmPNameArr = new Array('utm_source','utm_medium','utm_campaign','utm_term','utm_content','gclid');ZFAdvLead.utmcustPNameArr = new Array('gclid');ZFAdvLead.isSameDomian = false;

                                            ZFAdvLead.prototype.zfautm_sC = function( paramName,path,domain,secure ){
                                              var value = ZFAdvLead.utmPValObj[paramName];
                                              if ( typeof value !== "undefined" && value !== null ){
                                                var cookieStr = paramName + "=" + encodeURIComponent( value );
                                                var exdate=new Date();
                                                exdate.setDate(exdate.getDate()+7);
                                                cookieStr += "; expires=" + exdate.toGMTString();
                                                cookieStr += "; path=/";
                                                if ( domain ) {
                                                  cookieStr += "; domain=" + encodeURIComponent( domain );
                                                }
                                                if ( secure ) {
                                                  cookieStr += "; secure";
                                                }
                                                document.cookie = cookieStr;
                                              }
                                            };
                                            ZFAdvLead.prototype.zfautm_ini = function (){
                                              this.zfautm_bscPCap();
                                              var url_search = document.location.search;
                                              for (var i = 0; i < ZFAdvLead.utmcustPNameArr.length ; i ++){
                                                var zf_pN = ZFAdvLead.utmcustPNameArr[i];
                                                var zf_pV;
                                                if ( zf_pN == 'referrername' ) {
                                                  zf_pV = ( document.location.href || '' ).slice( 0, 1500 );
                                                } else {
                                                  zf_pV = this.zfautm_gP(url_search, zf_pN);
                                                  if (zf_pV == undefined || zf_pV == ''){
                                                      zf_pV = this.zfautm_gC(zf_pN);
                                                  }
                                                }
                                                if ( typeof zf_pV !== "undefined" && zf_pV !== null & zf_pV != "" ) {
                                                  ZFAdvLead.utmPValObj[ zf_pN ] = zf_pV;
                                                }
                                              }
                                              for (var pkey in ZFAdvLead.utmPValObj) {
                                                this.zfautm_sC(pkey);
                                              }
                                            };
                                            ZFAdvLead.prototype.zfautm_bscPCap = function () {
                                              var trafSrc = this.zfautm_calcTrafSrc();
                                              if ( trafSrc.source != "" ) {
                                                ZFAdvLead.utmPValObj.utm_source = trafSrc.source;
                                              }
                                              if ( trafSrc.medium != "" ) {
                                                ZFAdvLead.utmPValObj.utm_medium = trafSrc.medium;
                                              }
                                              if ( trafSrc.campaign != "" ) {
                                                ZFAdvLead.utmPValObj.utm_campaign = trafSrc.campaign;
                                              }
                                              if ( trafSrc.term != "" ) {
                                                ZFAdvLead.utmPValObj.utm_term = trafSrc.term;
                                              }
                                              if ( trafSrc.content != "" ) {
                                                ZFAdvLead.utmPValObj.utm_content = trafSrc.content;
                                              }
                                            }
                                            ZFAdvLead.prototype.zfautm_calcTrafSrc = function() {
                                              var u1='', u2='', u3='', u4='', u5='';
                                              var search_engines = [['bing', 'q'], ['google', 'q'], ['yahoo', 'q'], ['baidu', 'q'], ['yandex', 'q'], ['ask', 'q']]; //List of search engines 
                                              var ref = document.referrer;
                                              ref = ref.substr(ref.indexOf('//')+2);
                                              ref_domain = ref;
                                              ref_path = '/';
                                              ref_search = '';

                                              // Checks for campaign parameters
                                              var url_search = document.location.search;
                                              if(url_search.indexOf('utm_source') > -1 || url_search.indexOf('utm_medium') > -1 || url_search.indexOf('utm_campaign') > -1 || url_search.indexOf('utm_term') > -1 || url_search.indexOf('utm_content') > -1) {
                                                u1 = this.zfautm_gP(url_search, 'utm_source'); 
                                                u2 = this.zfautm_gP(url_search, 'utm_medium'); 
                                                u3 = this.zfautm_gP(url_search, 'utm_campaign'); 
                                                u4 = this.zfautm_gP(url_search, 'utm_term'); 
                                                u5 = this.zfautm_gP(url_search, 'utm_content'); 
                                              } else if ( this.zfautm_gP(url_search, 'gclid')) {
                                                u1 = 'Google Ads'; 
                                                u2 = 'cpc'; 
                                                u3 = '(not set)'; 
                                                if ( !ZFAdvLead.utmcustPNameArr.includes('gclid') ) {
                                                  ZFAdvLead.utmcustPNameArr.push('gclid');
                                                }
                                              } else if(ref) {
                                                var r_u1 = this.zfautm_gC('utm_source'); 
                                                var r_u2 = this.zfautm_gC('utm_medium'); 
                                                var r_u3 = this.zfautm_gC('utm_campaign'); 
                                                var r_u4 = this.zfautm_gC('utm_term'); 
                                                var r_u5 = this.zfautm_gC('utm_content'); 
                                                if ( typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" && typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
                                                  // separate domain, path and query parameters
                                                  if (ref.indexOf('/') > -1) {
                                                    ref_domain = ref.substr(0,ref.indexOf('/'));
                                                    ref_path = ref.substr(ref.indexOf('/'));
                                                    if (ref_path.indexOf('?') > -1) {
                                                      ref_search = ref_path.substr(ref_path.indexOf('?'));
                                                      ref_path = ref_path.substr(0, ref_path.indexOf('?'));
                                                    }
                                                  }
                                                  u2 = 'referral'; 
                                                  u1 = ref_domain;                    
                                                // Extract term for organic source
                                                  for (var i=0; i<search_engines.length; i++){
                                                    if(ref_domain.indexOf(search_engines[i][0]) > -1){
                                                      u2 = 'organic'; 
                                                      u1 = search_engines[i][0];
                                                      u4 = this.zfautm_gP(ref_search, search_engines[i][1]) || '(not provided)';
                                                      break;
                                                    }
                                                  }
                                                } else {
                                                  if ( typeof r_u1 !== "undefined" ) {
                                                    u1 = r_u1;
                                                  }
                                                  if ( typeof r_u2 !== "undefined" ) {
                                                      u2 = r_u2;
                                                  }
                                                  if ( typeof r_u3 !== "undefined" ) {
                                                    u3 = r_u3;
                                                  }
                                                  if ( typeof r_u4 !== "undefined" ) {
                                                    u4 = r_u4;
                                                  }
                                                  if ( typeof r_u5 !== "undefined" ) {
                                                    u5 = r_u5;
                                                  }
                                                }
                                              } else {
                                                var r_u1 = this.zfautm_gC('utm_source'); 
                                                var r_u2 = this.zfautm_gC('utm_medium'); 
                                                var r_u3 = this.zfautm_gC('utm_campaign'); 
                                                var r_u4 = this.zfautm_gC('utm_term'); 
                                                var r_u5 = this.zfautm_gC('utm_content'); 
                                                if ( typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" && typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
                                                  var locRef = document.location.href;
                                                  locRef = locRef.substr(locRef.indexOf('//')+2);
                                                  if (locRef.indexOf('/') > -1) {
                                                    locRef = locRef.substr(0,locRef.indexOf('/'));
                                                  }
                                                  u1 = locRef;
                                                  u2 = 'referral'; 
                                                } else {
                                                  if ( typeof r_u1 !== "undefined" ) {
                                                    u1 = r_u1;
                                                  }
                                                  if ( typeof r_u2 !== "undefined" ) {
                                                    u2 = r_u2;
                                                  }
                                                  if ( typeof r_u3 !== "undefined" ) {
                                                    u3 = r_u3;
                                                  }
                                                  if ( typeof r_u4 !== "undefined" ) {
                                                    u4 = r_u4;
                                                  }
                                                  if ( typeof r_u5 !== "undefined" ) {
                                                    u5 = r_u5;
                                                  }
                                                }
                                              }
                                              return {
                                                'source'  : u1, 
                                                'medium'  : u2, 
                                                'campaign': u3, 
                                                'term'    : u4, 
                                                'content' : u5 
                                              };
                                            }
                                            ZFAdvLead.prototype.zfautm_gP = function(s, q) {
                                              try{
                                                  var match = s.match('[?&]' + q + '=([^&]+)');
                                                  return match ? decodeURIComponent(match[1]) : '';
                                              } catch(e){
                                                return '';  
                                              }
                                            }
                                            ZFAdvLead.prototype.zfautm_gC = function( cookieName ){
                                              var cookieArr = document.cookie.split('; ');
                                              for ( var i = 0 ; i < cookieArr.length ; i ++ ){
                                                var cookieVals = cookieArr[i].split('=');
                                                  if ( cookieVals[0] === cookieName && cookieVals[1] ) {
                                                    return decodeURIComponent(cookieVals[1]);
                                                  }
                                              }
                                            };
                                            ZFAdvLead.prototype.zfautm_gC_enc = function( cookieName ){
                                              var cookieArr = document.cookie.split('; ');
                                              for ( var i = 0 ; i < cookieArr.length ; i ++ ){
                                                var cookieVals = cookieArr[i].split('=');
                                                  if ( cookieVals[0] === cookieName && cookieVals[1] ) {
                                                    return cookieVals[1];
                                                  }
                                              }
                                            };
                                            ZFAdvLead.prototype.zfautm_iframeSprt = function () {
                                              var zf_frame = document.getElementsByTagName("iframe");
                                              for(var i = 0; i < zf_frame.length; ++i){
                                                if((zf_frame[i].src).indexOf('formperma') > 0 ){
                                                  var zf_src = zf_frame[i].src;
                                                  for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
                                                    var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
                                                    utmPm = ( ZFAdvLead.isSameDomian && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
                                                    var utmVal = this.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
                                                    if ( typeof utmVal !== "undefined" ) {
                                                      if ( utmVal != "" ){
                                                        if(zf_src.indexOf('?') > 0){
                                                          zf_src = zf_src+'&'+utmPm+'='+ utmVal;
                                                        }else{
                                                          zf_src = zf_src+'?'+utmPm+'='+ utmVal;
                                                        }
                                                      }
                                                    }
                                                  }
                                                  if ( zf_frame[i].src.length < zf_src.length ) {
                                                    zf_frame[i].src = zf_src;
                                                  }
                                                }
                                              }
                                            };
                                            ZFAdvLead.prototype.zfautm_DHtmlSprt = function () {
                                              var zf_formsArr = document.forms;
                                              for ( var frmInd = 0 ; frmInd < zf_formsArr.length ; frmInd ++ ) {
                                                var zf_form_act = zf_formsArr[frmInd].action;
                                                  if ( zf_form_act && zf_form_act.indexOf('formperma') > 0 ){
                                                    for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
                                                      var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
                                                      var utmVal = this.zfautm_gC( ZFAdvLead.utmPNameArr[ prmIdx ] );
                                                      if ( typeof utmVal !== "undefined" ) {
                                                        if ( utmVal != "" ) {
                                                          var fieldObj = zf_formsArr[frmInd][utmPm];
                                                        if ( fieldObj ) {
                                                          fieldObj.value = utmVal;
                                                        }
                                                      }
                                                    }
                                                  }
                                                }
                                              }
                                            };
                                            ZFAdvLead.prototype.zfautm_jsEmbedSprt = function ( id ) {
                                              document.getElementById('zforms_iframe_id').removeAttribute("onload");
                                              var jsEmbdFrm = document.getElementById("zforms_iframe_id");
                                              var embdSrc = jsEmbdFrm.src;
                                              for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
                                                var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
                                                utmPm = ( ZFAdvLead.isSameDomian && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
                                                var utmVal = this.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
                                                if ( typeof utmVal !== "undefined" ) {
                                                  if ( utmVal != "" ) {
                                                    if(embdSrc.indexOf('?') > 0){
                                                                embdSrc = embdSrc+'&'+utmPm+'='+utmVal;
                                                    }else{
                                                        embdSrc = embdSrc+'?'+utmPm+'='+utmVal;
                                                    }
                                                  }
                                                }
                                              }
                                              jsEmbdFrm.src = embdSrc;
                                            };
                                            var zfutm_zfAdvLead = new ZFAdvLead();
                                            zfutm_zfAdvLead.zfautm_ini();
                                            if( document.readyState == "complete" ){
                                                zfutm_zfAdvLead.zfautm_iframeSprt();
                                                zfutm_zfAdvLead.zfautm_DHtmlSprt();
                                            } else {
                                              window.addEventListener('load', function (){
                                                    zfutm_zfAdvLead.zfautm_iframeSprt();
                                                    zfutm_zfAdvLead.zfautm_DHtmlSprt();
                                              }, false);
                                            }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-5946820 main-footer elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5946820" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-21bcf10 footer-logo foot-column" style="padding: 0;" data-id="21bcf10" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-a04278d footer-lo elementor-widget elementor-widget-image" data-id="a04278d" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <a href="" style="font-size: 40px; font-weight: bold;"> ATMS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-010386f footer-address foot-column" data-id="010386f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-44e8663 elementor-widget elementor-widget-heading" data-id="44e8663" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h5 class="elementor-heading-title elementor-size-default">CONTACT</h5>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-cb9a2dc elementor-widget elementor-widget-text-editor" data-id="cb9a2dc" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            12 F., No. 957, Zhongzheng Rd., <br />Zhonghe Dist., NewTaipei City 235601, Taiwan (R.O.C.)
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-cd97ed9 elementor-widget elementor-widget-text-editor" data-id="cd97ed9" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <a href="mailto:Frya@atms.com.tw" target="_blank" rel="noopener">Frya@atms.com.tw</a> </div>
                                    </div> 
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-a7bec72 footer-copy elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a7bec72" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29bfbc7 foot-column" data-id="29bfbc7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-8a2579f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8a2579f" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f5f8dd7 footer-copy-l" data-id="f5f8dd7" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-943c549 elementor-widget elementor-widget-text-editor" data-id="943c549" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>© ATMS 2023 | All Rights Reserved</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0da01ae footer-copy-r foot-column" data-id="0da01ae" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-76308e3 elementor-widget elementor-widget-text-editor" data-id="76308e3" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p><a href="#">Privacy &amp; GDPR Policy </a>|&nbsp;
                                                                <a href="#">Cookie Policy</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <script type="rocketlazyloadscript">jQuery(".menu-item").hover(function(e){
            if(jQuery(this).hasClass('viewed') == false){
                jQuery(this).find('.popup').css('display','none');
            }
            //alert();
        },function(){
            if(jQuery(this).hasClass('viewed')){
                jQuery(this).find('.popup').css({"display": "block", "top": "100%"});
            }   
            //alert();
        });

        jQuery(".menu-item").click(function(e){
            var clicker = jQuery(this);
            var popup   = jQuery(this).find('.popup');
            if(popup.is(":visible") == true){
                popup.css('display','none');
                clicker.removeClass('viewed');
            } else {
                popup.css('display','block');
                clicker.addClass('viewed');
            }
            //alert();
        });</script>
            </footer>
        </div>
    </div><!-- end wrapper -->
    <div class="btn floatcta">
        <style></style>
        <div class="float-cta">
            <p id="zf_button_454369" class="flO-cta" style="display: none;"><img width="1000" height="1000" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%201000'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.amp.tech/wp-content/uploads/2022/06/button-icon.svg" /><noscript><img width="1000" height="1000" src="https://www.amp.tech/wp-content/uploads/2022/06/button-icon.svg" alt="" /></noscript> </p>
        </div>
        <script type="rocketlazyloadscript" data-rocket-type="text/javascript">(function() {
    try{

            if( document.readyState == "complete" ){ 
                onloadActions_454369();
            }  else {
                window.addEventListener('load', function (){
                    onloadActions_454369();
                }, false);
            }

            function onloadActions_454369(){
                constructDiv_454369();
                loadZForm_454369();
            }

            function constructDiv_454369(){
                var iframeDiv = document.createElement("div");
                iframeDiv.setAttribute('id','_9CUQO98p4JHPcpTnvzck8ZAJr2c2bY7QwG3AZdlOXs_454369');
                iframeDiv.setAttribute('class','zf_main_id_454369');

                var closeFormDiv = document.createElement("div");
                closeFormDiv.setAttribute('id','deleteform_454369');
                closeFormDiv.setAttribute('class','zf_lb_closeform_454369');
                

                var containerDiv = document.createElement("div");
                containerDiv.setAttribute('id','containerDiv_454369');
                containerDiv.setAttribute('class','zf_lB_Container_454369');
                containerDiv.appendChild(iframeDiv);
                containerDiv.appendChild(closeFormDiv);


                var wrapperDiv = document.createElement("div");
                wrapperDiv.setAttribute('class','zf_lB_Wrapper_454369');
                wrapperDiv.appendChild(containerDiv);


                var dimmerDiv = document.createElement("div");
                dimmerDiv.setAttribute('class','zf_lB_Dimmer_454369');
                dimmerDiv.setAttribute('elname','popup_box');

                var mainDiv = document.createElement("div");
                mainDiv.setAttribute('id','formsLightBox_454369');
                mainDiv.style.display = "none";
                mainDiv.appendChild(wrapperDiv);
                mainDiv.appendChild(dimmerDiv);

                document.body.appendChild(mainDiv);

            }

            function showZForm_454369(){
                var iframe = document.getElementById("_9CUQO98p4JHPcpTnvzck8ZAJr2c2bY7QwG3AZdlOXs_454369").getElementsByTagName("iframe")[0];
                if(iframe == undefined ||iframe.length == 0){
                    loadZForm_454369();
                    
                } 
                document.getElementById("formsLightBox_454369").style.display = "block"; 
                document.body.style.overflow = "hidden";
            }

            function loadZForm_454369() {
                var iframe = document.getElementById("_9CUQO98p4JHPcpTnvzck8ZAJr2c2bY7QwG3AZdlOXs_454369").getElementsByTagName("iframe")[0];
                if(iframe == undefined ||iframe.length == 0){
                    var f = document.createElement("iframe");
                    f.src = getsrcurlZForm_454369('https://forms.zohopublic.in/prafullwani/form/ConnectwithUs1/formperma/_9CUQO98p4JHPcpTnvzck8ZAJr2c2bY7QwG3AZdlOXs');
                    f.style.border="none";
                    f.style.minHeight="650px";
                    f.style.minWidth="100%";
                    f.style.overflow="hidden";
                    var d = document.getElementById("_9CUQO98p4JHPcpTnvzck8ZAJr2c2bY7QwG3AZdlOXs_454369");
                    d.appendChild(f);

                    var deleteForm = document.getElementById("deleteform_454369");
                    deleteForm.onclick = function deleteZForm_454369() {
                        var divCont = document.getElementById("formsLightBox_454369");
                        divCont.style.display="none";

                        document.body.style.overflow = "";

                        var iframe = document.getElementById("_9CUQO98p4JHPcpTnvzck8ZAJr2c2bY7QwG3AZdlOXs_454369").getElementsByTagName("iframe")[0];
                        iframe.remove();
                    }


                    window.addEventListener('message', function (){
                        var evntData = event.data;
                        if( evntData && evntData.constructor == String ){
                            var zf_ifrm_data = evntData.split("|");
                            if ( zf_ifrm_data.length == 2 ) {
                                var zf_perma = zf_ifrm_data[0];
                                var zf_ifrm_ht_nw = ( parseInt(zf_ifrm_data[1], 10) + 15 ) + "px";
                                var iframe = document.getElementById("_9CUQO98p4JHPcpTnvzck8ZAJr2c2bY7QwG3AZdlOXs_454369").getElementsByTagName("iframe")[0];
                                if ( (iframe.src).indexOf('formperma') > 0 && (iframe.src).indexOf(zf_perma) > 0 ) {
                                    var prevIframeHeight = iframe.style.height;
                                    if ( prevIframeHeight != zf_ifrm_ht_nw ) {
                                    iframe.style.minHeight = zf_ifrm_ht_nw;
                                        var containerDiv = document.getElementById("containerDiv_454369");
                                        containerDiv.style.height=zf_ifrm_ht_nw;
                                    }
                                }
                            }
                        }

                    }, false);
                }
            }

            

            function getsrcurlZForm_454369(zf_src) {
                try {
                    if ( typeof ZFAdvLead !== "undefined" && typeof zfutm_zfAdvLead !== "undefined" ) {
                        for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
                            var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
                            var utmVal = zfutm_zfAdvLead.zfautm_gC( ZFAdvLead.utmPNameArr[ prmIdx ] );
                            if ( typeof utmVal !== "undefined" ) {
                              if ( utmVal != "" ){
                                if(zf_src.indexOf('?') > 0){
                                  zf_src = zf_src+'&'+utmPm+'='+utmVal;//No I18N
                                }else{
                                  zf_src = zf_src+'?'+utmPm+'='+utmVal;//No I18N
                                }
                              }
                            }
                        }
                    }

                    if ( typeof ZFLead !== "undefined" && typeof zfutm_zfLead !== "undefined" ) {
                        for( var prmIdx = 0 ; prmIdx < ZFLead.utmPNameArr.length ; prmIdx ++ ) {
                            var utmPm = ZFLead.utmPNameArr[ prmIdx ];
                            var utmVal = zfutm_zfAdvLead.zfautm_gC( ZFAdvLead.utmPNameArr[ prmIdx ] );
                            if ( typeof utmVal !== "undefined" ) {
                              if ( utmVal != "" ){
                                if(zf_src.indexOf('?') > 0){
                                  zf_src = zf_src+'&'+utmPm+'='+utmVal;//No I18N
                                }else{
                                  zf_src = zf_src+'?'+utmPm+'='+utmVal;//No I18N
                                }
                              }
                            }
                        }
                    }
                }catch(e){}
                return zf_src;
            }
            var buttonElem = document.getElementById("zf_button_454369");
            buttonElem.style.display = "block";
            buttonElem.addEventListener("click", showZForm_454369);
        
            
    }catch(e){}
})();
</script>
    </div>
    <script type="rocketlazyloadscript">
        ////career loadmore/////
 jQuery(function () {
        jQuery(".resumator-job").slice(0, 2).show();
        jQuery("body").on('click touchstart', '.load-more', function (e) {
            e.preventDefault();
            jQuery(".resumator-job:hidden").slice(0, 0).slideDown();
            if (jQuery(".resumator-job:hidden").length == 0) {
                jQuery(".load-more").css('visibility', 'hidden');
            }
            jQuery('html,body').animate({
                scrollTop: $(this).offset().top
            }, 2000);
        });
    }); 
////////
jQuery(function() {
  // Owl Carousel
  var owl = jQuery(".press-cor-slide");
  owl.owlCarousel({
//     items: 3,
    margin: 10,
    loop: false,
    nav: true,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
      }
  });
  });
//////////////
jQuery('button, .float-cta p').css({
 display: 'block'
});
 
   
</script>
    <script type="rocketlazyloadscript">
        jQuery('.press-cor-slide').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

//////////////

 
</script>
    <script type="rocketlazyloadscript">
        window.addEventListener('load', function() {
    document.addEventListener('click', function(event) {
      if (event.target.closest('button') && event.target.closest('button').innerText.includes('DOWNLOAD FLYER NOW')) {
        gtag('event', 'conversion', {
          'send_to': 'AW-1009773705/DTNECLnriuADEInZv-ED'
        });
      }
    });
  });

</script>
    <script type="rocketlazyloadscript" id="rocket-browser-checker-js-after">
        "use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
    <script id='rocket-preload-links-js-extra'>
        var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/www.amp.tech","onHoverDelay":"100","rateThrottle":"3"};
</script>
    <script type="rocketlazyloadscript" id="rocket-preload-links-js-after">
        (function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
    <script id='porto-live-search-js-extra'>
        var porto_live_search = {"nonce":"89550e5817"};
</script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/themes/porto/inc/lib/live-search/live-search.min.js?ver=6.9.1' id='porto-live-search-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/themes/porto/js/bootstrap.js?ver=5.0.1' id='bootstrap-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/themes/porto/js/libs/jquery.cookie.min.js?ver=1.4.1' id='jquery-cookie-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/themes/porto/js/libs/owl.carousel.min.js?ver=2.3.4' id='owl.carousel-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
    <script type="rocketlazyloadscript" async="async" data-rocket-src='https://www.amp.tech/wp-content/themes/porto/js/libs/jquery.magnific-popup.min.js?ver=1.1.0' id='jquery-magnific-popup-js'></script>
    <script id='porto-theme-js-extra'>
        var js_porto_vars = {"rtl":"","theme_url":"https:\/\/www.amp.tech\/wp-content\/themes\/amp","ajax_url":"https:\/\/www.amp.tech\/wp-admin\/admin-ajax.php","change_logo":"","container_width":"1140","grid_gutter_width":"24","show_sticky_header":"1","show_sticky_header_tablet":"","show_sticky_header_mobile":"","ajax_loader_url":"\/\/www.amp.tech\/wp-content\/themes\/porto\/images\/ajax-loader@2x.gif","category_ajax":"","compare_popup":"","compare_popup_title":"","prdctfltr_ajax":"","slider_loop":"1","slider_autoplay":"1","slider_autoheight":"","slider_speed":"5000","slider_nav":"","slider_nav_hover":"1","slider_margin":"","slider_dots":"1","slider_animatein":"","slider_animateout":"","product_thumbs_count":"4","product_zoom":"1","product_zoom_mobile":"1","product_image_popup":"1","zoom_type":"inner","zoom_scroll":"1","zoom_lens_size":"200","zoom_lens_shape":"square","zoom_contain_lens":"1","zoom_lens_border":"1","zoom_border_color":"#888888","zoom_border":"0","screen_lg":"1164","mfp_counter":"%curr% of %total%","mfp_img_error":"<a href=\"%url%\">The image<\/a> could not be loaded.","mfp_ajax_error":"<a href=\"%url%\">The content<\/a> could not be loaded.","popup_close":"Close","popup_prev":"Previous","popup_next":"Next","request_error":"The requested content cannot be loaded.<br\/>Please try again later.","loader_text":"Loading...","submenu_back":"Back","porto_nonce":"7888ed4eb9","use_skeleton_screen":["blog"],"user_edit_pages":"","quick_access":"Click to edit this element.","goto_type":"Go To the Type Builder.","legacy_mode":"1"};
</script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/themes/porto/js/theme.js?ver=6.9.1' id='porto-theme-js'></script>
    <script type="rocketlazyloadscript" async="async" data-rocket-src='https://www.amp.tech/wp-content/themes/porto/js/theme-async.js?ver=6.9.1' id='porto-theme-async-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/porto-functionality/shortcodes/assets/js/countup.min.js?ver=2.9.1' id='countup-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/porto-functionality/shortcodes/assets/js/countup-loader.min.js?ver=2.9.1' id='porto_shortcodes_countup_loader_js-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.13.2' id='elementor-pro-webpack-runtime-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.15.2' id='elementor-webpack-runtime-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.15.2' id='elementor-frontend-modules-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11' id='regenerator-runtime-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1' id='wp-hooks-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef' id='wp-i18n-js'></script>
    <script type="rocketlazyloadscript" id="wp-i18n-js-after">
        wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
    <script type="rocketlazyloadscript" id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/www.amp.tech\/wp-admin\/admin-ajax.php","nonce":"5f8513b11e","urls":{"assets":"https:\/\/www.amp.tech\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/www.amp.tech\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/www.amp.tech\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.13.2' id='elementor-pro-frontend-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script>
    <script type="rocketlazyloadscript" id="elementor-frontend-js-before">
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":992,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":991,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.15.2","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"theme_builder_v2":true,"landing-pages":true,"page-transitions":true,"notes":true,"loop":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/www.amp.tech\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"viewport_tablet":"991","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":16,"title":"AMP%20Energy%20Management%20for%20EV","excerpt":"","featuredImage":false}};
</script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.15.2' id='elementor-frontend-js'></script>
    <script type="rocketlazyloadscript" data-rocket-src='https://www.amp.tech/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.13.2' id='pro-elements-handlers-js'></script>
    <script>
    window.lazyLoadOptions = [{ elements_selector: "img[data-lazy-src],.rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, callback_loaded: function(element) { if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") { if (element.classList.contains("lazyloaded")) { if (typeof window.jQuery != "undefined") { if (jQuery.fn.fitVids) { jQuery(element).parent().fitVids() } } } } } }, { elements_selector: ".rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, }];
    window.addEventListener('LazyLoad::Initialized', function(e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
            var observer = new MutationObserver(function(mutations) {
                var image_count = 0;
                var iframe_count = 0;
                var rocketlazy_count = 0;
                mutations.forEach(function(mutation) {
                    for (var i = 0; i < mutation.addedNodes.length; i++) {
                        if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') { continue }
                        if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') { continue }
                        images = mutation.addedNodes[i].getElementsByTagName('img');
                        is_image = mutation.addedNodes[i].tagName == "IMG";
                        iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                        is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                        rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                        image_count += images.length;
                        iframe_count += iframes.length;
                        rocketlazy_count += rocket_lazy.length;
                        if (is_image) { image_count += 1 }
                        if (is_iframe) { iframe_count += 1 }
                    }
                });
                if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) { lazyLoadInstance.update() }
            });
            var b = document.getElementsByTagName("body")[0];
            var config = { childList: !0, subtree: !0 };
            observer.observe(b, config)
        }
    }, !1)

    </script>
    <script data-no-minify="1" async src="https://www.amp.tech/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
    <script>
    class RocketElementorAnimation { constructor() { this.deviceMode = document.createElement("span"), this.deviceMode.id = "elementor-device-mode-wpr", this.deviceMode.setAttribute("class", "elementor-screen-only"), document.body.appendChild(this.deviceMode) } _detectAnimations() { let t = getComputedStyle(this.deviceMode, ":after").content.replace(/"/g, "");
            this.animationSettingKeys = this._listAnimationSettingsKeys(t), document.querySelectorAll(".elementor-invisible[data-settings]").forEach(t => { const e = t.getBoundingClientRect(); if (e.bottom >= 0 && e.top <= window.innerHeight) try { this._animateElement(t) } catch (t) {} }) } _animateElement(t) { const e = JSON.parse(t.dataset.settings),
                i = e._animation_delay || e.animation_delay || 0,
                n = e[this.animationSettingKeys.find(t => e[t])]; if ("none" === n) return void t.classList.remove("elementor-invisible");
            t.classList.remove(n), this.currentAnimation && t.classList.remove(this.currentAnimation), this.currentAnimation = n; let s = setTimeout(() => { t.classList.remove("elementor-invisible"), t.classList.add("animated", n), this._removeAnimationSettings(t, e) }, i);
            window.addEventListener("rocket-startLoading", function() { clearTimeout(s) }) } _listAnimationSettingsKeys(t = "mobile") { const e = [""]; switch (t) {
                case "mobile":
                    e.unshift("_mobile");
                case "tablet":
                    e.unshift("_tablet");
                case "desktop":
                    e.unshift("_desktop") } const i = []; return ["animation", "_animation"].forEach(t => { e.forEach(e => { i.push(t + e) }) }), i } _removeAnimationSettings(t, e) { this._listAnimationSettingsKeys().forEach(t => delete e[t]), t.dataset.settings = JSON.stringify(e) } static run() { const t = new RocketElementorAnimation;
            requestAnimationFrame(t._detectAnimations.bind(t)) } } document.addEventListener("DOMContentLoaded", RocketElementorAnimation.run);

    </script>
</body>

</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1695176597 -->
