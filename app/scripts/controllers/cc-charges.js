'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:CcChargesCtrl
 * @description
 * # CcChargesCtrl
 * Controller of the pmsApp
 */
angular.module('pmsApp')
  .controller('CcChargesCtrl', function ($scope) {
    this.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
   

    $scope.items= [
    {id:'1',area:'hadapsar'},
     {id:'1',area:'kothrud'},
      {id:'1',area:'karve nagar'},
      {id:'1',area:'uttam nagar'}



    ];
    


  });
