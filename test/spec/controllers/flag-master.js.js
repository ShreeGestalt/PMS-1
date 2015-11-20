'use strict';

describe('Controller: FlagMasterJsCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var FlagMasterJsCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    FlagMasterJsCtrl = $controller('FlagMasterJsCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(FlagMasterJsCtrl.awesomeThings.length).toBe(3);
  });
});
