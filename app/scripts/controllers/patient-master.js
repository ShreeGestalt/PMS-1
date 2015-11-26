'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:patientMasterCtrl
 * @description
 * # patientMasterCtrl
 * Controller of the pmsApp
 */
angular.module('pmsApp')
  .controller('patientMasterCtrl', ['$scope', 'patientMaster', function ($scope, patientMaster) {

    $scope.gndr = [
      {id: '1',gender:'Male'},
      { id: '2',gender:'Female'},
      ];

      
      

      $scope.add = function() {

      var data = {
        id:  $scope.pid,
        name: $scope.pname,
       address: $scope.adrs,
        state: $scope.sts.state_id,
        distric: $scope.dst,
        dob: $scope.dob,
        gender:  $scope.gdr.gender,
        phone: $scope.phn,
        mobile: $scope.mble,
        email: $scope.email

      };

      patientMaster.patient.save(angular.toJson(data), function(responce) {
        console.log(responce);
      });
    };
   
       $scope.patientinfo = {
        columnDefs: [
          {name: 'id'},
          {name: 'name'},
          {name: 'address'},
          {name: 'city'},
          {name: 'dob'},
          {name: 'gender'},
          {name: 'mobile'},
          {name: 'phone'},
          {name: 'email'},
          { name: 'Action', enableCellEdit: false, cellTemplate:'<button class="btn primary" ng-click="grid.appScope.deleteRecord(row.entity.category_id,row.entity.generic_id)"><span class="glyphicon glyphicon-pencil"></span></button>'}
        ]
    };
    function init() {
      patientMaster.states.get(function(record) {
        $scope.state = record.data;
      });  

       patientMaster.distric.get(function(record) {
        $scope.districs = record.data;
      }); 

       patientMaster.patient.get(function(record) {
        $scope.patientinfo.data = record.data;
      });

    $scope.gridOptions = {
    enableFiltering: false,
    onRegisterApi: function(gridApi){
      $scope.gridApi = gridApi;
      $scope.gridApi.grid.registerRowsProcessor( $scope.singleFilter, 200 );
    },
    paginationPageSizes: [25, 50, 75],
    paginationPageSize: 25,
    columnDefs: [
      { name: 'id', displayName: 'id' },
      { name: 'name', displayName: 'Name' },
      { name: 'address', displayName: 'address' },
      { name: 'city', displayName: 'city' },
      { name: 'dob', displayName: 'dob' },
      { name: 'gender', displayName: 'gender' },
      { name: 'mobile', displayName: 'mobile' },
      { name: 'email', displayName: 'email' },
      { name: 'Action', enableCellEdit: false, cellTemplate:'<button class="btn primary" ng-click="grid.appScope.deleteRecord(row.entity)"><span class="glyphicon glyphicon-trash"></span></button>'}
    ]
  };

  $scope.filter = function() {
    console.log($scope.filterValue);
    console.log("in filter function");
    $scope.gridApi.grid.refresh();
  };

 
  patientMaster.patient.get(function (data){
      $scope.gridOptions.data = data.data;
    });


  $scope.gridOptions.onRegisterApi = function(gridApi){
    //set gridApi on scope
    $scope.gridApi = gridApi;
    gridApi.rowEdit.on.saveRow($scope, $scope.saveRow);
  };


  $scope.deleteRecord = function(deleteData){
    var removeData = {
      patientId: deleteData.id,
      status: 'delete',
    };
    
    patientMaster.patient.save(angular.toJson(removeData), function(responce) {
      console.log(responce);
    });
  };

    $scope.saveRow = function(rowEntity) {
      patientMaster.patient.save(angular.toJson(rowEntity), function(responce) {
        $scope.gridOptions = responce.data[0];
      });
      
    };

      $scope.singleFilter = function( renderableRows ){
        console.log("in single filter");
        var matcher = new RegExp($scope.filterValue);
        renderableRows.forEach( function( row ) {
          var match = false;
          [ 'id', 'name', 'address', 'city', 'dob', 'gender', 'mobile', 'email','Action' ].forEach(function( field ){
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
     
    }

    
   /* patientMaster.citys.get({}, function (record){
      $scope.citys = record.data;
    });

    patientMaster.districts.get({}, function (record){
      $scope.districts = record.data;
    }); */


  init();
    
}]);