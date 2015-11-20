'use strict';

/**
 * @ngdoc service
 * @name pmsApp.loginService
 * @description
 * # loginService
 * Service in the pmsApp.
 */
angular.module('pmsApp').factory('loginService', ['$resource', 'apiUrl', function ($resource, apiUrl) {
    return $resource(apiUrl.login, {} );
}]);