webpackJsonp([22],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}]]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'B2OrganisationsAdvancedFields',

  props: {
    form: {
      type: Object,
      required: true
    }
  },

  data: function data() {
    return {
      errors: {}
    };
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-a36c594a\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("./node_modules/css-loader/lib/css-base.js")(true);
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", "", {"version":3,"sources":[],"names":[],"mappings":"","file":"B2OrganisationsAdvancedFields.vue","sourceRoot":""}]);

// exports


/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-a36c594a\",\"hasScoped\":false,\"buble\":{\"transforms\":{}}}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue":
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {},
    [
      _c(
        "el-row",
        { attrs: { gutter: 10 } },
        [
          _c(
            "el-col",
            { attrs: { md: 12 } },
            [
              _c(
                "el-form-item",
                {
                  attrs: {
                    label: _vm.__("Number of Pupils"),
                    prop: "pupil_count",
                    error: _vm.errors.pupil_count,
                    rules: {
                      required: true,
                      message: _vm.__("Number of Pupils is required.")
                    }
                  }
                },
                [
                  _c("el-input-number", {
                    attrs: {
                      size: "small",
                      name: "pupil_count",
                      "controls-position": "right",
                      id: "organisation_pupil_count"
                    },
                    model: {
                      value: _vm.form.pupil_count,
                      callback: function($$v) {
                        _vm.$set(_vm.form, "pupil_count", $$v)
                      },
                      expression: "form.pupil_count"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "el-col",
            { attrs: { md: 12 } },
            [
              _c(
                "el-form-item",
                {
                  attrs: {
                    label: _vm.__("Number of Classrooms"),
                    prop: "pupil_count",
                    error: _vm.errors.room_count,
                    rules: {
                      required: true,
                      message: _vm.__("Number of Classrooms is required.")
                    }
                  }
                },
                [
                  _c("el-input-number", {
                    attrs: {
                      size: "small",
                      name: "room_count",
                      "controls-position": "right",
                      id: "organisation_room_count"
                    },
                    model: {
                      value: _vm.form.room_count,
                      callback: function($$v) {
                        _vm.$set(_vm.form, "room_count", $$v)
                      },
                      expression: "form.room_count"
                    }
                  })
                ],
                1
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-a36c594a", module.exports)
  }
}

/***/ }),

/***/ "./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-a36c594a\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue":
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__("./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-a36c594a\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue");
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__("./node_modules/vue-style-loader/lib/addStylesClient.js")("5f2b18b3", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js?sourceMap!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-a36c594a\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./B2OrganisationsAdvancedFields.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js?sourceMap!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-a36c594a\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./B2OrganisationsAdvancedFields.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ "./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__("./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-a36c594a\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue")
}
var normalizeComponent = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")
/* script */
var __vue_script__ = __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}]]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue")
/* template */
var __vue_template__ = __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-a36c594a\",\"hasScoped\":false,\"buble\":{\"transforms\":{}}}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue")
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/organisations/fields/B2OrganisationsAdvancedFields.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-a36c594a", Component.options)
  } else {
    hotAPI.reload("data-v-a36c594a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});
//# sourceMappingURL=b2-organisations-advanced-fields.js.map