/*! jQuery.CardSwipe Magnetic Stripe Card Reader - v1.1.0 - 2016-10-12
* https://github.com/CarlRaymond/jquery.cardswipe
* Copyright (c) 2016 Carl J. Raymond; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a(jQuery)}(function(a){var b,c,d,e=function(a){if(y[a])return y[a].apply(this,Array.prototype.slice.call(arguments,1));if("object"!=typeof a&&a)throw"Method "+a+" does not exist on jQuery.cardswipe";return y.init.apply(this,arguments)},f={generic:function(a){var b=new RegExp("^(%[^%;\\?]+\\?)?(;[0-9\\:<>\\=]+\\?)?([+;][0-9\\:<>\\=]+\\?)?"),c=b.exec(a);if(!c)return null;var d={type:"generic",line1:c[1]?c[1].slice(1,-1):"",line2:c[2]?c[2].slice(1,-1):"",line3:c[3]?c[3].slice(1,-1):""};return d},visa:function(a){var b=new RegExp("^%B(4[0-9]{12,18})\\^([A-Z ]+)/([A-Z ]+)\\^([0-9]{2})([0-9]{2})"),c=b.exec(a);if(!c)return null;var d=c[1];if(!x(d))return null;var e={type:"visa",account:d,lastName:c[2].trim(),firstName:c[3].trim(),expYear:c[4],expMonth:c[5]};return e},mastercard:function(a){var b=new RegExp("^%B(5[1-5][0-9]{14})\\^([A-Z ]+)/([A-Z ]+)\\^([0-9]{2})([0-9]{2})"),c=b.exec(a);if(!c)return null;var d=c[1];if(!x(d))return null;var e={type:"mastercard",account:d,lastName:c[2],firstName:c[3],expYear:c[4],expMonth:c[5]};return e},discover:function(a){var b=new RegExp("^%B(6[0-9]{15})\\^([A-Z ]+)/([A-Z ]+)\\^([0-9]{2})([0-9]{2})"),c=b.exec(a);if(!c)return null;var d=c[1];if(!x(d))return null;var e={type:"discover",account:d,lastName:c[2],firstName:c[3],expYear:c[4],expMonth:c[5]};return e},amex:function(a){var b=new RegExp("^%B(3[4|7][0-9]{13})\\^([A-Z ]+)/([A-Z ]+)\\^([0-9]{2})([0-9]{2})"),c=b.exec(a);if(!c)return null;var d=c[1];if(!x(d))return null;var e={type:"amex",account:d,lastName:c[2],firstName:c[3],expYear:c[4],expMonth:c[5]};return e}},g={IDLE:0,PENDING:1,READING:2,DISCARD:3,PREFIX:4},h={0:"IDLE",1:"PENDING",2:"READING",3:"DISCARD",4:"PREFIX"},i=g.IDLE,j=function(){if(0===arguments.length)return i;var a=arguments[0];a!=j&&(c.debug&&console.log("%s -> %s",h[i],h[a]),a==g.READING&&d.trigger("scanstart.cardswipe"),i==g.READING&&d.trigger("scanend.cardswipe"),i=a)},k=0,l=function(d){switch(c.debug&&console.log(d.which+": "+String.fromCharCode(d.which)),j()){case g.IDLE:37==d.which&&(j(g.PENDING),b=[],m(d.which),d.preventDefault(),d.stopPropagation(),n()),v(d.which)&&(j(g.PREFIX),d.preventDefault(),d.stopPropagation(),n());break;case g.PENDING:d.which>=65&&d.which<=90||d.which>=97&&d.which<=122?(j(g.READING),a("input").blur(),m(d.which),d.preventDefault(),d.stopPropagation(),n()):(o(),b=null,j(g.IDLE));break;case g.READING:m(d.which),n(),d.preventDefault(),d.stopPropagation(),13==d.which&&(o(),j(g.IDLE),q()),c.firstLineOnly&&63==d.which&&(j(g.DISCARD),q());break;case g.DISCARD:if(d.preventDefault(),d.stopPropagation(),13==d.which)return o(),void j(g.IDLE);n();break;case g.PREFIX:if(v(d.which))return void j(g.IDLE);d.preventDefault(),d.stopPropagation(),37==d.which&&(j(g.PENDING),b=[],m(d.which)),n()}},m=function(a){b.push(String.fromCharCode(a))},n=function(){clearTimeout(k),k=setTimeout(p,c.interdigitTimeout)},o=function(){clearTimeout(k),k=0},p=function(){c.debug&&console.log("Timeout!"),j()==g.READING&&q(),b=null,j(g.IDLE)},q=function(){c.debug&&console.log(b);var d=b.join("");c.rawDataCallback&&c.rawDataCallback.call(this,d);var e=r(d);e?(c.success&&c.success.call(this,e),a(document).trigger("success.cardswipe",e)):(c.failure&&c.failure.call(this,d),a(document).trigger("failure.cardswipe"))},r=function(b){for(var d=0;d<c.parsers.length;d++){var e,g=c.parsers[d];if(a.isFunction(g)?e=g:"string"==typeof g&&(e=f[g]),null!=e){var h=e.call(this,b);if(null==h)continue;return h}}return null},s=function(){a(document).on("keypress.cardswipe-listener",l)},t=function(){a(document).off(".cardswipe-listener",l)},u=function(a){var b=["Line 1: ",a.line1,"\nLine 2: ",a.line2,"\nLine 3: ",a.line3].join("");alert(b)},v=function(b){return c.prefixCodes?-1!=a.inArray(b,c.prefixCodes):!1},w={enabled:!0,interdigitTimeout:250,success:u,failure:null,parsers:["generic"],firstLineOnly:!1,prefixCharacter:null,eventSource:document,debug:!1},x=function(a){for(var b=[0,2,4,6,8,1,3,5,7,9],c=0,d=a.length,e=!0;d--;){var f=parseInt(a.charAt(d),10);c+=e?f:b[f],e=!e}return c%10===0&&c>0},y={init:function(e){if(c=a.extend({},w,e),c.prefixCharacter){var f="[object Array]"===Object.prototype.toString.call(c.prefixCharacter);f||(c.prefixCharacter=[c.prefixCharacter]),c.prefixCodes=[],a(c.prefixCharacter).each(function(){if(1!=this.length)throw"prefixCharacter must be a single character";c.prefixCodes.push(this.charCodeAt(0))})}d=a(c.eventSource),o(),j(g.IDLE),b=null,t(),c.enabled&&y.enable()},disable:function(){t()},enable:function(){s()}};e.luhnChecksum=x,e._states=function(){return g},e._stateNames=function(){return h},e._state=function(){return j()},e._settings=function(){return c},e._parseData=function(a){return r(a)},e._builtinParsers=function(){return f},a.cardswipe=e});