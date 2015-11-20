'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:TestMasterDetailsCtrl
 * @description
 * # TestMasterDetailsCtrl
 * Controller of the pmsApp
 */
angular.module('pmsApp').controller('TestMasterDetailsCtrl',['$scope', '$http','Addtest', 'addtestDropdown',
							function ($scope, $http, Addtest, addtestDropdown) {

    $scope.myData = {
    	columnDefs: [
    		{name: 'name'},
    		{name: 'heading'},
    		{name: 'shortname'},
    		{name: 'remark'},
    		{name: 'flg'},
    		{name: 'mthd'},
    		{name: 'smpl'},
    		{name: 'instrument'},
    		{name: 'charges'},
            { name: 'Action', enableCellEdit: false, cellTemplate:'<button class="btn primary" ng-click="grid.appScope.deleteRecord(row.entity.category_id,row.entity.generic_id)"><span class="glyphicon glyphicon-trash"></span></button>'}
    	]
    };
    function init() {
        addtestDropdown.addtst.get({}, function (record){
        $scope.myData.data = record.data;
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
      

    }
    
    Addtest.remove(angular.toJson(removeData), function(responce) {
      console.log(responce);
    });
  };




}]);
