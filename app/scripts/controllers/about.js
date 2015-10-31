'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the pmsApp
 */
angular.module('pmsApp')
  .controller('AboutCtrl', function ($scope, $http) {
    this.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
	$scope.users = [];
  });
