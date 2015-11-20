'use strict';

/**
 * @ngdoc service
 * @name pmsApp.snippet
 * @description
 * # snippet
 * Service in the pmsApp.
 */
angular.module('pmsApp').factory('snippet',['$resource', function ($resource) {
	return $resource('http://localhost/PMS-1/services/index.php/snippet' , {},{
		post:  {method:'POST',  params: {} , isArray:true}
	});
}]);