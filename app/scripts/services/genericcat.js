'use strict';

/**
 * @ngdoc service
 * @name pmsApp.generic
 * @description
 * # genericcat
 * Service in the pmsApp.
 */

angular.module('pmsApp').factory('genericService',['$resource', 'API_BASE_URI', 'apiUrl', function ($resource, API_BASE_URI, apiUrl) {

    return{
     		category:$resource( apiUrl.getSelectedCategoryData, {} ),
    		update:$resource( apiUrl.updateGenericData, {} ),
    };

    /*return $resource(API_BASE_URI + 'instruments/instrument/', {}, {
      saveGenericCategory:  {method:'POST',  params: {} , isArray:true},
      updateGenericData: {method:'POST', params:{}, isArray:true},
      recordDelete: {method: 'DELETE', params: {'category_id':'', 'generic_id':''}, isArray: true}
    });*/
}]);

angular.module('pmsApp').factory('generic', ['$resource', 'apiUrl', function ($resource, apiUrl) {
	return $resource( apiUrl.getGenericData, {} );
}]);