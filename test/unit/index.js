/* eslint-disable import/no-extraneous-dependencies */
import Vue from 'vue';
// import 'es6-promise/auto';
// import 'jspolyfill-array.prototype.find';
import 'babel-polyfill';

Vue.config.productionTip = false;

// require all test files (files that ends with .spec.js)
const testsContext = require.context('./specs', true, /\.spec$/);
testsContext.keys().forEach(testsContext);

// require all src files except main.js for coverage.
// you can also change this to match only the subset of files that
// you want coverage for.
const srcContext = require.context('../../resources/assets/js/components/enso/select', true, /^\.\/(?!main(\.js)?$)/);
srcContext.keys().forEach(srcContext);
