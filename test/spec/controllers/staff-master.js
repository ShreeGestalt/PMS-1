'use strict';

describe('Controller: StaffMasterCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var StaffMasterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    StaffMasterCtrl = $controller('StaffMasterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(StaffMasterCtrl.awesomeThings.length).toBe(3);
  });
});
