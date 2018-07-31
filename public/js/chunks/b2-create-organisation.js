webpackJsonp([8],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}]]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_api__ = __webpack_require__("./resources/assets/js/utils/api.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_validation__ = __webpack_require__("./resources/assets/js/utils/validation.js");
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




/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'B2CreateOrganisation',

    components: {
        B2OrganisationsBasicFields: function B2OrganisationsBasicFields() {
            return __webpack_require__.e/* import() */(13).then(__webpack_require__.bind(null, "./resources/assets/js/components/organisations/fields/B2OrganisationsBasicFields.vue"));
        },
        B2Errors: function B2Errors() {
            return __webpack_require__.e/* import() */(7).then(__webpack_require__.bind(null, "./resources/assets/js/components/B2Errors.vue"));
        }
    },

    props: {
        showBtn: {
            type: Boolean,
            required: false,
            default: function _default() {
                return true;
            }
        },

        onCreate: {
            type: Function,
            required: false,
            default: function _default() {
                return function (organisation) {};
            }
        }
    },

    data: function data() {
        return {
            showModal: false,
            organisationForm: {},
            loading: false,
            formErrors: {}
        };
    },


    methods: {

        /**
         * Handle the closure of the modal
         *
         * @return Void
         */
        clearModal: function clearModal() {
            this.showModal = false;
            this.$refs.organisationForm.resetFields();
            this.organisationForm = {};
            this.formErrors = {};
        },


        /**
         * Handle the form submission and create the org
         *
         * @return Void
         */
        createOrganisation: function createOrganisation() {
            var _this = this;

            this.loading = true;
            this.formErrors = {};

            this.$refs.organisationForm.validate(function (valid, errors) {

                if (valid) {
                    __WEBPACK_IMPORTED_MODULE_0__utils_api__["a" /* default */].persist('post', {
                        path: 'organisations',
                        object: _this.organisationForm
                    }).then(function (data) {
                        _this.loading = false;
                        _this.onCreate(data.data);
                        _this.clearModal();
                        _this.$message({
                            message: __WEBPACK_IMPORTED_MODULE_1__utils_validation__["a" /* default */].getSuccessMessage(),
                            type: 'success'
                        });
                    }).catch(function (error) {
                        _this.formErrors = error;
                        _this.loading = false;
                        _this.$message.error(__WEBPACK_IMPORTED_MODULE_1__utils_validation__["a" /* default */].getErrorMessage());
                    });
                } else {
                    _this.loading = false;
                    _this.formErrors = {
                        message: __WEBPACK_IMPORTED_MODULE_1__utils_validation__["a" /* default */].getValidationErrorMessage(),
                        errors: __WEBPACK_IMPORTED_MODULE_1__utils_validation__["a" /* default */].getValidationMessages(errors)
                    };
                    return false;
                }
            });
        }
    }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-5480153c\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("./node_modules/css-loader/lib/css-base.js")(true);
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", "", {"version":3,"sources":[],"names":[],"mappings":"","file":"B2CreateOrganisation.vue","sourceRoot":""}]);

// exports


/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-5480153c\",\"hasScoped\":false,\"buble\":{\"transforms\":{}}}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue":
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      directives: [
        {
          name: "loading",
          rawName: "v-loading",
          value: _vm.loading,
          expression: "loading"
        }
      ]
    },
    [
      _vm.userCannot("create organisations")
        ? _c(
            "el-tooltip",
            {
              attrs: {
                content: "You don't have permission to create organisations",
                placement: "top",
                effect: "light"
              }
            },
            [_c("i", { staticClass: "el-icon-info" })]
          )
        : _vm._e(),
      _vm._v(" "),
      _c(
        "el-button",
        {
          directives: [
            {
              name: "show",
              rawName: "v-show",
              value: _vm.showBtn,
              expression: "showBtn"
            }
          ],
          attrs: {
            type: "primary",
            plain: "",
            autofocus: "",
            disabled: _vm.userCannot("create organisations"),
            size: "small"
          },
          on: {
            click: function($event) {
              _vm.showModal = true
            }
          }
        },
        [
          _vm._v("Create Organisation "),
          _c("i", { staticClass: "far fa-plus-circle" })
        ]
      ),
      _vm._v(" "),
      _c(
        "el-dialog",
        {
          attrs: {
            title: "Create Organisation",
            visible: _vm.showModal,
            "before-close": _vm.clearModal
          },
          on: {
            "update:visible": function($event) {
              _vm.showModal = $event
            }
          }
        },
        [
          _c(
            "el-form",
            {
              ref: "organisationForm",
              attrs: {
                model: _vm.organisationForm,
                "label-position": "top",
                "label-width": "100px",
                "status-icon": ""
              }
            },
            [
              _c("b2-organisations-basic-fields", {
                attrs: { form: _vm.organisationForm }
              })
            ],
            1
          ),
          _vm._v(" "),
          _c("b2-errors", { attrs: { errors: _vm.formErrors } }),
          _vm._v(" "),
          _c(
            "span",
            {
              staticClass: "dialog-footer",
              attrs: { slot: "footer" },
              slot: "footer"
            },
            [
              _c(
                "el-button",
                {
                  attrs: {
                    disabled: _vm.loading,
                    type: "danger",
                    size: "small"
                  },
                  on: { click: _vm.clearModal }
                },
                [_vm._v("Cancel")]
              ),
              _vm._v(" "),
              _c(
                "el-button",
                {
                  attrs: {
                    disabled: _vm.loading,
                    type: "success",
                    size: "small",
                    plain: ""
                  },
                  on: { click: _vm.createOrganisation }
                },
                [_vm._v("Create")]
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
    require("vue-hot-reload-api")      .rerender("data-v-5480153c", module.exports)
  }
}

/***/ }),

/***/ "./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-5480153c\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue":
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__("./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-5480153c\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue");
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__("./node_modules/vue-style-loader/lib/addStylesClient.js")("d292f786", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js?sourceMap!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-5480153c\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./B2CreateOrganisation.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js?sourceMap!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-5480153c\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./B2CreateOrganisation.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ "./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__("./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-5480153c\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue")
}
var normalizeComponent = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")
/* script */
var __vue_script__ = __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}]]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue")
/* template */
var __vue_template__ = __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-5480153c\",\"hasScoped\":false,\"buble\":{\"transforms\":{}}}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/components/organisations/components/B2CreateOrganisation.vue")
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
Component.options.__file = "resources/assets/js/components/organisations/components/B2CreateOrganisation.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5480153c", Component.options)
  } else {
    hotAPI.reload("data-v-5480153c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ "./resources/assets/js/utils/api.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var BASE_URL = b2_systems.site_url + '/' + b2_systems.api_prefix + '/';
var SERVER_ERROR_MESSAGE = "We could not access the server at this time. Please try again. If the issue persists, please contact support.";
var SERVER_UNAUTH_MESSAGE = "We could not complete the request, because you are not authorised to do so.";

/* harmony default export */ __webpack_exports__["a"] = ({
    get: function get(data) {
        if (!data.params) {
            data.params = {};
        }

        if (!data.url) {
            data.url = BASE_URL + data.path;
        }

        data.params.limit = data.params.limit ? data.params.limit : 15;
        data.params.ascending = data.params.ascending ? data.params.ascending : 0;
        data.params.orderBy = data.params.orderBy ? data.params.orderBy : 'id';

        console.log('API Get: ' + data.url);

        return new Promise(function (resolve, reject) {
            axios.get(data.url, { params: data.params }).then(function (response) {
                resolve(response.data);
            }.bind(this)).catch(function (error) {
                reject(this.errorAdapter(error));
            }.bind(this));
        }.bind(this));
    },


    /**
     * Delete data on the server.
     *
     * @param Object data
     *
     * @return Promise | resolve() or reject()
     */
    delete: function _delete(data) {
        if (!data.url) {
            data.url = BASE_URL + data.path;
        }

        console.log('API Delete: ' + data.url);

        return new Promise(function (resolve, reject) {
            axios.delete(data.url, data.params ? { params: data.params } : '').then(function (response) {
                resolve(response.data);
            }.bind(this)).catch(function (error) {
                reject(this.errorAdapter(error));
            }.bind(this));
        }.bind(this));
    },


    /**
     * Persist data to the server using the method supplied.
     *
     * @param String method
     * @param Object data
     *
     * @return Promise | resolve() or reject()
     */
    persist: function persist(method, data) {
        if (!data.params) {
            data.params = {};
        }

        if (!data.url) {
            data.url = BASE_URL + data.path;
        }

        console.log('API ' + method + ': ' + data.url);

        return new Promise(function (resolve, reject) {
            axios[method](data.url, data.object, data.params).then(function (response) {
                resolve(response.data);
            }.bind(this)).catch(function (error) {
                reject(this.errorAdapter(error));
            }.bind(this));
        }.bind(this));
    },


    /**
     * Turn the response from the server into something we can work with.
     *
     * @param Object error
     *
     * @return Object
     */
    errorAdapter: function errorAdapter(error) {
        error = error ? error : {};
        var response = error.response ? error.response : {};
        error = response.status ? error.response : error;
        var data = error.data ? error.data : error.message;

        console.error('API Error:');
        console.log(error);
        console.error('API Error Data');
        console.log(data);

        return error ? (typeof data === 'undefined' ? 'undefined' : _typeof(data)) === 'object' && error.status === 422 ? data : error.status === 403 ? {
            message: SERVER_UNAUTH_MESSAGE,
            code: error.status
        } : {
            message: SERVER_ERROR_MESSAGE,
            errors: {
                'server': ['Please use this error code in any suppot queries. Error Code: ' + error.status]
            },
            code: error.status
        } : {
            message: SERVER_ERROR_MESSAGE,
            errors: {
                'server': error.message
            },
            code: error.status
        };
    }
});

/***/ }),

/***/ "./resources/assets/js/utils/validation.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var ERROR_MESSAGE = 'Oops, there was a problem saving the data.';
var VALIDATION_ERROR_MESSAGE = 'Please fill in the required fields above.';
var SUCCESS_MESSAGE = 'Data saved successfully.';

/* harmony default export */ __webpack_exports__["a"] = ({

    /**
     * Get and format the validation messages from the form.
     *
     * @param errors
     * @return Array
     */
    getValidationMessages: function getValidationMessages() {
        var errors = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

        var validationMessages = [];
        for (var error in errors) {
            if (errors[error]) {
                validationMessages.push([errors[error][0] ? errors[error][0].message : '']);
            }
        }
        return validationMessages;
    },


    /**
     * Return the error message if issues saving the data.
     *
     * @return String
     */
    getErrorMessage: function getErrorMessage() {
        return ERROR_MESSAGE;
    },


    /**
     * Return the validation error message if validation fails.
     *
     * @return String
     */
    getValidationErrorMessage: function getValidationErrorMessage() {
        return VALIDATION_ERROR_MESSAGE;
    },


    /**
     * Return the success message if data saved successfully.
     *
     * @return String
     */
    getSuccessMessage: function getSuccessMessage() {
        return SUCCESS_MESSAGE;
    }
});

/***/ })

});
//# sourceMappingURL=b2-create-organisation.js.map