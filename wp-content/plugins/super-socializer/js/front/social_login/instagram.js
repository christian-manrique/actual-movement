function theChampInitializeInstaLogin(){var e=typeof theChampLinkingRedirection!="undefined"&&theChampLinkingRedirection!=""?theChampLinkingRedirection:theChampTwitterRedirect;theChampPopup("https://instagram.com/oauth/authorize/?client_id="+theChampInstaId+"&redirect_uri="+encodeURI(theChampSiteUrl+"?ssredirect=")+e+"&response_type=token")}function theChampGetHashValue(e){if(typeof e!=="string"){e=""}else{e=e.toLowerCase()}var t=location.hash.toLowerCase().match(new RegExp(e+"=([^&]*)"));var n="";if(t){n=t[1]}return n}function theChampGetParameterByName(e){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var t=new RegExp("[\\?&]"+e+"=([^&#]*)"),n=t.exec(location.search);return n===null?"":decodeURIComponent(n[1].replace(/\+/g," "))}var theChampInstagramHash=theChampGetHashValue("access_token");if(theChampInstagramHash!=""){var redirection=theChampGetParameterByName("ssredirect");window.opener.location.href=theChampSiteUrl+"?SuperSocializerInstaToken="+theChampInstagramHash+"&super_socializer_redirect_to="+(redirection?redirection:theChampTwitterRedirect);window.close()}