'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:TestMasterDetailsCtrl
 * @description
 * # TestMasterDetailsCtrl
 * Controller of the pmsApp
 */
angular.module('pmsApp').controller('TestMasterDetailsCtrl',['$scope', '$http','Addtest', 'addtestDropdown', '$uibModal', '$log',  
							function ($scope, $http, Addtest, addtestDropdown, $uibModal, $log) {

    
    $scope.myData = {
    	columnDefs: [
    		{name: 'test_name'},
    		{name: 'test_heading'},
    		{name: 'test_short_name'},
    		{name: 'test_remark'},
    		{name: 'flag_name'},
    		{name: 'generic_method_name'},
    		{name: 'generic_sample_name'},
    		{name: 'generic_instrument_name'},
    		{name: 'amount'},
        { name: 'Action', enableCellEdit: false, cellTemplate:'<button class="btn primary" ng-click="grid.appScope.open(row.entity)"><span class="glyphicon glyphicon-pencil"></span></button>'}
    	]
    };
    function init() {
      addtestDropdown.addtst.get({}, function (record) {
        
          $scope.testData = record.list.testTypeDetails;
          $scope.myData.data = record.list.testTypeDetails;
          
      });  
    }
    
    
    init();  

    $scope.add = function() {

      var data = {
        name:  $scope.tstname,
        heading: $scope.hding,
        shortname: $scope.tc,
        remark: $scope.remark,
        flg: $scope.selectedflag.id,
        mthd: $scope.selectedmthd.id,
        smpl:  $scope.selectedsmpl.id,
        instrument: $scope.selectedinstmt.id,
        charges: $scope.tch,
        grp: $scope.selectedgrp.id
      };

      Addtest.save(angular.toJson(data), function(responce) {
        console.log(responce);
      });
    };

     $scope.update = function() {

      var data = {
        id:$scope.test.test_id,
        name:  $scope.test.test_name,
        heading: $scope.test.test_heading,
        shortname: $scope.test.test_short_name,
        remark: $scope.remark,
        flg: $scope.test.flag_name,
        mthd: $scope.test.generic_method_name,
        smpl:  $scope.test.generic_sample_name,
        instrument: $scope.test.generic_instrument_name,
        charges: $scope.test.amount,
        grp: $scope.test.group.id
      };

      Addtest.save(angular.toJson(data), function(responce) {
        console.log(responce);
      });
    };


    addtestDropdown.instrument.get({}, function (record){
      $scope.instrument = record.data;
    });

    addtestDropdown.sample.get({}, function (record){
      $scope.sample = record.data;
    });

    addtestDropdown.methode.get({}, function (record){
      $scope.methode = record.data;
    });

    addtestDropdown.group.get({}, function (record){
      $scope.group = record.data;
    });

    addtestDropdown.flag.get({}, function (record){
      $scope.flag = record.data;
    });

    $scope.deleteRecord = function(deleteData){
      var removeData = {
        removeData: deleteData
      };
    
      Addtest.remove(angular.toJson(removeData), function(responce) {
        console.log(responce);
      });
    };

  
   $scope.animationsEnabled = true;
   /*$scope.items = ['item1', 'item2', 'item3'];*/


  $scope.open = function (size) {

    angular.forEach($scope.testData, function(key, value) {
      if(key.id === size.id){
        $scope.test = key;
      }
    });

    var modalInstance = $uibModal.open({
      animation: $scope.animationsEnabled,
      templateUrl: 'myModalContent.html',
      controller: 'ModalInstanceCtrl',
      size: size,
      resolve: {
        /*items: function () {
          return $scope.items;
        },*/
        tests: function () {
          return $scope.test;
        }
      }
    });

    modalInstance.result.then(function (selectedItem) {
      $scope.selected = selectedItem;
    }, function () {
      $log.info('Modal dismissed at: ' + new Date());
    });

  };

  $scope.toggleAnimation = function () {
    $scope.animationsEnabled = !$scope.animationsEnabled;
  };

}]);

angular.module('pmsApp').controller('ModalInstanceCtrl',['$scope', '$uibModalInstance', 'tests', 'addtestDropdown', function ($scope, $uibModalInstance, tests, addtestDropdown) {

  $scope.test = tests;
  $scope.selected = {
    test: $scope.test[0]
  };

  $scope.ok = function () {
    $uibModalInstance.close($scope.selected.test);
  };

  $scope.cancel = function () {
    $uibModalInstance.dismiss('cancel');
  };


     $scope.update = function() {

      var data = {
        id:$scope.test.test_id,
        name:  $scope.test.test_name,
        heading: $scope.test.test_heading,
        shortname: $scope.test.test_short_name,
        remark: $scope.test.test_remark,
        flg: $scope.test.flag_name,
        mthd: $scope.test.generic_method_name,
        smpl:  $scope.test.generic_sample_name,
        instrument: $scope.test.generic_instrument_name,
        charges: $scope.test.amount
       
      };

      addtestDropdown.updatetest.save(angular.toJson(data), function(responce) {
        console.log(responce);
      });
    };
}]);