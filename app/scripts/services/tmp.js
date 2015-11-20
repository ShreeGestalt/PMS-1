'use strict';

/**
 * @ngdoc service
 * @name pmsApp.generic
 * @description
 * # genericcat
 * Service in the pmsApp.
 */

angular.module('pmsApp').factory('genericService',['$resource', function ($resource) {

     return {

   	getGenericData:$resource('http://localhost/PMS-1/services/index.php/instruments/instrument/', {}, {
      query: {method: 'GET', params: {id: ''}, isArray: false},
      post: {method: 'POST', params: {}, isArray: true}
    }),

   	 recordDelete:$resource('http://localhost/PMS-1/services/index.php/instruments/recordDelete/', {}, {
      query: {method: 'DELETE', params: {}, isArray: true}
    })
};
}]);

