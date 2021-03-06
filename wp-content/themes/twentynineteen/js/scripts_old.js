/**
 * The Mag+ theme scripts
 *
 * - General functions
 * - Document ready
 * - Signup & download forms
 */


/* jQuery UI */
/*! jQuery UI - v1.8.23 - 2012-08-15
* https://github.com/jquery/jquery-ui
* Includes: jquery.ui.core.js
* Copyright (c) 2012 AUTHORS.txt; Licensed MIT, GPL */
(function(a,b){function c(b,c){var e=b.nodeName.toLowerCase();if("area"===e){var f=b.parentNode,g=f.name,h;return!b.href||!g||f.nodeName.toLowerCase()!=="map"?!1:(h=a("img[usemap=#"+g+"]")[0],!!h&&d(h))}return(/input|select|textarea|button|object/.test(e)?!b.disabled:"a"==e?b.href||c:c)&&d(b)}function d(b){return!a(b).parents().andSelf().filter(function(){return a.curCSS(this,"visibility")==="hidden"||a.expr.filters.hidden(this)}).length}a.ui=a.ui||{};if(a.ui.version)return;a.extend(a.ui,{version:"1.8.23",keyCode:{ALT:18,BACKSPACE:8,CAPS_LOCK:20,COMMA:188,COMMAND:91,COMMAND_LEFT:91,COMMAND_RIGHT:93,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,MENU:93,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38,WINDOWS:91}}),a.fn.extend({propAttr:a.fn.prop||a.fn.attr,_focus:a.fn.focus,focus:function(b,c){return typeof b=="number"?this.each(function(){var d=this;setTimeout(function(){a(d).focus(),c&&c.call(d)},b)}):this._focus.apply(this,arguments)},scrollParent:function(){var b;return a.browser.msie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?b=this.parents().filter(function(){return/(relative|absolute|fixed)/.test(a.curCSS(this,"position",1))&&/(auto|scroll)/.test(a.curCSS(this,"overflow",1)+a.curCSS(this,"overflow-y",1)+a.curCSS(this,"overflow-x",1))}).eq(0):b=this.parents().filter(function(){return/(auto|scroll)/.test(a.curCSS(this,"overflow",1)+a.curCSS(this,"overflow-y",1)+a.curCSS(this,"overflow-x",1))}).eq(0),/fixed/.test(this.css("position"))||!b.length?a(document):b},zIndex:function(c){if(c!==b)return this.css("zIndex",c);if(this.length){var d=a(this[0]),e,f;while(d.length&&d[0]!==document){e=d.css("position");if(e==="absolute"||e==="relative"||e==="fixed"){f=parseInt(d.css("zIndex"),10);if(!isNaN(f)&&f!==0)return f}d=d.parent()}}return 0},disableSelection:function(){return this.bind((a.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(a){a.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),a("<a>").outerWidth(1).jquery||a.each(["Width","Height"],function(c,d){function h(b,c,d,f){return a.each(e,function(){c-=parseFloat(a.curCSS(b,"padding"+this,!0))||0,d&&(c-=parseFloat(a.curCSS(b,"border"+this+"Width",!0))||0),f&&(c-=parseFloat(a.curCSS(b,"margin"+this,!0))||0)}),c}var e=d==="Width"?["Left","Right"]:["Top","Bottom"],f=d.toLowerCase(),g={innerWidth:a.fn.innerWidth,innerHeight:a.fn.innerHeight,outerWidth:a.fn.outerWidth,outerHeight:a.fn.outerHeight};a.fn["inner"+d]=function(c){return c===b?g["inner"+d].call(this):this.each(function(){a(this).css(f,h(this,c)+"px")})},a.fn["outer"+d]=function(b,c){return typeof b!="number"?g["outer"+d].call(this,b):this.each(function(){a(this).css(f,h(this,b,!0,c)+"px")})}}),a.extend(a.expr[":"],{data:a.expr.createPseudo?a.expr.createPseudo(function(b){return function(c){return!!a.data(c,b)}}):function(b,c,d){return!!a.data(b,d[3])},focusable:function(b){return c(b,!isNaN(a.attr(b,"tabindex")))},tabbable:function(b){var d=a.attr(b,"tabindex"),e=isNaN(d);return(e||d>=0)&&c(b,!e)}}),a(function(){var b=document.body,c=b.appendChild(c=document.createElement("div"));c.offsetHeight,a.extend(c.style,{minHeight:"100px",height:"auto",padding:0,borderWidth:0}),a.support.minHeight=c.offsetHeight===100,a.support.selectstart="onselectstart"in c,b.removeChild(c).style.display="none"}),a.curCSS||(a.curCSS=a.css),a.extend(a.ui,{plugin:{add:function(b,c,d){var e=a.ui[b].prototype;for(var f in d)e.plugins[f]=e.plugins[f]||[],e.plugins[f].push([c,d[f]])},call:function(a,b,c){var d=a.plugins[b];if(!d||!a.element[0].parentNode)return;for(var e=0;e<d.length;e++)a.options[d[e][0]]&&d[e][1].apply(a.element,c)}},contains:function(a,b){return document.compareDocumentPosition?a.compareDocumentPosition(b)&16:a!==b&&a.contains(b)},hasScroll:function(b,c){if(a(b).css("overflow")==="hidden")return!1;var d=c&&c==="left"?"scrollLeft":"scrollTop",e=!1;return b[d]>0?!0:(b[d]=1,e=b[d]>0,b[d]=0,e)},isOverAxis:function(a,b,c){return a>b&&a<b+c},isOver:function(b,c,d,e,f,g){return a.ui.isOverAxis(b,d,f)&&a.ui.isOverAxis(c,e,g)}})})(jQuery);;/*! jQuery UI - v1.8.23 - 2012-08-15
* https://github.com/jquery/jquery-ui
* Includes: jquery.ui.widget.js
* Copyright (c) 2012 AUTHORS.txt; Licensed MIT, GPL */
(function(a,b){if(a.cleanData){var c=a.cleanData;a.cleanData=function(b){for(var d=0,e;(e=b[d])!=null;d++)try{a(e).triggerHandler("remove")}catch(f){}c(b)}}else{var d=a.fn.remove;a.fn.remove=function(b,c){return this.each(function(){return c||(!b||a.filter(b,[this]).length)&&a("*",this).add([this]).each(function(){try{a(this).triggerHandler("remove")}catch(b){}}),d.call(a(this),b,c)})}}a.widget=function(b,c,d){var e=b.split(".")[0],f;b=b.split(".")[1],f=e+"-"+b,d||(d=c,c=a.Widget),a.expr[":"][f]=function(c){return!!a.data(c,b)},a[e]=a[e]||{},a[e][b]=function(a,b){arguments.length&&this._createWidget(a,b)};var g=new c;g.options=a.extend(!0,{},g.options),a[e][b].prototype=a.extend(!0,g,{namespace:e,widgetName:b,widgetEventPrefix:a[e][b].prototype.widgetEventPrefix||b,widgetBaseClass:f},d),a.widget.bridge(b,a[e][b])},a.widget.bridge=function(c,d){a.fn[c]=function(e){var f=typeof e=="string",g=Array.prototype.slice.call(arguments,1),h=this;return e=!f&&g.length?a.extend.apply(null,[!0,e].concat(g)):e,f&&e.charAt(0)==="_"?h:(f?this.each(function(){var d=a.data(this,c),f=d&&a.isFunction(d[e])?d[e].apply(d,g):d;if(f!==d&&f!==b)return h=f,!1}):this.each(function(){var b=a.data(this,c);b?b.option(e||{})._init():a.data(this,c,new d(e,this))}),h)}},a.Widget=function(a,b){arguments.length&&this._createWidget(a,b)},a.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",options:{disabled:!1},_createWidget:function(b,c){a.data(c,this.widgetName,this),this.element=a(c),this.options=a.extend(!0,{},this.options,this._getCreateOptions(),b);var d=this;this.element.bind("remove."+this.widgetName,function(){d.destroy()}),this._create(),this._trigger("create"),this._init()},_getCreateOptions:function(){return a.metadata&&a.metadata.get(this.element[0])[this.widgetName]},_create:function(){},_init:function(){},destroy:function(){this.element.unbind("."+this.widgetName).removeData(this.widgetName),this.widget().unbind("."+this.widgetName).removeAttr("aria-disabled").removeClass(this.widgetBaseClass+"-disabled "+"ui-state-disabled")},widget:function(){return this.element},option:function(c,d){var e=c;if(arguments.length===0)return a.extend({},this.options);if(typeof c=="string"){if(d===b)return this.options[c];e={},e[c]=d}return this._setOptions(e),this},_setOptions:function(b){var c=this;return a.each(b,function(a,b){c._setOption(a,b)}),this},_setOption:function(a,b){return this.options[a]=b,a==="disabled"&&this.widget()[b?"addClass":"removeClass"](this.widgetBaseClass+"-disabled"+" "+"ui-state-disabled").attr("aria-disabled",b),this},enable:function(){return this._setOption("disabled",!1)},disable:function(){return this._setOption("disabled",!0)},_trigger:function(b,c,d){var e,f,g=this.options[b];d=d||{},c=a.Event(c),c.type=(b===this.widgetEventPrefix?b:this.widgetEventPrefix+b).toLowerCase(),c.target=this.element[0],f=c.originalEvent;if(f)for(e in f)e in c||(c[e]=f[e]);return this.element.trigger(c,d),!(a.isFunction(g)&&g.call(this.element[0],c,d)===!1||c.isDefaultPrevented())}}})(jQuery);;/*! jQuery UI - v1.8.23 - 2012-08-15
* https://github.com/jquery/jquery-ui
* Includes: jquery.ui.position.js
* Copyright (c) 2012 AUTHORS.txt; Licensed MIT, GPL */
(function(a,b){a.ui=a.ui||{};var c=/left|center|right/,d=/top|center|bottom/,e="center",f={},g=a.fn.position,h=a.fn.offset;a.fn.position=function(b){if(!b||!b.of)return g.apply(this,arguments);b=a.extend({},b);var h=a(b.of),i=h[0],j=(b.collision||"flip").split(" "),k=b.offset?b.offset.split(" "):[0,0],l,m,n;return i.nodeType===9?(l=h.width(),m=h.height(),n={top:0,left:0}):i.setTimeout?(l=h.width(),m=h.height(),n={top:h.scrollTop(),left:h.scrollLeft()}):i.preventDefault?(b.at="left top",l=m=0,n={top:b.of.pageY,left:b.of.pageX}):(l=h.outerWidth(),m=h.outerHeight(),n=h.offset()),a.each(["my","at"],function(){var a=(b[this]||"").split(" ");a.length===1&&(a=c.test(a[0])?a.concat([e]):d.test(a[0])?[e].concat(a):[e,e]),a[0]=c.test(a[0])?a[0]:e,a[1]=d.test(a[1])?a[1]:e,b[this]=a}),j.length===1&&(j[1]=j[0]),k[0]=parseInt(k[0],10)||0,k.length===1&&(k[1]=k[0]),k[1]=parseInt(k[1],10)||0,b.at[0]==="right"?n.left+=l:b.at[0]===e&&(n.left+=l/2),b.at[1]==="bottom"?n.top+=m:b.at[1]===e&&(n.top+=m/2),n.left+=k[0],n.top+=k[1],this.each(function(){var c=a(this),d=c.outerWidth(),g=c.outerHeight(),h=parseInt(a.curCSS(this,"marginLeft",!0))||0,i=parseInt(a.curCSS(this,"marginTop",!0))||0,o=d+h+(parseInt(a.curCSS(this,"marginRight",!0))||0),p=g+i+(parseInt(a.curCSS(this,"marginBottom",!0))||0),q=a.extend({},n),r;b.my[0]==="right"?q.left-=d:b.my[0]===e&&(q.left-=d/2),b.my[1]==="bottom"?q.top-=g:b.my[1]===e&&(q.top-=g/2),f.fractions||(q.left=Math.round(q.left),q.top=Math.round(q.top)),r={left:q.left-h,top:q.top-i},a.each(["left","top"],function(c,e){a.ui.position[j[c]]&&a.ui.position[j[c]][e](q,{targetWidth:l,targetHeight:m,elemWidth:d,elemHeight:g,collisionPosition:r,collisionWidth:o,collisionHeight:p,offset:k,my:b.my,at:b.at})}),a.fn.bgiframe&&c.bgiframe(),c.offset(a.extend(q,{using:b.using}))})},a.ui.position={fit:{left:function(b,c){var d=a(window),e=c.collisionPosition.left+c.collisionWidth-d.width()-d.scrollLeft();b.left=e>0?b.left-e:Math.max(b.left-c.collisionPosition.left,b.left)},top:function(b,c){var d=a(window),e=c.collisionPosition.top+c.collisionHeight-d.height()-d.scrollTop();b.top=e>0?b.top-e:Math.max(b.top-c.collisionPosition.top,b.top)}},flip:{left:function(b,c){if(c.at[0]===e)return;var d=a(window),f=c.collisionPosition.left+c.collisionWidth-d.width()-d.scrollLeft(),g=c.my[0]==="left"?-c.elemWidth:c.my[0]==="right"?c.elemWidth:0,h=c.at[0]==="left"?c.targetWidth:-c.targetWidth,i=-2*c.offset[0];b.left+=c.collisionPosition.left<0?g+h+i:f>0?g+h+i:0},top:function(b,c){if(c.at[1]===e)return;var d=a(window),f=c.collisionPosition.top+c.collisionHeight-d.height()-d.scrollTop(),g=c.my[1]==="top"?-c.elemHeight:c.my[1]==="bottom"?c.elemHeight:0,h=c.at[1]==="top"?c.targetHeight:-c.targetHeight,i=-2*c.offset[1];b.top+=c.collisionPosition.top<0?g+h+i:f>0?g+h+i:0}}},a.offset.setOffset||(a.offset.setOffset=function(b,c){/static/.test(a.curCSS(b,"position"))&&(b.style.position="relative");var d=a(b),e=d.offset(),f=parseInt(a.curCSS(b,"top",!0),10)||0,g=parseInt(a.curCSS(b,"left",!0),10)||0,h={top:c.top-e.top+f,left:c.left-e.left+g};"using"in c?c.using.call(b,h):d.css(h)},a.fn.offset=function(b){var c=this[0];return!c||!c.ownerDocument?null:b?a.isFunction(b)?this.each(function(c){a(this).offset(b.call(this,c,a(this).offset()))}):this.each(function(){a.offset.setOffset(this,b)}):h.call(this)}),a.curCSS||(a.curCSS=a.css),function(){var b=document.getElementsByTagName("body")[0],c=document.createElement("div"),d,e,g,h,i;d=document.createElement(b?"div":"body"),g={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"},b&&a.extend(g,{position:"absolute",left:"-1000px",top:"-1000px"});for(var j in g)d.style[j]=g[j];d.appendChild(c),e=b||document.documentElement,e.insertBefore(d,e.firstChild),c.style.cssText="position: absolute; left: 10.7432222px; top: 10.432325px; height: 30px; width: 201px;",h=a(c).offset(function(a,b){return b}).offset(),d.innerHTML="",e.removeChild(d),i=h.top+h.left+(b?2e3:0),f.fractions=i>21&&i<22}()})(jQuery);;/*! jQuery UI - v1.8.23 - 2012-08-15
* https://github.com/jquery/jquery-ui
* Includes: jquery.ui.autocomplete.js
* Copyright (c) 2012 AUTHORS.txt; Licensed MIT, GPL */
(function(a,b){var c=0;a.widget("ui.autocomplete",{options:{appendTo:"body",autoFocus:!1,delay:300,minLength:1,position:{my:"left top",at:"left bottom",collision:"none"},source:null},pending:0,_create:function(){var b=this,c=this.element[0].ownerDocument,d;this.isMultiLine=this.element.is("textarea"),this.element.addClass("ui-autocomplete-input").attr("autocomplete","off").attr({role:"textbox","aria-autocomplete":"list","aria-haspopup":"true"}).bind("keydown.autocomplete",function(c){if(b.options.disabled||b.element.propAttr("readOnly"))return;d=!1;var e=a.ui.keyCode;switch(c.keyCode){case e.PAGE_UP:b._move("previousPage",c);break;case e.PAGE_DOWN:b._move("nextPage",c);break;case e.UP:b._keyEvent("previous",c);break;case e.DOWN:b._keyEvent("next",c);break;case e.ENTER:case e.NUMPAD_ENTER:b.menu.active&&(d=!0,c.preventDefault());case e.TAB:if(!b.menu.active)return;b.menu.select(c);break;case e.ESCAPE:b.element.val(b.term),b.close(c);break;default:clearTimeout(b.searching),b.searching=setTimeout(function(){b.term!=b.element.val()&&(b.selectedItem=null,b.search(null,c))},b.options.delay)}}).bind("keypress.autocomplete",function(a){d&&(d=!1,a.preventDefault())}).bind("focus.autocomplete",function(){if(b.options.disabled)return;b.selectedItem=null,b.previous=b.element.val()}).bind("blur.autocomplete",function(a){if(b.options.disabled)return;clearTimeout(b.searching),b.closing=setTimeout(function(){b.close(a),b._change(a)},150)}),this._initSource(),this.menu=a("<ul></ul>").addClass("ui-autocomplete").appendTo(a(this.options.appendTo||"body",c)[0]).mousedown(function(c){var d=b.menu.element[0];a(c.target).closest(".ui-menu-item").length||setTimeout(function(){a(document).one("mousedown",function(c){c.target!==b.element[0]&&c.target!==d&&!a.ui.contains(d,c.target)&&b.close()})},1),setTimeout(function(){clearTimeout(b.closing)},13)}).menu({focus:function(a,c){var d=c.item.data("item.autocomplete");!1!==b._trigger("focus",a,{item:d})&&/^key/.test(a.originalEvent.type)&&b.element.val(d.value)},selected:function(a,d){var e=d.item.data("item.autocomplete"),f=b.previous;b.element[0]!==c.activeElement&&(b.element.focus(),b.previous=f,setTimeout(function(){b.previous=f,b.selectedItem=e},1)),!1!==b._trigger("select",a,{item:e})&&b.element.val(e.value),b.term=b.element.val(),b.close(a),b.selectedItem=e},blur:function(a,c){b.menu.element.is(":visible")&&b.element.val()!==b.term&&b.element.val(b.term)}}).zIndex(this.element.zIndex()+1).css({top:0,left:0}).hide().data("menu"),a.fn.bgiframe&&this.menu.element.bgiframe(),b.beforeunloadHandler=function(){b.element.removeAttr("autocomplete")},a(window).bind("beforeunload",b.beforeunloadHandler)},destroy:function(){this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete").removeAttr("role").removeAttr("aria-autocomplete").removeAttr("aria-haspopup"),this.menu.element.remove(),a(window).unbind("beforeunload",this.beforeunloadHandler),a.Widget.prototype.destroy.call(this)},_setOption:function(b,c){a.Widget.prototype._setOption.apply(this,arguments),b==="source"&&this._initSource(),b==="appendTo"&&this.menu.element.appendTo(a(c||"body",this.element[0].ownerDocument)[0]),b==="disabled"&&c&&this.xhr&&this.xhr.abort()},_initSource:function(){var b=this,c,d;a.isArray(this.options.source)?(c=this.options.source,this.source=function(b,d){d(a.ui.autocomplete.filter(c,b.term))}):typeof this.options.source=="string"?(d=this.options.source,this.source=function(c,e){b.xhr&&b.xhr.abort(),b.xhr=a.ajax({url:d,data:c,dataType:"json",success:function(a,b){e(a)},error:function(){e([])}})}):this.source=this.options.source},search:function(a,b){a=a!=null?a:this.element.val(),this.term=this.element.val();if(a.length<this.options.minLength)return this.close(b);clearTimeout(this.closing);if(this._trigger("search",b)===!1)return;return this._search(a)},_search:function(a){this.pending++,this.element.addClass("ui-autocomplete-loading"),this.source({term:a},this._response())},_response:function(){var a=this,b=++c;return function(d){b===c&&a.__response(d),a.pending--,a.pending||a.element.removeClass("ui-autocomplete-loading")}},__response:function(a){!this.options.disabled&&a&&a.length?(a=this._normalize(a),this._suggest(a),this._trigger("open")):this.close()},close:function(a){clearTimeout(this.closing),this.menu.element.is(":visible")&&(this.menu.element.hide(),this.menu.deactivate(),this._trigger("close",a))},_change:function(a){this.previous!==this.element.val()&&this._trigger("change",a,{item:this.selectedItem})},_normalize:function(b){return b.length&&b[0].label&&b[0].value?b:a.map(b,function(b){return typeof b=="string"?{label:b,value:b}:a.extend({label:b.label||b.value,value:b.value||b.label},b)})},_suggest:function(b){var c=this.menu.element.empty().zIndex(this.element.zIndex()+1);this._renderMenu(c,b),this.menu.deactivate(),this.menu.refresh(),c.show(),this._resizeMenu(),c.position(a.extend({of:this.element},this.options.position)),this.options.autoFocus&&this.menu.next(new a.Event("mouseover"))},_resizeMenu:function(){var a=this.menu.element;a.outerWidth(Math.max(a.width("").outerWidth()+1,this.element.outerWidth()))},_renderMenu:function(b,c){var d=this;a.each(c,function(a,c){d._renderItem(b,c)})},_renderItem:function(b,c){return a("<li></li>").data("item.autocomplete",c).append(a("<a></a>").text(c.label)).appendTo(b)},_move:function(a,b){if(!this.menu.element.is(":visible")){this.search(null,b);return}if(this.menu.first()&&/^previous/.test(a)||this.menu.last()&&/^next/.test(a)){this.element.val(this.term),this.menu.deactivate();return}this.menu[a](b)},widget:function(){return this.menu.element},_keyEvent:function(a,b){if(!this.isMultiLine||this.menu.element.is(":visible"))this._move(a,b),b.preventDefault()}}),a.extend(a.ui.autocomplete,{escapeRegex:function(a){return a.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&")},filter:function(b,c){var d=new RegExp(a.ui.autocomplete.escapeRegex(c),"i");return a.grep(b,function(a){return d.test(a.label||a.value||a)})}})})(jQuery),function(a){a.widget("ui.menu",{_create:function(){var b=this;this.element.addClass("ui-menu ui-widget ui-widget-content ui-corner-all").attr({role:"listbox","aria-activedescendant":"ui-active-menuitem"}).click(function(c){if(!a(c.target).closest(".ui-menu-item a").length)return;c.preventDefault(),b.select(c)}),this.refresh()},refresh:function(){var b=this,c=this.element.children("li:not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role","menuitem");c.children("a").addClass("ui-corner-all").attr("tabindex",-1).mouseenter(function(c){b.activate(c,a(this).parent())}).mouseleave(function(){b.deactivate()})},activate:function(a,b){this.deactivate();if(this.hasScroll()){var c=b.offset().top-this.element.offset().top,d=this.element.scrollTop(),e=this.element.height();c<0?this.element.scrollTop(d+c):c>=e&&this.element.scrollTop(d+c-e+b.height())}this.active=b.eq(0).children("a").addClass("ui-state-hover").attr("id","ui-active-menuitem").end(),this._trigger("focus",a,{item:b})},deactivate:function(){if(!this.active)return;this.active.children("a").removeClass("ui-state-hover").removeAttr("id"),this._trigger("blur"),this.active=null},next:function(a){this.move("next",".ui-menu-item:first",a)},previous:function(a){this.move("prev",".ui-menu-item:last",a)},first:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},last:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},move:function(a,b,c){if(!this.active){this.activate(c,this.element.children(b));return}var d=this.active[a+"All"](".ui-menu-item").eq(0);d.length?this.activate(c,d):this.activate(c,this.element.children(b))},nextPage:function(b){if(this.hasScroll()){if(!this.active||this.last()){this.activate(b,this.element.children(".ui-menu-item:first"));return}var c=this.active.offset().top,d=this.element.height(),e=this.element.children(".ui-menu-item").filter(function(){var b=a(this).offset().top-c-d+a(this).height();return b<10&&b>-10});e.length||(e=this.element.children(".ui-menu-item:last")),this.activate(b,e)}else this.activate(b,this.element.children(".ui-menu-item").filter(!this.active||this.last()?":first":":last"))},previousPage:function(b){if(this.hasScroll()){if(!this.active||this.first()){this.activate(b,this.element.children(".ui-menu-item:last"));return}var c=this.active.offset().top,d=this.element.height(),e=this.element.children(".ui-menu-item").filter(function(){var b=a(this).offset().top-c+d-a(this).height();return b<10&&b>-10});e.length||(e=this.element.children(".ui-menu-item:first")),this.activate(b,e)}else this.activate(b,this.element.children(".ui-menu-item").filter(!this.active||this.first()?":last":":first"))},hasScroll:function(){return this.element.height()<this.element[a.fn.prop?"prop":"attr"]("scrollHeight")},select:function(a){this._trigger("selected",a,{item:this.active})}})}(jQuery);;

/**************************************************/
/*
/* General functions
/*
/**************************************************/
// A function that just returns false
function __return_false(){ return false; }
//Create indexOf if not exist
if (!Array.prototype.indexOf){ Array.prototype.indexOf = function(elt /*, from*/){ var len = this.length >>> 0; var from = Number(arguments[1]) || 0; from = (from < 0) ? Math.ceil(from) : Math.floor(from); if (from < 0) from += len; for (; from < len; from++){ if (from in this && this[from] === elt) return from; } return -1; }; }

/*
Version: 1.0.5

Documentation: http://baymard.com/labs/country-selector#documentation

Copyright (C) 2011 by Jamie Appleseed, Baymard Institute (baymard.com)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
(function($){
  var settings = {
    'sort': false,
    'sort-attr': 'data-priority',
    'sort-desc': false,
    'autoselect': true,
    'alternative-spellings': true,
    'alternative-spellings-attr': 'data-alternative-spellings',
    'remove-valueless-options': true,
    'copy-attributes-to-text-field': true,
    'autocomplete-plugin': 'jquery_ui',
    'relevancy-sorting': true,
    'relevancy-sorting-partial-match-value': 1,
    'relevancy-sorting-strict-match-value': 5,
    'relevancy-sorting-booster-attr': 'data-relevancy-booster',
    handle_invalid_input: function( context ) {
      context.$text_field.val( context.$select_field.find('option:selected:first').text() );
    },
    handle_select_field: function( $select_field ) {
      return $select_field.hide();
    },
    insert_text_field: function( context ) {
      var $text_field = $( "<input></input>" );
      if ( settings['copy-attributes-to-text-field'] ) {
        var attrs = {};
        var raw_attrs = context.$select_field[0].attributes;
        for (var i=0; i < raw_attrs.length; i++) {
          var key = raw_attrs[i].nodeName;
          var value = raw_attrs[i].nodeValue;
          if ( key !== 'name' && key !== 'id' && typeof context.$select_field.attr(key) !== 'undefined' ) {
            attrs[key] = value;
          }
        }
        $text_field.attr( attrs );
      }
      $text_field.blur(function() {
        var valid_values = context.$select_field.find('option').map(function(i, option) { return $(option).text(); });
        if ( !($text_field.val() in valid_values) && typeof settings['handle_invalid_input'] === 'function' ) {
          settings['handle_invalid_input'](context);
        }
      });
      // give the input box the ability to select all text on mouse click
      if ( context.settings['autoselect'] ) {
         $text_field.click( function() {
             this.select();
            });
      }
      return $text_field.val( context.$select_field.find('option:selected:first').text() )
        .insertAfter( context.$select_field );
    },
    extract_options: function( $select_field ) {
      var options = [];
      var $options = $select_field.find('option');
      var number_of_options = $options.length;

      // go over each option in the select tag
      $options.each(function(){
        var $option = $(this);
        var option = {
          'real-value': $option.attr('value'),
          'label': $option.text()
        };
        if ( settings['remove-valueless-options'] && option['real-value'] === '') {
          // skip options without a value
        } else {
          // prepare the 'matches' string which must be filtered on later
          option['matches'] = option['label'];
          var alternative_spellings = $option.attr( settings['alternative-spellings-attr'] );
          if ( alternative_spellings ) {
            option['matches'] += ' ' + alternative_spellings;
          }
          // give each option a weight paramter for sorting
          if ( settings['sort'] ) {
            var weight = parseInt( $option.attr( settings['sort-attr'] ), 10 );
            if ( weight ) {
              option['weight'] = weight;
            } else {
              option['weight'] = number_of_options;
            }
          }
          // add relevancy score
          if ( settings['relevancy-sorting'] ) {
            option['relevancy-score'] = 0;
            option['relevancy-score-booster'] = 1;
            var boost_by = parseFloat( $option.attr( settings['relevancy-sorting-booster-attr'] ) );
            if ( boost_by ) {
              option['relevancy-score-booster'] = boost_by;
            }
          }
          // add option to combined array
          options.push( option );
        }
      });
      // sort the options based on weight
      if ( settings['sort'] ) {
        if ( settings['sort-desc'] ) {
          options.sort( function( a, b ) { return b['weight'] - a['weight']; } );
        } else {
          options.sort( function( a, b ) { return a['weight'] - b['weight']; } );
        }
      }

      // return the set of options, each with the following attributes: real-value, label, matches, weight (optional)
      return options;
    }
  };

  var public_methods = {
    init: function( customizations ) {

      if ( $.browser.msie && parseInt($.browser.version, 10) <= 6) {

        return this;

      } else {

        settings = $.extend( settings, customizations );

        return this.each(function(){
          var $select_field = $(this);

          var context = {
            '$select_field': $select_field,
            'options': settings['extract_options']( $select_field ),
            'settings': settings
          };

          // insert flag span
          context['$flag'] = $('<span class="current-flag ui-flag"></span>')
            .attr('data-country', context.$select_field.find('option:selected:first').attr('data-alternative-spellings'))
            .insertAfter(context.$select_field);

          context['$text_field'] = settings['insert_text_field']( context );

          settings['handle_select_field']( $select_field );

          if ( typeof settings['autocomplete-plugin'] === 'string' ) {
            adapters[settings['autocomplete-plugin']]( context );
          } else {
            settings['autocomplete-plugin']( context );
          }
        });

      }

    }
  };

  var adapters = {
    jquery_ui: function( context ) {
      // loose matching of search terms
      var filter_options = function( term ) {
        var split_term = term.split(' ');
        var matchers = [];
        for (var i=0; i < split_term.length; i++) {
          if ( split_term[i].length > 0 ) {
            var matcher = {};
            matcher['partial'] = new RegExp( $.ui.autocomplete.escapeRegex( split_term[i] ), "i" );
            if ( context.settings['relevancy-sorting'] ) {
              matcher['strict'] = new RegExp( "^" + $.ui.autocomplete.escapeRegex( split_term[i] ), "i" );
            }
            matchers.push( matcher );
          }
        }

        return $.grep( context.options, function( option ) {
          var partial_matches = 0;
          if ( context.settings['relevancy-sorting'] ) {
            var strict_match = false;
            var split_option_matches = option.matches.split(' ');
          }
          for ( var i=0; i < matchers.length; i++ ) {
            if ( matchers[i]['partial'].test( option.matches ) ) {
              partial_matches++;
            }
            if ( context.settings['relevancy-sorting'] ) {
              for (var q=0; q < split_option_matches.length; q++) {
                if ( matchers[i]['strict'].test( split_option_matches[q] ) ) {
                  strict_match = true;
                  break;
                }
              }
            }
          }
          if ( context.settings['relevancy-sorting'] ) {
            var option_score = 0;
            option_score += partial_matches * context.settings['relevancy-sorting-partial-match-value'];
            if ( strict_match ) {
              option_score += context.settings['relevancy-sorting-strict-match-value'];
            }
            option_score = option_score * option['relevancy-score-booster'];
            option['relevancy-score'] = option_score;
          }
          return (!term || matchers.length === partial_matches );
        });
      };
      
      // update the select field value using either selected option or current input in the text field
      var update_select_value = function( option ) {
        if ( option ) {
          if ( context.$select_field.val() !== option['real-value'] ) {
            context.$select_field.val( option['real-value'] );
            context.$select_field.change();
            context.$flag.attr('data-country', option.matches);
          }
        } else {
          var option_name = context.$text_field.val().toLowerCase();
          var matching_option = { 'real-value': false };
          for (var i=0; i < context.options.length; i++) {
            if ( option_name === context.options[i]['label'].toLowerCase() ) {
              matching_option = context.options[i];
              break;
            }
          }
          if ( context.$select_field.val() !== matching_option['real-value'] ) {
            context.$select_field.val( matching_option['real-value'] || '' );
            context.$select_field.change();
          }
          if ( matching_option['real-value'] ) {
            context.$text_field.val( matching_option['label'] );
          }
          if ( typeof context.settings['handle_invalid_input'] === 'function' && context.$select_field.val() === '' ) {
            context.settings['handle_invalid_input']( context );
          }
        }
      };
      // jQuery UI autocomplete settings & behavior
      context.$text_field.autocomplete({
        'minLength': 0,
        'delay': 0,
        'autoFocus': true,
        source: function( request, response ) {
          var filtered_options = filter_options( request.term );
          if ( context.settings['relevancy-sorting'] ) {
            filtered_options = filtered_options.sort( function( a, b ) { return b['relevancy-score'] - a['relevancy-score']; } );
          }
          response( filtered_options );
        },
        select: function( event, ui ) {
          update_select_value( ui.item );
        },
        change: function( event, ui ) {
          update_select_value( ui.item );
        }
      }).data("autocomplete")._renderItem = function(ul, item) {
          var listItem = $("<li>")
            .data("item.autocomplete", item)
            .append( $("<a>").text(item.label)
                .attr('data-country', item.matches)
                .addClass('ui-flag'))
            .appendTo(ul);
            /*
            label: "Cook Islands"
            matches: "Cook Islands CK"
            real-value: "Cook Islands"
            relevancy-score: 0.5
            relevancy-score-booster: 0.5
            value: "Cook Islands"
             */
          return listItem;
        };
      // force refresh value of select field when form is submitted
      context.$text_field.parents('form:first').submit(function(){
        update_select_value();
      });
      // select current value
      update_select_value();
    }
  };

  $.fn.selectToAutocomplete = function( method ) {
    if ( public_methods[method] ) {
      return public_methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
    } else if ( typeof method === 'object' || ! method ) {
      return public_methods.init.apply( this, arguments );
    } else {
      $.error( 'Method ' +  method + ' does not exist on jQuery.fn.selectToAutocomplete' );
    }
  };

})(jQuery);


/**************************************************/
/*
/* Document ready
/*
/**************************************************/
jQuery(document).ready(function($){
	/*
	 * Default variables
	 */
	var $window = $(window),
		$document = $(document);

	$('.mag-customselect').selectToAutocomplete();

	$('#show_search').click(function(){
		$('#searchform').toggleClass('hidden');
		$('#s').focus();
		return false;
	});

	$('.signup-user-type').change(function(){
		$('.signup-type').addClass('hidden');
		$('.signup-'+ $(this).val()).removeClass('hidden');
	});

	$('.expand-row, .expand-next').click(function(){
		if($(this).hasClass('more-link')){
			$(this)
			.toggleClass('t-desc-open')
			.closest('table')
			.next().stop(true, true).slideToggle(400);
		}else{
			$(this)
			.toggleClass('t-desc-open')
			.find('.t-description').stop(true, true).slideToggle(200);
		}
	});
	$('.t-description').click(function(){ return false; });

	$('#resend_magplus_activation_email').click(function(){
		$.ajax({
			url: psVar.ajaxurl,
			type: 'post',
			data: 'action=resend_activation_mail',
			success: function(msg){
				
			}
		});
		return false;
	});


	/**
	 * Make the buy buttons follow with down on scroll
	 */
	$('.black-box-placeholder').css({height: $('.black-box-placeholder').height() +'px'});
	if($('.black-box .primary-button:first').length > 0){
		var window_top,
			buttons_pos = $('.black-box .primary-button:first').offset(),
			is_under = false;
		$window.scroll(function(){
			window_top = $document.scrollTop();

			if(window_top > buttons_pos.top){
				if(!is_under){
					$('.black-box-wrap').addClass('block-fixed');
					is_under = true;
				}
			}else{
				if(is_under){
					$('.black-box-wrap').removeClass('block-fixed');
					is_under = false;
				}
			}

		});
	}


	// add tracking to normal links and buttons
	$('.ps-analytics').click(function(){
		var title  = $(this).attr('title');
		_gaq.push(['_trackEvent', 'CustomTracking', title]);
	});

	// track social links
	$('.social-link').click(function(){
		var alt  = $(this).find('img').attr('alt');
		_gaq.push(['_trackEvent', 'socialLinks', alt]);
	});


	/**************************************************/
	/*
	/* Share
	/*
	/**************************************************/
	/**
	 * Create a share popup when clicking on a social media button
	 */
	$('.social-link').click(function(){
		var $this = $(this);
		var windowOptions = 'scrollbars=yes,resizable=yes,toolbar=no,location=yes',
			widthDefault = 750,
			heightDefault = 550,
			height = $this.attr('data-height'),
			width = $this.attr('data-width'),
			winHeight = screen.height,
			winWidth = screen.width,
		    left = Math.round((winWidth / 2) - (width / 2)),
			top = 0;
		// Put the position of the popup in the middle
		if (winHeight > height) { top = Math.round((winHeight / 2) - (height / 2)); }
		// If height/width is to small or none set the default
		if(width < 100){ width = widthDefault; }
		if(height < 100){ height = heightDefault; }
		//window.open($(this).attr('href'), 'socialWindow', windowOptions +',width=' + width +',height='+ height +',left='+ left +',top='+ top);
		return false;
	});
	// Share links (dialogs)
	$(document).delegate('.facebook-share', 'click', function(){
		var $this = $(this),
			name = $this.attr('data-name'),
			link = $this.attr('href'),
			picture = $this.attr('data-picture'),
			caption = $this.attr('data-caption'),
			description = $this.attr('data-description'),
			track = $this.attr('data-track');
		FB.ui({
			method: 'feed',
			name: name,
			link: link,
			picture: picture,
			caption: caption,
			description: description
		}, function(response) {
			if (response && response.post_id) {
				_gaq.push(['_trackEvent', 'mag-custom', track]);
			} else {
				//alert('Post was not published.');
			}
		});
		return false;
	});



$('.what-is-tour-wrap a.secondary-button ').click(function() {

	_gaq.push(['_trackEvent', 'Video', "Play", "Mag+ Tour"] );
	});


	// footer links
	// disable some of the links in the footer
	$('#footer_nav').find('.disable-link > a').click(__return_false());


	/* Show by href
	------------------------------------*/
	$('.open-by-href').click(function(){
		$($(this).attr('href')).removeClass('hidden');
		return false;
	});



	/**************************************************/
	/*
	/* Colorbox - popup - dialogs
	/*
	/**************************************************/
	// ---   Colorbox   ---
	// regular colorbox
	$('.colorbox').colorbox();
	// iframe colorbox
	$('.colorbox-inline, .colorbox-inline-menu a').colorbox({
		inline:true,
		href: $(this).attr('href')
	});
	// sales area button
	$('.colorbox-iframe').colorbox({
		iframe:true,
		width: '100%',
		height: '100%',
		maxWidth: 900,
		maxHeight: 506
	});

	// popup
	$('.open-window').click(function(){
		var width = 600,
			height = 600,
			winHeight = screen.height,
			winWidth = screen.width,
		    left = Math.round((winWidth / 2) - (width / 2)),
			top = Math.round((winHeight / 2) - (height / 2)),
			extra = $(this).attr('data-param');

		window.open($(this).attr('href')+extra, 'magup', 'scrollbars=yes,resizable=yes,toolbar=no,location=yes,width='+ width +
			',height='+ height +',left='+ left +',top='+ top);
		return false;
	});



	/**************************************************/
	/*
	/* Size contact form iFrames to content inside
	/*
	/**************************************************/
	if($('.frame-cf').length>0){

			 $('.frame-cf').load(function(){
    			$('.frame-cf').height($(".frame-cf").contents().find("body").height()+20);
    			$('.salesforce-loading-form').remove();
    		});
  		}





	/**************************************************/
	/*
	/* Buy Mag+
	/*
	/**************************************************/
	$('.buy-form-button').colorbox({
		iframe: true,
		innerWidth:820, 
		innerHeight:480,
		scrolling:false,
		onComplete:function(){
			sizeIframe()
		}
	});

	function sizeIframe(){

		if(!$('.page-id-3270 #colorbox iframe').length){
			checkForLoad=setTimeout(function(){
				sizeIframe()
			},1000);
		}
		else{	
		
			if($('.page-id-3270').length>0){
			 	$('.page-id-3270 #colorbox iframe').load(function(){
    				var cboxheight = $(".page-id-3270 #colorbox iframe").contents().find("body").height()+20;
    				$.colorbox.resize({width:$('#colorbox').width , height:cboxheight})
    			});
			}
			clearTimeout(checkForLoad);
		}

		}
	/* Buy Mag+ */
	var magplus_buy_loading = (function(){
			var status = 'no';
			return function( check ){
				check = check || false;
				if(check) return (status == 'no') ? false : true;
				if( status != 'no' ){
					status = 'no';
					$('#buy_loader').hide();
				}else{
					status = 'yes';
					$('#buy_loader').show();
				}
			}
		})();

	/* 
	Logic to open Sales force form confirmation window in popup.
	A cookie is passed that coorisponds to the button pressed
	*/

	if($('#content.pricing').length){
		$('.buy-form-button').click( function() {
			var buytype=$(this).attr('data-id');
			document.cookie ='buytype='+buytype.toLowerCase()+'; ;path=/salesforce-buy-form-thanks';
			document.cookie ='buytype='+buytype.toLowerCase()+'; ;path=/salesforce-buy-form';
			$('#sf_Lead_Event_Origin__c').val("Buy "+buytype);
			
		});
	}

/*
	function getCookie(cname){
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++){
		  var c = ca[i].trim();
		  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
		  }
	}
	*/
	

	$("#buy_form-sf").submit(function(e){
    var form = $(this);
    $.ajax({ 
         success: function(response){
            alert(response); // do what you like with the response
         }
    });
    return false;
 	});

	

	/* end pop-up logic */
	
	$('#buy_form').submit( function() {
		$('#sf_Lead_Event_Origin__c').val("Buy Form: "+$.trim($('#product_to_buy').val()));

		// if loading
		if( magplus_buy_loading(true) ) return false;
		magplus_buy_loading();

		// validate eula
		if( !$('#buy_eula_accept').is(':checked') ){
			alert('You must accept "Mag+ end user license agreement" by checking the box.');
			magplus_buy_loading();
			return false;
		}
		var $this = $(this);
		$.ajax({
			url: psVar.ajaxurl,
			type: 'post',
			data: $(this).serialize() +'&action=buy_magplus_form',
			success: function(msg){
				if( msg.success ){
					var prod = $.trim($('#product_to_buy').val());
					if(msg.mail){
						_gaq.push(['_trackPageview', '/buy/success/'+ prod]);
						
						$this.html(msg.msg);
						$.colorbox.resize();
                                                
						$('#cboxContent').append('<iframe src="/features-price/salesforce-buy-form-thanks-'+prod+'" style="display:none"></iframe>');
						//$('#cboxContent').append('<iframe src="/features-price/order-confirmation/?='+prod'" style="display:none"></iframe>');
					}else{
						// something went worng sending the mail
						alert('There were an error sending the mail try again or contact sales@magplus.com');
					}
				}else{
					alert("Please correct these errors: \n"+ msg.errors.join(", \n"));
				}

				magplus_buy_loading();
			},
			error: function(){
				alert('There was an error.');
				magplus_buy_loading();
			}
		});
		return false;
	});




/**************************************************/
	/*
	/* Contact Us Form Button (Scroll to)
	/*
	/**************************************************/

	$('#contact-btn.primary-button').click(function(evt){
		evt.preventDefault();
		var offset = $('.anchor-form').offset();
		$("html, body").animate({ scrollTop: offset.top}, 300);

	})



	/*   equal height   */
	var eqHeightBiggest = 0;
	$('.eq-height').each(function(){
		if($(this).height() > eqHeightBiggest){
			eqHeightBiggest = $(this).height();
		}
	});
	if(eqHeightBiggest > 0){
		$('.eq-height').css('height', eqHeightBiggest +'px');
	}



	/**
	 *  Tool tips
	 */
	// my Mag+ big boxes
	$('.mag-icon-link').magbubble();
	// Feature & price Buy
	$('.f-row:not(.f-row-title) .tooltip-text').closest('.f-row').magbubble({
		top: 10,
		delay: 400,
		forceEnd: true
	});

	$('.fp-row .tooltip-text').closest('.fp-relative').magbubble({
		top: 0,
		delay: 400,
		forceEnd: true
	});


	$('.remove-x').click(function(){
		$(this).closest('.remove-me').remove();
	});




	/**************************************************/
	/*
	/* Chatengage module : Cusotm Hide and Show func
	/*
	/**************************************************/
	setTimeout(function(){ 

		if($("#SnapABug_Button").length){
			//console.log('button exists');
					

				$("#SnapABug_Button").click(function(e){
					$(this).addClass('active');
					_gaq.push(['_trackEvent', 'Online Chat', 'Clicked']);
				})


				setInterval(function(){ 

					if(!$("#SnapABug_CBMBtn").length && $("#SnapABug_Button.active").length){
						$("#SnapABug_Button").removeClass('active');

					}

				 }, 2000);

			
		}
		
	}, 2000);



	/**************************************************/
	/*
	/* Blog Landing Page Select Menu "Go" button
	/*
	/**************************************************/

	if($('.blog-tag-list').length){

		$('.blog-tag-list .btn-go').click(function(){
			var val = $('#subjectTag').val();
			if(val != "#"){
				//alert("/"+$('#subjectTag').val());
				location.href="/"+$('#subjectTag').val();
			}
		});

	};




}); // end document ready






/**************************************************/
/*
/* Signup & download forms
/*
/**************************************************/
var MagPlus = {
	signup: function(result){
		if (result.status == 'success') {

			pingBing('New User');//defined in footer

			var data = {
					user: result.user,
					user_type: $('input[name="user_type"]:checked').val(),
					where: $('.register-new-form-where').val(),
					browser_lang: window.navigator.language || navigator.browserLanguage || '',
					action: 'ps_signed_up_user'
				};
			// save the user info
			jQuery.ajax({
				url: psVar.ajaxurl,
				data: data,
				type: 'POST'
			});
			// timeout the redirect to give a short time to send the post above
			setTimeout(function(){ window.location.href = result.redirect_to; }, 300);

		}else{
			var $form = jQuery('.magplus-signup');
			// hide the loader
			$form.find('.form-loader').hide();
			$form.find('.ps-container-error').removeClass('ps-container-error');
			for (var key in result.errors) {
				$form.find('input[name="registration['+ key +']"]')
					.parent()
					.addClass('ps-container-error')
					.find('.ps-error')
					.html(result.errors[key].join(', '));
			}
		}
	}
};




	var setMoreInfoClick;
	var focusSet;
	var footerBarHeight 
	
	function checkFooter(reset){
		var buttonHover;
		var slideInFooter;

		//if($(window).height()>700){

		if($('footer.static').length>0){
			$('footer.static').removeClass('static');
			
		}
		if($('.showCarousel').length || $('.home.page').length){
			$('.holder.content').css('padding-bottom',footerBarHeight)
		}
		else{
			$('body').css('padding-bottom',footerBarHeight);
		}
		
		if(!setMoreInfoClick || reset){
			setMoreInfoClick = true;
		
			$('footer .more-info').click(function() {
					console.log('click footer');
					if(!focusSet){
						console.log('add focus');
						focusSet=true;
						console.log($('footer').length);
						$('footer').addClass('focus');
					}
					else{
						focusSet=false;
						$('footer').removeClass('focus');
					}
			});
		}

		$('footer').mouseleave(function() {
			focusSet=false;
			$(this).removeClass('focus');
			clearTimeout(slideInFooter);
		});
	}



jQuery(document).ready(function($){

  /* Signup form */
  $('#magplus_signup').submit(function(e){
    e.preventDefault();
    var $this = $(this);
    var theSourceURL = $this.find($('#Daddy_Analytics_WebForm_URL')).attr('value');
    if(theSourceURL.length > 255){
      var newSourceURL = theSourceURL.slice(-254);
      $this.find($('#Daddy_Analytics_WebForm_URL')).attr('value',newSourceURL);
    }
    $loader = $this.find('.form-loader');
    // if end user licence agreement isn't accepted
    if(!$this.find('.accept-terms').is(':checked')){
      alert('You need to verify that you have read & understood the End User License Agreement by checking the box.');
    }else{
      // email adresses not allowed by mailchimp
      var not_allowed = ['admin','abuse','postmaster','noc','root','security','spam','sysadmin','compliance','registrar'];
      // prevent not allowed emails
      var $email_input = $this.find('.registration-email'),
      mail_prefix =  $email_input.val().split('@')[0];
      if( not_allowed.indexOf( mail_prefix ) >= 0 ){
        $email_input
        .parent()
        .addClass('ps-container-error')
        .find('.ps-error')
        .html( 'Do not use any of these addresses: admin@, abuse@, postmaster@, noc@, root@, security@, spam@, sysadmin@, compliance@, registrar@' );
        return false;
      }
      $loader.show();
      $.ajax({
        url: ($this.attr('action') + '.js'),
        dataType: 'jsonp',
        jsonpCallback: 'MagPlus.signup',
        data: $this.serialize()
      });
    }
    return false;
  });



	/* Download form
	**************************************************/
	var $download_form = $('.magplus-download');
	if($download_form.length){
		// pre select OS
		var OS = 'Win';
	
		if (navigator.appVersion.indexOf("Mac")!=-1) OS = "MacOS";
		$download_form.find('input[name="os"][value="'+ OS +'"]').attr('checked', 'checked');

		$download_form.submit(function(){
			var os = $("input[name='os']:checked").val();
			var cs_version = $("input[name='cs_version']:checked").val();

			if( !(os === undefined) && !(cs_version === undefined) ){
				if(os == 'Win'){
					var extension = 'zip';
				}else{
					var extension = 'dmg';
				}
				window.open('https://download.magplus.com/index.php?cs='+cs_version+'&extension='+ extension,"_blank");
				window.location = "/my-magplus/installation/?downloaded=true";
			}else{
				alert('You have to choose Adobe CS version and operating system');
			}
		
			_gaq.push(['_trackEvent', 'Tool Downloads v'+version, cs_version, os] );
			return false
		});
	}


/**************************************************/
/*
/* Mantle Footer and Header 
/*
/**************************************************/
	//console.log('SET DFAULTS');
	var imgW;
	var imgH;
	var ratio;
	footerBarHeight = getFooterHeight();
	var minHeight = parseInt($('.mantle').css('min-height'));
	//console.log("footerBarHeight= "+footerBarHeight);
	var borders = (parseInt($('.mantle').css('border-top-width'))*2);
	//console.log('end defaults');

	$('footer .buttons .download').click(function() {
		gqloc =window.location.pathname;
		_gaq.push(['_trackEvent', 'Footer Buttons', "Download", gqloc ] );
	});
	$('footer .buttons .contact').click(function() {
		gqloc =window.location.pathname;
		_gaq.push(['_trackEvent', 'Footer Buttons', "Contact Us", gqloc] );
	});

	//* Disable Resources link in Main Nav

	$('#header_wrap header #main-menu.menu .menu-item-has-children > a').click(function(){
		return false;

	});

	//* add Arrow on subnav 

	if($('#header_wrap #subNav').length || $('#header_wrap .carcl-nav').length){

		$('#main-menu').addClass('delta');

	}

	checkFooter();

		// Header Logic
		var oldScroll=0;

		$(window).scroll(function(event){
				var carouselH = $('body.view .features .carousel').height();
				var isFeatures = $('.view .features').length;
				var magHeader =$('#header_wrap').height();
				var scrollTheshold = ($('#header_wrap').height()+carouselH)* isFeatures;
				
				if(!$('#header_wrap').hasClass('ignore')){

						if($(window).scrollTop()<$('#header_wrap').height()){
							if(!$('#header_wrap').hasClass('show')){
								makeKenetic();
								hideHeader();
							}

							else{
								if($(window).scrollTop()<=1){
									makeKenetic();
									hideHeader();
								}
							}
						}
						
						else{
							
							makeStatic();

							if($(window).scrollTop()<oldScroll){
								showHeader();
							}
							else{
								hideHeader();
							}

							
						}
				
					if($(window).scrollTop()<1){
						$('#header_wrap').removeClass('ease');
					}

			}
				
			oldScroll=$(window).scrollTop();
		});



		function showHeader(){
			if(!$('#header_wrap.ease').length){
				$('#header_wrap').addClass('ease');
			}
						$('#header_wrap').addClass('show');
		}

		function hideHeader(){
			$('#header_wrap').removeClass('show');
		}

		function makeStatic(){
			$('#header_wrap').addClass('static')
			$('body > .container').css('margin-top',$('#header_wrap').height());
		}

		function makeKenetic(){
			$('#header_wrap').removeClass('static');
			$('body > .container').css('margin-top',0);
		}


		var mantle = '.home .mantle, .home .infoGraphic, .home .companies-using';
		var mantleBg = mantle+' .bg-image';

		$( window ).resize(function() {
			//console.log(arguments.callee.caller.toString()+ ' RESIZE= '+ratio);

			if($(mantle).length){
					if(!ratio){
						initMantle();
					}
				else{
					footerBarHeight= getFooterHeight();
					var newHeight = ($(window).height()-$('#header_wrap').height()-parseInt(footerBarHeight))-borders;
					//console.log('resize manatle= '+parseInt(footerBarHeight));

					//There is a min height to the mantle. IE can't see min height. This is the work around
					if(newHeight<minHeight){
						newHeight=minHeight;
					}
					$(mantle).css('height',newHeight);


					mantleRatio = ($(mantle).height()*100)/$(mantle).width();
					//console.log('ratio = '+ratio+' mantleRatio= '+mantleRatio);
					if(mantleRatio<ratio ){
						$(mantleBg).addClass('wide');
						$(mantleBg).removeClass('tall');
					}
					else{
						$(mantleBg).removeClass('wide');
						$(mantleBg).addClass('tall');

					}

					if($(mantle).css('opacity')==0){
						$(mantle).css('opacity',1);
					}
				}
				
			}

			checkFooter();
			
		})

		function initMantle(){
		   		imgW = $(mantleBg).width();
				imgH = $(mantleBg).height();
				ratio =(imgH*100)/imgW;
				//console.log('inti mantle= '+imgW+"  "+imgH);
				$( window ).resize();
			}
		
		if($(mantle).length){
			//console.log('has mantle');
			$(mantleBg).on('load',function() {
				//console.log('iMAGE IS LOADED');
				initMantle();
		    });
		    showMantle=setTimeout(function(){
		    	$(mantle).css('opacity',1);
	      		clearTimeout(showMantle);
	     	},1000);
		    
		}
		else{
			$( window ).resize();
		}	

		
	});


	function getFooterHeight(){
		return $('footer').height()+parseInt($('footer').css('bottom'))+parseInt($('footer').css('border-top-width'));
	}



/**************************************************/
/*
/* Uses Section (highlight Nav)
/*
/**************************************************/

if($('.single-use_types').length){

	$('#menu-item-20841').addClass('current-menu-item')
}



/**************************************************/
/*
/* Social Metadata populate. Jquery is used incase page scraping is required
/*
/**************************************************/

/*
//Pass a post tile
var metaTitle="";
if($('h1').length){
	metaTitle =$('.content h1:eq(0)').text().trim();
}

//Pass a post description
var metaDescr="";
if($('p').length){
	if($('.mantle li').length){
		metaDescr =$('.content li:eq(0)').text().trim()+'.';
	}
	else{
		var separators = ['\\\!', '\\\.', '\\\?'];
		metaDescr =$('.content p:eq(0)').text().trim();
		metaDescr =metaDescr.split(new RegExp(separators.join('|'), 'g'));
		metaDescr=metaDescr[0]+'.';
	}
}


//The image is done in PHP

/* Facebook */
/*
$("meta[property='og:title']").attr("content", metaTitle);
$("meta[property='og:description']").attr("content", metaDescr);

/*Twitter*/
/*
$("meta[name='twitter:title']").attr("content", metaTitle);
$("meta[name='twitter:description']").attr("content", metaDescr);
*/

/**************************************************/
/*
/* Magbubble
/*
/**************************************************/
(function($){
/*
 * Mag bubble
 *
 * - Wrapper block with position relative
 * - Child with position absolute and display none
 *   and class .tooltip-text if settings not changed
 */
$.fn.magbubble = function(options){

	// options
	var opts = $.extend({}, $.fn.magbubble.defaults, options);

	// iterate and reformat each matched element
	return this.each(function() {
		var $this = $(this),
			$text = $this.find(opts.textSelector),
			width = $this.outerWidth(),
			textWidth = $text.outerWidth(),
			textHeight = $text.outerHeight(),
			textRatio = (textHeight / textWidth);


		// if the height is to high
		if( textRatio > 1.3 ){
			// set a width based on the ratio
			textWidth = (textWidth * ( 0.5 + textRatio / 2 ));
			$text.css({ width: textWidth +'px' });
			// get the new height
			textHeight = $text.outerHeight();
		}

		var center = ( (width/2) - (textWidth/2) ),
			top = (opts.top - textHeight), // top for same position on all
			leftPos;

		// where to position the box
		if(isNaN(opts.left)){
			if(opts.left === 'center'){
				leftPos = center;
			}else if(opts.left === 'mouse'){
				$.fn.magbubble.mousemove($this, $text, textWidth, textHeight, opts);
				leftPos = center;
			}
		}else{
			leftPos = opts.left;
		}


		// set the opacity to 0 and center the box
		$text.css({ opacity: 0, left: leftPos +'px' });

		// hide show on hover
		$this.hover(function(){
			if(!opts.hoverThis){
				$text
					.stop()
					.delay(opts.delay)
					.css({ display: 'block' })
					.animate({ opacity: 1 }, opts.speedIn );
			}else{
				// display the object and set the correct position
				$text
					.stop()
					.delay(opts.delay)
					.css({ display: 'block', top: top +'px' })
					// animate the popup
					.animate({
						top: (top - opts.distance) + 'px',
						opacity: 1
					}, opts.speedIn, 'swing');
			}

		}, function(){
			// Animate it up and fade away
			$text.stop(opts.forceEnd, opts.forceEnd).animate({
				top: ( top - (opts.distance*2) ) + 'px',
				opacity: 0
			}, opts.speedOut, 'swing', function () {
				// hide the popup entirely after the effect (opacity alone doesn't do the job)
				$text.css('display', 'none');
			});
		});

		// Prevent hover on the bubble
		if(!opts.hoverThis){
			$text.hover(function(e){
				$this.trigger('mouseout');
				e.stopPropagation();
				return false;
			});
		}

	});
}
$.fn.magbubble.defaults = {
	top: 90,
	left: 'center',
	distance: 20,
	speedIn: 100,
	speedOut: 300,
	delay: 0,
	forceEnd: false, // stop the show animation directly
	textSelector: '.tooltip-text',
	hoverThis: true
}
$.fn.magbubble.mousemove = function($this, $text, textWidth, textHeight, opts){
	var posX, posY, thisOffset = $this.offset();
	$this.mousemove(function(e){
		posX = (e.pageX - thisOffset.left) - (textWidth/2);
		posY = (e.pageY - thisOffset.top) - textHeight - opts.distance;
		$text.css({ left: posX +'px', top: posY +'px' });
	});
}

})(jQuery);


/* Facebook */
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=410458285646462&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
/* end of Facebook */


//Google Plus
 (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();

 //Twitter
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
						

// Adroll -> a tiny pixel loaded on each page for some marketing program.
adroll_adv_id = "3GICQHOXK5BBBH6HAI7TVU";
adroll_pix_id = "JYZAMJNDLZB4JASX5XJJQV";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());


//Hide Download button in footer on Mobile
$.browser.device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
  
if($.browser.device){
	$('footer .buttons').addClass('isMobile');
}



