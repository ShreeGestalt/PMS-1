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

      init();      
      

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
    }

    
   /* patientMaster.citys.get({}, function (record){
      $scope.citys = record.data;
    });

    patientMaster.districts.get({}, function (record){
      $scope.districts = record.data;
    }); */

    
  }]);