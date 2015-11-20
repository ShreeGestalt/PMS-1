'use strict';

/**
 * @ngdoc service
 * @name pmsApp.flagService
 * @description
 * # flagService
 * Service in the pmsApp.
 */

angular.module('pmsApp').factory('flagService', ['$resource', 'API_BASE_URI', function ($resource, API_BASE_URI) {
	return $resource(API_BASE_URI + 'flag' , {},{
		post:  {method:'POST',  params: {}, isArray: true},
		query: {method: 'GET', params: {}, isArray: false}
	});
}]);