'use strict';

/**
 * @ngdoc service
 * @name pmsApp.addtestDropdown
 * @description
 * # addtestDropdown
 * Service in the pmsApp.
 */

angular.module('pmsApp').factory('addtestDropdown', ['$resource', 'apiUrl', function ($resource, apiUrl) {
      //return $resource( apiUrl.getGenericData, {} );
      return {
          addtst:$resource(apiUrl.Addtest, {}),
          instrument:$resource(apiUrl.instrument, {}),
          sample:$resource(apiUrl.sample, {}),
          methode:$resource(apiUrl.methode, {}),
          group:$resource(apiUrl.group, {}),
          flag:$resource(apiUrl.flag, {}),
          updatetest:$resource(apiUrl.updatetest, {})
        };
      /*
       return{
    instrument:$resource(apiUrl + 'testdropdown', {}, {
    get: {method:'GET', params: {} , isArray:false}
    }),

    sample:$resource(apiUrl + 'testdropdown/sample', {}, {
    query: {method:'GET', params: {} , isArray:false}
      }),

     methode:$resource(apiUrl + 'testdropdown/method', {}, {
    query: {method:'GET', params: {} , isArray:false}
      }),


      group:$resource(apiUrl + 'testdropdown/group', {}, {
    query: {method:'GET', params: {} , isArray:false}
      }),

       flag:$resource(apiUrl + 'testdropdown/flag', {}, {
    query: {method:'GET', params: {} , isArray:false}
      })  */      
}]);
