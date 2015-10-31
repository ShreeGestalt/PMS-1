'use strict';

describe('Controller: BranchManagementCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var BranchManagementCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    BranchManagementCtrl = $controller('BranchManagementCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(BranchManagementCtrl.awesomeThings.length).toBe(3);
  });
});
