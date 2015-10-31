'use strict';

/**
 * @ngdoc service
 * @name pmsApp.apiUrl
 * @description
 * # apiUrl
 * Service in the pmsApp.
 */
angular.module('pmsApp')
  .constant('apiUrl', function () {
	var BASE_URL = 'services/index.php/',
        apiRoot = $('#apiRoot').attr('href') ? $('#apiRoot').attr('href') : '';

    BASE_URL = apiRoot + BASE_URL;
    return {
      'DISTRICT': BASE_URL + 'districts',
    };
  }());