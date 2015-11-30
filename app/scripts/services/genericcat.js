'use strict';

/**
 * @ngdoc service
 * @name pmsApp.generic
 * @description
 * # genericcat
 * Service in the pmsApp.
 */

angular.module('pmsApp').factory('genericService', ['$resource', function($resource) {
  return{
   		category:$resource( apiUrl.getSelectedCategoryData, {} ),
  		update:$resource( apiUrl.updateGenericData, {} ),
      deletecategory:$resource( apiUrl.deleteSelectedCategoryData, {} )
  };
}]);
/*angular.module('pmsApp').factory('genericService',['$resource', function ($resource) {
    return $resource('http://localhost/PMS-1/services/index.php/instruments/instrument/', {}, {
      getGenericData: {method:'GET', params: {id: ''} , isArray:false},
      post:  {method:'POST',  params: {} , isArray:true},
}]);*/

angular.module('pmsApp').factory('generic', ['$resource', 'apiUrl', function ($resource, apiUrl) {
	return $resource( apiUrl.getGenericData, {} );
}]);