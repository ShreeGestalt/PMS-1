'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:GenricCtrl
 * @description
 * # GenricCtrl
 * Controller of the pmsApp
 */
 
angular.module('pmsApp').controller('GenricCtrl', ['$scope', 'generic','genericService', 
                                      function ($scope, generic, genericService) {
    
    console.log('Hi This is loger');
    generic.query({}, function (record){
      $scope.pmsdata = record.data;
    });

    $scope.add = function(data){
  
      $scope.genric_id = $scope.selectedItem.id;
      $scope.category_name = $scope.gname;

      var data = {
        generic_name: $scope.category_name,
        category_id: $scope.genric_id
      };

      genericService.save( data, function() {
        console.log( 'Testing' );
      });
  };

  $scope.getSelectedCategoryData = function() {
    alert($scope.selectedItem.id);
    $scope.id = $scope.selectedItem.id
    genericService.getGenericData({id: ''}, function (valu){
      $scope.pms = valu.data;
    });
  }

 
  
  }]);
