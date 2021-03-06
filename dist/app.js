/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./js/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/app.js":
/*!*******************!*\
  !*** ./js/app.js ***!
  \*******************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _form_validation__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./form-validation */ \"./js/form-validation.js\");\n/* harmony import */ var _search__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./search */ \"./js/search.js\");\n/* harmony import */ var _menu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./menu */ \"./js/menu.js\");\n/* harmony import */ var _keyboard_accessiblity_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./keyboard-accessiblity.js */ \"./js/keyboard-accessiblity.js\");\n\n\n\n\n\nObject(_form_validation__WEBPACK_IMPORTED_MODULE_0__[\"runFormValidation\"])();\nObject(_search__WEBPACK_IMPORTED_MODULE_1__[\"searchBarHandler\"])();\nObject(_menu__WEBPACK_IMPORTED_MODULE_2__[\"menuHandler\"])();\nObject(_keyboard_accessiblity_js__WEBPACK_IMPORTED_MODULE_3__[\"keyboardAccessibility\"])();\n\n\n//# sourceURL=webpack:///./js/app.js?");

/***/ }),

/***/ "./js/form-validation.js":
/*!*******************************!*\
  !*** ./js/form-validation.js ***!
  \*******************************/
/*! exports provided: runFormValidation */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"runFormValidation\", function() { return runFormValidation; });\n\nconst runFormValidation = () => {\n  jQuery(window).load(() => {\n    jQuery('.comment-form-submit').on('click', () => {\n      jQuery('.needs-validation').addClass('was-validated');\n      jQuery('.needs-validation').removeClass('needs-validation');\n      console.log('Validated.');\n    });\n  });\n};\n\n\n//# sourceURL=webpack:///./js/form-validation.js?");

/***/ }),

/***/ "./js/keyboard-accessiblity.js":
/*!*************************************!*\
  !*** ./js/keyboard-accessiblity.js ***!
  \*************************************/
/*! exports provided: keyboardAccessibility */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"keyboardAccessibility\", function() { return keyboardAccessibility; });\nconst keyboardAccessibility = () => {\n  jQuery(window).load(() => {\n    jQuery(window).on(\"keydown\", (e) => {\n      if (e.key == \"Enter\") {\n        document.activeElement.click();\n      }\n    });\n  });\n};\n\n\n//# sourceURL=webpack:///./js/keyboard-accessiblity.js?");

/***/ }),

/***/ "./js/menu.js":
/*!********************!*\
  !*** ./js/menu.js ***!
  \********************/
/*! exports provided: menuHandler */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"menuHandler\", function() { return menuHandler; });\nconst closeSubMenuWithEscape = (e) => {\n\tif (e.key == \"Escape\") {\n\t\tjQuery(\".sub-menu-open\").removeClass(\"sub-menu-open\");\n\t}\n};\n\nconst toggleSubMenu = (e) => {\n\tconst parentLinkItem = e.target.closest(\".menu-item-has-children\");\n\tif (parentLinkItem) {\n\t\tjQuery(parentLinkItem).toggleClass(\"sub-menu-open\");\n\t} else {\n\t\tjQuery(\".sub-menu-open\").removeClass(\"sub-menu-open\");\n\t}\n};\n\nconst menuHandler = () => {\n\tjQuery(window).load(() => {\n\t\tjQuery(\".menu-toggle\").on(\"click\", () => {\n\t\t\tjQuery(\".menu-wrapper\").toggleClass(\"menu-wrapper-open\");\n\t\t\tjQuery(\"html\").toggleClass(\"no-scroll\");\n\n\t\t\tif (jQuery(\".menu-wrapper\").hasClass(\"menu-wrapper-open\")) {\n\t\t\t\tdocument.addEventListener(\"click\", toggleSubMenu);\n\t\t\t\tdocument.addEventListener(\"keydown\", closeSubMenuWithEscape);\n\t\t\t} else {\n\t\t\t\tdocument.removeEventListener(\"click\", toggleSubMenu);\n\t\t\t\tdocument.removeEventListener(\"keydown\", closeSubMenuWithEscape);\n\t\t\t}\n\t\t});\n\t});\n};\n\n\n//# sourceURL=webpack:///./js/menu.js?");

/***/ }),

/***/ "./js/search.js":
/*!**********************!*\
  !*** ./js/search.js ***!
  \**********************/
/*! exports provided: searchBarHandler */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"searchBarHandler\", function() { return searchBarHandler; });\nconst searchBarHandler = () => {\n\tjQuery(\".search-submit\").on(\"mousedown\", (e) => {\n\t\t// Stop blur if submit is pressed.\n\t\te.preventDefault();\n\t});\n\n\tjQuery(\"#s\").on(\"blur\", () => {\n\t\tjQuery(\"#searchform\")[0].reset();\n\t});\n\n\t// Javascript work-around for chrome-based browsers since they don't seem to allow focus-within a form using a button. Have tried placing tabIndex on all interior elements, no change.\n\tjQuery(\".searchform\").on(\"click\", () => {\n\t\tjQuery(\"#s\").focus();\n\t});\n\n\tjQuery(document).on(\"keydown\", (e) => {\n\t\tif (e.key === \"Escape\") document.activeElement.blur();\n\t});\n};\n\n\n//# sourceURL=webpack:///./js/search.js?");

/***/ })

/******/ });