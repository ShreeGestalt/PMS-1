'use strict';

describe('Controller: FlagMasterCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var FlagMasterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    FlagMasterCtrl = $controller('FlagMasterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(FlagMasterCtrl.awesomeThings.length).toBe(3);
  });
});
