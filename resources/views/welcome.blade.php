<!DOCTYPE html>
<!--[if IE 9 ]> <html lang="es" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="es" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es" class="loading-site no-js"> <!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <script>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <title>Veriopoint HN</title>
    <meta name='robots' content='max-image-preview:large' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="prefetch" href="{{ asset('wp-content/js/chunk.countup.fe2c1016.js') }}" />
    <link rel="prefetch" href="{{ asset('wp-content/js/chunk.sticky-sidebar.a58a6557.js') }}" />
    <link rel="prefetch" href="{{ asset('wp-content/js/chunk.tooltips.29144c1c.js') }}" />
    <link rel="prefetch" href="{{ asset('wp-content/js/chunk.vendors-popups.947eca5c.js') }}" />
    <link rel="prefetch" href="{{ asset('wp-content/js/chunk.vendors-slider.c7f2bd49.js') }}" />
    <script type="text/javascript">
        /* <![CDATA[ */
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel='stylesheet' id='pa-frontend-css' href='{{ asset('wp-content/uploads/pa-frontend-81a1b11d7.min.css') }}'
        type='text/css' media='all' />
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='wp-block-library-inline-css' type='text/css'>
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px;
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223;
            --wp-bound-block-color: #9747ff
        }

        @media (min-resolution:192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px
            }
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip: auto !important;
            -webkit-clip-path: none;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        :where(figure) {
            margin: 0 0 1em
        }

        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
        }

        @media screen and (max-width:600px) {
            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: 0px
            }
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('wp-content/css/elementor-icons.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('wp-content/css/frontend-lite.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('wp-content/css/post-41.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('wp-content/css/global.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('wp-content/css/post-2.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('wp-content/css/flatsome.css') }}' type='text/css'
        media='all' />
    <style id='flatsome-main-inline-css' type='text/css'>
        @font-face {
            font-family: "fl-icons";
            font-display: block;
            src: url({{ asset('css/icons/fl-icons.eot)') }};
 			src: url({{ asset('icons/fl-icons.eot') }}) format("embedded-opentype"),
                url({{ asset('icons/fl-icons.woff2') }}) format("woff2"),
                url({{ asset('icons/fl-icons.ttf') }}) format("truetype"),
                url({{ asset('icons/fl-icons.woff') }}) format("woff");
        }
    </style>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,300&family=Orbitron&family=Rubik:ital,wght@0,300;1,300&display=swap"
        rel="stylesheet">
    <link rel='stylesheet' id='flatsome-googlefonts-css'
        href='//fonts.googleapis.com/css?family=Lato%3Aregular%2C700%2C400%2C700%7CDancing+Script%3Aregular%2C400&#038;display=swap&#038;ver=3.9'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{ asset('css/fontawesome.min.css?ver=5.15.3') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css' href='{{ asset('css/regular.min.css?ver=5.15.3') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{ asset('css/solid.min.css?ver=5.15.3') }}'
        type='text/css' media='all' />
    <script type="text/javascript" src="{{ asset('wp-includes/js/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/jquery-migrate.min.js') }}" id="jquery-migrate-js">
    </script>
    <link rel="https://api.w.org/" href="{{ asset('wp-json/wp-json.json') }}" />
    <link rel="alternate" type="application/json" href="{{ asset('wp-json/2.json') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" />
    <meta name="generator" content="WordPress 6.5.5" />
    <link rel="canonical" href="https://veriopointhn.com/" />
    <link rel='shortlink' href='https://veriopointhn.com/' />
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }
    </style>
    <meta name="generator"
        content="Powered by Slider Revolution 6.5.19 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="{{ asset('wp-content/uploads/cropped-icono-veriopoint-32x32.png') }}"
        sizes="32x32" />
    <link rel="icon" href="{{ asset('wp-content/uploads/cropped-icono-veriopoint-192x192.png') }}"
        sizes="192x192" />
    <link rel="icon" href="{{ asset('wp-content/uploads/cropped-icono-veriopoint-180x180.png') }}"
        sizes="180x180" />
    <link rel="icon" href="{{ asset('wp-content/uploads/cropped-icono-veriopoint-270x270.png') }}"
        sizes="270x270" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #266898;
        }

        .container-width,
        .full-width .ubermenu-nav,
        .container,
        .row {
            max-width: 1250px
        }

        .row.row-collapse {
            max-width: 1220px
        }

        .row.row-small {
            max-width: 1242.5px
        }

        .row.row-large {
            max-width: 1280px
        }

        .header-main {
            height: 136px
        }

        #logo img {
            max-height: 136px
        }

        #logo {
            width: 200px;
        }

        #logo img {
            padding: 9px 0;
        }

        .header-bottom {
            min-height: 10px
        }

        .header-top {
            min-height: 43px
        }

        .transparent .header-main {
            height: 30px
        }

        .transparent #logo img {
            max-height: 30px
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 60px;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 70px !important
        }

        .stuck #logo img {
            max-height: 70px !important
        }

        .header-bg-color {
            background-color: rgb(224, 247, 250)
        }

        .header-bottom {
            background-color: #E0F7FA
        }

        .header-main .nav>li>a {
            line-height: 16px
        }

        .stuck .header-main .nav>li>a {
            line-height: 50px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 70px
            }
        }

        /* Color */
        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,[data-color='primary'],
        .is-outline.primary {
            color: #105A78;
        }

        /* Color !important */[data-text-color="primary"]{color: #105A78!important;}/* Background Color */[data-text-bg="primary"]{background-color: #105A78;}/* Background */
        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .header-vertical-menu__opener,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #105A78;
        }

        /* Border */
        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #105A78
        }

        .nav-tabs>li.active>a {
            border-top-color: #105A78
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #105A78
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #105A78
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #105A78;
        }

        /* Background Color */
        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button,
        .current .breadcrumb-step {
            background-color: #303030;

            }[data-text-bg="secondary"] {
                background-color: #303030;
            }

            /* Color */
            .secondary.is-underline,
            .secondary.is-link,
            .secondary.is-outline,
            .stars a.active,
            .star-rating:before,
            .woocommerce-page .star-rating:before,
            .star-rating span:before,
            .color-secondary {
                color: #303030
            }

            /* Color !important */[data-text-color="secondary"]{color: #303030!important;}/* Border */
            .secondary.is-outline:hover {
                border-color: #303030
            }

            .success.is-underline:hover,
            .success.is-outline:hover,
            .success {
                background-color: #58FDFF
            }

            .success-color,
            .success.is-link,
            .success.is-outline {
                color: #58FDFF;
            }

            .success-border {
                border-color: #58FDFF !important;
            }

            /* Color !important */[data-text-color="success"]{color: #58FDFF!important;}/* Background Color */[data-text-bg="success"]{background-color: #58FDFF;}.alert.is-underline:hover,.alert.is-outline:hover,.alert{background-color: #062D48}.alert.is-link, .alert.is-outline, .color-alert{color: #062D48;}/* Color !important */[data-text-color="alert"]{color: #062D48!important;}/* Background Color */[data-text-bg="alert"]{background-color: #062D48;}body{font-size: 100%;}body{font-family:"Lato", sans-serif}body{font-weight: 400}.nav > li > a {font-family:"Lato", sans-serif;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family:"Lato", sans-serif;}.nav > li > a {font-weight: 700;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Lato", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #303030;}.alt-font{font-family: "Dancing Script", sans-serif;}.alt-font{font-weight: 400!important;}a{color: #105A78;}a:hover{color: #303030;}.tagcloud a:hover{border-color: #303030;background-color: #303030;}.widget a{color: #105A78;}.widget a:hover{color: #303030;}.widget .tagcloud a:hover{border-color: #303030; background-color: #303030;}.footer-1{background-color: #303030}.footer-2{background-color: #333333}.absolute-footer, html{background-color: #1e1e1e}/* Custom CSS */
            #wrapper,
            #main {
                background-color: #EFEFEF;
            }

            .widget {
                margin-bottom: 1.5em;
                font-size: 13px;
            }

            .label-new.menu-item>a:after {
                content: "New";
            }

            .label-hot.menu-item>a:after {
                content: "Hot";
            }

            .label-sale.menu-item>a:after {
                content: "Sale";
            }

            .label-popular.menu-item>a:after {
                content: "Popular";
            }
    </style>
</head>

<body
    class="home page-template-default page page-id-2 full-width lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border elementor-default elementor-kit-41 elementor-page elementor-page-2">


    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>

    <div id="wrapper">


        <header id="header" class="header has-sticky sticky-shrink">
            <div class="header-wrapper">
                <div id="top-bar" class="header-top hide-for-sticky nav-dark show-for-medium">
                    <div class="flex-row container">
                        <div class="flex-col hide-for-medium flex-left">
                            <ul class="nav nav-left medium-nav-center nav-small  nav-divided nav-uppercase">
                            </ul>
                        </div>

                        <div class="flex-col hide-for-medium flex-center">
                            <ul class="nav nav-center nav-small  nav-divided nav-uppercase">
                            </ul>
                        </div>

                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="nav top-bar-nav nav-right nav-small  nav-divided nav-uppercase">
                            </ul>
                        </div>

                        <div class="flex-col show-for-medium flex-grow">
                            <ul class="nav nav-center nav-small mobile-nav  nav-divided nav-uppercase">
                                <li class="html custom html_topbar_left"><strong class="uppercase">expertos en la
                                        integración de Soluciones de Tecnologías de la información</strong></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div id="masthead" class="header-main ">
                    <div class="header-inner flex-row container logo-left" role="navigation">

                        <!-- Logo -->
                        <div id="logo" class="flex-col logo">

                            <!-- Header logo -->
                            <a href="https://veriopointhn.com"
                                title="Veriopoint - Somos expertos en la integración de Soluciones de Tecnologías de la información"
                                rel="home">
                                <img width="820" height="1000" src="{{ asset('images/logo-base2.png') }}"
                                    class="header_logo header-logo" alt="Veriopointhn" /><img width="820"
                                    height="996" src="{{ asset('images/logo-base2.png') }}"
                                    class="header-logo-dark" alt="Veriopointhn" /></a>
                        </div>

                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="nav-icon has-icon">
                                    <a href="#" data-open="#main-menu" data-pos="left"
                                        data-bg="main-menu-overlay" data-color="" class="is-small"
                                        aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left
            flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left  nav-divided nav-uppercase">
                            </ul>
                        </div>

                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right  nav-divided nav-uppercase">
                                <li id="menu-item-16"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16 menu-item-design-default">
                                    <a href="#nosotros" class="nav-top-link">Nosotros</a></li>
                                <li id="menu-item-14"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 menu-item-design-default">
                                    <a href="#soluciones" class="nav-top-link">Nuestra Tecnología</a></li>
                                <li id="menu-item-15"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15 menu-item-design-default">
                                    <a href="#servicios" class="nav-top-link">Servicios</a></li>
                                <li id="menu-item-195"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-195 menu-item-design-default">
                                    <a href="#certificaciones" class="nav-top-link">Certificaciones</a></li>
                                <li id="menu-item-195"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-195 menu-item-design-default">
                                    <a href="#clientes" class="nav-top-link">Nuestros Clientes</a></li>
                                <li class="header-contact-wrapper">
                                    <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">

                                        <li class="">
                                            <a href="mailto:Informacion@veriopointhn.com" class="tooltip"
                                                title="Informacion@veriopointhn.com">
                                                <i class="icon-envelop" style="font-size:16px;"></i> <span>
                                                </span>
                                            </a>
                                        </li>


                                        <li class="">
                                            <a href="tel:+504 2268-0687" class="tooltip" title="+504 2268-0687">
                                                <i class="icon-phone" style="font-size:16px;"></i> <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-search header-search-lightbox has-icon">
                                    <a href="#search-lightbox" aria-label="Search" data-open="#search-lightbox"
                                        data-focus="input.search-field" class="is-small">
                                        <i class="icon-search" style="font-size:16px;"></i></a>

                                    <div id="search-lightbox" class="mfp-hide dark text-center">
                                        <div class="searchform-wrapper ux-search-box relative form-flat is-large">
                                            <form method="get" class="searchform" action="/" role="search">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0"
                                                            name="s" value="" id="s"
                                                            placeholder="Escribe tu búsqueda" />
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit"
                                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                                            aria-label="Submit">
                                                            <i class="icon-search"></i> </button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Mobile Right Elements -->
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                            </ul>
                        </div>

                    </div>

                    <div class="container">
                        <div class="top-divider full-width"></div>
                    </div>
                </div>
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
            </div>
        </header>


        <main id="main" class="">
            <div id="content" class="content-area page-wrapper" role="main">
                <div class="row row-main">
                    <div class="large-12 col">
                        <div class="col-inner">



                            <div data-elementor-type="wp-page" data-elementor-id="2" class="elementor elementor-2">
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-6e0275b elementor-section-full_width elementor-section-content-top elementor-section-height-default elementor-section-height-default"
                                    data-id="6e0275b" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ff1a8e8"
                                            data-id="ff1a8e8" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ecf0cf7 elementor-widget elementor-widget-slider_revolution"
                                                    data-id="ecf0cf7" data-element_type="widget"
                                                    data-widget_type="slider_revolution.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="wp-block-themepunch-revslider">
                                                            <!-- START Prinicipal REVOLUTION SLIDER 6.5.19 -->
                                                            <p class="rs-p-wp-fix"></p>
                                                            <rs-module-wrap id="rev_slider_1_1_wrapper"
                                                                data-source="gallery"
                                                                style="visibility:hidden;background:transparent;padding:0;">
                                                                <rs-module id="rev_slider_1_1" style=""
                                                                    data-version="6.5.19">
                                                                    <rs-slides>
                                                                        <rs-slide style="position: absolute;"
                                                                            data-key="rs-1" data-title="Slide"
                                                                            data-in="o:0;" data-out="a:false;">
                                                                            <img fetchpriority="high" decoding="async"
                                                                                src="{{ asset('wp-content/uploads/veriopoint-servicios-seguridad-informatica_1.jpeg') }}"
                                                                                alt=""
                                                                                title="veriopoint-servicios-seguridad-informatica_1.jpeg"
                                                                                width="1920" height="1080"
                                                                                class="rev-slidebg tp-rs-img rs-lazyload"
                                                                                data-lazyload="{{ asset('wp-content/uploads/veriopoint-servicios-seguridad-informatica_1.jpeg') }}"
                                                                                data-no-retina>
                                                                            <rs-bgvideo
                                                                                data-video="w:100%;h:100%;nse:false;l:true;ptimer:false;vfc:true;"
                                                                                data-mp4="{{ asset('wp-content/uploads/veriopointhn-servicios-seguridad-informatica_new.mp4') }}"></rs-bgvideo><rs-layer
                                                                                id="slider-1-slide-1-layer-0"
                                                                                data-type="shape" data-rsp_ch="on"
                                                                                data-xy="x:c;y:m;yo:-1px,-1px,-1px,0;"
                                                                                data-text="w:normal;s:20,20,20,7;l:0,0,0,9;"
                                                                                data-dim="w:100%;h:100%;"
                                                                                data-basealign="slide"
                                                                                data-frame_999="o:0;st:w;sR:8700;"
                                                                                style="z-index:8;background:linear-gradient(130deg, rgba(6, 45, 72,0.95) 0%, rgba(16, 90, 120,0.8) 75%, rgba(16, 90, 120,0.8) 100%);">
                                                                            </rs-layer><!--
       -->
                                                                            <rs-layer id="slider-1-slide-1-layer-2"
                                                                                class="rev-btn" data-type="button"
                                                                                data-rsp_ch="on"
                                                                                data-xy="x:r,r,r,r;xo:80px,80px,80px,40px;yo:720px,700px,700px,527px;"
                                                                                data-text="w:normal;s:18,18,18,17;l:38;fw:500;"
                                                                                data-dim="minh:0,0,0,none;"
                                                                                data-actions='id:nosotros;o:click;a:scrollto;sp:800ms;e:power0.inOut;'
                                                                                data-padding="r:24;l:24;"
                                                                                data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:16px;"
                                                                                data-frame_0="x:50px;o:0;"
                                                                                data-frame_1="x:0;o:1;st:1200;sp:400;e:easeOutQuad;"
                                                                                data-frame_999="o:0;st:w;sR:5460;"
                                                                                data-frame_hover="c:#ff3a2d;bgc:rgba(255,255,255,0.1);boc:#ff3a2d;bor:16px;bow:2px,2px,2px,2px;box-shadow:0 0 10px rgba(255,58,45,0.8);"
                                                                                style="z-index:9;background-color:rgba(255,255,255,0.1);font-family:'Roboto';text-transform:uppercase;letter-spacing:1px;">Descubre
                                                                                más <i class="fa-arrow-down"></i>
                                                                            </rs-layer>

                                                                            <rs-layer id="slider-1-slide-1-layer-9"
                                                                                data-type="text" data-color="#fff"
                                                                                data-rsp_ch="on"
                                                                                data-xy="x:r,r,r,r;xo:80px,80px,80px,40px;yo:280px,280px,280px,204px;"
                                                                                data-text="w:normal;s:76,76,76,50;l:93,93,93,63;fw:900;"
                                                                                data-frame_0="y:-50px;o:0;"
                                                                                data-frame_1="y:0;o:1;st:300;sp:500;e:easeOutQuad;"
                                                                                data-frame_999="o:0;st:w;sR:7290;"
                                                                                style="z-index:10;text-transform:uppercase; font-family: 'Orbitron'; letter-spacing:4px;">Secure
                                                                            </rs-layer>

                                                                            <rs-layer id="slider-1-slide-1-layer-10"
                                                                                data-type="text" data-color="#0ff"
                                                                                data-rsp_ch="on"
                                                                                data-xy="x:r,r,r,r;xo:180px,180px,180px,80px;yo:370px,370px,370px,255px;"
                                                                                data-text="w:normal;s:98,98,98,67;l:107,107,107,72;ls:4,4,4,2;fw:100;"
                                                                                data-frame_0="x:30px;o:0;"
                                                                                data-frame_1="x:0;o:1;st:700;sp:500;e:easeOutQuad;"
                                                                                data-frame_999="o:0;st:w;sR:6110;"
                                                                                style="z-index:10;font-family: 'Montserrat'; text-shadow:0px 0px 10px rgba(0, 255, 255, 0.8);">Solutions
                                                                            </rs-layer>

                                                                            <rs-layer id="slider-1-slide-1-layer-11"
                                                                                data-type="text" data-color="#fff"
                                                                                data-rsp_ch="on"
                                                                                data-xy="x:r,r,r,r;xo:80px,80px,80px,40px;yo:480px,480px,480px,327px;"
                                                                                data-text="w:normal;s:76,76,76,50;l:93,93,93,63;fw:900;"
                                                                                data-frame_0="y:50px;o:0;"
                                                                                data-frame_1="y:0;o:1;st:500;sp:500;e:easeOutQuad;"
                                                                                data-frame_999="o:0;st:w;sR:7290;"
                                                                                style="z-index:10;text-transform:uppercase; font-family: 'Orbitron'; letter-spacing:2px;">Honduras
                                                                            </rs-layer>

                                                                            <rs-layer id="slider-1-slide-1-layer-12"
                                                                                data-type="text" data-rsp_ch="on"
                                                                                data-xy="x:r,r,r,r;xo:80px,80px,80px,40px;yo:590px,590px,590px,427px;"
                                                                                data-text="w:normal;s:19,19,19,17;l:23,23,23,19;a:right,right,right,right;"
                                                                                data-dim="w:557px,557px,557px,393px;h:113px,113px,113px,102px;"
                                                                                data-padding="t:20,20,20,19;"
                                                                                data-border="bos:solid;boc:#ffffff;bow:1px,0,0,0;"
                                                                                data-frame_0="x:50px;o:0;"
                                                                                data-frame_1="x:0;o:1;st:900;sp:500;e:easeOutQuad;"
                                                                                data-frame_999="o:0;st:w;sR:6900;"
                                                                                style="z-index:11;font-family:'Montserrat'; text-shadow:0px 0px 5px rgba(255, 255, 255, 0.7);">Somos
                                                                                expertos en la integración de Soluciones
                                                                                de TI. Contamos con un equipo
                                                                                profesional que nos permite desarrollar
                                                                                e implementar soluciones exitosas para
                                                                                tu negocio.
                                                                            </rs-layer>
                                                                        </rs-slide>
                                                                    </rs-slides>
                                                                    <rs-static-layers>
                                                                    </rs-static-layers>
                                                                </rs-module>
                                                                <script>
                                                                    setREVStartSize({
                                                                        c: 'rev_slider_1_1',
                                                                        rl: [1240, 1240, 1240, 480],
                                                                        el: [900, 900, 900, 720],
                                                                        gw: [1240, 1240, 1240, 480],
                                                                        gh: [900, 900, 900, 720],
                                                                        type: 'hero',
                                                                        justify: '',
                                                                        layout: 'fullscreen',
                                                                        offsetContainer: '',
                                                                        offset: '',
                                                                        mh: "0"
                                                                    });
                                                                    if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules[
                                                                            "revslider11"] !== undefined) {
                                                                        window.RS_MODULES.modules["revslider11"].once = false;
                                                                        window.revapi1 = undefined;
                                                                        if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                                                    }
                                                                </script>
                                                            </rs-module-wrap>
                                                            <!-- END REVOLUTION SLIDER -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-c8430e3 elementor-section-full_width elementor-section-stretched animated-slow elementor-section-height-default elementor-section-height-default elementor-invisible"
                                    data-id="c8430e3" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9e6e0ed"
                                            data-id="9e6e0ed" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-a4c0304 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="a4c0304" data-element_type="section" id="nosotros">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-076ec73"
                                                            data-id="076ec73" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-e99524e elementor-widget elementor-widget-heading"
                                                                    data-id="e99524e" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <style>
                                                                            /*! elementor - v3.8.0 - 30-10-2022 */
                                                                            .elementor-heading-title {
                                                                                padding: 0;
                                                                                margin: 0;
                                                                                line-height: 1
                                                                            }

                                                                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                                                color: inherit;
                                                                                font-size: inherit;
                                                                                line-height: inherit
                                                                            }

                                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                                                font-size: 15px
                                                                            }

                                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                                                font-size: 19px
                                                                            }

                                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                                                font-size: 29px
                                                                            }

                                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                                                font-size: 39px
                                                                            }

                                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                                                font-size: 59px
                                                                            }
                                                                        </style>
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Sobre Nosotros</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-f94a8c9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                    data-id="f94a8c9" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-wide">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cc48d19"
                                                            data-id="cc48d19" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-7d1d884 elementor-widget elementor-widget-text-editor"
                                                                    data-id="7d1d884" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <style>
                                                                            /*! elementor - v3.8.0 - 30-10-2022 */
                                                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                                                background-color: #818a91;
                                                                                color: #fff
                                                                            }

                                                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                                                color: #818a91;
                                                                                border: 3px solid;
                                                                                background-color: transparent
                                                                            }

                                                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                                                margin-top: 8px
                                                                            }

                                                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                                                width: 1em;
                                                                                height: 1em
                                                                            }

                                                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                                                float: left;
                                                                                text-align: center;
                                                                                line-height: 1;
                                                                                font-size: 50px
                                                                            }

                                                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                                                display: inline-block
                                                                            }
                                                                        </style>
                                                                        <p>Somos expertos en la integración de
                                                                            Soluciones de Tecnologías de la Información.
                                                                        </p>
                                                                        <p>Contamos con un equipo de profesionales con
                                                                            una amplia experiencia en las tecnologías
                                                                            que integramos a través de nuestro modelo de
                                                                            negocios que nos permite desarrollar e
                                                                            implementar soluciones exitosas.</p>
                                                                        <p>Nuestro equipo de expertos mantiene una
                                                                            constante <strong>capacitación y
                                                                                certificación</strong> de cada una de
                                                                            las tecnologías propuestas.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7ec81ad"
                                                            data-id="7ec81ad" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-27943ef elementor-widget elementor-widget-image"
                                                                    data-id="27943ef" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <style>
                                                                            /*! elementor - v3.8.0 - 30-10-2022 */
                                                                            .elementor-widget-image {
                                                                                text-align: center
                                                                            }

                                                                            .elementor-widget-image a {
                                                                                display: inline-block
                                                                            }

                                                                            .elementor-widget-image a img[src$=".svg"] {
                                                                                width: 48px
                                                                            }

                                                                            .elementor-widget-image img {
                                                                                vertical-align: middle;
                                                                                display: inline-block
                                                                            }
                                                                        </style>
                                                                        <img decoding="async" width="900"
                                                                            height="922"
                                                                            src="{{ asset('wp-content/uploads/mascota-preliminar.png') }}"
                                                                            class="attachment-large size-large"
                                                                            alt=""
                                                                            srcset="{{ asset('wp-content/uploads/mascota-preliminar.png') }} 900w, {{ asset('wp-content/uploads/mascota-preliminar.png') }} 293w, {{ asset('wp-content/uploads/mascota-preliminar.png') }} 768w"
                                                                            sizes="(max-width: 900px) 100vw, 900px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-7093c41 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="7093c41" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c756fd8"
                                                            data-id="c756fd8" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-caa3470 elementor-view-default elementor-widget elementor-widget-icon"
                                                                    data-id="caa3470" data-element_type="widget"
                                                                    data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <div class="elementor-icon">
                                                                                <i aria-hidden="true"
                                                                                    class="far fa-star"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-6eeb54e elementor-widget elementor-widget-text-editor"
                                                                    data-id="6eeb54e" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p style="text-align: center;"><strong><span
                                                                                    style="font-size: 110%;">Misión</span></strong>
                                                                        </p>
                                                                        <p>Brindar la <span
                                                                                data-dobid="hdw">excelencia</span> y
                                                                            calidad en la integración de tecnologías y
                                                                            negocios con nuestros socios comerciales.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0f09267 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="0f09267" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d9bfaba"
                                                            data-id="d9bfaba" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-a20f171 elementor-view-default elementor-widget elementor-widget-icon"
                                                                    data-id="a20f171" data-element_type="widget"
                                                                    data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <div class="elementor-icon">
                                                                                <i aria-hidden="true"
                                                                                    class="fas fa-award"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2674764 elementor-widget elementor-widget-text-editor"
                                                                    data-id="2674764" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p style="text-align: center;"><strong><span
                                                                                    style="font-size: 110%;">Visión</span></strong>
                                                                        </p>
                                                                        <p>Nuestra visión tiene como principios
                                                                            fundamentales:</p>
                                                                        <ul>
                                                                            <li>Ser reconocidos por nuestros clientes
                                                                                como los socios preferidos a través de
                                                                                nuestros modelos de negocio.</li>
                                                                            <li>Ser reconocidos por la innovación.</li>
                                                                            <li>Ser líder en la integración de la
                                                                                información, satisfaciendo y superando
                                                                                las expectativas de nuestros socios de
                                                                                negocio.</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a4e5eeb"
                                                            data-id="a4e5eeb" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-a6fc166 elementor-view-default elementor-widget elementor-widget-icon"
                                                                    data-id="a6fc166" data-element_type="widget"
                                                                    data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <div class="elementor-icon">
                                                                                <i aria-hidden="true"
                                                                                    class="fas fa-check-double"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-369c2e3 elementor-widget elementor-widget-text-editor"
                                                                    data-id="369c2e3" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p style="text-align: center;"><strong><span
                                                                                    style="font-size: 110%;">Valores</span></strong>
                                                                        </p>
                                                                        <p><strong>Pasión por el Cliente.</strong></p>
                                                                        <p>Creemos en la pasión por el cliente, dando
                                                                            solución y forma de trabajo en torno a las
                                                                            ambiciones de cada negocio. Construimos
                                                                            relaciones solidas a largo plazo trabajando
                                                                            como un socio comercial con el cliente,
                                                                            innovando y desarrollando nuevas soluciones
                                                                            en conjunto.</p>
                                                                        <p><strong>Espiritu Emprendedor.</strong></p>
                                                                        <p>A nuestros socios de negocio se les impulsa a
                                                                            crear soluciones para mejorar el
                                                                            conocimiento de la tecnología de la
                                                                            información, ya que creemos que ellos
                                                                            encarnan el espíritu empresarial.</p>
                                                                        <p><strong>Innovación</strong></p>
                                                                        <p>El concepto de innovación refleja nuestra
                                                                            voluntad de pensar y actuar fuera del
                                                                            enfoque de proyectos convencionales y para
                                                                            empujar los límites de las ideas.</p>
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-c10e132 elementor-section-content-top elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible"
                                    data-id="c10e132" data-element_type="section" id="soluciones"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12f4cd8"
                                            data-id="12f4cd8" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6471eae elementor-widget elementor-widget-heading"
                                                    data-id="6471eae" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            Nuestra Tecnología</h1>
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-3da3879 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="3da3879" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-af9f712"
                                                            data-id="af9f712" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-733c6e1 elementor-widget elementor-widget-text-editor"
                                                                    data-id="733c6e1" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p>Como parte de nuestra estrategia, hemos
                                                                            construido alianzas con empresas líderes en
                                                                            tecnologías tales como <strong>Palo Alto,
                                                                                Veritas, Infoblox, Juniper y Una Alianza
                                                                                estrategica con Teksar Labs </strong> lo
                                                                            cual nos permite proveer soluciones
                                                                            innovadoras que en conjunto con nuestros
                                                                            servicios especializados cumplamos con los
                                                                            objetivos de su organización convirtiéndonos
                                                                            en un gran aliado de negocio.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-f49e57d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="f49e57d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1e95ffa"
                                                            data-id="1e95ffa" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-bc2a1df elementor-widget elementor-widget-image"
                                                                    data-id="bc2a1df" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="1020" height="285"
                                                                            src="{{ asset('images/infoblox-logo-1024x286.png') }}"
                                                                            class="attachment-large size-large"
                                                                            alt=""
                                                                            srcset="{{ asset('images/infoblox-logo-1024x286.png') }} 1024w, {{ asset('images/infoblox-logo-300x84.png') }} 300w, {{ asset('images/infoblox-logo-768x215.png') }} 768w, {{ asset('images/infoblox-logo-1536x430.png') }} 1536w, {{ asset('images/infoblox-logo.png') }} 1909w"
                                                                            sizes="(max-width: 1020px) 100vw, 1020px" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-4751cf6 elementor-widget elementor-widget-premium-addon-modal-box"
                                                                    data-id="4751cf6" data-element_type="widget"
                                                                    data-settings='{"premium_modal_box_animation":"fadeInDown"}'
                                                                    data-widget_type="premium-addon-modal-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="premium-modal-box-container"
                                                                            data-settings='{"trigger":"text"}'>
                                                                            <div
                                                                                class="premium-modal-trigger-container">
                                                                                <span data-toggle="premium-modal"
                                                                                    data-target="#premium-modal-4751cf6"
                                                                                    class="premium-modal-trigger-text">
                                                                                    <div>Ver Solución</div>
                                                                                </span>
                                                                            </div>
                                                                            <div id="premium-modal-4751cf6"
                                                                                class="premium-modal-box-modal"
                                                                                role="dialog" style="display: none">
                                                                                <div class="premium-modal-box-modal-dialog"
                                                                                    data-delay-animation=""
                                                                                    data-modal-animation="fadeInDown animated-fast">
                                                                                    <div
                                                                                        class="premium-modal-box-modal-body">
                                                                                        <p><b>SECURITY & NETWORKING</b>
                                                                                        </p>
                                                                                        <ul>
                                                                                            <li>Seguridad y protección
                                                                                                avanzada de DNS</li>
                                                                                            <li>Administración de
                                                                                                direcciones IP (IPAM)
                                                                                            </li>
                                                                                            <li>Administración de DHCP
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div
                                                                                        class="premium-modal-box-modal-footer">
                                                                                        <button type="button"
                                                                                            class="premium-modal-box-modal-lower-close"
                                                                                            data-dismiss="premium-modal">Cerrar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-15de20a"
                                                            data-id="15de20a" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-ffd6617 elementor-widget elementor-widget-image"
                                                                    data-id="ffd6617" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="821" height="200"
                                                                            src="{{ asset('images/pan-logo-dark.svg') }}"
                                                                            class="attachment-large size-large"
                                                                            alt=""
                                                                            srcset="{{ asset('images/pan-logo-dark.svg') }} 821w, {{ asset('images/pan-logo-dark.svg') }} 300w, {{ asset('images/pan-logo-dark.svg') }} 768w"
                                                                            sizes="(max-width: 821px) 100vw, 821px" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-ac85c7b elementor-widget elementor-widget-premium-addon-modal-box"
                                                                    data-id="ac85c7b" data-element_type="widget"
                                                                    data-settings='{"premium_modal_box_animation":"fadeInDown"}'
                                                                    data-widget_type="premium-addon-modal-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="premium-modal-box-container"
                                                                            data-settings='{"trigger":"text"}'>
                                                                            <div
                                                                                class="premium-modal-trigger-container">
                                                                                <span data-toggle="premium-modal"
                                                                                    data-target="#premium-modal-ac85c7b"
                                                                                    class="premium-modal-trigger-text">
                                                                                    <div>Ver Solución</div>
                                                                                </span>
                                                                            </div>
                                                                            <div id="premium-modal-ac85c7b"
                                                                                class="premium-modal-box-modal"
                                                                                role="dialog" style="display: none">
                                                                                <div class="premium-modal-box-modal-dialog"
                                                                                    data-delay-animation=""
                                                                                    data-modal-animation="fadeInDown animated-fast">
                                                                                    <div
                                                                                        class="premium-modal-box-modal-body">
                                                                                        <p><b>Seguridad de red</b></p>
                                                                                        <ul>
                                                                                            <li>Firewall de nueva
                                                                                                generación</li>
                                                                                            <li>NGFW virtualizados de
                                                                                                VM-Series</li>
                                                                                            <li>Panorama</li>
                                                                                        </ul>
                                                                                        <p><b>Dispositivo periférico de
                                                                                                servicio de acceso
                                                                                                seguro</b></p>
                                                                                        <ul>
                                                                                            <li>Prisma SASE</li>
                                                                                            <li>Prisma SD-WAN</li>
                                                                                            <li>Gestión autónoma de la
                                                                                                experiencia digital</li>
                                                                                        </ul>
                                                                                        <p><b>Servicios de seguridad en
                                                                                                la nube</b></p>
                                                                                        <ul>
                                                                                            <li>Advanced Threat
                                                                                                Prevention</li>
                                                                                            <li>Advanced URL Filtering
                                                                                            </li>
                                                                                            <li>WildFire</li>
                                                                                            <li>SaaS Security</li>
                                                                                        </ul>
                                                                                        <p><b>Protección de aplicaciones
                                                                                                nativas de la nube</b>
                                                                                        </p>
                                                                                        <ul>
                                                                                            <li>Plataforma de Prisma
                                                                                                Cloud</li>
                                                                                            <li>Gestión de posiciones de
                                                                                                seguridad en la nube
                                                                                            </li>
                                                                                            <li>Protección de cargas de
                                                                                                trabajo en la nube</li>
                                                                                            <li>Seguridad de red en la
                                                                                                nube</li>
                                                                                            <li>Seguridad de la
                                                                                                identidad en la nube
                                                                                            </li>
                                                                                            <li>Seguridad de
                                                                                                aplicaciones web y API
                                                                                            </li>
                                                                                        </ul>
                                                                                        <p><b>Seguridad de endpoint</b>
                                                                                        </p>
                                                                                        <ul>
                                                                                            <li>Cortex XDR</li>
                                                                                            <li>Seguridad de
                                                                                                aplicaciones web y API
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div
                                                                                        class="premium-modal-box-modal-footer">
                                                                                        <button type="button"
                                                                                            class="premium-modal-box-modal-lower-close"
                                                                                            data-dismiss="premium-modal">Cerrar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-67db274"
                                                            data-id="67db274" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-ba8fdc8 elementor-widget elementor-widget-image"
                                                                    data-id="ba8fdc8" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="800" height="234"
                                                                            src="{{ asset('images/veritas.svg') }}"
                                                                            class="attachment-large size-large"
                                                                            alt=""
                                                                            srcset="{{ asset('images/veritas.svg') }} 800w, {{ asset('images/veritas.svg') }} 200w, {{ asset('images/veritas.svg') }} 768w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-23fa98a elementor-widget elementor-widget-premium-addon-modal-box"
                                                                    data-id="23fa98a" data-element_type="widget"
                                                                    data-settings='{"premium_modal_box_animation":"fadeInDown"}'
                                                                    data-widget_type="premium-addon-modal-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="premium-modal-box-container"
                                                                            data-settings='{"trigger":"text"}'>
                                                                            <div
                                                                                class="premium-modal-trigger-container">
                                                                                <span data-toggle="premium-modal"
                                                                                    data-target="#premium-modal-23fa98a"
                                                                                    class="premium-modal-trigger-text">
                                                                                    <div>Ver Solución</div>
                                                                                </span>
                                                                            </div>
                                                                            <div id="premium-modal-23fa98a"
                                                                                class="premium-modal-box-modal"
                                                                                role="dialog" style="display: none">
                                                                                <div class="premium-modal-box-modal-dialog"
                                                                                    data-delay-animation=""
                                                                                    data-modal-animation="fadeInDown animated-fast">
                                                                                    <div
                                                                                        class="premium-modal-box-modal-body">
                                                                                        <p><b>Protección</b></p>
                                                                                        <ul>
                                                                                            <li>Netbackup para
                                                                                                Multicloud</li>
                                                                                            <li>Appliances Corta
                                                                                                Retención</li>
                                                                                            <li>Appliances Larga
                                                                                                Retención</li>
                                                                                            <li>Nube Veritas para Larga
                                                                                                Retención</li>
                                                                                            <li>Netbackup para O365</li>
                                                                                        </ul>
                                                                                        <p><b>Disponibilidad</b></p>
                                                                                        <ul>
                                                                                            <li>Netbackup Resiliency
                                                                                            </li>
                                                                                            <li>Infoscale</li>
                                                                                        </ul>
                                                                                        <p><b>Insight</b></p>
                                                                                        <ul>
                                                                                            <li>Data Insight</li>
                                                                                            <li>Enterprise Vault</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div
                                                                                        class="premium-modal-box-modal-footer">
                                                                                        <button type="button"
                                                                                            class="premium-modal-box-modal-lower-close"
                                                                                            data-dismiss="premium-modal">Cerrar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-f4a4bd4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="f4a4bd4" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">

                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-922d978"
                                                            data-id="922d978" data-element_type="column">

                                                        </div>
                                                        <div class="elementor-column elementor-col-30 elementor-inner-column elementor-element elementor-element-48f6629"
                                                            data-id="48f6629" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-75296ae elementor-widget elementor-widget-image"
                                                                    data-id="75296ae" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="1020" height="340"
                                                                            src="{{ asset('images/junioper-logo-1024x341.png') }}"
                                                                            class="attachment-large size-large"
                                                                            alt=""
                                                                            srcset="{{ asset('images/junioper-logo-1024x341.png') }} 1024w, {{ asset('images/infoblox-logo-junioper-logo-300x100.png') }} 300w, {{ asset('images/junioper-logo-768x256.png') }} 768w, {{ asset('images/junioper-logo-1536x512.png') }} 1536w, {{ asset('images/junioper-logo-junioper-logo.png') }} 1800w"
                                                                            sizes="(max-width: 1020px) 100vw, 1020px" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-00aaec0 elementor-widget elementor-widget-premium-addon-modal-box"
                                                                    data-id="00aaec0" data-element_type="widget"
                                                                    data-settings='{"premium_modal_box_animation":"fadeInDown"}'
                                                                    data-widget_type="premium-addon-modal-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="premium-modal-box-container"
                                                                            data-settings='{"trigger":"text"}'>
                                                                            <div
                                                                                class="premium-modal-trigger-container">
                                                                                <span data-toggle="premium-modal"
                                                                                    data-target="#premium-modal-00aaec0"
                                                                                    class="premium-modal-trigger-text">
                                                                                    <div>Ver Solución</div>
                                                                                </span>
                                                                            </div>
                                                                            <div id="premium-modal-00aaec0"
                                                                                class="premium-modal-box-modal"
                                                                                role="dialog" style="display: none">
                                                                                <div class="premium-modal-box-modal-dialog"
                                                                                    data-delay-animation=""
                                                                                    data-modal-animation="fadeInDown animated-fast">
                                                                                    <div
                                                                                        class="premium-modal-box-modal-body">
                                                                                        <p><b>IT NETWORKING</b></p>
                                                                                        <ul>
                                                                                            <li>Data Center</li>
                                                                                            <li>Wired Access</li>
                                                                                            <li>Wireless Access</li>
                                                                                            <li>SD-WAN</li>
                                                                                        </ul>
                                                                                        <p><b>SERVICE PROVIDER</b></p>
                                                                                        <ul>
                                                                                            <li>IP Transport</li>
                                                                                            <li>Automation</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div
                                                                                        class="premium-modal-box-modal-footer">
                                                                                        <button type="button"
                                                                                            class="premium-modal-box-modal-lower-close"
                                                                                            data-dismiss="premium-modal">Cerrar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-30 elementor-inner-column elementor-element elementor-element-922d978"
                                                            data-id="922d978" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-75296ae elementor-widget elementor-widget-image"
                                                                    data-id="d2ee73f" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="620" height="72"
                                                                            src="{{ asset('images/TeksarLabsDC.png') }}"
                                                                            srcset="{{ asset('images/TeksarLabsDC.png') }} 821w, {{ asset('images/TeksarLabsDC.png') }} 293w, {{ asset('images/TeksarLabsDC.png') }} 768w"
                                                                            sizes="(max-width: 821px) 100vw, 821px" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-d80e914 elementor-widget elementor-widget-premium-addon-modal-box"
                                                                    data-id="d80e914" data-element_type="widget"
                                                                    data-settings='{"premium_modal_box_animation":"fadeInDown"}'
                                                                    data-widget_type="premium-addon-modal-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="premium-modal-box-container"
                                                                            data-settings='{"trigger":"text"}'>
                                                                            <div
                                                                                class="premium-modal-trigger-container">
                                                                                <span data-toggle="premium-modal"
                                                                                    data-target="#premium-modal-d80e914"
                                                                                    class="premium-modal-trigger-text">
                                                                                    <div>Ver Solución</div>
                                                                                </span>
                                                                            </div>
                                                                            <div id="premium-modal-d80e914"
                                                                                class="premium-modal-box-modal"
                                                                                role="dialog" style="display: none">
                                                                                <div class="premium-modal-box-modal-dialog"
                                                                                    data-delay-animation=""
                                                                                    data-modal-animation="fadeInDown animated-fast">
                                                                                    <div
                                                                                        class="premium-modal-box-modal-body">
                                                                                        <ul>
                                                                                            <li>IMPLEMENTACIÓN DE LOS
                                                                                                DATA CENTER CONSTRUIDOS
                                                                                            </li>
                                                                                            <li>DISEÑO DATA CENTER <sub>
                                                                                                    <h6>(DEFINICIÓN DEL
                                                                                                        PROYECTO,
                                                                                                        DISEÑO,
                                                                                                        CONSTRUCCIÓN E
                                                                                                        IMPLEMENTACIÓN)
                                                                                                        <h6><sub></li>
                                                                                            <li>CONSULTORÍA <sub>
                                                                                                    <h6>(ESPECIALIZADOS
                                                                                                        EN LAS ÁREAS
                                                                                                        ELÉCTRICA, AIRE
                                                                                                        ACONDICIONADO,
                                                                                                        CABLEADO Y
                                                                                                        CUARTOS DE
                                                                                                        MISIÓN CRITICA)
                                                                                                        <h6><sub></li>
                                                                                            <li>MONITOREO DATA CENTER
                                                                                                <sub>
                                                                                                    <h6>(INFRAESTRUCTURA
                                                                                                        FÍSICA DEL DATA
                                                                                                        CENTER EN FORMA
                                                                                                        REMOTA)<h6><sub>
                                                                                            </li>
                                                                                            <li>MANTENIMIENTO A DATA
                                                                                                CENTER
                                                                                                <ul
                                                                                                    style="margin-top: 0rem !important">
                                                                                                    <li>
                                                                                                        <h6>Mantenimientos
                                                                                                            Preventivos
                                                                                                        </h6>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <h6>Mantenimientos
                                                                                                            Predictivos
                                                                                                        </h6>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <h6>Mantenimientos
                                                                                                            Correctivos
                                                                                                        </h6>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div
                                                                                        class="premium-modal-box-modal-footer">
                                                                                        <button type="button"
                                                                                            class="premium-modal-box-modal-lower-close"
                                                                                            data-dismiss="premium-modal">Cerrar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-0e4ebad elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible"
                                    data-id="0e4ebad" data-element_type="section" id="servicios"
                                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;shape_divider_top&quot;:&quot;pyramids&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-shape elementor-shape-top" data-negative="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
                                            preserveAspectRatio="none">
                                            <path class="elementor-shape-fill"
                                                d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9" />
                                        </svg>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2b499dc"
                                            data-id="2b499dc" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e12b1a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="e12b1a6" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-cf1db6b"
                                                            data-id="cf1db6b" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-1743305 elementor-widget elementor-widget-heading"
                                                                    data-id="1743305" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Nuestros Servicios</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-a90a67d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="a90a67d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-wide">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ac48790"
                                                            data-id="ac48790" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-a40f182 elementor-widget elementor-widget-image"
                                                                    data-id="a40f182" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="1020" height="340"
                                                                            src="{{ asset('images/security_information2.jpg') }}"
                                                                            class="attachment-large size-large"
                                                                            alt=""
                                                                            srcset="{{ asset('images/security_information2.jpg') }} 1024w, {{ asset('images/security_information2.jpg') }} 300w, {{ asset('images/security_information2.jpg') }} 768w, {{ asset('images/security_information2.jpg') }} 1279w"
                                                                            sizes="(max-width: 1020px) 100vw, 1020px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b2e6d2e"
                                                            data-id="b2e6d2e" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-fe076e0 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                    data-id="fe076e0" data-element_type="widget"
                                                                    data-widget_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <link rel="stylesheet"
                                                                            href="{{ asset('wp-content/css/widget-icon-box.min.css') }}">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon">
                                                                                <span
                                                                                    class="elementor-icon elementor-animation-">
                                                                                    <i aria-hidden="true"
                                                                                        class="fas fa-lock"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h1 class="elementor-icon-box-title">
                                                                                    <span>
                                                                                        Implementación de tecnología
                                                                                        enfocada a la ciberseguridad.
                                                                                    </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-81ab919 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                    data-id="81ab919" data-element_type="widget"
                                                                    data-widget_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon">
                                                                                <span
                                                                                    class="elementor-icon elementor-animation-">
                                                                                    <i aria-hidden="true"
                                                                                        class="far fa-calendar-check"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h1 class="elementor-icon-box-title">
                                                                                    <span>
                                                                                        Soporte 24x7 los 365 días del
                                                                                        año. </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-8da1d61 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                    data-id="8da1d61" data-element_type="widget"
                                                                    data-widget_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon">
                                                                                <span
                                                                                    class="elementor-icon elementor-animation-">
                                                                                    <i aria-hidden="true"
                                                                                        class="far fa-comment-dots"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h1 class="elementor-icon-box-title">
                                                                                    <span>
                                                                                        Consultoría integral en
                                                                                        Ciberseguridad. </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-4866a5b elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                    data-id="4866a5b" data-element_type="widget"
                                                                    data-widget_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon">
                                                                                <span
                                                                                    class="elementor-icon elementor-animation-">
                                                                                    <i aria-hidden="true"
                                                                                        class="fas fa-map-marker-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h1 class="elementor-icon-box-title">
                                                                                    <span>
                                                                                        Administración de recursos
                                                                                        Inplant. </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-0ba8159 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                    data-id="0ba8159" data-element_type="widget"
                                                                    data-widget_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon">
                                                                                <span
                                                                                    class="elementor-icon elementor-animation-">
                                                                                    <i aria-hidden="true"
                                                                                        class="fas fa-laptop-house"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h1 class="elementor-icon-box-title">
                                                                                    <span>
                                                                                        Administración de recursos
                                                                                        Athome. </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-23e9bcf elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                    data-id="23e9bcf" data-element_type="widget"
                                                                    data-widget_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon">
                                                                                <span
                                                                                    class="elementor-icon elementor-animation-">
                                                                                    <i aria-hidden="true"
                                                                                        class="fas fa-map-marked-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h1 class="elementor-icon-box-title">
                                                                                    <span>
                                                                                        Cobertura Nacional y Centro
                                                                                        América. </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-31f445d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="31f445d" data-element_type="section" id="certificaciones">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9988c81"
                                            data-id="9988c81" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-db3aa44 elementor-widget elementor-widget-heading"
                                                    data-id="db3aa44" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            Certificaciones</h1>
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-8496fe6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="8496fe6" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3a0e25c"
                                                            data-id="3a0e25c" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-f822508 elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                                                                    data-id="f822508" data-element_type="widget"
                                                                    data-settings="{&quot;slides_to_show&quot;:&quot;8&quot;,&quot;navigation&quot;:&quot;dots&quot;,&quot;slides_to_show_mobile&quot;:&quot;3&quot;,&quot;slides_to_show_tablet&quot;:&quot;5&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                                                                    data-widget_type="image-carousel.default">
                                                                    <div class="elementor-widget-container">
                                                                        <style>
                                                                            /*! elementor - v3.8.0 - 30-10-2022 */
                                                                            .elementor-widget-image-carousel .swiper-container {
                                                                                position: static
                                                                            }

                                                                            .elementor-widget-image-carousel .swiper-container .swiper-slide figure {
                                                                                line-height: inherit
                                                                            }

                                                                            .elementor-widget-image-carousel .swiper-slide {
                                                                                text-align: center
                                                                            }

                                                                            .elementor-image-carousel-wrapper:not(.swiper-container-initialized) .swiper-slide {
                                                                                max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                                                                            }
                                                                        </style>
                                                                        <div class="elementor-image-carousel-wrapper swiper-container"
                                                                            dir="ltr">
                                                                            <div
                                                                                class="elementor-image-carousel swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/f5-03-px75x4ptr8qishim0tro68qi3j9mplmaquimmmmqyo.png') }}"
                                                                                            alt="f5-03" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/f5-02-px75xr9yb9lej4lud3ipu31kcs6fuc3uty6a59patc.png') }}"
                                                                                            alt="f5-02" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/f5-01-px75yn8grmt5hvbf6hc16uz8jvsx41mqaccsgodwxs.png') }}"
                                                                                            alt="f5-01" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/network-01-px75zdjy2zt6iy96wspl4oc56o773kj7pymdwfaw3k.png') }}"
                                                                                            alt="network-01" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/itil-01-px75ztj7b6f20blzbhm8t2aza80fqfang5pn24n75s.png') }}"
                                                                                            alt="itil-01" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/check-04-px760lqd07hnomh0qtt1vv6t3s5g5celk1a7gfhdz4.png') }}"
                                                                                            alt="check-04" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/check-03-px761dxip8k9cxc265zuyo2mxcagk9ijnwuruqbksg.png') }}"
                                                                                            alt="check-03" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/check-02-px76272il3o5cu5qg0lalypxcaau6vq83x2tqb4dfk.png') }}"
                                                                                            alt="check-02" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/check-01-px762ybu3apgpj250udh49uakgkhe3qfvnzwnbzyf4.png') }}"
                                                                                            alt="check-01" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/infoblox-03-px764t2dkj8tlud7757zjb00qtfjkm3dsubdpz905c.png') }}"
                                                                                            alt="infoblox-03" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/infoblox-02-px765yf9x8tfsop4hn3kl0kavrrozankmj0qu5jojk.png') }}"
                                                                                            alt="infoblox-02" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/infoblox-01-px7678hd84khlku80p0ah6xvzngoggqf4uzjcpne2o.png') }}"
                                                                                            alt="infoblox-01" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/juniper-03-px768fpxyi7ofn3f07p4nw13bdjkaji2mszvffva4g.png') }}"
                                                                                            alt="juniper-03" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/juniper-02-px769k504dr0avgpg76353twuy0chiyj4d1r2c7cow.png') }}"
                                                                                            alt="juniper-02" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/juniper-01-px76aok2a9ac63tzw6n1mbmqeih4oiezlx3mp8jf9c.png') }}"
                                                                                            alt="juniper-01" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/sss-03-px76bhp264e860no618h9ma0tghib4mo1xboktc7wg.png') }}"
                                                                                            alt="sss-03" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/sss-02-px76cgh36zpu3l95iy9obvi2spq37xgqipgnc1wni8.png') }}"
                                                                                            alt="sss-02" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/sss-01-px76dh4slj40odrwkw44j491yqpek4i9nqwl1ueark.png') }}"
                                                                                            alt="sss-01" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/fortinet-06-px76eq91pkts5nyd9fm7usv6h8j0tlhdty7w34jegw.png') }}"
                                                                                            alt="fortinet-06" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/fortinet-05-px76g8ropywev1r6f36kvf3wxl2b81htdg21x6akg0.png') }}"
                                                                                            alt="fortinet-05" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/fortinet-04-px76hzqvfvamgx7p7cel0h7sqefwjrfty3rl2pp6v4.png') }}"
                                                                                            alt="fortinet-04" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/fortinet-03-px76j6zg68xtazgw6v3f76b024isdu7hg1rx5fx2ww.png') }}"
                                                                                            alt="fortinet-03" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/fortinet-02-px76kok8zsz5orb2i095nas9x36pkl46neyli7pn28.png') }}"
                                                                                            alt="fortinet-02" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/fortinet-01-px76m9wekp5ncyzs771edebe5lc3m4ft7ar7s3cmio.png') }}"
                                                                                            alt="fortinet-01" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/a10-04-px76nak3z8jtxrij94vukn2dbmbeybhccc75hvu9s0.png') }}"
                                                                                            alt="a10-04" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/a10-03-px76ob7tdry0ik1ab2qarvtchnaqaiivhdn37obx1c.png') }}"
                                                                                            alt="a10-03" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/a10-02-px76p5angh36u2tlffqczo83hz6h4tua9iimkj3bi8.png') }}"
                                                                                            alt="a10-02" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/thumbs/a10-01-px76qcj86uqdo52seyf76dbatp9cywlxrgiyn9b7k0.png') }}"
                                                                                            alt="a10-01" /></figure>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-pagination"></div>
                                                                        </div>
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-31f445d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="31f445d" data-element_type="section" id="clientes">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9988c81"
                                            data-id="9988c81" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-db3aa44 elementor-widget elementor-widget-heading"
                                                    data-id="db3aa44" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            Nuestros Clientes</h1>
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-8496fe6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="8496fe6" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3a0e25c"
                                                            data-id="3a0e25c" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-f822508 elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                                                                    data-id="f822508" data-element_type="widget"
                                                                    data-settings="{&quot;slides_to_show&quot;:&quot;8&quot;,&quot;navigation&quot;:&quot;dots&quot;,&quot;slides_to_show_mobile&quot;:&quot;3&quot;,&quot;slides_to_show_tablet&quot;:&quot;5&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                                                                    data-widget_type="image-carousel.default">
                                                                    <div class="elementor-widget-container">
                                                                        <style>
                                                                            /*! elementor - v3.8.0 - 30-10-2022 */
                                                                            .elementor-widget-image-carousel .swiper-container {
                                                                                position: static
                                                                            }

                                                                            .elementor-widget-image-carousel .swiper-container .swiper-slide figure {
                                                                                line-height: inherit
                                                                            }

                                                                            .elementor-widget-image-carousel .swiper-slide {
                                                                                text-align: center
                                                                            }

                                                                            .elementor-image-carousel-wrapper:not(.swiper-container-initialized) .swiper-slide {
                                                                                max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                                                                            }
                                                                        </style>
                                                                        <div class="elementor-image-carousel-wrapper swiper-container"
                                                                            dir="ltr">
                                                                            <div class="elementor-image-carousel swiper-wrapper"
                                                                                style="display: flex; align-items: center;">
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/azteca.png') }}"
                                                                                            alt="azteca" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/atlantik.png') }}"
                                                                                            alt="atlantik" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/att.png') }}"
                                                                                            alt="att" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/avon.png') }}"
                                                                                            alt="avon" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/batlantida.png') }}"
                                                                                            alt="batlantida" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/hidalgo.png') }}"
                                                                                            alt="hidalgo" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/izzi.png') }}"
                                                                                            alt="izzi" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/scitum.png') }}"
                                                                                            alt="scitum" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/telefonica.png') }}"
                                                                                            alt="telefonica" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/totalplay.png') }}"
                                                                                            alt="totalplay" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/megacable.png') }}"
                                                                                            alt="megacable" />
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/uaeh.png') }}"
                                                                                            alt="uaeh" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/unam.png') }}"
                                                                                            alt="unam" /></figure>
                                                                                </div>
                                                                                <div class="swiper-slide"
                                                                                    style="padding: 0 10px;">
                                                                                    <figure
                                                                                        class="swiper-slide-inner">
                                                                                        <img decoding="async"
                                                                                            class="swiper-slide-image"
                                                                                            src="{{ asset('images/clientes/triara.png') }}"
                                                                                            alt="triara" /></figure>
                                                                                </div>
                                                                                <!-- Agrega más imágenes de clientes según sea necesario -->
                                                                            </div>
                                                                            <div class="swiper-pagination"></div>
                                                                        </div>

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


                        </div>
                    </div>
                </div>
            </div>


        </main>

        <footer id="footer" class="footer-wrapper">


            <!-- FOOTER 1 -->
            <div class="footer-widgets footer footer-1">
                <div class="row dark large-columns-4 mb-0">
                    <div id="media_image-3" class="col pb-0 widget widget_media_image"><img width="123"
                            height="150" src="{{ asset('images/veriopoint-alpha.png') }}"
                            class="image wp-image-10  attachment-123x150 size-123x150" alt="logo veriopoint balnco"
                            style="max-width: 100%; height: auto;" decoding="async" loading="lazy"
                            srcset="{{ asset('images/veriopoint-alpha.png') }} 247w, {{ asset('images/veriopoint-alpha.png') }} 768w, {{ asset('images/veriopoint-alpha.png') }} 820w"
                            sizes="(max-width: 123px) 100vw, 123px" /></div>
                    <div id="text-3" class="col pb-0 widget widget_text"><span
                            class="widget-title">Dirección</span>
                        <div class="is-divider small"></div>
                        <div class="textwidget">
                            <p><span class="LrzXr">Honduras Business Center, Centro Comercial Novacentro, 8vo nivel
                                    Torre Nova, Paseo Comercial Los Próceres Tegucigalpa M.D.C.<br />
                                </span></p>
                        </div>
                    </div>
                    <div id="text-4" class="col pb-0 widget widget_text"><span
                            class="widget-title">Contacto</span>
                        <div class="is-divider small"></div>
                        <div class="textwidget">
                            <p>+504 2268-0687</p>
                            <p>Informacion@veriopointhn.com</p>
                        </div>
                    </div>
                    <div id="text-5" class="col pb-0 widget widget_text"><span
                            class="widget-title">Links</span>
                        <div class="is-divider small"></div>
                        <div class="textwidget">
                            <p>Aviso de Privacidad</p>
                            <p>Términos y Condiciones</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FOOTER 2 -->



            <div class="absolute-footer dark medium-text-center text-center">
                <div class="container clearfix">


                    <div class="footer-primary pull-left">
                        <div class="copyright-footer">
                            Copyright 2024 © <strong>Veriopoint HN, Technology integration</strong> | Diseño: <a
                                href="https://www.hpcm.com.mx">Digital Sentry</a> </div>
                    </div>
                </div>
            </div>

            <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline circle"
                id="top-link" aria-label="Go to top"><i class="icon-angle-up"></i></a>

        </footer>

    </div>


    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">


        <div class="sidebar-menu no-scrollbar ">


            <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
                <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                            <form method="get" class="searchform" action="https://veriopointhn.com/"
                                role="search">
                                <div class="flex-row relative">
                                    <div class="flex-col flex-grow">
                                        <input type="search" class="search-field mb-0" name="s"
                                            value="" id="s" placeholder="Escribe tu búsqueda" />
                                    </div>
                                    <div class="flex-col">
                                        <button type="submit"
                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                            aria-label="Submit">
                                            <i class="icon-search"></i> </button>
                                    </div>
                                </div>
                                <div class="live-search-results text-left z-top"></div>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a
                        href="#nosotros">Nosotros</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a
                        href="#soluciones">Nuestra Tecnología</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a
                        href="#servicios">Servicios</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-195"><a
                        href="#certificaciones">Certificaciones</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-195"><a
                        href="#clientes">Nuestros Clientes</a></li>
            </ul>


        </div>


    </div>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400%2C500%2C900%7CMontserrat:100&display=swap"
        rel="stylesheet" property="stylesheet" media="all" type="text/css">

    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log(
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                    );
                console.log("To fix this, you can:");
                console.log(
                    "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                    );
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <link rel="stylesheet" property="stylesheet" id="rs-icon-set-fa-icon-css"
        href="{{ asset('css/font-awesome.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" property="stylesheet" id="rs-icon-set-fa-icon-css"
        href="{{ asset('css/font-awesome.css') }}" type="text/css" media="all" />
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel='stylesheet' id='e-animations-css' href='{{ asset('wp-content/css/animations.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='{{ asset('wp-content/css/rs6.css') }}'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/js/pa-frontend-81a1b11d7.min.js') }}" id="pa-frontend-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/js/rbtools.min.js') }}" defer async id="tp-tools-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/js/rs6.min.js') }}" defer async id="revmin-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/js/flatsome-live-search.js') }}"
        id="flatsome-live-search-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/wp-polyfill-inert.min.js') }}" id="wp-polyfill-inert-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/regenerator-runtime.min.js') }}"
        id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/wp-polyfill.min.js') }}" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/hoverIntent.min.js') }}" id="hoverIntent-js"></script>
    <script type="text/javascript" id="flatsome-js-js-extra">
        /* <![CDATA[ */
        var flatsomeVars = {
            "theme": {
                "version": "3.15.7"
            },
            "rtl": "",
            "sticky_height": "70",
            "assets_url": "wp-content/js/",
            "lightbox": {
                "close_markup": `
            <button title="%title%" type="button" class="mfp-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>`,
                "close_btn_inside": false
            },
            "user": {
                "can_edit_pages": false
            },
            "i18n": {
                "mainMenu": "Main Menu",
                "toggleButton": "Toggle"
            },
            "options": {
                "cookie_notice_version": "1",
                "swatches_layout": false,
                "swatches_box_select_event": false,
                "swatches_box_behavior_selected": false,
                "swatches_box_update_urls": "1",
                "swatches_box_reset": false,
                "swatches_box_reset_extent": false,
                "swatches_box_reset_time": 300,
                "search_result_latency": "0"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/js/flatsome.js') }}" id="flatsome-js-js"></script>
    <!--[if IE]>
<script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/intersection-observer-polyfill@0.1.0/dist/IntersectionObserver.js?ver=0.1.0"
    id="intersection-observer-polyfill-js"></script>
<![endif]-->
    <script type="text/javascript" src="{{ asset('wp-content/js/modal.min.js') }}" id="pa-modal-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/js/waypoints.min.js') }}" id="elementor-waypoints-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/js/lottie.min.js') }}" id="lottie-js-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/js/webpack.runtime.min.js') }}"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/js/frontend-modules.min.js') }}"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/core.min.js') }}" id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false, // Modo de edición desactivado
                "wpPreview": false, // Vista previa de WordPress desactivada
                "isScriptDebug": false // Depuración de scripts desactivada
            },
            "i18n": {
                "shareOnFacebook": "Compartir en Facebook", // Traducción para compartir en Facebook
                "shareOnTwitter": "Compartir en Twitter", // Traducción para compartir en Twitter
                "pinIt": "Fijarlo", // Traducción para fijar (Pinterest)
                "download": "Descargar", // Traducción para descargar
                "downloadImage": "Descargar imagen", // Traducción para descargar imagen
                "fullscreen": "Pantalla completa", // Traducción para pantalla completa
                "zoom": "Zoom", // Traducción para zoom
                "share": "Compartir", // Traducción para compartir
                "playVideo": "Reproducir video", // Traducción para reproducir video
                "previous": "Previo", // Traducción para anterior
                "next": "Siguiente", // Traducción para siguiente
                "close": "Cerrar" // Traducción para cerrar
            },
            "is_rtl": false, // Configuración de texto de izquierda a derecha (no activado)
            "breakpoints": {
                "xs": 0, // Punto de quiebre extra pequeño (0px)
                "sm": 480, // Punto de quiebre pequeño (480px)
                "md": 768, // Punto de quiebre mediano (768px)
                "lg": 1025, // Punto de quiebre grande (1025px)
                "xl": 1440, // Punto de quiebre extra grande (1440px)
                "xxl": 1600 // Punto de quiebre extra extra grande (1600px)
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Móvil", // Etiqueta para punto de quiebre móvil
                        "value": 767, // Valor del punto de quiebre móvil
                        "default_value": 767, // Valor predeterminado del punto de quiebre móvil
                        "direction": "max", // Dirección de máximo para el punto de quiebre móvil
                        "is_enabled": true // Habilitación del punto de quiebre móvil
                    },
                    "mobile_extra": {
                        "label": "Móvil grande", // Etiqueta para punto de quiebre móvil grande
                        "value": 880, // Valor del punto de quiebre móvil grande
                        "default_value": 880, // Valor predeterminado del punto de quiebre móvil grande
                        "direction": "max", // Dirección de máximo para el punto de quiebre móvil grande
                        "is_enabled": false // Deshabilitación del punto de quiebre móvil grande
                    },
                    "tablet": {
                        "label": "Tableta", // Etiqueta para punto de quiebre tableta
                        "value": 1024, // Valor del punto de quiebre tableta
                        "default_value": 1024, // Valor predeterminado del punto de quiebre tableta
                        "direction": "max", // Dirección de máximo para el punto de quiebre tableta
                        "is_enabled": true // Habilitación del punto de quiebre tableta
                    },
                    "tablet_extra": {
                        "label": "Tableta grande", // Etiqueta para punto de quiebre tableta grande
                        "value": 1200, // Valor del punto de quiebre tableta grande
                        "default_value": 1200, // Valor predeterminado del punto de quiebre tableta grande
                        "direction": "max", // Dirección de máximo para el punto de quiebre tableta grande
                        "is_enabled": false // Deshabilitación del punto de quiebre tableta grande
                    },
                    "laptop": {
                        "label": "Laptop", // Etiqueta para punto de quiebre laptop
                        "value": 1366, // Valor del punto de quiebre laptop
                        "default_value": 1366, // Valor predeterminado del punto de quiebre laptop
                        "direction": "max", // Dirección de máximo para el punto de quiebre laptop
                        "is_enabled": false // Deshabilitación del punto de quiebre laptop
                    },
                    "widescreen": {
                        "label": "Pantalla grande", // Etiqueta para punto de quiebre pantalla grande
                        "value": 2400, // Valor del punto de quiebre pantalla grande
                        "default_value": 2400, // Valor predeterminado del punto de quiebre pantalla grande
                        "direction": "min", // Dirección de mínimo para el punto de quiebre pantalla grande
                        "is_enabled": false // Deshabilitación del punto de quiebre pantalla grande
                    }
                }
            },
            "version": "3.8.0", // Versión de Elementor
            "is_static": false, // Configuración estática desactivada
            "experimentalFeatures": { // Características experimentales activadas
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "a11y_improvements": true,
                "additional_custom_breakpoints": true,
                "e_import_export": true,
                "e_hidden_wordpress_widgets": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "favorite-widgets": true,
                "admin-top-bar": true
            },
            "urls": {
                "assets": "wp-content/" // URL base para activos
            },
            "settings": {
                "page": [], // Configuraciones de página (vacías en este caso)
                "editorPreferences": [] // Preferencias del editor (vacías en este caso)
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"], // Puntos de quiebre activos
                "global_image_lightbox": "yes", // Habilitación global de lightbox de imágenes
                "lightbox_enable_counter": "yes", // Habilitación de contador en lightbox
                "lightbox_enable_fullscreen": "yes", // Habilitación de pantalla completa en lightbox
                "lightbox_enable_zoom": "yes", // Habilitación de zoom en lightbox
                "lightbox_enable_share": "yes", // Habilitación de compartir en lightbox
                "lightbox_title_src": "title", // Fuente del título en lightbox
                "lightbox_description_src": "description" // Fuente de la descripción en lightbox
            },
            "post": {
                "id": 2, // ID de la publicación actual (2 en este caso)
                "title": "Veriopoint HN – Somos expertos en la integración de Soluciones de Tecnologías de la información", // Título de la publicación
                "excerpt": "", // Extracto de la publicación (vacío en este caso)
                "featuredImage": false // Imagen destacada (falsa en este caso)
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/js/frontend.min.js') }}" id="elementor-frontend-js"></script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi1;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider11"] = {
            once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined,
            init: function() {
                window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1
                    .length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
                if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) {
                    window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
                    if (window.revapi1initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider11"].init()
                    });
                    return;
                }
                window.revapi1 = jQuery(window.revapi1);
                if (window.revapi1.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_1_1");
                    return;
                }
                revapi1.revolutionInit({
                    revapi: "revapi1",
                    sliderType: "hero",
                    DPR: "dpr",
                    sliderLayout: "fullscreen",
                    visibilityLevels: "1240,1240,1240,480",
                    gridwidth: "1240,1240,1240,480",
                    gridheight: "900,900,900,720",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "global",
                    editorheight: "900,768,960,720",
                    responsiveLevels: "1240,1240,1240,480",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        onHoverStop: false
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });

            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>

</body>

</html>
