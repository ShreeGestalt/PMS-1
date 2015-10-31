'use strict';

describe('Controller: HospitalMasterCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var HospitalMasterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    HospitalMasterCtrl = $controller('HospitalMasterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(HospitalMasterCtrl.awesomeThings.length).toBe(3);
  });
});
