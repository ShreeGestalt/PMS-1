'use strict';

/**
 * @ngdoc service
 * @name pmsApp.generic
 * @description
 * # genericcat
 * Service in the pmsApp.
 */

angular.module('pmsApp').factory('genericService',['$resource', 'apiUrl', function ($resource, apiUrl) {

    return{
     		category:$resource( apiUrl.getSelectedCategoryData, {} ),
    		update:$resource( apiUrl.updateGenericData, {} ),
        deletecategory:$resource( apiUrl.deleteSelectedCategoryData, {} )
    };

}]);

angular.module('pmsApp').factory('generic', ['$resource', 'apiUrl', function ($resource, apiUrl) {
	return $resource( apiUrl.getGenericData, {} );
}]);