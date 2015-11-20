'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:LoginCtrl
 * @description
 * # LoginCtrl
 * Controller of the pmsApp
 */
angular.module('pmsApp').controller('LoginCtrl', ['$scope', 'loginService', function ($scope,loginService) {
    $scope.loginSubmit = function() {
    	var loginCredentials = {
    		user_login_name: $scope.user.username,
    		password: $scope.user.password
    	};
    	loginService.save(angular.toJson(loginCredentials), function(responce) {
    		/*console.log(responce);*/
    	});
    };
  }]);