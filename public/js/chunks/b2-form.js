webpackJsonp([12],{Vkor:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{},[r("el-form",{ref:"authForm",attrs:{model:t.form,"label-position":"top","label-width":"100px",method:"POST",action:t.formActionRoute},nativeOn:{submit:function(e){e.preventDefault(),t.onSubmit(e)}}},[r("el-card",{staticClass:"bg-app mb-4"},[r("div",{staticClass:"justify-between"},[r("a",{attrs:{href:t.b2Config.site_url}},[t.b2Config.logo?r("img",{staticClass:"site_logo",attrs:{src:t.b2Config.logo,alt:t.b2Config.name}}):t._e()]),t._v(" "),r("div",{staticClass:"site_product text-white"},[r("h3",{staticClass:"m-0"},[t._v("# app name #")]),t._v(" "),r("p",{staticClass:"m-0"},[t._v(t._s(t.__("A product of B2 Systems")))])])])]),t._v(" "),t._t("default",null,{form:t.form,loading:t.loading,errors:function(e){return t.getError(e)}}),t._v(" "),r("input",{attrs:{type:"hidden",name:"_token"},domProps:{value:t.csrfToken}})],2),t._v(" "),r("el-card",{staticClass:"mt-4"},[r("div",{staticClass:"justify-around"},[r("a",{attrs:{href:""}},[t._v(t._s(t.__("Education")))]),t._v(" "),r("a",{attrs:{href:""}},[t._v(t._s(t.__("Finance")))]),t._v(" "),r("a",{attrs:{href:""}},[t._v(t._s(t.__("People")))])])])],1)},staticRenderFns:[]}},j08A:function(t,e,r){(t.exports=r("FZ+f")(!1)).push([t.i,"",""])},v0AW:function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={name:"B2Form",props:{formActionRoute:{required:!0,type:String},form:{required:!1,type:Object,default:function(){return{}}},values:{required:!1,type:Object,default:function(){return{}}}},data:function(){return{errors:{},loading:!1}},mounted:function(){var t=this;Object.keys(this.values).map(function(e){t.$set(t.form,e,t.values[e])}),Object.keys(this.b2FormData.old).map(function(e){t.$set(t.form,e,t.b2FormData.old[e])}),this.$nextTick(function(){t.errors=t.b2FormData.errors})},computed:{csrfToken:function(){return this.b2FormData.csrfToken}},methods:{onSubmit:function(t){var e=this;this.loading=!0,this.$refs.authForm.validate(function(r,o){r?t.target.submit():e.loading=!1})},getError:function(t){return this.errors[t]?this.errors[t][0]:""}}}},vANB:function(t,e,r){var o=r("j08A");"string"==typeof o&&(o=[[t.i,o,""]]),o.locals&&(t.exports=o.locals);r("rjj0")("1c07063e",o,!0,{})},wrQZ:function(t,e,r){var o=r("VU/8")(r("v0AW"),r("Vkor"),!1,function(t){r("vANB")},null,null);t.exports=o.exports}});
//# sourceMappingURL=b2-form.js.map