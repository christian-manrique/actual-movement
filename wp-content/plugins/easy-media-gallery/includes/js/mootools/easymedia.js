/*
mediaboxAdvanced v1.5.4 - The ultimate extension of Slimbox and Mediabox; an all-media script
updated 2011.2.19
	(c) 2007-2011 John Einselen - http://iaian7.com
based on Slimbox v1.64 - The ultimate lightweight Lightbox clone
	(c) 2007-2008 Christophe Beyls - http://www.digitalia.be

description: The ultimate extension of Slimbox and Mediabox; an all-media script

license: MIT-style

authors:
- John Einselen
- Christophe Beyls
- Contributions from many others

requires:
- core/1.3.2: [Core, Array, String, Number, Function, Object, Event, Browser, Class, Class.Extras, Slick.*, Element.*, FX.*, DOMReady, Swiff]
- Quickie/2.1: '*'

provides: [Mediabox.open, Mediabox.close, Mediabox.recenter, Mediabox.scanPage]

--------------------------------------------------------------------------------------+
Easy Media Gallery Lite v1.3.131 rev.1.1.3.97

http://ghozylab.com/
http://wordpress.org/extend/plugins/easy-media-gallery/
--------------------------------------------------------------------------------------+*/

var Easymedia;!function(){function e(){C.setStyles({top:window.getScrollTop(),left:window.getScrollLeft()})}function t(){S=window.getWidth(),k=window.getHeight(),C.setStyles({width:S,height:k})}function o(o){Browser.firefox&&["object",window.ie?"select":"embed"].forEach(function(e){Array.forEach($$(e),function(e){o&&(e._easymedia=e.style.visibility),e.style.visibility=o?"hidden":e._easymedia})}),C.style.display=o?"":"none";var l=o?"addEvent":"removeEvent";(Browser.Platform.ios||Browser.ie6)&&window[l]("scroll",e),window[l]("resize",t),w.keyboard&&document[l]("keydown",i)}function i(e){if(w.keyboardAlpha)switch(e.code){case 27:case 88:case 67:m();break;case 37:case 80:l();break;case 39:case 78:a()}else switch(e.code){case 27:m();break;case 37:l();break;case 39:a()}return w.keyboardStop?!1:void 0}function l(){return r(f)}function a(){return r(u)}function r(e){function t(){if(H.match(/quietube\.com/i)?(V=H.split("v.php/"),H=V[1]):H.match(/\/\/yfrog/i)&&(J=H.substring(H.length-1),J.match(/b|g|j|p|t/i)&&(J="image"),"s"==J&&(J="flash"),J.match(/f|z/i)&&(J="video"),H+=":iphone"),H.match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i)||"image"==J)J="img",H=H.replace(/twitpic\.com/i,"twitpic.com/show/full"),j=new Image,j.onload=c,j.src=H;else if(H.match(/\.flv|\.m4v|\.mp4/i)||"video"==J)J="obj",q=q||w.defaultWidth,Q=Q||w.defaultHeight,j=new Swiff(""+w.playerpath+"?&amp;teaserURL=&amp;mediaURL="+H+"&allowSmoothing=true&autoPlay="+w.autoplay+"&buffer=6&showTimecode="+w.showTimecode+"&loop="+w.medialoop+"&controlColor="+w.controlColor+"&controlBackColor="+w.controlBackColor+"&playerBackColor="+w.playerBackColor+"&defaultVolume="+w.volume+"&scaleIfFullScreen=true&showScalingButton=true&crop=false",{id:"mbVideo",width:q,height:Q,params:{wmode:w.wmodeNB,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/\.mp3|\.aac|tweetmic\.com|tmic\.fm/i)||"audio"==J)J="obj",q=q||w.defaultWidth,Q=Q||"17",H.match(/tweetmic\.com|tmic\.fm/i)&&(H=H.split("/"),H[4]=H[4]||H[3],H="http://media4.fjarnet.net/tweet/tweetmicapp-"+H[4]+".mp3"),j=new Swiff(""+w.playerpath+"?mediaURL="+H+"&allowSmoothing=true&autoPlay="+w.autoplay+"&buffer=6&showTimecode="+w.showTimecode+"&loop="+w.medialoop+"&controlColor="+w.controlColor+"&controlBackColor="+w.controlBackColor+"&defaultVolume="+w.volume+"&scaleIfFullScreen=true&showScalingButton=true&crop=false",{id:"mbAudio",width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/\.swf/i)||"flash"==J)J="obj",q=q||w.defaultWidth,Q=Q||w.defaultHeight,j=new Swiff(H,{id:"mbFlash",width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/\.mov|\.m4a|\.aiff|\.avi|\.caf|\.dv|\.mid|\.m3u|\.mp3|\.mp2|\.mp4|\.qtz/i)||"qt"==J)J="qt",q=q||w.defaultWidth,Q=parseInt(Q,10)+16||w.defaultHeight,j=new Quickie(H,{id:"EasymediaQT",width:q,height:Q,attributes:{controller:w.controller,autoplay:w.autoplay,volume:w.volume,loop:w.medialoop,bgcolor:w.bgcolor}}),c();else if(H.match(/blip\.tv/i))J="obj",q=q||"640",Q=Q||"390",j=new Swiff(H,{src:H,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/break\.com/i))J="obj",q=q||"464",Q=Q||"376",X=H.match(/\d{6}/g),j=new Swiff("http://embed.break.com/"+X,{width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/dailymotion\.com/i))dlmtnID=H.split(/[_]/)[0],V=dlmtnID.split("/"),w.html5?(J="url",q=q||"560",Q=Q||"315",X=V[4],j=new Element("iframe",{src:"https://www.dailymotion.com/embed/video/"+X+"?logo=0&autoPlay="+w.autoplayNum,id:X,width:q,height:Q,frameborder:0}),c()):(J="obj",q=q||"480",Q=Q||"381",j=new Swiff(H,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c());else if(H.match(/facebook\.com/i))w.html5?(H.indexOf("video_id=")>-1?V=H.split("video_id="):H.indexOf("videos/")>-1&&(V=H.split("videos/")),J="url",q=q||"1280",Q=Q||"720",X="mediaId_"+(new Date).getTime(),j=new Element("iframe",{src:"https://www.facebook.com/video/embed?video_id="+V[1],id:X,width:q,height:Q,frameborder:0}),c()):(J="obj",q=q||"320",Q=Q||"240",V=H.split("v="),V=V[1].split("&"),X=V[0],j=new Swiff("https://www.facebook.com/v/"+X,{movie:"https://www.facebook.com/v/"+X,classid:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c());else if(H.match(/flickr\.com(?!.+\/show\/)/i))J="obj",q=q||"500",Q=Q||"375",V=H.split("/"),X=V[5],j=new Swiff("https://www.flickr.com/apps/video/stewart.swf",{id:X,classid:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",width:q,height:Q,params:{flashvars:"photo_id="+X+"&amp;show_info_box="+w.flInfo,wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/gametrailers\.com/i))J="obj",q=q||"480",Q=Q||"392",X=H.match(/\d{5}/g),j=new Swiff("https://www.gametrailers.com/remote_wrap.php?mid="+X,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/google\.com\/videoplay/i))J="obj",q=q||"400",Q=Q||"326",V=H.split("="),X=V[1],j=new Swiff("https://video.google.com/googleplayer.swf?docId="+X+"&autoplay="+w.autoplayNum,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/megavideo\.com/i))J="obj",q=q||"640",Q=Q||"360",V=H.split("="),X=V[1],j=new Swiff("http://wwwstatic.megavideo.com/mv_player.swf?v="+X,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/metacafe\.com\/watch/i))J="obj",q=q||"400",Q=Q||"345",V=H.split("/"),X=V[4],j=new Swiff("http://www.metacafe.com/fplayer/"+X+"/.swf?playerVars=autoPlay="+w.autoplayYes,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/vids\.myspace\.com/i))J="obj",q=q||"425",Q=Q||"360",j=new Swiff(H,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/revver\.com/i))J="obj",q=q||"480",Q=Q||"392",V=H.split("/"),X=V[4],j=new Swiff("http://flash.revver.com/player/1.0/player.swf?mediaId="+X+"&affiliateId="+w.revverID+"&allowFullScreen="+w.revverFullscreen+"&autoStart="+w.autoplay+"&backColor=#"+w.revverBack+"&frontColor=#"+w.revverFront+"&gradColor=#"+w.revverGrad+"&shareUrl=revver",{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/rutube\.ru/i))J="obj",q=q||"470",Q=Q||"353",V=H.split("="),X=V[1],j=new Swiff("https://video.rutube.ru/"+X,{movie:"https://video.rutube.ru/"+X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/tudou\.com/i))J="obj",q=q||"400",Q=Q||"340",V=H.split("/"),X=V[5],j=new Swiff("http://www.tudou.com/v/"+X,{width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/twitcam\.com/i))J="obj",q=q||"320",Q=Q||"265",V=H.split("/"),X=V[3],j=new Swiff("http://static.livestream.com/chromelessPlayer/wrappers/TwitcamPlayer.swf?hash="+X,{width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/twitvid\.com/i))J="obj",q=q||"600",Q=Q||"338",V=H.split("/"),X=V[3],j=new Swiff("http://www.twitvid.com/player/"+X,{width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c();else if(H.match(/ustream\.tv/i))J="url",q=q||"480",Q=Q||"302",X="ustream_"+(new Date).getTime(),j=new Element("iframe",{src:H+"?v=3&amp;wmode=opaque",id:X,width:q,height:Q,frameborder:0}),c();else if(H.match(/youku\.com/i))w.html5?(J="url",q=q||"510",Q=Q||"498",V=H.replace(/.*id_([^&]*)\.html.*/,"$1"),j=new Element("iframe",{src:"https://player.youku.com/embed/"+V,id:X,width:q,height:Q,frameborder:0}),c()):(J="obj",q=q||"480",Q=Q||"400",V=H.split("id_"),X=V[1],j=new Swiff("https://player.youku.com/player.php/sid/"+X+"=/v.swf",{width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c());else if(H.match(/youtu\.be\//i))V=H.split(".be/"),w.html5?(J="url",q=q||"640",Q=Q||"385",X="mediaId_"+(new Date).getTime(),j=new Element("iframe",{src:"https://www.youtube.com/embed/"+V[1]+"?rel="+w.ytRel+w.ytautoplay,id:X,width:q,height:Q,frameborder:0}),c()):(J="obj",X=V[1],q=q||"480",Q=Q||"385",j=new Swiff("https://www.youtube.com/v/"+X+"&autoplay="+w.ytautoplay+"&fs="+w.fullscreenNum+"&border="+w.ytBorder+"&color1=0x"+w.ytColor1+"&color2=0x"+w.ytColor2+"&rel="+w.ytRel+"&showinfo="+w.ytInfo+"&showsearch="+w.ytSearch,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c());else if(H.match(/youtube\.com\/watch/i)){var e=/\&list=/g,t=H.match(e);"&list="!=t?(V=H.split("v="),w.html5?(J="url",q=q||"640",Q=Q||"385",X="mediaId_"+(new Date).getTime(),j=new Element("iframe",{src:"https://www.youtube.com/embed/"+V[1]+"?rel="+w.ytRel+w.ytautoplay,id:X,width:q,height:Q,frameborder:0}),c()):(J="obj",X=V[1],q=q||"480",Q=Q||"385",j=new Swiff("https://www.youtube.com/v/"+X+"&autoplay="+w.ytautoplay+"&fs="+w.fullscreenNum+"&border="+w.ytBorder+"&color1=0x"+w.ytColor1+"&color2=0x"+w.ytColor2+"&rel="+w.ytRel+"&showinfo="+w.ytInfo+"&showsearch="+w.ytSearch,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c())):"&list="==t&&(J="url",ytplID=H.split(/[=&]/)[1],ytplList=H.split("list="),q=q||"480",Q=Q||"385",j=new Element("iframe",{src:"https://www.youtube.com/embed/"+ytplID+"?list="+ytplList[1]+"&rel="+w.ytRel+w.ytautoplay,id:ytplID,width:q,height:Q,frameborder:0}),c())}else H.match(/youtube\.com\/embed/i)?(V=H.split("embed/"),w.html5?(J="url",q=q||"640",Q=Q||"385",X="mediaId_"+(new Date).getTime(),j=new Element("iframe",{src:"https://www.youtube.com/embed/"+V[1]+"?rel="+w.ytRel+w.ytautoplay,id:X,width:q,height:Q,frameborder:0}),c()):(J="obj",X=V[1],q=q||"480",Q=Q||"385",j=new Swiff("https://www.youtube.com/v/"+X+"&autoplay="+w.ytautoplay+"&fs="+w.fullscreenNum+"&border="+w.ytBorder+"&color1=0x"+w.ytColor1+"&color2=0x"+w.ytColor2+"&rel="+w.ytRel+"&showinfo="+w.ytInfo+"&showsearch="+w.ytSearch,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c())):H.match(/veoh\.com/i)?(J="obj",q=q||"410",Q=Q||"341",H=H.replace("%3D","/"),V=H.split("watch/"),X=V[1],j=new Swiff("http://www.veoh.com/swf/webplayer/WebPlayer.swf?version=AFrontend.5.7.0.1396&permalinkId="+X+"&player=videodetailsembedded&videoAutoPlay="+w.autoplayNum+"&id=anonymous",{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c()):H.match(/viddler\.com/i)?(J="obj",q=q||"437",Q=Q||"370",V=H.split("/"),X=V[4],j=new Swiff(H,{id:"viddler_"+X,movie:H,classid:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen,id:"viddler_"+X,movie:H}}),c()):H.match(/livestream\.com/i)?(J="url",X="liveStream_"+(new Date).getTime(),q=q||"510",Q=Q||"498",j=new Element("iframe",{src:H+"?autoPlay="+w.lsautoplay,id:X,width:q,height:Q,frameborder:0}),c()):H.match(/vimeo\.com/i)?(q=q||"640",Q=Q||"360",V=H.split("/"),X=V[3],w.html5?(J="url",X="mediaId_"+(new Date).getTime(),j=new Element("iframe",{src:"https://player.vimeo.com/video/"+V[3]+w.vmautoplay,id:X,width:q,height:Q,frameborder:0}),c()):(J="obj",j=new Swiff("https://www.vimeo.com/moogaloop.swf?clip_id="+X+"&amp;server=www.vimeo.com&amp;fullscreen="+w.fullscreenNum+"&amp;autoplay="+w.vmautoplay+"&amp;show_title="+w.vmTitle+"&amp;show_byline="+w.vmByline+"&amp;show_portrait="+w.vmPortrait+"&amp;color="+w.vmColor,{id:X,width:q,height:Q,params:{wmode:w.wmode,bgcolor:w.bgcolor,allowscriptaccess:w.scriptaccess,allowfullscreen:w.fullscreen}}),c())):H.match(/\#mb_/i)?(J="inline",q=q||w.defaultWidth,Q=Q||w.defaultHeight,URLsplit=H.split("#"),j=document.id(URLsplit[1]),c()):(J="url",q=q||w.defaultWidth,Q=Q||w.defaultHeight,X="mediaId_"+(new Date).getTime(),j=new Element("iframe",{src:H,id:X,width:q,height:Q,frameborder:0}),c())}return e>=0?(x.set("html",""),h=e,f=(h||!w.loop?h:p.length)-1,u=h+1,u==p.length&&(u=w.loop?0:-1),d(),I.className="mbLoading",j&&"inline"==J&&!w.inlineClone&&j.adopt(x.getChildren()),p[e][2]||(p[e][2]=""),A=p[e][2].split(" "),R=A.length,R>1?(q=A[R-2].match("%")?window.getWidth()*(.01*A[R-2].replace("%","")):A[R-2],Q=A[R-1].match("%")?window.getHeight()*(.01*A[R-1].replace("%","")):A[R-1]):(q="",Q=""),H=p[e][0],$=p[e][3],jQuery.ajax({url:w.ajaxpath,data:{action:"emg_get_data_slider_ajax",security:w.ajaxnnce,id:$},dataType:"JSON",type:"POST",success:function(e){T=[e[0],e[1]],t()},error:function(e){alert(e)}}),!1):void 0}function c(){"img"==J?x.addEvent("click",a):x.removeEvent("click",a),"img"==J||"url"==J?(q=j.width,Q=j.height,x.setStyles({cursor:"pointer"}),w.imgBackground?x.setStyles({backgroundImage:"url("+H+")",display:""}):(Q>=k-w.imgPadding&&Q/k>=q/S?(Q=k-w.imgPadding,q=j.width=parseInt(Q/j.height*q,10),j.height=Q):q>=S-w.imgPadding&&q/S>Q/k&&(q=S-w.imgPadding,Q=j.height=parseInt(q/j.width*Q,10),j.width=q),Browser.ie&&(j=document.id(j)),"true"==w.clickBlock&&w.clickBlock&&j.addEvent("mousedown",function(e){e.stop()}).addEvent("contextmenu",function(e){e.stop()}),x.setStyles({backgroundImage:"none",display:""}),j.inject(x))):"inline"==J?(x.setStyles({backgroundImage:"none",display:""}),w.inlineClone?x.grab(j.get("html")):x.adopt(j.getChildren())):"qt"==J?(x.setStyles({backgroundImage:"none",display:""}),j.inject(x)):"url"==J?(x.setStyles({backgroundImage:"none",display:""}),j.inject(x)):"obj"==J?Browser.Plugins.Flash.version<"8"?(x.setStyles({backgroundImage:"none",display:""}),x.set("html",'<div id="mbError"><b>Error</b><br/>Adobe Flash is either not installed or not up to date, please visit <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Get Flash" target="_new">Adobe.com</a> to download the free player.</div>'),q=w.DefaultWidth,Q=w.DefaultHeight):(x.setStyles({backgroundImage:"none",display:""}),j.inject(x)):(x.setStyles({backgroundImage:"none",display:""}),x.set("html",w.flashText),q=w.defaultWidth,Q=w.defaultHeight),"none"!=T[0]?(L.setStyles({display:""}),L.set("text",w.showCaption?T[0]:"")):L.setStyles({display:"none"}),"none"!=T[1]?(P.setStyles({display:""}),P.set("html",T[1])):P.setStyles({display:"none"}),N.set("html",w.showCounter&&p.length>1?w.counterText.replace(/\{x\}/,w.countBack?p.length-h:h+1).replace(/\{y\}/,p.length):""),f>=0&&p[f][0].match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i)&&(G.src=p[f][0].replace(/twitpic\.com/i,"twitpic.com/show/full")),u>=0&&p[u][0].match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i)&&(Y.src=p[u][0].replace(/twitpic\.com/i,"twitpic.com/show/full")),f>=0&&(O.style.display=""),u>=0&&(W.style.display=""),x.setStyles({width:q+"px",height:Q+"px"}),_.setStyles({width:q-M+"px"}),D.setStyles({width:q-M+"px"}),q=x.offsetWidth,Q=x.offsetHeight+_.offsetHeight,y=Q>=g+g?-g:-(Q/2),v=q>=b+b?-b:-(q/2),w.resizeOpening?E.resize.start({width:q+20,height:Q,marginTop:-250,marginLeft:v-U}):(I.setStyles({width:q+20,height:Q,marginTop:y-U,marginLeft:v-U}),s()),jQuery("#mbCenter").stop().animate({top:jQuery(window).scrollTop()+290},500),function(){I.setStyle("height","auto")}.delay(500,this)}function s(){E.media.start(1)}function n(){I.className="",E.bottom.start(1)}function d(){j&&("inline"!=J||w.inlineClone||j.adopt(x.getChildren()),j.onload=function(){}),E.resize.cancel(),E.media.cancel().set(0),E.bottom.cancel().set(0),$$(O,W).setStyle("display","none"),$$(N).setStyle("display","none")}function m(){if(h>=0){"inline"!=J||w.inlineClone||j.adopt(x.getChildren()),j.onload=function(){},x.empty();for(var e in E)E[e].cancel();I.setStyle("display","none"),E.overlay.chain(o).start(0)}return!1}var w,p,h,f,u,g,y,b,v,S,k,E,j,C,I,x,B,T,_,L,P,D,F,N,O,W,H,A,R,z,$,q,Q,V,U,M,G=new Image,Y=new Image,J="none",X="easyMedia";window.addEvent("domready",function(){document.id(document.body).adopt($$([C=new Element("div",{id:"mbOverlay"}).addEvent("click",m),I=new Element("div",{id:"mbCenter"})]).setStyle("display","none")),B=new Element("div",{id:"mbContainer"}).inject(I,"inside"),x=new Element("div",{id:"mbMedia"}).inject(B,"inside"),_=new Element("div",{id:"mbBottom"}).inject(I,"inside").adopt(W=new Element("a",{id:"mbNextLink",href:"#"}).addEvent("click",a),O=new Element("a",{id:"mbPrevLink",href:"#"}).addEvent("click",l),L=new Element("div",{id:"mbTitle"}),P=new Element("div",{id:"mbSbtitle"}),N=new Element("div",{id:"mbNumber"}),D=new Element("div",{id:"mbCaption"}),F=new Element("div",{id:"mbSosmeddiv"}),closeLink=new Element("a",{id:"mbCloseLink",href:"#"}).addEvent("click",m)),E={overlay:new Fx.Tween(C,{property:"opacity",duration:360}).set(0),media:new Fx.Tween(x,{property:"opacity",duration:360,onComplete:n}),bottom:new Fx.Tween(_,{property:"opacity",duration:240}).set(0)}}),Easymedia={close:function(){m()},recenter:function(){I&&!Browser.Platform.ios&&(b=window.getScrollLeft()+window.getWidth()/2,I.setStyles({left:b,marginLeft:-(q/2)-U}),g=window.getScrollTop()+window.getHeight()/2,U=(I.getStyle("padding-left").toInt()||0)+(x.getStyle("margin-left").toInt()||0)+(x.getStyle("padding-left").toInt()||0),I.setStyles({top:g,left:b,marginTop:-(Q/2)-U,marginLeft:-(q/2)-U}))},open:function(i,l,a){return w={buttonText:["<big>&laquo;</big>","<big>&raquo;</big>","<big></big>"],counterText:"({x} of {y})",linkText:'<a href="{x}" target="_new">{x}</a><br/>open in a new tab</div>',flashText:'<b>Error</b><br/>Adobe Flash is either not installed or not up to date, please visit <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Get Flash" target="_new">Adobe.com</a> to download the free player.',center:!0,loop:!0,keyboard:!0,keyboardAlpha:!1,keyboardStop:!1,overlayOpacity:EasyLite.ovrlayop,resizeOpening:!0,resizeDuration:240,initialWidth:90,initialHeight:90,defaultWidth:640,defaultHeight:360,showCaption:!0,showCounter:!1,countBack:!1,clickBlock:EasyLite.drclick,iOShtml:!0,imgBackground:!1,imgPadding:100,overflow:"auto",inlineClone:!1,html5:"true",scriptaccess:"true",fullscreen:"true",fullscreenNum:"1",autoplay:EasyLite.audioautoplay,autoplayNum:EasyLite.vidautopc,autoplayYes:"yes",volume:EasyLite.audiovol,medialoop:EasyLite.audioloop,bgcolor:"#000000",wmode:"transparent",playerpath:EasyLite.nblaswf,showTimecode:"false",controlColor:"0xFFFFFF",controlBackColor:"0x0000000",playerBackColor:"",wmodeNB:"transparent",controller:"true",flInfo:"true",revverID:"187866",revverFullscreen:"true",revverBack:"000000",revverFront:"ffffff",revverGrad:"000000",usViewers:"true",ytBorder:"0",ytColor1:"000000",ytColor2:"333333",ytRel:"0",ytInfo:"1",ytSearch:"0",ytautoplay:EasyLite.vidautopa,lsautoplay:EasyLite.vidautopd,vuPlayer:"basic",vmTitle:"1",vmByline:"1",vmPortrait:"1",vmautoplay:EasyLite.vidautopb,vmColor:"ffffff",ajaxpath:EasyLite.ajaxpth,ajaxnnce:EasyLite.ajaxnonce},Browser.firefox2&&(w.overlayOpacity=1,C.className="mbOverlayOpaque"),Browser.Platform.ios&&(w.keyboard=!1,w.resizeOpening=!1,C.className="mbMobile",_.className="mbMobile",e()),Browser.ie6&&(w.resizeOpening=!1,C.className="mbOverlayAbsolute",e()),"string"==typeof i&&(i=[[i,l,a]],l=0),p=i,w.loop=w.loop&&p.length>1,t(),o(!0),g=window.getScrollTop()+window.getHeight()/2,b=window.getScrollLeft()+window.getWidth()/2,U=(I.getStyle("padding-left").toInt()||0)+(x.getStyle("margin-left").toInt()||0)+(x.getStyle("padding-left").toInt()||0),M=_.getStyle("margin-left").toInt()+_.getStyle("padding-left").toInt()+_.getStyle("margin-right").toInt()+_.getStyle("padding-right").toInt(),I.setStyles({top:g,left:b,width:w.initialWidth,height:w.initialHeight,marginTop:-(w.initialHeight/2)-U,marginLeft:-(w.initialWidth/2)-U,display:""}),E.resize=new Fx.Morph(I,{duration:w.resizeDuration,onComplete:s}),E.overlay.start(w.overlayOpacity),r(l)}},Element.implement({easymedia:function(e,t){return $$(this).easymedia(e,t),this}}),Elements.implement({easymedia:function(e,t,o,i){t=t||function(e){return z=e.rel.split(/[\[\]]/),z=z[1],[e.get("href"),e.title,z,e.get("class")]},o=o||function(){return!0};var l=this;return l.addEvent("contextmenu",function(e){this.toString().match(/\.gif|\.jpg|\.jpeg|\.png/i)&&e.stop()}),l.removeEvents("click").addEvent("click",function(){var i=l.filter(o,this),a=[],r=[];return i.each(function(e,t){r.indexOf(e.toString())<0&&(a.include(i[t]),r.include(i[t].toString()))}),Easymedia.open(a.map(t),r.indexOf(this.toString()),e)}),l}})}(),Browser.Plugins.QuickTime=function(){if(navigator.plugins){for(var e=0,t=navigator.plugins.length;t>e;e++)if(navigator.plugins[e].name.indexOf("QuickTime")>=0)return!0}else{var o;try{o=new ActiveXObject("QuickTime.QuickTime")}catch(i){}if(o)return!0}return!1}(),Easymedia.scanPage=function(){var e=$$("a").filter(function(e){return e.rel&&e.rel.test(/^easymedia/i)});e.easymedia({},null,function(e){var t=this.rel.replace(/[\[\]|]/gi," "),o=t.split(" "),i="\\["+o[1]+"[ \\]]",l=new RegExp(i);return this==e||this.rel.length>8&&e.rel.match(l)})},window.addEvents({domready:Easymedia.scanPage,resize:Easymedia.recenter});