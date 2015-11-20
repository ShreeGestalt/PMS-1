'use strict';

/**
 * @ngdoc directive
 * @name pmsApp.directive:leftNavigationDir
 * @description
 * # navigationDir
 */
angular.module('pmsApp')
  .directive('leftNavigationDir', function () {
    return {
      templateUrl: 'views/left-navigation.html',
      restrict: 'E',
      replace: true,
      link: function postLink() {
        //element.text('this is the navigationDir directive');
      },
      controller: function($scope) {
        $scope.isLogin = false;
      }
    };
  });