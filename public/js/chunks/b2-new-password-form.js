webpackJsonp([6],{HiB0:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default={name:"B2NewPasswordForm",components:{B2Form:function(){return r.e(12).then(r.bind(null,"wrQZ"))}},props:{resetRoute:{required:!0,type:String},token:{required:!0,type:String},email:{required:!1,type:String,default:function(){return""}}}}},HmKF:function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"mt-4"},[r("b2-form",{attrs:{"form-action-route":e.resetRoute,values:{email:e.email}},scopedSlots:e._u([{key:"default",fn:function(t){return[r("el-card",[r("el-form-item",{attrs:{label:e.__("Email"),prop:"email",error:t.errors("email"),rules:{required:!0,message:e.__("Email is required.")}}},[r("el-input",{staticClass:"short_input",attrs:{placeholder:"josh@educationinventory.com",disabled:!0},model:{value:t.form.email,callback:function(r){e.$set(t.form,"email",r)},expression:"slotProps.form.email"}})],1),e._v(" "),r("input",{attrs:{type:"hidden",name:"email",id:"login_email"},domProps:{value:t.form.email}}),e._v(" "),r("el-form-item",{attrs:{label:e.__("Password"),prop:"password",error:t.errors("password"),rules:{required:!0,message:e.__("Password is required.")}}},[r("el-input",{staticClass:"short_input",attrs:{placeholder:"*****",name:"password",type:"password",id:"login_password"},model:{value:t.form.password,callback:function(r){e.$set(t.form,"password",r)},expression:"slotProps.form.password"}})],1),e._v(" "),r("el-form-item",{attrs:{label:e.__("Password Confirmation"),prop:"password_confirmation",error:t.errors("password_confirmation"),rules:{required:!0,message:e.__("Password is required.")}}},[r("el-input",{staticClass:"short_input",attrs:{placeholder:"*****",name:"password_confirmation",type:"password",id:"login_password_confirmation"},model:{value:t.form.password_confirmation,callback:function(r){e.$set(t.form,"password_confirmation",r)},expression:"slotProps.form.password_confirmation"}})],1),e._v(" "),r("input",{attrs:{type:"hidden",name:"token"},domProps:{value:e.token}}),e._v(" "),r("el-button",{staticClass:"mt-3",attrs:{loading:t.loading,"native-type":"submit",type:"primary"}},[e._v(e._s(e.__("Reset"))+" "),r("i",{staticClass:"far fa-lock"})])],1)]}}])})],1)},staticRenderFns:[]}},"JN/A":function(e,t,r){(e.exports=r("FZ+f")(!1)).push([e.i,"",""])},"VU/8":function(e,t){e.exports=function(e,t,r,n,s,o){var a,i=e=e||{},l=typeof e.default;"object"!==l&&"function"!==l||(a=e,i=e.default);var d,u="function"==typeof i?i.options:i;if(t&&(u.render=t.render,u.staticRenderFns=t.staticRenderFns,u._compiled=!0),r&&(u.functional=!0),s&&(u._scopeId=s),o?(d=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),n&&n.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(o)},u._ssrRegister=d):n&&(d=n),d){var p=u.functional,c=p?u.render:u.beforeCreate;p?(u._injectStyles=d,u.render=function(e,t){return d.call(t),c(e,t)}):u.beforeCreate=c?[].concat(c,d):[d]}return{esModule:a,exports:i,options:u}}},hvlE:function(e,t,r){var n=r("VU/8")(r("HiB0"),r("HmKF"),!1,function(e){r("sQ5q")},null,null);e.exports=n.exports},rjj0:function(e,t,r){var n="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!n)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var s=r("tTVk"),o={},a=n&&(document.head||document.getElementsByTagName("head")[0]),i=null,l=0,d=!1,u=function(){},p=null,c="data-vue-ssr-id",f="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function m(e){for(var t=0;t<e.length;t++){var r=e[t],n=o[r.id];if(n){n.refs++;for(var s=0;s<n.parts.length;s++)n.parts[s](r.parts[s]);for(;s<r.parts.length;s++)n.parts.push(_(r.parts[s]));n.parts.length>r.parts.length&&(n.parts.length=r.parts.length)}else{var a=[];for(s=0;s<r.parts.length;s++)a.push(_(r.parts[s]));o[r.id]={id:r.id,refs:1,parts:a}}}}function v(){var e=document.createElement("style");return e.type="text/css",a.appendChild(e),e}function _(e){var t,r,n=document.querySelector("style["+c+'~="'+e.id+'"]');if(n){if(d)return u;n.parentNode.removeChild(n)}if(f){var s=l++;n=i||(i=v()),t=y.bind(null,n,s,!1),r=y.bind(null,n,s,!0)}else n=v(),t=function(e,t){var r=t.css,n=t.media,s=t.sourceMap;n&&e.setAttribute("media",n);p.ssrId&&e.setAttribute(c,t.id);s&&(r+="\n/*# sourceURL="+s.sources[0]+" */",r+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(s))))+" */");if(e.styleSheet)e.styleSheet.cssText=r;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(r))}}.bind(null,n),r=function(){n.parentNode.removeChild(n)};return t(e),function(n){if(n){if(n.css===e.css&&n.media===e.media&&n.sourceMap===e.sourceMap)return;t(e=n)}else r()}}e.exports=function(e,t,r,n){d=r,p=n||{};var a=s(e,t);return m(a),function(t){for(var r=[],n=0;n<a.length;n++){var i=a[n];(l=o[i.id]).refs--,r.push(l)}t?m(a=s(e,t)):a=[];for(n=0;n<r.length;n++){var l;if(0===(l=r[n]).refs){for(var d=0;d<l.parts.length;d++)l.parts[d]();delete o[l.id]}}}};var h,g=(h=[],function(e,t){return h[e]=t,h.filter(Boolean).join("\n")});function y(e,t,r,n){var s=r?"":n.css;if(e.styleSheet)e.styleSheet.cssText=g(t,s);else{var o=document.createTextNode(s),a=e.childNodes;a[t]&&e.removeChild(a[t]),a.length?e.insertBefore(o,a[t]):e.appendChild(o)}}},sQ5q:function(e,t,r){var n=r("JN/A");"string"==typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);r("rjj0")("3beb79d6",n,!0,{})},tTVk:function(e,t){e.exports=function(e,t){for(var r=[],n={},s=0;s<t.length;s++){var o=t[s],a=o[0],i={id:e+":"+s,css:o[1],media:o[2],sourceMap:o[3]};n[a]?n[a].parts.push(i):r.push(n[a]={id:a,parts:[i]})}return r}}});
//# sourceMappingURL=b2-new-password-form.js.map