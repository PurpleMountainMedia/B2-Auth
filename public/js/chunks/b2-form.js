webpackJsonp([15],{"0W51":function(t,r){t.exports={render:function(){var t=this,r=t.$createElement,e=t._self._c||r;return e("div",{},[e("el-form",{ref:"authForm",attrs:{model:t.form,action:t.formActionRoute,"label-position":"top","label-width":"100px",method:"POST"},nativeOn:{submit:function(r){r.preventDefault(),t.onSubmit(r)}}},[e("el-card",{staticClass:"bg-app mb-4"},[e("div",{staticClass:"justify-between"},[e("a",{attrs:{href:t.b2Config.site_url}},[t.b2Config.logo?e("img",{staticClass:"site_logo",attrs:{src:t.b2Config.logo,alt:t.b2Config.name}}):t._e()]),t._v(" "),e("div",{staticClass:"site_product text-white"},[e("h3",{staticClass:"m-0"},[t._v(t._s(t.__("title-education")))]),t._v(" "),e("p",{staticClass:"m-0"},[t._v(t._s(t.__("title-product-of")))])])])]),t._v(" "),t._t("default",null,{form:t.form,loading:t.loading,errors:function(r){return t.getError(r)},errorBag:t.errors}),t._v(" "),e("input",{attrs:{type:"hidden",name:"_token"},domProps:{value:t.csrfToken}})],2),t._v(" "),e("el-card",{staticClass:"mt-4"},[e("div",{staticClass:"justify-around"},[e("a",{attrs:{href:t.urlReturn}},[t._v(t._s(t.__("return")))])])])],1)},staticRenderFns:[]}},MzXO:function(t,r,e){var o=e("wkQq");"string"==typeof o&&(o=[[t.i,o,""]]),o.locals&&(t.exports=o.locals);e("rjj0")("4399ba5c",o,!0,{})},v0AW:function(t,r,e){"use strict";Object.defineProperty(r,"__esModule",{value:!0}),r.default={name:"B2Form",props:{formActionRoute:{required:!0,type:String},urlReturn:{required:!1,type:String,default:function(){return null}},form:{required:!1,type:Object,default:function(){return{}}},values:{required:!1,type:Object,default:function(){return{}}}},data:function(){return{errors:{},loading:!1}},computed:{csrfToken:function(){return this.b2FormData.csrfToken}},mounted:function(){var t=this;Object.keys(this.values).map(function(r){t.$set(t.form,r,t.values[r])}),Object.keys(this.b2FormData.old).map(function(r){t.$set(t.form,r,t.b2FormData.old[r])}),this.$nextTick(function(){t.errors=t.b2FormData.errors})},methods:{onSubmit:function(t){var r=this;this.loading=!0,this.$refs.authForm.validate(function(e,o){r.errors=o,e?t.target.submit():r.loading=!1})},getError:function(t){return this.errors[t]?this.errors[t][0]:""}}}},wkQq:function(t,r,e){(t.exports=e("FZ+f")(!1)).push([t.i,"",""])},wrQZ:function(t,r,e){var o=e("VU/8")(e("v0AW"),e("0W51"),!1,function(t){e("MzXO")},null,null);t.exports=o.exports}});
//# sourceMappingURL=b2-form.js.map