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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/timezz/dist/timezz.js":
/*!********************************************!*\
  !*** ./node_modules/timezz/dist/timezz.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

!function(e,t){ true?module.exports=t():undefined}("undefined"==typeof self?this:self,(function(){return(()=>{"use strict";var e={};return(()=>{var t=e;function n(e){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function o(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}var i="[TimezZ]",r="https://github.com/BrooonS/timezz",s=36e5,a=864e5,f=31536e6,c=/^(\d{4})[-/]?(\d{1,2})?[-/]?(\d{0,2})[^0-9]*(\d{1,2})?:?(\d{1,2})?:?(\d{1,2})?[.:]?(\d+)?$/,u=["years","days","hours","minutes","seconds"],h=function(){function e(t,n){var o=this;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.elements=[],this.isDestroyed=!1,this.parseDate=function(e){if(e instanceof Date)return new Date(e);if("string"==typeof e&&!/Z$/i.test(e)){var t=e.match(c);if(t){var n=t[2]-1||0,o=(t[7]||"0").substring(0,3);return new Date(t[1],n,t[3]||1,t[4]||0,t[5]||0,t[6]||0,o)}}return new Date(e)},this.checkFields=function(e){var t=function(t,n){void 0!==e[t]&&n.length&&console.warn("".concat(i,":"),"Parameter '".concat(t,"' should be ").concat(n.length>1?"one of the types":"the type",": ").concat(n.join(", "),"."),o.elements.length>1?o.elements:o.elements[0])};"boolean"!=typeof e.stop&&t("stop",["boolean"]),"boolean"!=typeof e.canContinue&&t("canContinue",["boolean"]),"function"!=typeof e.beforeCreate&&t("beforeCreate",["function"]),"function"!=typeof e.beforeDestroy&&t("beforeDestroy",["function"]),"function"!=typeof e.update&&t("update",["function"])},this.fixZero=function(e){return e>=10?"".concat(e):"0".concat(e)},this.fixNumber=function(e){return Math.floor(Math.abs(e))},this.updateElements(t),this.checkFields(n),this.date=this.parseDate(n.date),this.stop=n.stop||!1,this.canContinue=n.canContinue||!1,this.withYears=n.withYears||!1,this.beforeCreate=n.beforeCreate,this.update=n.update,"function"==typeof this.beforeCreate&&this.beforeCreate(),this.init()}var t,n;return t=e,(n=[{key:"init",value:function(){this.isDestroyed=!1;var e=new Date(this.date).getTime()-(new Date).getTime(),t=this.canContinue||e>0,n=t&&this.withYears?this.fixNumber(e/f):0,o={years:n,days:t?this.fixNumber(0===n?e/a:e%f/a):0,hours:t?this.fixNumber(e%a/s):0,minutes:t?this.fixNumber(e%s/6e4):0,seconds:t?this.fixNumber(e%6e4/1e3):0,distance:Math.abs(e),isTimeOver:e<=0};(t&&!this.stop||!this.timeout)&&this.setHTML(o),"function"==typeof this.update&&this.update(o),this.timeout||(this.timeout=setInterval(this.init.bind(this),1e3))}},{key:"setHTML",value:function(e){var t=this;this.elements.forEach((function(n){u.forEach((function(o){var i=n.querySelector("[data-".concat(o,"]")),r=t.fixZero(e[o]);i&&i.innerHTML!==r&&(i.innerHTML=r)}))}))}},{key:"updateElements",value:function(e){if(e)try{"string"==typeof e?this.elements=Array.from(document.querySelectorAll(e)):(Array.isArray(e)||e instanceof NodeList)&&Array.from(e).every((function(e){return e instanceof HTMLElement}))?this.elements=Array.from(e):e instanceof HTMLElement&&(this.elements=[e])}catch(e){}}},{key:"destroy",value:function(){this.timeout&&(clearInterval(this.timeout),this.timeout=null),this.elements.forEach((function(e){u.forEach((function(t){var n=e.querySelector("[data-".concat(t,"]"));n&&(n.innerHTML="")}))})),this.isDestroyed=!0}}])&&o(t.prototype,n),e}(),l=function(e,t){if(void 0===e)throw new Error("".concat(i,": Elements aren't passed. Check documentation for more info. ").concat(r));if(!t||"object"!==n(t)||"string"!=typeof t.date&&"number"!=typeof t.date&&!(t.date instanceof Date))throw new Error("".concat(i,": Date is invalid. Check documentation for more info. ").concat(r));return new h(e,t)};l.prototype=h.prototype,t.default=l})(),e.default})()}));

/***/ }),

/***/ "./resources/js/experiments/arduino/menu.js":
/*!**************************************************!*\
  !*** ./resources/js/experiments/arduino/menu.js ***!
  \**************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var timezz__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! timezz */ "./node_modules/timezz/dist/timezz.js");
/* harmony import */ var timezz__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(timezz__WEBPACK_IMPORTED_MODULE_0__);

var timer = timezz__WEBPACK_IMPORTED_MODULE_0___default()('.timer', {
  date: new Date()
});
timer.canContinue = true;

/***/ }),

/***/ 1:
/*!********************************************************!*\
  !*** multi ./resources/js/experiments/arduino/menu.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/resources/js/experiments/arduino/menu.js */"./resources/js/experiments/arduino/menu.js");


/***/ })

/******/ });