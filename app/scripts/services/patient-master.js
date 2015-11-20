'use strict';

/**
 * @ngdoc service
 * @name pmsApp.patientMaster
 * @description
 * # patientMaster
 * Service in the pmsApp.
 */
angular.module('pmsApp').factory('patientMaster', ['$resource', 'apiUrl', function ($resource, apiUrl) {
   

	return{
			states: $resource(apiUrl.getStats, {}),
			distric: $resource(apiUrl.getDistrics, {}),
			patient: $resource(apiUrl.getPatient, {}),
          /*,
          sample:$resource(apiUrl.sample, {}),
          methode:$resource(apiUrl.methode, {}),
          group:$resource(apiUrl.group, {}),
          flag:$resource(apiUrl.flag, {})*/
    //};
   /*return{
    states:$resource(apiUrl.getStats, {})*/
    /*$resource(apiUrl + 'states', {}, {
    qry:{method:'GET', params: {} , isArray:false}
    }),

    citys:$resource(apiUrl + 'citys', {}, {
    get: {method:'GET', params: {} , isArray:false}
      }),

     districts:$resource(apiUrl + 'districts', {}, {
    get: {method:'GET', params: {} , isArray:false}
      })*/
 	};
  }]);
