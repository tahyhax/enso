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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/defaults.js":
/***/ (function(module, exports, __webpack_require__) {

moment.locale(Store.user.preferences.global.lang);

Chart.defaults.global.animationDuration = 600;
Chart.defaults.global.legend.display = true;
Chart.defaults.global.legend.labels.boxWidth = 15;
Chart.defaults.global.legend.fullWidth = false;

toastr.options = __webpack_require__("./resources/assets/js/vendor/laravel-enso/modules/toastr.js");

__webpack_require__("./resources/assets/js/vendor/laravel-enso/modules/dataTable.js");

NProgress.configure({
    template: '<div class="bar" role="bar"><div class="peg"></div></div>'
});

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

axios.interceptors.request.use(function (config) {
    config.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;
    NProgress.start();

    return config;
});

axios.interceptors.response.use(function (response) {
    NProgress.done();

    return response;
}, function (error) {
    NProgress.done();

    return Promise.reject(error);
});

/***/ }),

/***/ "./resources/assets/js/vendor/laravel-enso/modules/dataTable.js":
/***/ (function(module, exports) {

$.extend(true, $.fn.dataTable.defaults, {
    dom: 'Brftip',
    stateSave: Store.user.preferences.global.dtStateSave,
    lengthMenu: [10, 15, 20, 25, 30],
    autoWidth: false,
    pagingType: "full_numbers",
    filter: true,
    stateDuration: 60 * 60 * 24 * 90,
    order: [],
    colReorder: true,
    responsive: true,
    serverSide: true
});

$.fn.dataTable.Api.register('sum()', function () {
    return this.flatten().reduce(function (a, b) {
        if (typeof a === 'string') {
            a = a.replace(/[^\d.-]/g, '') * 1;
        }

        if (typeof b === 'string') {
            b = b.replace(/[^\d.-]/g, '') * 1;
        }

        return a + b;
    }, 0);
});

/***/ }),

/***/ "./resources/assets/js/vendor/laravel-enso/modules/toastr.js":
/***/ (function(module, exports) {

module.exports = function () {
    return {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
};

/***/ }),

/***/ 3:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/defaults.js");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgYzBjZmUzZDBmOTVmNDkyM2E4M2QiLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9qcy9kZWZhdWx0cy5qcyIsIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2pzL3ZlbmRvci9sYXJhdmVsLWVuc28vbW9kdWxlcy9kYXRhVGFibGUuanMiLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9qcy92ZW5kb3IvbGFyYXZlbC1lbnNvL21vZHVsZXMvdG9hc3RyLmpzIl0sIm5hbWVzIjpbIm1vbWVudCIsImxvY2FsZSIsIlN0b3JlIiwidXNlciIsInByZWZlcmVuY2VzIiwiZ2xvYmFsIiwibGFuZyIsIkNoYXJ0IiwiZGVmYXVsdHMiLCJhbmltYXRpb25EdXJhdGlvbiIsImxlZ2VuZCIsImRpc3BsYXkiLCJsYWJlbHMiLCJib3hXaWR0aCIsImZ1bGxXaWR0aCIsInRvYXN0ciIsIm9wdGlvbnMiLCJyZXF1aXJlIiwiTlByb2dyZXNzIiwiY29uZmlndXJlIiwidGVtcGxhdGUiLCJheGlvcyIsImludGVyY2VwdG9ycyIsInJlcXVlc3QiLCJ1c2UiLCJjb25maWciLCJoZWFkZXJzIiwiTGFyYXZlbCIsImNzcmZUb2tlbiIsInN0YXJ0IiwicmVzcG9uc2UiLCJkb25lIiwiZXJyb3IiLCJQcm9taXNlIiwicmVqZWN0IiwiJCIsImV4dGVuZCIsImZuIiwiZGF0YVRhYmxlIiwiZG9tIiwic3RhdGVTYXZlIiwiZHRTdGF0ZVNhdmUiLCJsZW5ndGhNZW51IiwiYXV0b1dpZHRoIiwicGFnaW5nVHlwZSIsImZpbHRlciIsInN0YXRlRHVyYXRpb24iLCJvcmRlciIsImNvbFJlb3JkZXIiLCJyZXNwb25zaXZlIiwic2VydmVyU2lkZSIsIkFwaSIsInJlZ2lzdGVyIiwiZmxhdHRlbiIsInJlZHVjZSIsImEiLCJiIiwicmVwbGFjZSIsIm1vZHVsZSIsImV4cG9ydHMiXSwibWFwcGluZ3MiOiI7QUFBQTtBQUNB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LE9BQU9ELENBQVAsS0FBYSxRQUFqQixFQUEyQjtBQUN2QkEsZ0JBQUlBLEVBQUVDLE9BQUYsQ0FBVSxVQUFWLEVBQXNCLEVBQXRCLElBQTRCLENBQWhDO0FBQ0g7O0FBRUQsZUFBT0YsSUFBSUMsQ0FBWDtBQUNILEtBVk0sRUFVSixDQVZJLENBQVA7QUFXSCxDQVpELEU7Ozs7Ozs7QUNkQUUsT0FBT0MsT0FBUCxHQUFpQixZQUFXO0FBQ3hCLFdBQU87QUFDSCx1QkFBZSxJQURaO0FBRUgsaUJBQVMsS0FGTjtBQUdILHVCQUFlLEtBSFo7QUFJSCx1QkFBZSxLQUpaO0FBS0gseUJBQWlCLGlCQUxkO0FBTUgsNkJBQXFCLEtBTmxCO0FBT0gsbUJBQVcsSUFQUjtBQVFILHdCQUFnQixHQVJiO0FBU0gsd0JBQWdCLElBVGI7QUFVSCxtQkFBVyxJQVZSO0FBV0gsMkJBQW1CLElBWGhCO0FBWUgsc0JBQWMsT0FaWDtBQWFILHNCQUFjLFFBYlg7QUFjSCxzQkFBYyxRQWRYO0FBZUgsc0JBQWM7QUFmWCxLQUFQO0FBaUJILENBbEJELEMiLCJmaWxlIjoiL2pzL2RlZmF1bHRzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7XG4gXHRcdFx0XHRjb25maWd1cmFibGU6IGZhbHNlLFxuIFx0XHRcdFx0ZW51bWVyYWJsZTogdHJ1ZSxcbiBcdFx0XHRcdGdldDogZ2V0dGVyXG4gXHRcdFx0fSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiXCI7XG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gMyk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgYzBjZmUzZDBmOTVmNDkyM2E4M2QiLCJtb21lbnQubG9jYWxlKFN0b3JlLnVzZXIucHJlZmVyZW5jZXMuZ2xvYmFsLmxhbmcpO1xuXG5DaGFydC5kZWZhdWx0cy5nbG9iYWwuYW5pbWF0aW9uRHVyYXRpb24gPSA2MDA7XG5DaGFydC5kZWZhdWx0cy5nbG9iYWwubGVnZW5kLmRpc3BsYXkgPSB0cnVlO1xuQ2hhcnQuZGVmYXVsdHMuZ2xvYmFsLmxlZ2VuZC5sYWJlbHMuYm94V2lkdGggPSAxNTtcbkNoYXJ0LmRlZmF1bHRzLmdsb2JhbC5sZWdlbmQuZnVsbFdpZHRoID0gZmFsc2U7XG5cbnRvYXN0ci5vcHRpb25zID0gcmVxdWlyZSgnLi92ZW5kb3IvbGFyYXZlbC1lbnNvL21vZHVsZXMvdG9hc3RyJyk7XG5cbnJlcXVpcmUoJy4vdmVuZG9yL2xhcmF2ZWwtZW5zby9tb2R1bGVzL2RhdGFUYWJsZScpO1xuXG5OUHJvZ3Jlc3MuY29uZmlndXJlKHtcbiAgdGVtcGxhdGU6ICc8ZGl2IGNsYXNzPVwiYmFyXCIgcm9sZT1cImJhclwiPjxkaXYgY2xhc3M9XCJwZWdcIj48L2Rpdj48L2Rpdj4nXG59KTtcblxuLyoqXG4gKiBXZSdsbCByZWdpc3RlciBhIEhUVFAgaW50ZXJjZXB0b3IgdG8gYXR0YWNoIHRoZSBcIkNTUkZcIiBoZWFkZXIgdG8gZWFjaCBvZlxuICogdGhlIG91dGdvaW5nIHJlcXVlc3RzIGlzc3VlZCBieSB0aGlzIGFwcGxpY2F0aW9uLiBUaGUgQ1NSRiBtaWRkbGV3YXJlXG4gKiBpbmNsdWRlZCB3aXRoIExhcmF2ZWwgd2lsbCBhdXRvbWF0aWNhbGx5IHZlcmlmeSB0aGUgaGVhZGVyJ3MgdmFsdWUuXG4gKi9cblxuYXhpb3MuaW50ZXJjZXB0b3JzLnJlcXVlc3QudXNlKChjb25maWcpID0+IHtcbiAgICBjb25maWcuaGVhZGVyc1snWC1DU1JGLVRPS0VOJ10gPSBMYXJhdmVsLmNzcmZUb2tlbjtcbiAgICBOUHJvZ3Jlc3Muc3RhcnQoKTtcblxuICAgIHJldHVybiBjb25maWc7XG59KTtcblxuYXhpb3MuaW50ZXJjZXB0b3JzLnJlc3BvbnNlLnVzZSgocmVzcG9uc2UpID0+IHtcbiAgICBOUHJvZ3Jlc3MuZG9uZSgpO1xuXG4gICAgcmV0dXJuIHJlc3BvbnNlO1xufSwgKGVycm9yKSA9PiB7XG4gICAgTlByb2dyZXNzLmRvbmUoKTtcblxuICAgIHJldHVybiBQcm9taXNlLnJlamVjdChlcnJvcik7XG59KTtcblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9yZXNvdXJjZXMvYXNzZXRzL2pzL2RlZmF1bHRzLmpzIiwiJC5leHRlbmQodHJ1ZSwgJC5mbi5kYXRhVGFibGUuZGVmYXVsdHMsIHtcbiAgICBkb206ICdCcmZ0aXAnLFxuICAgIHN0YXRlU2F2ZTogU3RvcmUudXNlci5wcmVmZXJlbmNlcy5nbG9iYWwuZHRTdGF0ZVNhdmUsXG4gICAgbGVuZ3RoTWVudTogWzEwLCAxNSwgMjAsIDI1LCAzMF0sXG4gICAgYXV0b1dpZHRoOiBmYWxzZSxcbiAgICBwYWdpbmdUeXBlOiBcImZ1bGxfbnVtYmVyc1wiLFxuICAgIGZpbHRlcjogdHJ1ZSxcbiAgICBzdGF0ZUR1cmF0aW9uOiA2MCAqIDYwICogMjQgKiA5MCxcbiAgICBvcmRlcjogW10sXG4gICAgY29sUmVvcmRlcjogdHJ1ZSxcbiAgICByZXNwb25zaXZlOiB0cnVlLFxuICAgIHNlcnZlclNpZGU6IHRydWUsXG59KTtcblxuJC5mbi5kYXRhVGFibGUuQXBpLnJlZ2lzdGVyKCdzdW0oKScsIGZ1bmN0aW9uKCkge1xuICAgIHJldHVybiB0aGlzLmZsYXR0ZW4oKS5yZWR1Y2UoZnVuY3Rpb24oYSwgYikge1xuICAgICAgICBpZiAodHlwZW9mIGEgPT09ICdzdHJpbmcnKSB7XG4gICAgICAgICAgICBhID0gYS5yZXBsYWNlKC9bXlxcZC4tXS9nLCAnJykgKiAxO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHR5cGVvZiBiID09PSAnc3RyaW5nJykge1xuICAgICAgICAgICAgYiA9IGIucmVwbGFjZSgvW15cXGQuLV0vZywgJycpICogMTtcbiAgICAgICAgfVxuXG4gICAgICAgIHJldHVybiBhICsgYjtcbiAgICB9LCAwKTtcbn0pO1xuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL3Jlc291cmNlcy9hc3NldHMvanMvdmVuZG9yL2xhcmF2ZWwtZW5zby9tb2R1bGVzL2RhdGFUYWJsZS5qcyIsIm1vZHVsZS5leHBvcnRzID0gZnVuY3Rpb24oKSB7XG4gICAgcmV0dXJuIHtcbiAgICAgICAgXCJjbG9zZUJ1dHRvblwiOiB0cnVlLFxuICAgICAgICBcImRlYnVnXCI6IGZhbHNlLFxuICAgICAgICBcIm5ld2VzdE9uVG9wXCI6IGZhbHNlLFxuICAgICAgICBcInByb2dyZXNzQmFyXCI6IGZhbHNlLFxuICAgICAgICBcInBvc2l0aW9uQ2xhc3NcIjogXCJ0b2FzdC10b3AtcmlnaHRcIixcbiAgICAgICAgXCJwcmV2ZW50RHVwbGljYXRlc1wiOiBmYWxzZSxcbiAgICAgICAgXCJvbmNsaWNrXCI6IG51bGwsXG4gICAgICAgIFwic2hvd0R1cmF0aW9uXCI6IDMwMCxcbiAgICAgICAgXCJoaWRlRHVyYXRpb25cIjogMTAwMCxcbiAgICAgICAgXCJ0aW1lT3V0XCI6IDUwMDAsXG4gICAgICAgIFwiZXh0ZW5kZWRUaW1lT3V0XCI6IDEwMDAsXG4gICAgICAgIFwic2hvd0Vhc2luZ1wiOiBcInN3aW5nXCIsXG4gICAgICAgIFwiaGlkZUVhc2luZ1wiOiBcImxpbmVhclwiLFxuICAgICAgICBcInNob3dNZXRob2RcIjogXCJmYWRlSW5cIixcbiAgICAgICAgXCJoaWRlTWV0aG9kXCI6IFwiZmFkZU91dFwiXG4gICAgfTtcbn07XG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vcmVzb3VyY2VzL2Fzc2V0cy9qcy92ZW5kb3IvbGFyYXZlbC1lbnNvL21vZHVsZXMvdG9hc3RyLmpzIl0sInNvdXJjZVJvb3QiOiIifQ==