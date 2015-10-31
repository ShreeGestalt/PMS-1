'use strict';

/**
 * @ngdoc service
 * @name pmsApp.Addtest
 * @description
 * # Addtest
 * Service in the pmsApp.
 */
 angular.module('pmsApp').factory('Addtest',['$resource', function ($resource) {
 	return $resource('http://localhost:81/PMS-1/services/index.php/generics', {}, {
      get: {method:'GET', params: {} , isArray:false}
      

    });


  }]);
    
 
