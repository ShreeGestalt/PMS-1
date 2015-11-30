'use strict';

/**
 * @ngdoc service
 * @name pmsApp.generic
 * @description
 * # generic
 * Service in the pmsApp.
 */

angular.module('pmsApp').factory('generic',['$resource', function ($resource) {

    return $resource('http://localhost/PMS-1/services/index.php/instruments1', {}, {
      query: {method:'GET', params: {} , isArray:false}

    });

}]);