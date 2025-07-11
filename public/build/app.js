"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
// import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */

// import '@fortawesome/fontawesome-free/css/all.min.css';
// import '@fortawesome/fontawesome-free/js/all.js';



// console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

document.addEventListener('DOMContentLoaded', function () {
  var burgerMenu = document.querySelector('.burger-menu');
  var mainNav = document.querySelector('.main-nav');
  burgerMenu.addEventListener('click', function () {
    this.classList.toggle('active');
    mainNav.classList.toggle('active');
  });

  // Fermer le menu si on clique en dehors
  document.addEventListener('click', function (event) {
    if (!mainNav.contains(event.target) && !burgerMenu.contains(event.target)) {
      burgerMenu.classList.remove('active');
      mainNav.classList.remove('active');
    }
  });
});

/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/app.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFMkI7O0FBRTNCOztBQUdBQSxRQUFRLENBQUNDLGdCQUFnQixDQUFDLGtCQUFrQixFQUFFLFlBQVc7RUFDckQsSUFBTUMsVUFBVSxHQUFHRixRQUFRLENBQUNHLGFBQWEsQ0FBQyxjQUFjLENBQUM7RUFDekQsSUFBTUMsT0FBTyxHQUFHSixRQUFRLENBQUNHLGFBQWEsQ0FBQyxXQUFXLENBQUM7RUFFbkRELFVBQVUsQ0FBQ0QsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQVc7SUFDNUMsSUFBSSxDQUFDSSxTQUFTLENBQUNDLE1BQU0sQ0FBQyxRQUFRLENBQUM7SUFDL0JGLE9BQU8sQ0FBQ0MsU0FBUyxDQUFDQyxNQUFNLENBQUMsUUFBUSxDQUFDO0VBQ3RDLENBQUMsQ0FBQzs7RUFFRjtFQUNBTixRQUFRLENBQUNDLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFTTSxLQUFLLEVBQUU7SUFDL0MsSUFBSSxDQUFDSCxPQUFPLENBQUNJLFFBQVEsQ0FBQ0QsS0FBSyxDQUFDRSxNQUFNLENBQUMsSUFBSSxDQUFDUCxVQUFVLENBQUNNLFFBQVEsQ0FBQ0QsS0FBSyxDQUFDRSxNQUFNLENBQUMsRUFBRTtNQUN2RVAsVUFBVSxDQUFDRyxTQUFTLENBQUNLLE1BQU0sQ0FBQyxRQUFRLENBQUM7TUFDckNOLE9BQU8sQ0FBQ0MsU0FBUyxDQUFDSyxNQUFNLENBQUMsUUFBUSxDQUFDO0lBQ3RDO0VBQ0osQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDLEM7Ozs7Ozs7Ozs7O0FDaENGIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5zY3NzPzhmNTkiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gaW1wb3J0ICcuL2Jvb3RzdHJhcC5qcyc7XG4vKlxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxuICpcbiAqIFRoaXMgZmlsZSB3aWxsIGJlIGluY2x1ZGVkIG9udG8gdGhlIHBhZ2UgdmlhIHRoZSBpbXBvcnRtYXAoKSBUd2lnIGZ1bmN0aW9uLFxuICogd2hpY2ggc2hvdWxkIGFscmVhZHkgYmUgaW4geW91ciBiYXNlLmh0bWwudHdpZy5cbiAqL1xuXG4vLyBpbXBvcnQgJ0Bmb3J0YXdlc29tZS9mb250YXdlc29tZS1mcmVlL2Nzcy9hbGwubWluLmNzcyc7XG4vLyBpbXBvcnQgJ0Bmb3J0YXdlc29tZS9mb250YXdlc29tZS1mcmVlL2pzL2FsbC5qcyc7XG5cbmltcG9ydCAnLi9zdHlsZXMvYXBwLnNjc3MnO1xuXG4vLyBjb25zb2xlLmxvZygnVGhpcyBsb2cgY29tZXMgZnJvbSBhc3NldHMvYXBwLmpzIC0gd2VsY29tZSB0byBBc3NldE1hcHBlciEg8J+OiScpO1xuXG5cbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHtcbiAgICBjb25zdCBidXJnZXJNZW51ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmJ1cmdlci1tZW51Jyk7XG4gICAgY29uc3QgbWFpbk5hdiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5tYWluLW5hdicpO1xuXG4gICAgYnVyZ2VyTWVudS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC50b2dnbGUoJ2FjdGl2ZScpO1xuICAgICAgICBtYWluTmF2LmNsYXNzTGlzdC50b2dnbGUoJ2FjdGl2ZScpO1xuICAgIH0pO1xuXG4gICAgLy8gRmVybWVyIGxlIG1lbnUgc2kgb24gY2xpcXVlIGVuIGRlaG9yc1xuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oZXZlbnQpIHtcbiAgICAgICAgaWYgKCFtYWluTmF2LmNvbnRhaW5zKGV2ZW50LnRhcmdldCkgJiYgIWJ1cmdlck1lbnUuY29udGFpbnMoZXZlbnQudGFyZ2V0KSkge1xuICAgICAgICAgICAgYnVyZ2VyTWVudS5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUnKTtcbiAgICAgICAgICAgIG1haW5OYXYuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XG4gICAgICAgIH1cbiAgICB9KTtcbn0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJidXJnZXJNZW51IiwicXVlcnlTZWxlY3RvciIsIm1haW5OYXYiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJldmVudCIsImNvbnRhaW5zIiwidGFyZ2V0IiwicmVtb3ZlIl0sInNvdXJjZVJvb3QiOiIifQ==