'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:FlagMasterCtrl
 * @description
 * # FlagMasterCtrl
 * Controller of the pmsApp
 */
angular.module('pmsApp').controller('flagMasterCtrl', ['$scope', 'flagService', function ($scope, flagService) {
    $scope.myData = {
      "columnDefs": [
        {"name": "name"},
        {"name": "amount"},
        {"name": "percent"}
      ]
    };
    function init() {
      flagService.query(function(flagResponce) {
        var gridData = {
          data: flagResponce.data
        };
        $scope.myData = gridData;
      });
    }
    $scope.addFlag = function() {
        var data = {
              name: $scope.flag.name,
              amount: $scope.flag.amount,
              percent: $scope.flag.percent
        };
        flagService.save( data, function(responce) {
          console.log( 'Data Saved Successfully');
          $scope.myData = responce;
        });
    };
    init();
}]);