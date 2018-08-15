webpackJsonp([0],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}]]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/components/user/B2UserForm.vue":
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




/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'B2UserForm',

    components: {
        B2UserBasicFields: function B2UserBasicFields() {
            return __webpack_require__.e/* import() */(13).then(__webpack_require__.bind(null, "./resources/assets/js/components/user/fields/B2UserBasicFields.vue"));
        },
        B2UserSecurityFields: function B2UserSecurityFields() {
            return __webpack_require__.e/* import() */(10).then(__webpack_require__.bind(null, "./resources/assets/js/components/user/fields/B2UserSecurityFields.vue"));
        },
        B2UserPreferencesFields: function B2UserPreferencesFields() {
            return __webpack_require__.e/* import() */(12).then(__webpack_require__.bind(null, "./resources/assets/js/components/user/fields/B2UserPreferencesFields.vue"));
        },
        B2UserPrivacyFields: function B2UserPrivacyFields() {
            return __webpack_require__.e/* import() */(11).then(__webpack_require__.bind(null, "./resources/assets/js/components/user/fields/B2UserPrivacyFields.vue"));
        },
        B2Errors: function B2Errors() {
            return __webpack_require__.e/* import() */(8).then(__webpack_require__.bind(null, "./resources/assets/js/components/B2Errors.vue"));
        }
    },

    props: {
        user: {
            type: Object,
            required: true
        }
    },

    data: function data() {
        return {
            loading: false,
            userForm: {},
            formErrors: {}
        };
    },
    mounted: function mounted() {
        this.userForm = Object.assign({}, this.user);
    },


    methods: {

        /**
         * Reset the form to its original state
         *
         * @return Void
         */
        reset: function reset() {
            this.userForm = Object.assign({}, this.user);
        },


        /**
         * Submit the form to the server
         *
         * @return Void
         */
        submitForm: function submitForm() {
            var _this = this;

            this.loading = true;
            this.formErrors = {};

            this.$refs.userForm.validate(function (valid, errors) {

                if (valid) {
                    __WEBPACK_IMPORTED_MODULE_0__utils_api__["a" /* default */].persist('put', {
                        path: 'users/' + _this.user.id,
                        object: _this.userForm
                    }).then(function (data) {
                        _this.loading = false;
                        _this.userForm = data.data;
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

/***/ "./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-52455dfc\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/user/B2UserForm.vue":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("./node_modules/css-loader/lib/css-base.js")(true);
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", "", {"version":3,"sources":[],"names":[],"mappings":"","file":"B2UserForm.vue","sourceRoot":""}]);

// exports


/***/ }),

/***/ "./node_modules/vue-loader/lib/component-normalizer.js":
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-52455dfc\",\"hasScoped\":false,\"buble\":{\"transforms\":{}}}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/components/user/B2UserForm.vue":
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
      _c(
        "el-form",
        {
          ref: "userForm",
          attrs: {
            model: _vm.userForm,
            "label-position": "top",
            "label-width": "100px",
            "status-icon": "",
            id: "user_form_dashboard"
          }
        },
        [
          _c("b2-user-basic-fields", { attrs: { form: _vm.userForm } }),
          _vm._v(" "),
          _c("b2-user-security-fields", { attrs: { form: _vm.userForm } }),
          _vm._v(" "),
          _c("b2-user-preferences-fields", { attrs: { form: _vm.userForm } }),
          _vm._v(" "),
          _c("b2-user-privacy-fields", { attrs: { form: _vm.userForm } }),
          _vm._v(" "),
          _c("b2-errors", { attrs: { errors: _vm.formErrors } }),
          _vm._v(" "),
          _c(
            "el-row",
            { staticStyle: { "margin-top": "40px" }, attrs: { gutter: 10 } },
            [
              _c(
                "el-button",
                {
                  attrs: {
                    plain: "",
                    type: "primary",
                    plain: "",
                    size: "small",
                    id: "user_form_reset",
                    loading: _vm.loading
                  },
                  on: { click: _vm.reset }
                },
                [_vm._v("Reset")]
              ),
              _vm._v(" "),
              _c(
                "el-button",
                {
                  attrs: {
                    plain: "",
                    type: "success",
                    size: "small",
                    id: "user_form_submit",
                    loading: _vm.loading
                  },
                  on: { click: _vm.submitForm }
                },
                [_vm._v("Save "), _c("i", { staticClass: "fal fa-save" })]
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
    require("vue-hot-reload-api")      .rerender("data-v-52455dfc", module.exports)
  }
}

/***/ }),

/***/ "./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-52455dfc\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/user/B2UserForm.vue":
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__("./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-52455dfc\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/user/B2UserForm.vue");
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__("./node_modules/vue-style-loader/lib/addStylesClient.js")("19d3093a", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../node_modules/css-loader/index.js?sourceMap!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-52455dfc\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./B2UserForm.vue", function() {
     var newContent = require("!!../../../../../node_modules/css-loader/index.js?sourceMap!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-52455dfc\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./B2UserForm.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ "./node_modules/vue-style-loader/lib/addStylesClient.js":
/***/ (function(module, exports, __webpack_require__) {

/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
  Modified by Evan You @yyx990803
*/

var hasDocument = typeof document !== 'undefined'

if (typeof DEBUG !== 'undefined' && DEBUG) {
  if (!hasDocument) {
    throw new Error(
    'vue-style-loader cannot be used in a non-browser environment. ' +
    "Use { target: 'node' } in your Webpack config to indicate a server-rendering environment."
  ) }
}

var listToStyles = __webpack_require__("./node_modules/vue-style-loader/lib/listToStyles.js")

/*
type StyleObject = {
  id: number;
  parts: Array<StyleObjectPart>
}

type StyleObjectPart = {
  css: string;
  media: string;
  sourceMap: ?string
}
*/

var stylesInDom = {/*
  [id: number]: {
    id: number,
    refs: number,
    parts: Array<(obj?: StyleObjectPart) => void>
  }
*/}

var head = hasDocument && (document.head || document.getElementsByTagName('head')[0])
var singletonElement = null
var singletonCounter = 0
var isProduction = false
var noop = function () {}
var options = null
var ssrIdKey = 'data-vue-ssr-id'

// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
// tags it will allow on a page
var isOldIE = typeof navigator !== 'undefined' && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase())

module.exports = function (parentId, list, _isProduction, _options) {
  isProduction = _isProduction

  options = _options || {}

  var styles = listToStyles(parentId, list)
  addStylesToDom(styles)

  return function update (newList) {
    var mayRemove = []
    for (var i = 0; i < styles.length; i++) {
      var item = styles[i]
      var domStyle = stylesInDom[item.id]
      domStyle.refs--
      mayRemove.push(domStyle)
    }
    if (newList) {
      styles = listToStyles(parentId, newList)
      addStylesToDom(styles)
    } else {
      styles = []
    }
    for (var i = 0; i < mayRemove.length; i++) {
      var domStyle = mayRemove[i]
      if (domStyle.refs === 0) {
        for (var j = 0; j < domStyle.parts.length; j++) {
          domStyle.parts[j]()
        }
        delete stylesInDom[domStyle.id]
      }
    }
  }
}

function addStylesToDom (styles /* Array<StyleObject> */) {
  for (var i = 0; i < styles.length; i++) {
    var item = styles[i]
    var domStyle = stylesInDom[item.id]
    if (domStyle) {
      domStyle.refs++
      for (var j = 0; j < domStyle.parts.length; j++) {
        domStyle.parts[j](item.parts[j])
      }
      for (; j < item.parts.length; j++) {
        domStyle.parts.push(addStyle(item.parts[j]))
      }
      if (domStyle.parts.length > item.parts.length) {
        domStyle.parts.length = item.parts.length
      }
    } else {
      var parts = []
      for (var j = 0; j < item.parts.length; j++) {
        parts.push(addStyle(item.parts[j]))
      }
      stylesInDom[item.id] = { id: item.id, refs: 1, parts: parts }
    }
  }
}

function createStyleElement () {
  var styleElement = document.createElement('style')
  styleElement.type = 'text/css'
  head.appendChild(styleElement)
  return styleElement
}

function addStyle (obj /* StyleObjectPart */) {
  var update, remove
  var styleElement = document.querySelector('style[' + ssrIdKey + '~="' + obj.id + '"]')

  if (styleElement) {
    if (isProduction) {
      // has SSR styles and in production mode.
      // simply do nothing.
      return noop
    } else {
      // has SSR styles but in dev mode.
      // for some reason Chrome can't handle source map in server-rendered
      // style tags - source maps in <style> only works if the style tag is
      // created and inserted dynamically. So we remove the server rendered
      // styles and inject new ones.
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  if (isOldIE) {
    // use singleton mode for IE9.
    var styleIndex = singletonCounter++
    styleElement = singletonElement || (singletonElement = createStyleElement())
    update = applyToSingletonTag.bind(null, styleElement, styleIndex, false)
    remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true)
  } else {
    // use multi-style-tag mode in all other cases
    styleElement = createStyleElement()
    update = applyToTag.bind(null, styleElement)
    remove = function () {
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  update(obj)

  return function updateStyle (newObj /* StyleObjectPart */) {
    if (newObj) {
      if (newObj.css === obj.css &&
          newObj.media === obj.media &&
          newObj.sourceMap === obj.sourceMap) {
        return
      }
      update(obj = newObj)
    } else {
      remove()
    }
  }
}

var replaceText = (function () {
  var textStore = []

  return function (index, replacement) {
    textStore[index] = replacement
    return textStore.filter(Boolean).join('\n')
  }
})()

function applyToSingletonTag (styleElement, index, remove, obj) {
  var css = remove ? '' : obj.css

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = replaceText(index, css)
  } else {
    var cssNode = document.createTextNode(css)
    var childNodes = styleElement.childNodes
    if (childNodes[index]) styleElement.removeChild(childNodes[index])
    if (childNodes.length) {
      styleElement.insertBefore(cssNode, childNodes[index])
    } else {
      styleElement.appendChild(cssNode)
    }
  }
}

function applyToTag (styleElement, obj) {
  var css = obj.css
  var media = obj.media
  var sourceMap = obj.sourceMap

  if (media) {
    styleElement.setAttribute('media', media)
  }
  if (options.ssrId) {
    styleElement.setAttribute(ssrIdKey, obj.id)
  }

  if (sourceMap) {
    // https://developer.chrome.com/devtools/docs/javascript-debugging
    // this makes source maps inside style tags work properly in Chrome
    css += '\n/*# sourceURL=' + sourceMap.sources[0] + ' */'
    // http://stackoverflow.com/a/26603875
    css += '\n/*# sourceMappingURL=data:application/json;base64,' + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + ' */'
  }

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = css
  } else {
    while (styleElement.firstChild) {
      styleElement.removeChild(styleElement.firstChild)
    }
    styleElement.appendChild(document.createTextNode(css))
  }
}


/***/ }),

/***/ "./node_modules/vue-style-loader/lib/listToStyles.js":
/***/ (function(module, exports) {

/**
 * Translates the list format produced by css-loader into something
 * easier to manipulate.
 */
module.exports = function listToStyles (parentId, list) {
  var styles = []
  var newStyles = {}
  for (var i = 0; i < list.length; i++) {
    var item = list[i]
    var id = item[0]
    var css = item[1]
    var media = item[2]
    var sourceMap = item[3]
    var part = {
      id: parentId + ':' + i,
      css: css,
      media: media,
      sourceMap: sourceMap
    }
    if (!newStyles[id]) {
      styles.push(newStyles[id] = { id: id, parts: [part] })
    } else {
      newStyles[id].parts.push(part)
    }
  }
  return styles
}


/***/ }),

/***/ "./resources/assets/js/components/user/B2UserForm.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__("./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js?sourceMap!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-52455dfc\",\"scoped\":false,\"hasInlineConfig\":true}!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/components/user/B2UserForm.vue")
}
var normalizeComponent = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")
/* script */
var __vue_script__ = __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}]]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/components/user/B2UserForm.vue")
/* template */
var __vue_template__ = __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-52455dfc\",\"hasScoped\":false,\"buble\":{\"transforms\":{}}}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/components/user/B2UserForm.vue")
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
Component.options.__file = "resources/assets/js/components/user/B2UserForm.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-52455dfc", Component.options)
  } else {
    hotAPI.reload("data-v-52455dfc", Component.options)
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
//# sourceMappingURL=b2-user-form.js.map