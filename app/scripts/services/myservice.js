'use strict';

/**
 * @ngdoc service
 * @name pmsApp.myService
 * @description
 * # myService
 * Service in the pmsApp.
 */
angular.module('pmsApp')
  .service('mysService', ['$resource', 'apiUrl', function ( $resource, apiUrl ) {
    return $resource( apiUrl.USERS, {
      action: '@action'
    }, {
      execute: {
        method: 'POST'
      }
    } );
  }]);
