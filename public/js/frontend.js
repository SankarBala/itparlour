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

/***/ "./resources/js/frontend/frontend.js":
/*!*******************************************!*\
  !*** ./resources/js/frontend/frontend.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// require('./../bootstrap');\n$(document).ready(function () {\n  // Add smooth scrolling to all links in navbar + footer link\n  $(\".navbar a, footer a[href='#myPage']\").on('click', function (event) {\n    // Prevent default anchor click behavior\n    event.preventDefault(); // Store hash\n\n    var hash = this.hash; // Using jQuery's animate() method to add smooth page scroll\n    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area\n\n    $('html, body').animate({\n      scrollTop: $(hash).offset().top\n    }, 900, function () {\n      // Add hash (#) to URL when done scrolling (default click behavior)\n      window.location.hash = hash;\n    });\n  }); // Slide in elements on scroll\n\n  $(window).scroll(function () {\n    $(\".slideanim\").each(function () {\n      var pos = $(this).offset().top;\n      var winTop = $(window).scrollTop();\n\n      if (pos < winTop + 600) {\n        $(this).addClass(\"slide\");\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZnJvbnRlbmQvZnJvbnRlbmQuanM/NzU1ZCJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsIm9uIiwiZXZlbnQiLCJwcmV2ZW50RGVmYXVsdCIsImhhc2giLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwib2Zmc2V0IiwidG9wIiwid2luZG93IiwibG9jYXRpb24iLCJzY3JvbGwiLCJlYWNoIiwicG9zIiwid2luVG9wIiwiYWRkQ2xhc3MiXSwibWFwcGluZ3MiOiJBQUFBO0FBSUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtBQUN4QjtBQUNBRixHQUFDLENBQUMscUNBQUQsQ0FBRCxDQUF5Q0csRUFBekMsQ0FBNEMsT0FBNUMsRUFBcUQsVUFBU0MsS0FBVCxFQUFnQjtBQUVqRTtBQUNBQSxTQUFLLENBQUNDLGNBQU4sR0FIaUUsQ0FLakU7O0FBQ0EsUUFBSUMsSUFBSSxHQUFHLEtBQUtBLElBQWhCLENBTmlFLENBUWpFO0FBQ0E7O0FBQ0FOLEtBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JPLE9BQWhCLENBQXdCO0FBQ3BCQyxlQUFTLEVBQUVSLENBQUMsQ0FBQ00sSUFBRCxDQUFELENBQVFHLE1BQVIsR0FBaUJDO0FBRFIsS0FBeEIsRUFFRyxHQUZILEVBRVEsWUFBVTtBQUVkO0FBQ0FDLFlBQU0sQ0FBQ0MsUUFBUCxDQUFnQk4sSUFBaEIsR0FBdUJBLElBQXZCO0FBQ0gsS0FORDtBQU9ILEdBakJELEVBRndCLENBcUJ4Qjs7QUFDQU4sR0FBQyxDQUFDVyxNQUFELENBQUQsQ0FBVUUsTUFBVixDQUFpQixZQUFXO0FBQ3hCYixLQUFDLENBQUMsWUFBRCxDQUFELENBQWdCYyxJQUFoQixDQUFxQixZQUFVO0FBQzNCLFVBQUlDLEdBQUcsR0FBR2YsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRUyxNQUFSLEdBQWlCQyxHQUEzQjtBQUVBLFVBQUlNLE1BQU0sR0FBR2hCLENBQUMsQ0FBQ1csTUFBRCxDQUFELENBQVVILFNBQVYsRUFBYjs7QUFDQSxVQUFJTyxHQUFHLEdBQUdDLE1BQU0sR0FBRyxHQUFuQixFQUF3QjtBQUNwQmhCLFNBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUWlCLFFBQVIsQ0FBaUIsT0FBakI7QUFDSDtBQUNKLEtBUEQ7QUFRSCxHQVREO0FBVUgsQ0FoQ0QiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZnJvbnRlbmQvZnJvbnRlbmQuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZXF1aXJlKCcuLy4uL2Jvb3RzdHJhcCcpO1xuXG5cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcbiAgICAvLyBBZGQgc21vb3RoIHNjcm9sbGluZyB0byBhbGwgbGlua3MgaW4gbmF2YmFyICsgZm9vdGVyIGxpbmtcbiAgICAkKFwiLm5hdmJhciBhLCBmb290ZXIgYVtocmVmPScjbXlQYWdlJ11cIikub24oJ2NsaWNrJywgZnVuY3Rpb24oZXZlbnQpIHtcblxuICAgICAgICAvLyBQcmV2ZW50IGRlZmF1bHQgYW5jaG9yIGNsaWNrIGJlaGF2aW9yXG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgLy8gU3RvcmUgaGFzaFxuICAgICAgICB2YXIgaGFzaCA9IHRoaXMuaGFzaDtcblxuICAgICAgICAvLyBVc2luZyBqUXVlcnkncyBhbmltYXRlKCkgbWV0aG9kIHRvIGFkZCBzbW9vdGggcGFnZSBzY3JvbGxcbiAgICAgICAgLy8gVGhlIG9wdGlvbmFsIG51bWJlciAoOTAwKSBzcGVjaWZpZXMgdGhlIG51bWJlciBvZiBtaWxsaXNlY29uZHMgaXQgdGFrZXMgdG8gc2Nyb2xsIHRvIHRoZSBzcGVjaWZpZWQgYXJlYVxuICAgICAgICAkKCdodG1sLCBib2R5JykuYW5pbWF0ZSh7XG4gICAgICAgICAgICBzY3JvbGxUb3A6ICQoaGFzaCkub2Zmc2V0KCkudG9wXG4gICAgICAgIH0sIDkwMCwgZnVuY3Rpb24oKXtcblxuICAgICAgICAgICAgLy8gQWRkIGhhc2ggKCMpIHRvIFVSTCB3aGVuIGRvbmUgc2Nyb2xsaW5nIChkZWZhdWx0IGNsaWNrIGJlaGF2aW9yKVxuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhhc2ggPSBoYXNoO1xuICAgICAgICB9KTtcbiAgICB9KTtcblxuICAgIC8vIFNsaWRlIGluIGVsZW1lbnRzIG9uIHNjcm9sbFxuICAgICQod2luZG93KS5zY3JvbGwoZnVuY3Rpb24oKSB7XG4gICAgICAgICQoXCIuc2xpZGVhbmltXCIpLmVhY2goZnVuY3Rpb24oKXtcbiAgICAgICAgICAgIHZhciBwb3MgPSAkKHRoaXMpLm9mZnNldCgpLnRvcDtcblxuICAgICAgICAgICAgdmFyIHdpblRvcCA9ICQod2luZG93KS5zY3JvbGxUb3AoKTtcbiAgICAgICAgICAgIGlmIChwb3MgPCB3aW5Ub3AgKyA2MDApIHtcbiAgICAgICAgICAgICAgICAkKHRoaXMpLmFkZENsYXNzKFwic2xpZGVcIik7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH0pO1xufSlcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/frontend/frontend.js\n");

/***/ }),

/***/ 1:
/*!*************************************************!*\
  !*** multi ./resources/js/frontend/frontend.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\Laravel\itparour\resources\js\frontend\frontend.js */"./resources/js/frontend/frontend.js");


/***/ })

/******/ });