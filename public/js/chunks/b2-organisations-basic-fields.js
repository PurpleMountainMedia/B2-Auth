webpackJsonp([14],{"9OCh":function(e,r){e.exports={render:function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("div",[t("el-row",{attrs:{gutter:10}},[t("el-col",[t("p",[t("strong",[e._v("Basic Information")])]),e._v(" "),t("hr")])],1),e._v(" "),t("el-row",{attrs:{gutter:10}},[t("el-col",{attrs:{md:14}},[t("el-form-item",{attrs:{label:"Organisation Name",prop:"name",error:e.errors.name,rules:{required:!0,message:"Name is required."}}},[t("el-input",{attrs:{size:"small",placeholder:"Organisation Name",name:"name",id:"organisation_form_field_name"},model:{value:e.form.name,callback:function(r){e.$set(e.form,"name",r)},expression:"form.name"}})],1)],1),e._v(" "),t("el-col",{attrs:{md:10}},[t("el-form-item",{attrs:{label:"Organisation Type",prop:"type",error:e.errors.type,rules:{required:!0,message:"Type is required."}}},[t("el-select",{attrs:{placeholder:"Organisation Type",size:"small",name:"type"},model:{value:e.form.type,callback:function(r){e.$set(e.form,"type",r)},expression:"form.type"}},e._l(e.organisationTypes,function(e,r){return t("el-option",{key:r,attrs:{value:e}})}))],1)],1)],1),e._v(" "),t("el-row",{directives:[{name:"show",rawName:"v-show",value:e.showDefault,expression:"showDefault"}],attrs:{gutter:10}},[t("el-col",{attrs:{span:9}},[t("el-form-item",{attrs:{label:"Default",prop:"default",error:e.errors.is_default}},[t("el-checkbox",{attrs:{size:"small"},model:{value:e.form.is_default,callback:function(r){e.$set(e.form,"is_default",r)},expression:"form.is_default"}},[e._v("Default Organisation")])],1)],1)],1)],1)},staticRenderFns:[]}},AEaD:function(e,r,t){"use strict";Object.defineProperty(r,"__esModule",{value:!0}),r.default={name:"B2OrganisationsBasicFields",props:{form:{type:Object,required:!0},showDefault:{type:Boolean,required:!1,default:function(){return!0}}},computed:{organisationTypes:function(){return["School","Multi Academy Trust","Council","Other"]}},data:function(){return{errors:{}}}}},EW6w:function(e,r,t){var a=t("VU/8")(t("AEaD"),t("9OCh"),!1,function(e){t("v55x")},null,null);e.exports=a.exports},v55x:function(e,r,t){var a=t("vO8a");"string"==typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);t("rjj0")("8f04b246",a,!0,{})},vO8a:function(e,r,t){(e.exports=t("FZ+f")(!1)).push([e.i,"",""])}});
//# sourceMappingURL=b2-organisations-basic-fields.js.map