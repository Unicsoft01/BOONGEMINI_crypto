@php
    $faqs =  App\Models\Faq::get();
    $settings =  App\Models\Settings::find(1);
@endphp
<html lang="en-US"><head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>FAQ – GetTrade</title>
<meta name="robots" content="max-image-preview:large">
<link rel="alternate" type="application/rss+xml" title="GetTrade » Feed" href="https://kitnew.moxcreative.com/gettrade/feed/">
<link rel="alternate" type="application/rss+xml" title="GetTrade » Comments Feed" href="https://kitnew.moxcreative.com/gettrade/comments/feed/">
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/kitnew.moxcreative.com\/gettrade\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script><script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/wp-emoji-release.min.js?ver=6.1.1" type="text/javascript" defer=""></script>
<style>
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
	<link rel="stylesheet" id="wp-block-library-css" href="https://kitnew.moxcreative.com/gettrade/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="classic-theme-styles-css" href="https://kitnew.moxcreative.com/gettrade/wp-includes/css/classic-themes.min.css?ver=1" media="all">
<style id="global-styles-inline-css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="template-kit-export-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min.css?ver=1.0.21" media="all">
<link rel="stylesheet" id="hello-elementor-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1" media="all">
<link rel="stylesheet" id="hello-elementor-theme-style-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.9.0" media="all">
<link rel="stylesheet" id="elementor-post-20-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/elementor/css/post-20.css?ver=1670395129" media="all">
<link rel="stylesheet" id="elementor-icons-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0" media="all">
<link rel="stylesheet" id="elementor-pro-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.7.7" media="all">
<link rel="stylesheet" id="elementor-post-235-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/elementor/css/post-235.css?ver=1670498854" media="all">
<link rel="stylesheet" id="elementor-post-39-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/elementor/css/post-39.css?ver=1670395130" media="all">
<link rel="stylesheet" id="elementor-post-62-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/elementor/css/post-62.css?ver=1670395130" media="all">
<link rel="stylesheet" id="elementor-icons-ekiticons-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=2.8.0" media="all">
<link rel="stylesheet" id="skb-cife-brands_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icomoon_brands.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-devicons_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/devicons.min.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-elegant_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elegant.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-elusive_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elusive-icons.min.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-icofont_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icofont.min.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-icomoon_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icomoon.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-iconic_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/iconic.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-ion_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/ionicons.min.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-linearicons_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/linearicons.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-lineawesome_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/line-awesome.min.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-line_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/lineicons.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-materialdesign_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/materialdesignicons.min.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-open_iconic-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/open-iconic.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-simpleline_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/simple-line-icons.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="skb-cife-themify_icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="ekit-widget-styles-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.8.0" media="all">
<link rel="stylesheet" id="ekit-responsive-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.8.0" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Oxygen%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNoto+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.1.1" media="all">
<link rel="stylesheet" id="elementor-icons-skb_cife-materialdesign-icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/materialdesignicons.min.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all">
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
<link rel="stylesheet" id="elementor-icons-skb_cife-icofont-icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/icofont.min.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="elementor-icons-skb_cife-open_iconic-icon-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/open-iconic.css?ver=1.0.5" media="all">
<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""><script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/jquery/jquery.min.js?ver=3.6.1" id="jquery-core-js"></script>
<script src="https://kitnew.moxcreative.com/gettrade/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script src="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21" id="template-kit-export-js"></script>
<link rel="https://api.w.org/" href="https://kitnew.moxcreative.com/gettrade/wp-json/"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://kitnew.moxcreative.com/gettrade/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://kitnew.moxcreative.com/gettrade/wp-includes/wlwmanifest.xml">

<link rel="canonical" href="https://kitnew.moxcreative.com/gettrade/template-kit/faq/">
<link rel="shortlink" href="https://kitnew.moxcreative.com/gettrade/?p=235">
<link rel="alternate" type="application/json+oembed" href="https://kitnew.moxcreative.com/gettrade/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitnew.moxcreative.com%2Fgettrade%2Ftemplate-kit%2Ffaq%2F">
<link rel="alternate" type="text/xml+oembed" href="https://kitnew.moxcreative.com/gettrade/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitnew.moxcreative.com%2Fgettrade%2Ftemplate-kit%2Ffaq%2F&amp;format=xml">
</head>
<body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-235 elementor-default elementor-template-full-width elementor-kit-20 elementor-page elementor-page-235 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="mobile">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR><feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG><feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 0.27843137254902"></feFuncG><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0"></feFuncR><feFuncG type="table" tableValues="0 0.64705882352941"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.78039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.94901960784314"></feFuncG><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.44705882352941 0.4"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg>
<a class="skip-link screen-reader-text" href="#content">
	Skip to content</a>

		<div data-elementor-type="header" data-elementor-id="39" class="elementor elementor-39 elementor-location-header">
			@include('frontend.inc.navbar')
						</div>
				<div data-elementor-type="wp-post" data-elementor-id="235" class="elementor elementor-235">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-703c051 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="703c051" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cbd02c" data-id="2cbd02c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-caeeed2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="caeeed2" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2e742d9" data-id="2e742d9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e56ffc0 elementor-widget elementor-widget-heading animated fadeInDown" data-id="e56ffc0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.9.0 - 06-12-2022 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Frequently Asked</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-354bfdf elementor-icon-list--layout-inline elementor-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list animated fadeInRight" data-id="354bfdf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">		<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="#">

											<span class="elementor-icon-list-text">Home</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="mdi mdi-slash-forward"></i>						</span>
										<span class="elementor-icon-list-text">FAQ</span>
									</li>
						</ul>
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
<section class="elementor-section elementor-top-section elementor-element elementor-element-471221b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="471221b" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-96c6da7" data-id="96c6da7" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-f476d14 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f476d14" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6963d5a" data-id="6963d5a" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-225a3ea elementor-widget elementor-widget-heading animated fadeInUp" data-id="225a3ea" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">What can we help?</h2>		</div>
</div>
<div class="elementor-element elementor-element-1e3e774 elementor-widget elementor-widget-text-editor" data-id="1e3e774" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<style>/*! elementor - v3.9.0 - 06-12-2022 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>						</div>
</div>
</div>
</div>
</div>
</section>


<section class="elementor-section elementor-inner-section elementor-element elementor-element-08925ed elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="08925ed" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-68fa97c animated fadeInUp" data-id="68fa97c" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-573dbac elementor-widget elementor-widget-elementskit-accordion" data-id="573dbac" data-element_type="widget" data-widget_type="elementskit-accordion.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con">
<div class="elementskit-accordion accoedion-primary" id="accordion-6399b3042b7e9">


@foreach ($faqs as $faq)
    @if ($faq->section == 1)
    <div class="elementskit-card ">
        <div class="elementskit-card-header" id="primaryHeading-0-573dbac">
        <a href="#collapse-{{ $faq->id }}" class="ekit-accordion--toggler elementskit-btn-link" data-ekit-toggle="collapse" data-target="#Collapse-{{ $faq->id }}" aria-expanded="true" aria-controls="Collapse-{{ $faq->id }}">
        
        <span class="ekit-accordion-title">{{ ucfirst($faq->title) }}</span>
        
        
        <div class="ekit_accordion_icon_group">
        
        
        <div class="ekit_accordion_active_icon">
        <!-- Active Icon -->
        <i aria-hidden="true" class="icon-closed icon-right fas fa-chevron-circle-down"></i>                                    </div><div class="ekit_accordion_normal_icon">
        <!-- Normal Icon -->
        <i aria-hidden="true" class="icon-open icon-right fas fa-chevron-circle-right"></i>                                    </div>
        
        </div>
        
        
        </a>
        </div>
        
        <div id="Collapse-{{ $faq->id }}" class="collapse show" aria-labelledby="primaryHeading-0-573dbac" data-parent="#accordion-6399b3042b7e9" style="">
        
        <div class="elementskit-card-body ekit-accordion--content">
        <p>{{ ucfirst($faq->body) }}.</p>                        </div>
        
        </div>
        
        </div><!-- .elementskit-card END -->
    @endif
@endforeach


</div>
</div>
</div>
</div>
</div>
</div>




<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-761cd80 animated fadeInUp" data-id="761cd80" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:360}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-d32fd10 elementor-widget elementor-widget-elementskit-accordion" data-id="d32fd10" data-element_type="widget" data-widget_type="elementskit-accordion.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con">
<div class="elementskit-accordion accoedion-primary" id="accordion-6399b3042d912">



<div class="elementskit-card ">
<div class="elementskit-card-header" id="primaryHeading-1-d32fd10">
<a href="#collapse-6f491396399b3042d912" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-6f491396399b3042d912" aria-expanded="false" aria-controls="Collapse-6f491396399b3042d912">

<span class="ekit-accordion-title">What are dividends? Do they get reinvested?</span>


<div class="ekit_accordion_icon_group">
<div class="ekit_accordion_normal_icon">
<!-- Normal Icon -->
<i aria-hidden="true" class="icon-open icon-right fas fa-chevron-circle-right"></i>                                    </div>

<div class="ekit_accordion_active_icon">
<!-- Active Icon -->
<i aria-hidden="true" class="icon-closed icon-right fas fa-chevron-circle-down"></i>                                    </div>

</div>


</a>
</div>

<div id="Collapse-6f491396399b3042d912" class=" collapse" aria-labelledby="primaryHeading-1-d32fd10" data-parent="#accordion-6399b3042d912">

<div class="elementskit-card-body ekit-accordion--content">
<p>Velit sociosqu purus enim pharetra sed sem at iaculis. Felis ridiculus adipiscing dignissim eros pellentesque mus vitae litora. Felis nullam tortor phasellus viverra ut arcu. Euismod magnis ante convallis vulputate odio augue sit pretium dapibus.</p>                        </div>

</div>

</div><!-- .elementskit-card END -->

</div>
</div>		</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-dd7f484 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd7f484" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3fba3c4" data-id="3fba3c4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-ae62409 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeInDown" data-id="ae62409" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInDown&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7cbcfdd" data-id="7cbcfdd" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7053cb4 elementor-widget elementor-widget-heading" data-id="7053cb4" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Investments that will make you grow</h2>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c0607dc" data-id="c0607dc" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-17e8623 elementor-widget elementor-widget-text-editor" data-id="17e8623" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Pharetra quisque dis odio phasellus hac ipsum parturient pede ac ut blandit. Consectetuer gravida aliquam et velit tortor aptent morbi ac.</p><p>Pede nisl est inceptos vehicula leo dictum risus etiam. Enim congue lacus pulvinar mollis class consectetur cursus pellentesque est mauris curae.</p>						</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-af74b19 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="af74b19" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fdb1908 animated fadeInRight" data-id="fdb1908" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-85859fa ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="85859fa" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con">        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon icofont icofont-comment"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Consultation                </h3>
                        		  <p>Amet est imperdiet commodo ante placerat. Urna aenean ullamcorper sagittis.</p>
                                        <div class="box-footer disable_hover_button">
                    <div class="btn-wraper">
                                                            <a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                        Chat Us                                    </a>
                                                        </div>
                </div>
                    </div>
        
        
                </div>
        </div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7879e9a animated fadeInLeft" data-id="7879e9a" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-75b1654 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="75b1654" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con">        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon icofont icofont-ui-dial-phone"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Contact Us                </h3>
                        		  <p>Amet est imperdiet commodo ante placerat. Urna aenean ullamcorper sagittis.</p>
                                        <div class="box-footer disable_hover_button">
                    <div class="btn-wraper">
                                                            <a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                        Call Now                                    </a>
                                                        </div>
                </div>
                    </div>
        
        
                </div>
        </div>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-622cea6 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="622cea6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

	<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-78229cd" data-id="78229cd" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-cbe8d8d elementor-cta--skin-cover elementor-cta--valign-bottom elementor-bg-transform elementor-bg-transform-zoom-in elementor-invisible elementor-widget elementor-widget-call-to-action" data-id="cbe8d8d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="call-to-action.default">
<div class="elementor-widget-container">
<link rel="stylesheet" href="https://kitnew.moxcreative.com/gettrade/wp-content/plugins/elementor-pro/assets/css/widget-call-to-action.min.css">		<div class="elementor-cta">
<div class="elementor-cta__bg-wrapper">
<div class="elementor-cta__bg elementor-bg" style="background-image: url(https://kitnew.moxcreative.com/gettrade/wp-content/uploads/sites/8/2022/10/bitcoin-coin-in-blue-neon-close-up-against-blurred-graphs-world-cryptocurrency.jpg);"></div>
<div class="elementor-cta__bg-overlay"></div>
</div>
<div class="elementor-cta__content">

<h3 class="elementor-cta__title elementor-cta__content-item elementor-content-item">Start To Invest And Earn More</h3>
<div class="elementor-cta__description elementor-cta__content-item elementor-content-item">
an investment that pays double					</div>

<div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item ">
<a class="elementor-cta__button elementor-button elementor-size-sm" href="/Deposit">
Invest Now				</a>
</div>
</div>
</div>
</div>
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
							@include('frontend.inc.footer')
