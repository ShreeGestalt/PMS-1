'use strict';

/**
 * @ngdoc service
 * @name pmsApp.testdetail
 * @description
 * # testdetail
 * Service in the pmsApp.
 */

/*angular.module('pmsApp').service('testdetail', ['$resource', 'apiUrl', function ($resource, apiUrl) {
	return $resource( apiUrl.testdetails, {} );
}]); */

angular.module('pmsApp').service('testdetail', ['$resource', 'apiUrl', function ($resource, apiUrl) {
	return{
     		searchPatient:$resource( apiUrl.searchPatient, {} ),
     		getTest:$resource( apiUrl.getTest, {} ),
     		selectTest:$resource(apiUrl.selectTest, {})
    };
}]);
