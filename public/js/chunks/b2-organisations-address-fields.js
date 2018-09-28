webpackJsonp([18],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}]]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue":
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

// import countries from '../../../utils/countries.json'

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'B2OrganisationsAddressFields',

  props: {
    form: {
      type: Object,
      required: true
    }
  },

  data: function data() {
    return {
      errors: {},
      show: true
    };
  },


  computed: {
    countries: function countries() {
      return [{
        name: 'United Kingdom',
        code: 'GB'
      }];
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3237e61d\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("./node_modules/css-loader/lib/css-base.js")(true);
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", "", {"version":3,"sources":[],"names":[],"mappings":"","file":"B2OrganisationsAddressFields.vue","sourceRoot":""}]);

// exports


/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-3237e61d\",\"hasScoped\":false,\"buble\":{\"transforms\":{}}}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue":
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
            [
              _c("p", [
                _c("strong", [_vm._v(_vm._s(_vm.__("title-address")))])
              ]),
              _vm._v(" "),
              _vm._t("belowName", null, { show: _vm.show }),
              _vm._v(" "),
              _c("hr")
            ],
            2
          )
        ],
        1
      ),
      _vm._v(" "),
      _vm.show
        ? [
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
                          label: _vm.__("label-address-line1"),
                          error: _vm.errors.address_line_1,
                          rules: {
                            required: true,
                            message: _vm.__("required-address-line1")
                          },
                          prop: "address_line_1"
                        }
                      },
                      [
                        _c("el-input", {
                          attrs: {
                            id: "organisation_address_line_1",
                            size: "small",
                            name: "address_line_1"
                          },
                          model: {
                            value: _vm.form.address_line_1,
                            callback: function($$v) {
                              _vm.$set(_vm.form, "address_line_1", $$v)
                            },
                            expression: "form.address_line_1"
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
                          label: _vm.__("label-address-line2"),
                          error: _vm.errors.address_line_2,
                          prop: "address_line_2"
                        }
                      },
                      [
                        _c("el-input", {
                          attrs: {
                            id: "organisation_address_line_2",
                            size: "small",
                            name: "address_line_2"
                          },
                          model: {
                            value: _vm.form.address_line_2,
                            callback: function($$v) {
                              _vm.$set(_vm.form, "address_line_2", $$v)
                            },
                            expression: "form.address_line_2"
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
            ),
            _vm._v(" "),
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
                          label: _vm.__("label-address-line2"),
                          error: _vm.errors.address_line_2,
                          prop: "address_line_2"
                        }
                      },
                      [
                        _c("el-input", {
                          attrs: {
                            id: "organisation_address_line_2",
                            size: "small",
                            name: "address_line_2"
                          },
                          model: {
                            value: _vm.form.address_line_2,
                            callback: function($$v) {
                              _vm.$set(_vm.form, "address_line_2", $$v)
                            },
                            expression: "form.address_line_2"
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
                              label: _vm.__("label-address-town"),
                              error: _vm.errors.address_town,
                              rules: {
                                required: true,
                                message: _vm.__("required-address-town")
                              },
                              prop: "address_town"
                            }
                          },
                          [
                            _c("el-input", {
                              attrs: {
                                id: "organisation_address_town",
                                size: "small",
                                name: "address_town"
                              },
                              model: {
                                value: _vm.form.address_town,
                                callback: function($$v) {
                                  _vm.$set(_vm.form, "address_town", $$v)
                                },
                                expression: "form.address_town"
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
                              label: _vm.__("label-address-county"),
                              error: _vm.errors.address_county,
                              rules: {
                                required: true,
                                message: _vm.__("required-address-county")
                              },
                              prop: "address_county"
                            }
                          },
                          [
                            _c("el-input", {
                              attrs: {
                                id: "organisation_address_county",
                                size: "small",
                                name: "address_county"
                              },
                              model: {
                                value: _vm.form.address_county,
                                callback: function($$v) {
                                  _vm.$set(_vm.form, "address_county", $$v)
                                },
                                expression: "form.address_county"
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
                          label: _vm.__("label-address-country"),
                          error: _vm.errors.address_country,
                          rules: {
                            required: true,
                            message: _vm.__("required-address-country")
                          },
                          prop: "address_country"
                        }
                      },
                      [
                        _c(
                          "el-select",
                          {
                            attrs: {
                              id: "organisation_address_country",
                              size: "small",
                              name: "address_country"
                            },
                            model: {
                              value: _vm.form.address_country,
                              callback: function($$v) {
                                _vm.$set(_vm.form, "address_country", $$v)
                              },
                              expression: "form.address_country"
                            }
                          },
                          _vm._l(_vm.countries, function(country, key) {
                            return _c("el-option", {
                              key: key,
                              attrs: {
                                label: country.name,
                                value: country.code
                              }
                            })
                          })
                        )
                      ],
                      1
                    )
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
                      label: _vm.__("label-address-country"),
                      error: _vm.errors.address_country,
                      rules: {
                        required: true,
                        message: _vm.__("required-address-country")
                      },
                      prop: "address_country"
                    }
                  },
                  [
                    _c(
                      "el-select",
                      {
                        attrs: { filterable: "", placeholder: "Select" },
                        model: {
                          value: _vm.form.address_country,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "address_country", $$v)
                          },
                          expression: "form.address_country"
                        }
                      },
                      _vm._l(_vm.countries, function(c) {
                        return _c("el-option", {
                          key: c.code,
                          attrs: {
                            label: c.name,
                            value: c.code,
                            name: "address_country",
                            size: "small"
                          }
                        })
                      })
                    )
                  ],
                  1
                )
              ],
              1
            )
          ]
        : _vm._e()
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-3237e61d", module.exports)
  }
}

/***/ }),

/***/ "./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3237e61d\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue":
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__("./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3237e61d\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue");
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__("./node_modules/vue-style-loader/lib/addStylesClient.js")("d47df684", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js?sourceMap!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3237e61d\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./B2OrganisationsAddressFields.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js?sourceMap!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3237e61d\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./B2OrganisationsAddressFields.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ "./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__("./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3237e61d\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue")
}
var normalizeComponent = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")
/* script */
var __vue_script__ = __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}]]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue")
/* template */
var __vue_template__ = __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-3237e61d\",\"hasScoped\":false,\"buble\":{\"transforms\":{}}}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue")
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
Component.options.__file = "resources/assets/js/components/organisations/fields/B2OrganisationsAddressFields.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3237e61d", Component.options)
  } else {
    hotAPI.reload("data-v-3237e61d", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});
//# sourceMappingURL=b2-organisations-address-fields.js.map