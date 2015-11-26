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

    $scope.metadata = {
      genericData: "",
      gname: ""
    };
    function init() {
      generic.get(function (argument) {
        $scope.metadata.genericData = argument.data;
      }); 
    }

    $scope.add = function(){

      $scope.alerts = [];
      var postData = {
        generic_name: $scope.metadata.gname,
        category_id: $scope.selectedItem.id
      };

      var updateData = {
        generic_name: $scope.metadata.gname,
        generic_id: $scope.selectedItem.id
      };

      genericService.category.save(angular.toJson(postData), function(responce) {
        $scope.alerts = [];
        if(responce.data.message === "User added succefully") {
          $scope.alerts.push({msg: 'Record added successfully', type:'success'});
          $scope.gridOptions.data.push(updateData);
        }
        $scope.metadata.gname = "";
      });
  };

  $scope.getSelectedCategoryData = function() {
    genericService.category.get({id: $scope.selectedItem.id}, function (valu) {
      $scope.categoryData = valu.data;
      var selectedCategoryData = {
        data: valu.data
      };
      $scope.categoryResultCount = selectedCategoryData.data.length;
      $scope.gridOptions.data = selectedCategoryData.data;
    });
  };

  $scope.singleFilter = function( renderableRows ){
    console.log("in single filter");
    var matcher = new RegExp($scope.filterValue);
    renderableRows.forEach( function( row ) {
      var match = false;
      [ 'category_id', 'generic_name', 'Action' ].forEach(function( field ){
        if ( row.entity[field].match(matcher) ){
          match = true;
        }
      });
      if ( !match ){
        row.visible = false;
      }
    });
    return renderableRows;
  };

  $scope.gridOptions = {
    enableFiltering: false,
    onRegisterApi: function(gridApi){
      $scope.gridApi = gridApi;
      $scope.gridApi.grid.registerRowsProcessor( $scope.singleFilter, 200 );
    },
    paginationPageSizes: [25, 50, 75],
    paginationPageSize: 25,
    columnDefs: [
      { name: 'generic_name', displayName: 'Name' },
      { name: 'Action', enableCellEdit: false, cellTemplate:'<a href="" title="Delete Category" ng-click="grid.appScope.deleteRecord(row.entity)" class="btn">&nbsp;<i class="glyphicon glyphicon-trash"></i>&nbsp;</a>'}
    ]
  };
  
  $scope.filter = function() {
    console.log($scope.filterValue);
    console.log("in filter function");
    $scope.gridApi.grid.refresh();
  };

  $scope.deleteRecord = function(deleteData){
    $scope.alerts = [];
    var removeData = {
      genericId: deleteData.generic_id,
      rowId: deleteData.row_id
    };
    genericService.deletecategory.save(angular.toJson(removeData), function(responce) {
      if(responce.data.message === 'Row deleted successfully') {
        angular.forEach($scope.categoryData, function(value, key) {
          if(value.row_id === deleteData.row_id) {
            $scope.categoryData.splice(key);    
          }
        });
        $scope.gridOptions.data = $scope.categoryData;
        $scope.alerts.push({msg: 'Record deleted successfully', type:'success'});
      }
    });
  };

  $scope.saveRow = function(rowEntity) {
    $scope.alerts = [];
    genericService.update.save(angular.toJson(rowEntity), function(responce) {
      $scope.gridOptions = responce.data[0];
    });
    
  };
 
  $scope.gridOptions.onRegisterApi = function(gridApi){
    //set gridApi on scope
    $scope.gridApi = gridApi;
    gridApi.rowEdit.on.saveRow($scope, $scope.saveRow);
  };

  $scope.closeAlert = function(index) {
    $scope.alerts = [];
    $scope.loader = false;
  }
  init();
  $scope.showCreateModal=function(){
    $scope.modalTitle="Create groups";
    //true indiactes "add" operation perform
    $scope.currOperation=true;
    $('#myModal').modal('show');
  }
}]); 