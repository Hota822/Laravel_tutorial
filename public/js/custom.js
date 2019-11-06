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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/custom.js":
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /opt/rails_to_laravel/resources/js/custom.js: Unexpected token, expected \",\" (28:32)\n\n\u001b[0m \u001b[90m 26 | \u001b[39m\t\t\t\t   \u001b[33m+\u001b[39m \u001b[32m'value=\"'\u001b[39m \u001b[33m+\u001b[39m followedId \u001b[33m+\u001b[39m \u001b[32m'\">'\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 27 | \u001b[39m\t\t\t\t   \u001b[33m+\u001b[39m \u001b[32m'<input id=\"follower_id\" type=\"hidden\" name=\"follower_id\"'\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 28 | \u001b[39m\t\t\t\t   \u001b[33m+\u001b[39m \u001b[32m'value=\"'\u001b[39m \u001b[33m+\u001b[39m followerId \u001b[32m'\">'\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m\t\t\t\t                            \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 29 | \u001b[39m\t\t\t\t   \u001b[33m+\u001b[39m \u001b[32m'<input type=\"submit\" class=\"'\u001b[39m \u001b[33m+\u001b[39m classValue \u001b[33m+\u001b[39m \u001b[32m'\" value=\"'\u001b[39m \u001b[33m+\u001b[39m value\u001b[0m\n\u001b[0m \u001b[90m 30 | \u001b[39m\t\t\t\t   \u001b[33m+\u001b[39m \u001b[32m'\"></form>'\u001b[39m)\u001b[0m\n\u001b[0m \u001b[90m 31 | \u001b[39m\t\t\t\t   \u001b[0m\n    at Parser.raise (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:6420:17)\n    at Parser.unexpected (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:7773:16)\n    at Parser.expect (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:7759:28)\n    at Parser.parseCallExpressionArguments (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8754:14)\n    at Parser.parseSubscript (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8661:29)\n    at Parser.parseSubscripts (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8577:19)\n    at Parser.parseExprSubscripts (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8566:17)\n    at Parser.parseMaybeUnary (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8536:21)\n    at Parser.parseExprOps (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8402:23)\n    at Parser.parseMaybeConditional (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8375:23)\n    at Parser.parseMaybeAssign (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8325:21)\n    at Parser.parseExpression (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8275:23)\n    at Parser.parseStatementContent (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10138:23)\n    at Parser.parseStatement (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10009:17)\n    at Parser.parseBlockOrModuleBlockBody (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10585:25)\n    at Parser.parseBlockBody (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10572:10)\n    at Parser.parseBlock (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10556:10)\n    at Parser.parseStatementContent (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10085:21)\n    at Parser.parseStatement (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10009:17)\n    at Parser.parseIfStatement (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10363:28)\n    at Parser.parseStatementContent (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10054:21)\n    at Parser.parseStatement (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10009:17)\n    at Parser.parseBlockOrModuleBlockBody (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10585:25)\n    at Parser.parseBlockBody (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10572:10)\n    at Parser.parseBlock (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10556:10)\n    at Parser.parseFunctionBody (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:9584:24)\n    at Parser.parseFunctionBodyAndFinish (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:9554:10)\n    at /opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10717:12\n    at Parser.withTopicForbiddingContext (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:9884:14)\n    at Parser.parseFunction (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:10716:10)\n    at Parser.parseFunctionExpression (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:9032:17)\n    at Parser.parseExprAtom (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8945:21)\n    at Parser.parseExprSubscripts (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8556:23)\n    at Parser.parseMaybeUnary (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8536:21)\n    at Parser.parseExprOps (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8402:23)\n    at Parser.parseMaybeConditional (/opt/rails_to_laravel/node_modules/@babel/parser/lib/index.js:8375:23)");

/***/ }),

/***/ "./resources/sass/style.scss":
/*!***********************************!*\
  !*** ./resources/sass/style.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!******************************************************************!*\
  !*** multi ./resources/js/custom.js ./resources/sass/style.scss ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /opt/rails_to_laravel/resources/js/custom.js */"./resources/js/custom.js");
module.exports = __webpack_require__(/*! /opt/rails_to_laravel/resources/sass/style.scss */"./resources/sass/style.scss");


/***/ })

/******/ });