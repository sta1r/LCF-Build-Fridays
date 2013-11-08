/*
JUITTER 1.0.0 - 22/07/2009 - http://juitter.com
BY RODRIGO FANTE - http://rodrigofante.com

** jQuery 1.2.* or higher required

Juitter is distributed under the MIT License
Read more about the MIT License --> http://www.opensource.org/licenses/mit-license.php

This script is just a beta test version, download and use it at your own risk.
The Juitter developer shall have no responsability for data loss or damage of any kind by using this script.
*/
(function($) {
	var conf = {},
		// JUITTER DEFAULT CONFIGURATION ========================
		// YOU CAN CHANGE THE DYNAMIC VARS ON CALLING THE start method, see the system.js for more information about it.

		numMSG = 20; // set the number of messages to be show
		containerDiv="juitterContainer", // //Set a place holder DIV which will receive the list of tweets example <div id="juitterContainer"></div>
		loadMSG="Loading messages...", // Loading message, if you want to show an image, fill it with "image/gif" and go to the next variable to set which image you want to use on 
		imgName="loader.gif", // Loading image, to enable it, go to the loadMSG var above and change it to "image/gif"
		readMore="Read it on Twitter", // read more message to be show after the tweet content
		nameUser="image" // insert "image" to show avatar of "text" to show the name of the user that sent the tweet 
		live:"live-20", //optional, disabled by default, the number after "live-" indicates the time in seconds to wait before request the Twitter API for updates, I do not recommend to use less than 60 seconds.
		// end of configuration
	
		// some global vars
		aURL="";msgNb=1;
		var mode,param,time,lang,contDiv,loadMSG,gifName,numMSG,readMore,fromID,ultID,filterWords;
		var running=false;
		// Twitter API Urls
		apifMultipleUSER = "http://search.twitter.com/search.json?from%3A";
		apifUSER = "http://search.twitter.com/search.json?q=from%3A";
		apitMultipleUSER = "http://search.twitter.com/search.json?to%3A";
		apitUSER = "http://search.twitter.com/search.json?q=to%3A";
		apiSEARCH = "http://search.twitter.com/search.json?q=";
	$.Juitter = {
		registerVar: function(opt){
			mode=opt.searchType;
			param=opt.searchObject;
			timer=opt.live;
			lang=opt.lang?opt.lang:"";
			contDiv=opt.placeHolder?opt.placeHolder:containerDiv;
			loadMSG=opt.loadMSG?opt.loadMSG:loadMSG;
			gifName=opt.imgName?opt.imgName:imgName;
			numMSG=opt.total?opt.total:numMSG;
			readMore=opt.readMore?opt.readMore:readMore;
			fromID=opt.nameUser?opt.nameUser:nameUser;
			filterWords=opt.filter;
			openLink=opt.openExternalLinks?"target='_blank'":"";
		},
		start: function(opt) {		
			ultID=0;
			if($("#"+contDiv)){	
				this.registerVar(opt);
				// show the load message
				this.loading();
				// create the URL  to be request at the Twitter API
				aURL = this.createURL();
				// query the twitter API and create the tweets list
				this.conectaTwitter(1);		
				// if live mode is enabled, schedule the next twitter API query
				if(timer!=undefined&&!running) this.temporizador();
			}   
		},
		update: function(){
			this.conectaTwitter(2);		
			if(timer!=undefined) this.temporizador();
		},
		loading: function(){
			if(loadMSG=="image/gif"){
				$("<img></img>")
					.attr('src', gifName)
					.appendTo("#"+contDiv); 
			} else $("#"+contDiv).html(loadMSG);
		},
		createURL: function(){
			var url = "";
			jlg=lang.length>0?"&lang="+lang:jlg=""; 
			var seachMult = param.search(/,/);
			if(seachMult>0) param = "&ors="+param.replace(/,/g,"+");
			if(mode=="fromUser" && seachMult<=0) url=apifUSER+param;
			else if(mode=="fromUser" && seachMult>=0) url=apifMultipleUSER+param;
			else if(mode=="toUser" && seachMult<=0) url=apitUSER+param;
			else if(mode=="toUser" && seachMult>=0) url=apitMultipleUSER+param;
			else if(mode=="searchWord") url=apiSEARCH+param+jlg;
			url += "&rpp="+numMSG;		
			return url;
		},
		delRegister: function(){
			// remove the oldest entry on the tweets list
			if(msgNb>=numMSG){
				$(".twittLI").each(
					function(o,elemLI){
						if(o>=numMSG) $(this).hide("slow");													  
					}
				);
			}	
		},
		conectaTwitter: function(e){
			// query the twitter api and create the tweets list
			$.ajax({
				url: aURL,
				type: 'GET',
				dataType: 'jsonp',
				timeout: 1000,
				error: function(){ $("#"+contDiv).html("fail#"); },
				success: function(json){
					if(e==1) $("#"+contDiv).html("");				
					$.each(json.results,function(i,item) {
						if(e==1 || (i<numMSG && item.id>ultID)){
							if(i==0){
								tultID = item.id;
								$("<ul></ul>")
									.attr('id', 'twittList'+ultID)
									.attr('class','twittList')
									.prependTo("#"+contDiv);  
							}
							if (item.text != "undefined") {
								var link =  "http://twitter.com/"+item.from_user+"/status/"+item.id;  
								
								var tweet = $.Juitter.filter(item.text);
								
								if(fromID=="image") mHTML="<div class='tweet-image'><a href='http://www.twitter.com/"+item.from_user+"'><img src='"+item.profile_image_url+"' alt='"+item.from_user+"' class='juitterAvatar' /></a></div><div class='tweet-body'>"+$.Juitter.textFormat(tweet)+/*" - <span class='time'>"+item.created_at+"</span>"<br><b>from @" + item.from_user + "</b>*/"</div>";
								else mHTML="<a href='http://www.twitter.com/"+item.from_user+"'>@"+item.from_user+":</a> "+$.Juitter.textFormat(tweet)+" -| <span class='time'>"+item.created_at+"</span> |-  <a href='" + link + "' "+openLink+">"+readMore+"</a>";
								
								$("<li></li>") 
									.html(mHTML)  
									.attr('id', 'twittLI'+msgNb)
									.attr('class', 'twittLI')
									.appendTo("#twittList"+ultID);

								$('#twittLI'+msgNb).hide();
								$('#twittLI'+msgNb).show("slow");
								
								// remove old entries
								$.Juitter.delRegister();
								msgNb++;								
							}
						}
					});	
					ultID=tultID;
				}
			});
		},	
		filter: function(s){
			if(filterWords){
				searchWords = filterWords.split(",");				
				if(searchWords.length>0){
					cleanHTML=s;
					$.each(searchWords,function(i,item){	
						sW = item.split("->").length>0 ? item.split("->")[0] : item;
						rW = item.split("->").length>0 ? item.split("->")[1] : "";					
						regExp=eval('/'+sW+'/gi');					
						cleanHTML = cleanHTML.replace(regExp, rW);							
					});
				} else cleanHTML = s;			
				return cleanHTML;
			} else return s;
		},
		textFormat: function(texto){
			//make links
			var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
			texto = texto.replace(exp,"<a href='$1' class='extLink' "+openLink+">$1</a>"); 
			var exp = /[\@]+([A-Za-z0-9-_]+)/ig;
			texto = texto.replace(exp,"<a href='http://twitter.com/$1' class='profileLink'>@$1</a>"); 
			var exp = /[\#]+([A-Za-z0-9-_]+)/ig;
			texto = texto.replace(exp,"<a href='http://juitter.com/#$1' onclick='$.Juitter.start({searchType:\"searchWord\",searchObject:\"$1\"});return false;' class='hashLink'>#$1</a>"); 
			// make it bold
			if(mode=="searchWord"){
				tempParam = param.replace(/&ors=/,"");
				arrParam = tempParam.split("+");
				$.each(arrParam,function(i,item){					
					regExp=eval('/'+item+'/gi');
					newString = new String('<b>'+item+'</b> ');
					texto = texto.replace(regExp, newString);					  
				});				
			}
			return texto;
		},
		temporizador: function(){
			// live mode timer
			running=true;
			aTim = timer.split("-");
			if(aTim[0]=="live" && aTim[1].length>0){
				tempo = aTim[1]*1000;
				setTimeout("$.Juitter.update()",tempo);
			}
		}
	};	
})(jQuery);

/* http://keith-wood.name/countdown.html
   Countdown for jQuery v1.5.8.
   Written by Keith Wood (kbwood{at}iinet.com.au) January 2008.
   Dual licensed under the GPL (http://dev.jquery.com/browser/trunk/jquery/GPL-LICENSE.txt) and 
   MIT (http://dev.jquery.com/browser/trunk/jquery/MIT-LICENSE.txt) licenses. 
   Please attribute the author if you use it. */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(B($){B 1i(){8.1D=[];8.1D[\'\']={1j:[\'2C\',\'2D\',\'2E\',\'2F\',\'2G\',\'2H\',\'2I\'],2J:[\'2K\',\'2L\',\'2M\',\'2N\',\'2O\',\'2P\',\'2Q\'],1k:[\'y\',\'m\',\'w\',\'d\'],1u:E,1E:\':\',1V:Q};8.1g={1W:E,1X:E,1Y:E,1Z:E,20:\'2R\',1l:\'\',21:Q,1v:0,1F:\'\',22:\'\',23:\'\',25:Q,26:E,27:E,28:1};$.1m(8.1g,8.1D[\'\']);8.1n=[]}x w=\'G\';x Y=0;x O=1;x W=2;x D=3;x H=4;x M=5;x S=6;$.1m(1i.29,{1o:\'2S\',2T:2U(B(){$.G.2a()},2V),19:[],2W:B(a){8.1G(8.1g,a);1H(8.1g,a||{})},1I:B(a,b,c,e,f,g,h,i){A(1p b==\'2X\'&&b.2Y==P){i=b.1J();h=b.1K();g=b.1L();f=b.1M();e=b.T();c=b.17();b=b.18()}x d=K P();d.2Z(b);d.2b(1);d.31(c||0);d.2b(e||1);d.33(f||0);d.34((g||0)-(U.35(a)<30?a*1a:a));d.36(h||0);d.37(i||0);F d},2c:B(a){F a[0]*38+a[1]*39+a[2]*2d+a[3]*2e+a[4]*2f+a[5]*1a+a[6]},3a:B(a,b){A(!b){F $.G.1g}x c=$.X(a,w);F(b==\'3b\'?c.Z:c.Z[b])},2g:B(a,b){x c=$(a);A(c.2h(8.1o)){F}c.3c(8.1o);x d={Z:$.1m({},b),z:[0,0,0,0,0,0,0]};$.X(a,w,d);8.2i(a)},1N:B(a){A(!8.1O(a)){8.19.2j(a)}},1O:B(a){F($.3d(a,8.19)>-1)},1w:B(b){8.19=$.3e(8.19,B(a){F(a==b?E:a)})},2a:B(){V(x i=8.19.1x-1;i>=0;i--){8.1q(8.19[i])}},1q:B(a,b){x c=$(a);b=b||$.X(a,w);A(!b){F}c.3f(8.2k(b));c[(8.C(b,\'1V\')?\'3g\':\'3h\')+\'3i\'](\'3j\');x d=8.C(b,\'27\');A(d){x e=b.R!=\'2l\'?b.z:8.1y(b,b.11,8.C(b,\'1v\'),K P());x f=8.C(b,\'28\');A(f==1||8.2c(e)%f==0){d.1r(a,[e])}}x g=b.R!=\'1s\'&&(b.I?b.1b.L()<b.I.L():b.1b.L()>=b.13.L());A(g&&!b.1P){b.1P=1Q;A(8.1O(a)||8.C(b,\'25\')){8.1w(a);x h=8.C(b,\'26\');A(h){h.1r(a,[])}x i=8.C(b,\'23\');A(i){x j=8.C(b,\'1l\');b.Z.1l=i;8.1q(a,b);b.Z.1l=j}x k=8.C(b,\'22\');A(k){3k.3l=k}}b.1P=Q}1c A(b.R==\'1s\'){8.1w(a)}$.X(a,w,b)},2i:B(a,b,c){b=b||{};A(1p b==\'1R\'){x d=b;b={};b[d]=c}x e=$.X(a,w);A(e){8.1G(e.Z,b);1H(e.Z,b);8.2m(a,e);$.X(a,w,e);x f=K P();A((e.I&&e.I<f)||(e.13&&e.13>f)){8.1N(a)}8.1q(a,e)}},1G:B(a,b){x c=Q;V(x n 1S b){A(n!=\'1u\'&&n.N(/[2n]2o/)){c=1Q;14}}A(c){V(x n 1S a){A(n.N(/[2n]2o[0-9]/)){a[n]=E}}}},2m:B(a,b){x c;x d=8.C(b,\'1Z\');x e=0;x f=E;V(x i=0;i<8.1n.1x;i++){A(8.1n[i][0]==d){f=8.1n[i][1];14}}A(f!=E){e=(d?f:0);c=K P()}1c{x g=(d?d.1r(a,[]):E);c=K P();e=(g?c.L()-g.L():0);8.1n.2j([d,e])}x h=8.C(b,\'1Y\');h=(h==E?-c.3m():h);b.I=8.C(b,\'1X\');A(b.I!=E){b.I=8.1I(h,8.1z(b.I,E));A(b.I&&e){b.I.1A(b.I.1J()+e)}}b.13=8.1I(h,8.1z(8.C(b,\'1W\'),c));A(e){b.13.1A(b.13.1J()+e)}b.11=8.2p(b)},3n:B(a){x b=$(a);A(!b.2h(8.1o)){F}8.1w(a);b.3o(8.1o).3p();$.3q(a,w)},3r:B(a){8.R(a,\'1s\')},3s:B(a){8.R(a,\'2l\')},3t:B(a){8.R(a,E)},R:B(a,b){x c=$.X(a,w);A(c){A(c.R==\'1s\'&&!b){c.z=c.2q;x d=(c.I?\'-\':\'+\');c[c.I?\'I\':\'13\']=8.1z(d+c.z[0]+\'y\'+d+c.z[1]+\'o\'+d+c.z[2]+\'w\'+d+c.z[3]+\'d\'+d+c.z[4]+\'h\'+d+c.z[5]+\'m\'+d+c.z[6]+\'s\');8.1N(a)}c.R=b;c.2q=(b==\'1s\'?c.z:E);$.X(a,w,c);8.1q(a,c)}},3u:B(a){x b=$.X(a,w);F(!b?E:(!b.R?b.z:8.1y(b,b.11,8.C(b,\'1v\'),K P())))},C:B(a,b){F(a.Z[b]!=E?a.Z[b]:$.G.1g[b])},1z:B(k,l){x m=B(a){x b=K P();b.2r(b.L()+a*15);F b};x n=B(a){a=a.3v();x b=K P();x c=b.18();x d=b.17();x e=b.T();x f=b.1M();x g=b.1L();x h=b.1K();x i=/([+-]?[0-9]+)\\s*(s|m|h|d|w|o|y)?/g;x j=i.2s(a);3w(j){3x(j[2]||\'s\'){1d\'s\':h+=1e(j[1],10);14;1d\'m\':g+=1e(j[1],10);14;1d\'h\':f+=1e(j[1],10);14;1d\'d\':e+=1e(j[1],10);14;1d\'w\':e+=1e(j[1],10)*7;14;1d\'o\':d+=1e(j[1],10);e=U.1B(e,$.G.1h(c,d));14;1d\'y\':c+=1e(j[1],10);e=U.1B(e,$.G.1h(c,d));14}j=i.2s(a)}F K P(c,d,e,f,g,h,0)};x o=(k==E?l:(1p k==\'1R\'?n(k):(1p k==\'3y\'?m(k):k)));A(o)o.1A(0);F o},1h:B(a,b){F 32-K P(a,b,32).T()},1T:B(a){F a},2k:B(c){x d=8.C(c,\'1v\');c.z=(c.R?c.z:8.1y(c,c.11,d,K P()));x e=Q;x f=0;x g=d;x h=$.1m({},c.11);V(x i=Y;i<=S;i++){e|=(c.11[i]==\'?\'&&c.z[i]>0);h[i]=(c.11[i]==\'?\'&&!e?E:c.11[i]);f+=(h[i]?1:0);g-=(c.z[i]>0?1:0)}x j=[Q,Q,Q,Q,Q,Q,Q];V(x i=S;i>=Y;i--){A(c.11[i]){A(c.z[i]){j[i]=1Q}1c{j[i]=g>0;g--}}}x k=8.C(c,\'21\');x l=8.C(c,\'1l\');x m=(k?8.C(c,\'1k\'):8.C(c,\'1j\'));x n=8.C(c,\'1u\')||8.1T;x o=8.C(c,\'1E\');x p=8.C(c,\'1F\')||\'\';x q=B(a){x b=$.G.C(c,\'1k\'+n(c.z[a]));F(h[a]?c.z[a]+(b?b[a]:m[a])+\' \':\'\')};x r=B(a){x b=$.G.C(c,\'1j\'+n(c.z[a]));F((!d&&h[a])||(d&&j[a])?\'<16 1t="3z"><16 1t="2t">\'+c.z[a]+\'</16><3A/>\'+(b?b[a]:m[a])+\'</16>\':\'\')};F(l?8.2u(c,h,l,k,d,j):((k?\'<16 1t="1U 2t\'+(c.R?\' 2v\':\'\')+\'">\'+q(Y)+q(O)+q(W)+q(D)+(h[H]?8.J(c.z[H],2):\'\')+(h[M]?(h[H]?o:\'\')+8.J(c.z[M],2):\'\')+(h[S]?(h[H]||h[M]?o:\'\')+8.J(c.z[S],2):\'\'):\'<16 1t="1U 3B\'+(d||f)+(c.R?\' 2v\':\'\')+\'">\'+r(Y)+r(O)+r(W)+r(D)+r(H)+r(M)+r(S))+\'</16>\'+(p?\'<16 1t="1U 3C">\'+p+\'</16>\':\'\')))},2u:B(c,d,e,f,g,h){x j=8.C(c,(f?\'1k\':\'1j\'));x k=8.C(c,\'1u\')||8.1T;x l=B(a){F($.G.C(c,(f?\'1k\':\'1j\')+k(c.z[a]))||j)[a]};x m=B(a,b){F U.1C(a/b)%10};x o={3D:8.C(c,\'1F\'),3E:8.C(c,\'1E\'),3F:l(Y),3G:c.z[Y],3H:8.J(c.z[Y],2),3I:8.J(c.z[Y],3),3J:m(c.z[Y],1),3K:m(c.z[Y],10),3L:m(c.z[Y],1f),3M:m(c.z[Y],15),3N:l(O),3O:c.z[O],3P:8.J(c.z[O],2),3Q:8.J(c.z[O],3),3R:m(c.z[O],1),3S:m(c.z[O],10),3T:m(c.z[O],1f),3U:m(c.z[O],15),3V:l(W),3W:c.z[W],3X:8.J(c.z[W],2),3Y:8.J(c.z[W],3),3Z:m(c.z[W],1),40:m(c.z[W],10),41:m(c.z[W],1f),42:m(c.z[W],15),43:l(D),44:c.z[D],45:8.J(c.z[D],2),46:8.J(c.z[D],3),47:m(c.z[D],1),48:m(c.z[D],10),49:m(c.z[D],1f),4a:m(c.z[D],15),4b:l(H),4c:c.z[H],4d:8.J(c.z[H],2),4e:8.J(c.z[H],3),4f:m(c.z[H],1),4g:m(c.z[H],10),4h:m(c.z[H],1f),4i:m(c.z[H],15),4j:l(M),4k:c.z[M],4l:8.J(c.z[M],2),4m:8.J(c.z[M],3),4n:m(c.z[M],1),4o:m(c.z[M],10),4p:m(c.z[M],1f),4q:m(c.z[M],15),4r:l(S),4s:c.z[S],4t:8.J(c.z[S],2),4u:8.J(c.z[S],3),4v:m(c.z[S],1),4w:m(c.z[S],10),4x:m(c.z[S],1f),4y:m(c.z[S],15)};x p=e;V(x i=Y;i<=S;i++){x q=\'4z\'.4A(i);x r=K 2w(\'\\\\{\'+q+\'<\\\\}(.*)\\\\{\'+q+\'>\\\\}\',\'g\');p=p.2x(r,((!g&&d[i])||(g&&h[i])?\'$1\':\'\'))}$.2y(o,B(n,v){x a=K 2w(\'\\\\{\'+n+\'\\\\}\',\'g\');p=p.2x(a,v)});F p},J:B(a,b){a=\'\'+a;A(a.1x>=b){F a}a=\'4B\'+a;F a.4C(a.1x-b)},2p:B(a){x b=8.C(a,\'20\');x c=[];c[Y]=(b.N(\'y\')?\'?\':(b.N(\'Y\')?\'!\':E));c[O]=(b.N(\'o\')?\'?\':(b.N(\'O\')?\'!\':E));c[W]=(b.N(\'w\')?\'?\':(b.N(\'W\')?\'!\':E));c[D]=(b.N(\'d\')?\'?\':(b.N(\'D\')?\'!\':E));c[H]=(b.N(\'h\')?\'?\':(b.N(\'H\')?\'!\':E));c[M]=(b.N(\'m\')?\'?\':(b.N(\'M\')?\'!\':E));c[S]=(b.N(\'s\')?\'?\':(b.N(\'S\')?\'!\':E));F c},1y:B(c,d,e,f){c.1b=f;c.1b.1A(0);x g=K P(c.1b.L());A(c.I){A(f.L()<c.I.L()){c.1b=f=g}1c{f=c.I}}1c{g.2r(c.13.L());A(f.L()>c.13.L()){c.1b=f=g}}x h=[0,0,0,0,0,0,0];A(d[Y]||d[O]){x i=$.G.1h(f.18(),f.17());x j=$.G.1h(g.18(),g.17());x k=(g.T()==f.T()||(g.T()>=U.1B(i,j)&&f.T()>=U.1B(i,j)));x l=B(a){F(a.1M()*1a+a.1L())*1a+a.1K()};x m=U.4D(0,(g.18()-f.18())*12+g.17()-f.17()+((g.T()<f.T()&&!k)||(k&&l(g)<l(f))?-1:0));h[Y]=(d[Y]?U.1C(m/12):0);h[O]=(d[O]?m-h[Y]*12:0);f=K P(f.L());x n=(f.T()==i);x o=$.G.1h(f.18()+h[Y],f.17()+h[O]);A(f.T()>o){f.2z(o)}f.4E(f.18()+h[Y]);f.4F(f.17()+h[O]);A(n){f.2z(o)}}x p=U.1C((g.L()-f.L())/15);x q=B(a,b){h[a]=(d[a]?U.1C(p/b):0);p-=h[a]*b};q(W,2d);q(D,2e);q(H,2f);q(M,1a);q(S,1);A(p>0&&!c.I){x r=[1,12,4.4G,7,24,1a,1a];x s=S;x t=1;V(x u=S;u>=Y;u--){A(d[u]){A(h[s]>=t){h[s]=0;p=1}A(p>0){h[u]++;p=0;s=u;t=1}}t*=r[u]}}A(e){V(x u=Y;u<=S;u++){A(e&&h[u]){e--}1c A(!e){h[u]=0}}}F h}});B 1H(a,b){$.1m(a,b);V(x c 1S b){A(b[c]==E){a[c]=E}}F a}$.4H.G=B(a){x b=4I.29.4J.4K(4L,1);A(a==\'4M\'||a==\'4N\'){F $.G[\'2A\'+a+\'1i\'].1r($.G,[8[0]].2B(b))}F 8.2y(B(){A(1p a==\'1R\'){$.G[\'2A\'+a+\'1i\'].1r($.G,[8].2B(b))}1c{$.G.2g(8,a)}})};$.G=K 1i()})(4O);',62,299,'||||||||this|||||||||||||||||||||||||var||_periods|if|function|_get||null|return|countdown||_since|_minDigits|new|getTime||match||Date|false|_hold||getDate|Math|for||data||options||_show||_until|break|1000|span|getMonth|getFullYear|_timerTargets|60|_now|else|case|parseInt|100|_defaults|_getDaysInMonth|Countdown|labels|compactLabels|layout|extend|_serverSyncs|markerClassName|typeof|_updateCountdown|apply|pause|class|whichLabels|significant|_removeTarget|length|_calculatePeriods|_determineTime|setMilliseconds|min|floor|regional|timeSeparator|description|_resetExtraLabels|extendRemove|UTCDate|getMilliseconds|getSeconds|getMinutes|getHours|_addTarget|_hasTarget|_expiring|true|string|in|_normalLabels|countdown_row|isRTL|until|since|timezone|serverSync|format|compact|expiryUrl|expiryText||alwaysExpire|onExpiry|onTick|tickInterval|prototype|_updateTargets|setUTCDate|periodsToSeconds|604800|86400|3600|_attachCountdown|hasClass|_changeCountdown|push|_generateHTML|lap|_adjustSettings|Ll|abels|_determineShow|_savePeriods|setTime|exec|countdown_amount|_buildLayout|countdown_holding|RegExp|replace|each|setDate|_|concat|Years|Months|Weeks|Days|Hours|Minutes|Seconds|labels1|Year|Month|Week|Day|Hour|Minute|Second|dHMS|hasCountdown|_timer|setInterval|980|setDefaults|object|constructor|setUTCFullYear||setUTCMonth||setUTCHours|setUTCMinutes|abs|setUTCSeconds|setUTCMilliseconds|31557600|2629800|_settingsCountdown|all|addClass|inArray|map|html|add|remove|Class|countdown_rtl|window|location|getTimezoneOffset|_destroyCountdown|removeClass|empty|removeData|_pauseCountdown|_lapCountdown|_resumeCountdown|_getTimesCountdown|toLowerCase|while|switch|number|countdown_section|br|countdown_show|countdown_descr|desc|sep|yl|yn|ynn|ynnn|y1|y10|y100|y1000|ol|on|onn|onnn|o1|o10|o100|o1000|wl|wn|wnn|wnnn|w1|w10|w100|w1000|dl|dn|dnn|dnnn|d1|d10|d100|d1000|hl|hn|hnn|hnnn|h1|h10|h100|h1000|ml|mn|mnn|mnnn|m1|m10|m100|m1000|sl|sn|snn|snnn|s1|s10|s100|s1000|yowdhms|charAt|0000000000|substr|max|setFullYear|setMonth|3482|fn|Array|slice|call|arguments|getTimes|settings|jQuery'.split('|'),0,{}))