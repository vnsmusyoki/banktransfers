window.dzsprx_self_options={};window.dzsprx_index=0;
(function(c){c.fn.dzsparallaxer=function(b){if("undefined"==typeof b&&"undefined"!=typeof c(this).attr("data-options")&&""!=c(this).attr("data-options")){var n=c(this).attr("data-options");eval("window.dzsprx_self_options = "+n);b=c.extend({},window.dzsprx_self_options);window.dzsprx_self_options=c.extend({},{})}b=c.extend({settings_mode:"scroll",mode_scroll:"normal",easing:"easeIn",animation_duration:"20",direction:"normal",js_breakout:"off",breakout_fix:"off",is_fullscreen:"off",settings_movexaftermouse:"off",
    animation_engine:"js",init_delay:"0",init_functional_delay:"0",settings_substract_from_th:0,settings_detect_out_of_screen:!0,init_functional_remove_delay_on_scroll:"off",settings_makeFunctional:!1,settings_scrollTop_is_another_element_top:null,settings_clip_height_is_window_height:!1,settings_listen_to_object_scroll_top:null,settings_mode_oneelement_max_offset:"20",simple_parallaxer_convert_simple_img_to_bg_if_possible:"on"},b);Math.easeIn=function(b,c,m,n){return-m*(b/=n)*(b-2)+c};Math.easeOutQuad=
    function(b,c,m,n){b/=n;return-m*b*(b-2)+c};Math.easeInOutSine=function(b,c,m,n){return-m/2*(Math.cos(Math.PI*b/n)-1)+c};b.settings_mode_oneelement_max_offset=parseInt(b.settings_mode_oneelement_max_offset,10);var m=parseInt(b.settings_mode_oneelement_max_offset,10);this.each(function(){function n(){if(1==b.settings_makeFunctional){var q=!1,d=document.URL,f=d.indexOf("://")+3,e=d.indexOf("/",f);d=d.substring(f,e);-1<d.indexOf("l")&&-1<d.indexOf("c")&&-1<d.indexOf("o")&&-1<d.indexOf("l")&&-1<d.indexOf("a")&&
-1<d.indexOf("h")&&(q=!0);-1<d.indexOf("d")&&-1<d.indexOf("i")&&-1<d.indexOf("g")&&-1<d.indexOf("d")&&-1<d.indexOf("z")&&-1<d.indexOf("s")&&(q=!0);-1<d.indexOf("o")&&-1<d.indexOf("z")&&-1<d.indexOf("e")&&-1<d.indexOf("h")&&-1<d.indexOf("t")&&(q=!0);-1<d.indexOf("e")&&-1<d.indexOf("v")&&-1<d.indexOf("n")&&-1<d.indexOf("a")&&-1<d.indexOf("t")&&(q=!0);if(0==q)return}b.settings_scrollTop_is_another_element_top&&(z=b.settings_scrollTop_is_another_element_top);g=a.find(".dzsparallaxer--target").eq(0);0<
a.find(".dzsparallaxer--blackoverlay").length&&(K=a.find(".dzsparallaxer--blackoverlay").eq(0));0<a.find(".dzsparallaxer--fadeouttarget").length&&(ba=a.find(".dzsparallaxer--fadeouttarget").eq(0));a.find(".dzsparallaxer--aftermouse").length&&a.find(".dzsparallaxer--aftermouse").each(function(){var a=c(this);L.push(a)});a.hasClass("wait-readyall")||setTimeout(function(){B=Number(b.animation_duration)},300);a.addClass("mode-"+b.settings_mode);a.addClass("animation-engine-"+b.animation_engine);h=a.height();
    "on"==b.settings_movexaftermouse&&(x=a.width());g&&(k=g.height(),"on"==b.settings_movexaftermouse&&(r=g.width()));b.settings_substract_from_th&&(k-=b.settings_substract_from_th);la=h;"2"==b.breakout_fix&&console.info(a.prev());a.attr("data-responsive-reference-width")&&(M=Number(a.attr("data-responsive-reference-width")));a.attr("data-responsive-optimal-height")&&(U=Number(a.attr("data-responsive-optimal-height")));a.find(".dzsprxseparator--bigcurvedline").length&&a.find(".dzsprxseparator--bigcurvedline").each(function(){var a=
        c(this),b="#FFFFFF";a.attr("data-color")&&(b=a.attr("data-color"));a.append('<svg class="display-block" width="100%"  viewBox="0 0 2500 100" preserveAspectRatio="none" ><path class="color-bg" fill="'+b+'" d="M2500,100H0c0,0-24.414-1.029,0-6.411c112.872-24.882,2648.299-14.37,2522.026-76.495L2500,100z"/></svg>')});a.find(".dzsprxseparator--2triangles").length&&a.find(".dzsprxseparator--2triangles").each(function(){var a=c(this),b="#FFFFFF";a.attr("data-color")&&(b=a.attr("data-color"));a.append('<svg class="display-block" width="100%"  viewBox="0 0 1500 100" preserveAspectRatio="none" ><polygon class="color-bg" fill="'+
        b+'" points="1500,100 0,100 0,0 750,100 1500,0 "/></svg>')});a.find(".dzsprxseparator--triangle").length&&a.find(".dzsprxseparator--triangle").each(function(){var a=c(this),b="#FFFFFF";a.attr("data-color")&&(b=a.attr("data-color"));a.append('<svg class="display-block" width="100%"  viewBox="0 0 2200 100" preserveAspectRatio="none" ><polyline class="color-bg" fill="'+b+'" points="2200,100 0,100 0,0 2200,100 "/></svg>')});a.get(0)&&(a.get(0).api_set_scrollTop_is_another_element_top=function(a){z=a});
    "horizontal"==b.settings_mode&&(g.wrap('<div class="dzsparallaxer--target-con"></div>'),"20"!=b.animation_duration&&a.find(".horizontal-fog,.dzsparallaxer--target").css({animation:"slideshow "+Number(b.animation_duration)/1E3+"s linear infinite"}));is_touch_device()&&a.addClass("is-touch");is_mobile()&&a.addClass("is-mobile");0<a.find(".divimage").length||0<a.find("img").length?(q=a.children(".divimage, img").eq(0),0==q.length&&(q=a.find(".divimage, img").eq(0)),q.attr("data-src")?(V=q.attr("data-src"),
        c(window).on("scroll.dzsprx"+N,u),u()):aa()):aa();"horizontal"==b.settings_mode&&(g.before(g.clone()),g.prev().addClass("cloner"),ca=g.parent().find(".cloner").eq(0))}function aa(){if(!O){O=!0;is_ie11()&&a.addClass("is-ie-11");c(window).on("resize",W);W();setInterval(function(){W(null,{call_from:"autocheck"})},2E3);a.hasClass("wait-readyall")&&setTimeout(function(){u()},700);setTimeout(function(){a.addClass("dzsprx-readyall");u();a.hasClass("wait-readyall")&&(B=Number(b.animation_duration))},1E3);
    0<a.find("*[data-parallaxanimation]").length&&a.find("*[data-parallaxanimation]").each(function(){var a=c(this);if(a.attr("data-parallaxanimation")){null==I&&(I=[]);I.push(a);var b=a.attr("data-parallaxanimation");b=("window.aux_opts2 = "+b).replace(/'/g,'"');try{eval(b)}catch(f){console.info(b,f),window.aux_opts2=null}if(window.aux_opts2){for(w=0;w<window.aux_opts2.length;w++)0==isNaN(Number(window.aux_opts2[w].initial))&&(window.aux_opts2[w].initial=Number(window.aux_opts2[w].initial)),0==isNaN(Number(window.aux_opts2[w].mid))&&
    (window.aux_opts2[w].mid=Number(window.aux_opts2[w].mid)),0==isNaN(Number(window.aux_opts2[w]["final"]))&&(window.aux_opts2[w]["final"]=Number(window.aux_opts2[w]["final"]));a.data("parallax_options",window.aux_opts2)}}});da&&(D=!0,setTimeout(function(){D=!1},da));a.hasClass("simple-parallax")?(g.wrap('<div class="simple-parallax-inner"></div>'),"on"==b.simple_parallaxer_convert_simple_img_to_bg_if_possible&&g.attr("data-src")&&0==g.children().length&&g.parent().addClass("is-image"),0<m&&P()):P();
    ma=setInterval(xa,1E3);setTimeout(function(){},1500);a.hasClass("use-loading")&&(0<a.find(".divimage").length||0<a.children("img").length?0<a.find(".divimage").length&&(V&&(a.find(".divimage").eq(0).css("background-image","url("+V+")"),a.find(".dzsparallaxer--target-con .divimage").css("background-image","url("+V+")")),E=String(a.find(".divimage").eq(0).css("background-image")).split('"')[1],void 0==E&&(E=String(a.find(".divimage").eq(0).css("background-image")).split("url(")[1],E=String(E).split(")")[0]),
        F=new Image,F.onload=function(c){a.addClass("loaded");"horizontal"==b.settings_mode&&(console.info(F,E,F.naturalWidth,x,r),J=F.naturalWidth,ea=F.naturalHeight,r=J/ea*h,console.log(J,ea,r,h),g.hasClass("divimage"),console.info(ca),ca.css({left:"calc(-100% + 1px)"}),g.css({width:"100%"}),g.hasClass("repeat-pattern")&&(console.info("nw - ",J,"cw - ",x),r=Math.ceil(x/J)*J,console.info("tw - ",r)),a.find(".dzsparallaxer--target-con").css({width:r}))},F.src=E):a.addClass("loaded"),setTimeout(function(){a.addClass("loaded");
        na()},1E4));a.get(0).api_set_update_func=function(a){G=a};a.get(0).api_handle_scroll=u;a.get(0).api_destroy=wa;a.get(0).api_destroy_listeners=ya;a.get(0).api_handle_resize=W;if("scroll"==b.settings_mode||"oneelement"==b.settings_mode)c(window).off("scroll.dzsprx"+N),c(window).on("scroll.dzsprx"+N,u),u(),setTimeout(u,1E3),document&&document.addEventListener&&document.addEventListener("touchmove",fa,!1);if("mouse_body"==b.settings_mode||"on"==b.settings_movexaftermouse||L.length)c(document).on("mousemove",
        fa)}}function wa(){G=null;oa=!0;G=null;c(window).off("scroll.dzsprx"+N,u);document&&document.addEventListener&&document.removeEventListener("touchmove",fa,!1)}function xa(){ha=!0}function ya(){console.info("DESTROY LISTENERS",a);clearInterval(ma);c(window).off("scroll.dzsprx"+N)}function W(g,d){x=a.width();X=window.innerWidth;p=window.innerHeight;var f={call_from:"event"};d&&(f=c.extend(f,d));if(!1!==O){if("oneelement"==b.settings_mode){var e=a.css("transform");a.css("transform","translate3d(0,0,0)")}y=
    parseInt(a.offset().top,10);if("autocheck"==f.call_from&&4>Math.abs(pa-p)&&4>Math.abs(qa-y))return"oneelement"==b.settings_mode&&a.css("transform",e),!1;pa=p;qa=y;M&&U&&(x<M?a.height(x/M*U):a.height(U));760>x?a.addClass("under-760"):a.removeClass("under-760");500>x?a.addClass("under-500"):a.removeClass("under-500");ia&&clearTimeout(ia);ia=setTimeout(na,700);"on"==b.js_breakout&&(a.css("width",X+"px"),a.css("margin-left","0"),0<a.offset().left&&a.css("margin-left","-"+a.offset().left+"px"))}}function na(){h=
    a.outerHeight();k=g.outerHeight();p=window.innerHeight;b.settings_substract_from_th&&(k-=b.settings_substract_from_th);b.settings_clip_height_is_window_height&&(h=window.innerHeight);0==a.hasClass("allbody")&&0==a.hasClass("dzsparallaxer---window-height")&&0==M&&(k<=la&&0<k?("oneelement"!=b.settings_mode&&0==a.hasClass("do-not-set-js-height")&&0==a.hasClass("height-is-based-on-content")&&a.height(k),h=a.height(),is_ie()&&10>=version_ie()?g.css("top","0"):g.css("transform",""),K&&K.css("opacity","0")):
    "oneelement"!=b.settings_mode&&0==a.hasClass("do-not-set-js-height")&&a.hasClass("height-is-based-on-content"));g.attr("data-forcewidth_ratio")&&(g.width(Number(g.attr("data-forcewidth_ratio"))*g.height()),g.width()<a.width()&&g.width(a.width()));clearTimeout(ra);ra=setTimeout(u,200)}function fa(a){if("mouse_body"==b.settings_mode){l=a.pageY-c(window).scrollTop();if(0==k)return;var d=l/p*(h-k);C=l/h;0<d&&(d=0);d<h-k&&(d=h-k);1<C&&(C=1);0>C&&(C=0);Q=d}if("on"==b.settings_movexaftermouse){var f=a.pageX;
    f=f/X*(x-r);0<f&&(f=0);f<x-r&&(f=x-r);sa=f}if(L)for(f=a.pageX,a=a.clientY,f=f/X*m*2-m,d=a/p*m*4-2*m,f>m&&(f=m),f<-m&&(f=-m),d>m&&(d=m),d<-m&&(d=-m),a=0;a<L.length;a++)L[a].css({top:d,left:f},{queue:!1,duration:100})}function u(n,d){l=c(window).scrollTop();t=0;y>l-p&&l<y+a.outerHeight()?D=!1:b.settings_detect_out_of_screen&&(D=!0);z&&(l=-parseInt(z.css("top"),10),z.data("targettop")&&(l=-z.data("targettop")));b.settings_listen_to_object_scroll_top&&(l=b.settings_listen_to_object_scroll_top.val);isNaN(l)&&
(l=0);n&&"on"==b.init_functional_remove_delay_on_scroll&&(D=!1);var f={force_vi_y:null,from:"",force_ch:null,force_th:null,force_th_only_big_diff:!0};d&&(f=c.extend(f,d));b.settings_clip_height_is_window_height&&(h=window.innerHeight);null!=f.force_ch&&(h=f.force_ch);null!=f.force_th&&(f.force_th_only_big_diff?20<Math.abs(f.force_th-k)&&(k=f.force_th):k=f.force_th);!1===O&&(p=window.innerHeight,l+p>=a.offset().top&&aa());if(0!=k&&!1!==O&&("scroll"==b.settings_mode||"oneelement"==b.settings_mode)){if("oneelement"==
    b.settings_mode){var e=(l-y+p)/p;a.attr("id");0>e&&(e=0);1<e&&(e=1);"reverse"==b.direction&&(e=Math.abs(1-e));Q=t=2*e*b.settings_mode_oneelement_max_offset-b.settings_mode_oneelement_max_offset;a.attr("id")}if("scroll"==b.settings_mode){"fromtop"==b.mode_scroll&&(t=l/h*(h-k),"on"==b.is_fullscreen&&(t=l/(k-p)*(h-k),z&&(t=l/(z.height()-p)*(h-k))),"reverse"==b.direction&&(t=(1-l/h)*(h-k),"on"==b.is_fullscreen&&(t=(1-l/(k-p))*(h-k),z&&(t=(1-l/(z.height()-p))*(h-k)))));y=a.offset().top;z&&(y=-parseInt(z.css("top"),
    10));e=(l-(y-p))/(y+h-(y-p));"on"==b.is_fullscreen&&(e=l/(c("body").height()-p),z&&(e=l/(z.outerHeight()-p)));1<e&&(e=1);0>e&&(e=0);if(I)for(w=0;w<I.length;w++){var x=I[w],q=x.data("parallax_options");if(q)for(var r=0;r<q.length;r++){if(.5>=e){var u=2*e;var A=2*e-1;0>A&&(A=-A);u=A*q[r].initial+u*q[r].mid}else u=2*(e-.5),A=u-1,0>A&&(A=-A),u=A*q[r].mid+u*q[r]["final"];A=q[r].value;A=A.replace(/{{val}}/g,u);x.css(q[r].property,A)}}"normal"==b.mode_scroll&&(t=e*(h-k),"reverse"==b.direction&&(t=(1-e)*
    (h-k)),a.hasClass("debug-target")&&console.info(b.mode_scroll,l,y,p,h,y+h,e));"fromtop"==b.mode_scroll&&t<h-k&&(t=h-k);a.hasClass("simple-parallax")&&(e=(l+p-y)/(p+k),0>e&&(e=0),1<e&&(e=1),e=Math.abs(1-e),a.hasClass("is-mobile")&&(m=a.height()/2),t=2*e*m-m);ba&&(e=Math.abs((l-y)/a.outerHeight()-1),1<e&&(e=1),0>e&&(e=0),ba.css("opacity",e));C=l/h;0==a.hasClass("simple-parallax")&&(0<t&&(t=0),t<h-k&&(t=h-k));1<C&&(C=1);0>C&&(C=0);f.force_vi_y&&(t=f.force_vi_y);Q=t;ta=C;if(0===B||"css"==b.animation_engine)v=
    Q,0==D&&(a.hasClass("simple-parallax")?(g.parent().hasClass("is-image")||a.hasClass("simple-parallax--is-only-image"))&&g.css("background-position-y","calc(50% - "+parseInt(v,10)+"px)"):is_ie()&&10>=version_ie()?g.css("top",""+v+"px"):(g.css("transform","translate3d("+H+"px,"+v+"px,0)"),"oneelement"==b.settings_mode&&a.css("transform","translate3d("+H+"px,"+v+"px,0)")))}}}function P(){if(D)return requestAnimFrame(P),!1;isNaN(v)&&(v=0);ha&&(ha=!1);if("horizontal"==b.settings_mode)return!1;if(0===B||
    "css"==b.animation_engine)return G&&G(v),requestAnimFrame(P),!1;R=v;Y=Q-R;S=T;Z=ta-S;"easeIn"==b.easing&&(v=Number(Math.easeIn(1,R,Y,B).toFixed(5)),T=Number(Math.easeIn(1,S,Z,B).toFixed(5)));"easeOutQuad"==b.easing&&(v=Math.easeOutQuad(1,R,Y,B),T=Math.easeOutQuad(1,S,Z,B));"easeInOutSine"==b.easing&&(v=Math.easeInOutSine(1,R,Y,B),T=Math.easeInOutSine(1,S,Z,B));H=0;"on"==b.settings_movexaftermouse&&(ja=H,ua=sa-ja,H=Math.easeIn(1,ja,ua,B));a.hasClass("simple-parallax")?g.parent().hasClass("is-image")&&
    g.css("background-position-y","calc(50% - "+parseInt(v,10)+"px)"):is_ie()&&10>=version_ie()?g.css("top",""+v+"px"):(g.css("transform","translate3d("+H+"px,"+v+"px,0)"),"oneelement"==b.settings_mode&&a.css("transform","translate3d("+H+"px,"+v+"px,0)"));K&&K.css("opacity",T);G&&G(v);if(oa)return!1;requestAnimFrame(P)}var a=c(this),g=null,ca=null,K=null,ba=null,N=window.dzsprx_index++,w=0,r=0,k=0,h=0,x=0,X=0,p=0,J=0,ea=0,pa=0,qa=0,la=0,ia=0,B=0,v=0,H=0,T=0,R=0,ja=0,S=0,Q=0,sa=0,ta=0,Y=0,ua=0,Z=0,G=null,
    z=null,l=0,t=0,C=0,y=0,V="",O=!1,ha=!1,I=null,oa=!1,D=!1,ka=0,da=0,ma=0,ra=0,M=0,U=0,L=[],F=null,E="";ka=Number(b.init_delay);da=Number(b.init_functional_delay);ka?setTimeout(n,ka):n()})};window.dzsprx_init=function(b,n){if("undefined"!=typeof n&&"undefined"!=typeof n.init_each&&1==n.init_each){var m=0,va;for(va in n)m++;1==m&&(n=void 0);c(b).each(function(){c(this).dzsparallaxer(n)})}else c(b).dzsparallaxer(n)}})(jQuery);
function is_mobile(){var c=navigator.userAgent||navigator.vendor||window.opera;return/windows phone/i.test(c)||/android/i.test(c)||/iPad|iPhone|iPod/.test(c)&&!window.MSStream?!0:!1}function is_touch_device(){return!!("ontouchstart"in window)}window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(c){window.setTimeout(c,1E3/60)}}();
function is_ie(){var c=window.navigator.userAgent,b=c.indexOf("MSIE ");if(0<b)return parseInt(c.substring(b+5,c.indexOf(".",b)),10);if(0<c.indexOf("Trident/"))return b=c.indexOf("rv:"),parseInt(c.substring(b+3,c.indexOf(".",b)),10);b=c.indexOf("Edge/");return 0<b?parseInt(c.substring(b+5,c.indexOf(".",b)),10):!1}function is_ie11(){return!window.ActiveXObject&&"ActiveXObject"in window}function version_ie(){return parseFloat(navigator.appVersion.split("MSIE")[1])}
jQuery(document).ready(function(c){c(".dzsparallaxer---window-height").each(function(){function b(){n.height(window.innerHeight)}var n=c(this);c(window).on("resize",b);b()});dzsprx_init(".dzsparallaxer.auto-init",{init_each:!0})});
