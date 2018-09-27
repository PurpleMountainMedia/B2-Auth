webpackJsonp([18],{SVna:function(e,r,s){"use strict";Object.defineProperty(r,"__esModule",{value:!0}),r.default={name:"B2OrganisationsAddressFields",props:{form:{type:Object,required:!0}},data:function(){return{errors:{},show:!0}},computed:{countries:function(){return[{name:"United Kingdom",code:"GB"}]}}}},UX7R:function(e,r,s){(e.exports=s("FZ+f")(!1)).push([e.i,"",""])},btR0:function(e,r){e.exports={render:function(){var e=this,r=e.$createElement,s=e._self._c||r;return s("div",{},[s("el-row",{attrs:{gutter:10}},[s("el-col",[s("p",[s("strong",[e._v(e._s(e.__("Address")))])]),e._v(" "),e._t("belowName",null,{show:e.show}),e._v(" "),s("hr")],2)],1),e._v(" "),e.show?[s("el-row",{attrs:{gutter:10}},[s("el-col",{attrs:{md:12}},[s("el-form-item",{attrs:{label:e.__("Address Line 1"),error:e.errors.address_line_1,rules:{required:!0,message:e.__("Address line 1 is required.")},prop:"address_line_1"}},[s("el-input",{attrs:{id:"organisation_address_line_1",size:"small",name:"address_line_1"},model:{value:e.form.address_line_1,callback:function(r){e.$set(e.form,"address_line_1",r)},expression:"form.address_line_1"}})],1)],1),e._v(" "),s("el-col",{attrs:{md:12}},[s("el-form-item",{attrs:{label:e.__("Address Line 2"),error:e.errors.address_line_2,prop:"address_line_2"}},[s("el-input",{attrs:{id:"organisation_address_line_2",size:"small",name:"address_line_2"},model:{value:e.form.address_line_2,callback:function(r){e.$set(e.form,"address_line_2",r)},expression:"form.address_line_2"}})],1)],1)],1),e._v(" "),s("el-row",{attrs:{gutter:10}},[s("el-col",{attrs:{md:12}},[s("el-form-item",{attrs:{label:e.__("Address Town"),error:e.errors.address_town,rules:{required:!0,message:e.__("Address town is required.")},prop:"address_town"}},[s("el-input",{attrs:{id:"organisation_address_town",size:"small",name:"address_town"},model:{value:e.form.address_town,callback:function(r){e.$set(e.form,"address_town",r)},expression:"form.address_town"}})],1)],1),e._v(" "),s("el-col",{attrs:{md:12}},[s("el-form-item",{attrs:{label:e.__("Address County"),error:e.errors.address_county,rules:{required:!0,message:e.__("Address county is required.")},prop:"address_county"}},[s("el-input",{attrs:{id:"organisation_address_county",size:"small",name:"address_county"},model:{value:e.form.address_county,callback:function(r){e.$set(e.form,"address_county",r)},expression:"form.address_county"}})],1)],1)],1),e._v(" "),s("el-row",{attrs:{gutter:10}},[s("el-col",{attrs:{md:12}},[s("el-form-item",{attrs:{label:e.__("Address Postcode"),error:e.errors.address_postcode,rules:{required:!0,message:e.__("Address postcode is required.")},prop:"address_postcode"}},[s("el-input",{attrs:{id:"organisation_address_postcode",size:"small",name:"address_postcode"},model:{value:e.form.address_postcode,callback:function(r){e.$set(e.form,"address_postcode",r)},expression:"form.address_postcode"}})],1)],1),e._v(" "),s("el-col",{attrs:{md:12}},[s("el-form-item",{attrs:{label:e.__("Address Country"),error:e.errors.address_country,rules:{required:!0,message:e.__("Address country is required.")},prop:"address_country"}},[s("el-select",{attrs:{id:"organisation_address_country",size:"small",name:"address_country"},model:{value:e.form.address_country,callback:function(r){e.$set(e.form,"address_country",r)},expression:"form.address_country"}},e._l(e.countries,function(e,r){return s("el-option",{key:r,attrs:{label:e.name,value:e.code}})}))],1)],1)],1)]:e._e()],2)},staticRenderFns:[]}},j2Vy:function(e,r,s){var o=s("UX7R");"string"==typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);s("rjj0")("9ba916d4",o,!0,{})},vrDF:function(e,r,s){var o=s("VU/8")(s("SVna"),s("btR0"),!1,function(e){s("j2Vy")},null,null);e.exports=o.exports}});
//# sourceMappingURL=b2-organisations-address-fields.js.map