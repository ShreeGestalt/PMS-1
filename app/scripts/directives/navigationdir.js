'use strict';

/**
 * @ngdoc directive
 * @name pmsApp.directive:navigationDir
 * @description
 * # navigationDir
 */
angular.module('pmsApp')
  .directive('pmsNavigationDir', function () {
    return {
      templateUrl: 'views/navigation.html',
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
