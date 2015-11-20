'use strict';

describe('Controller: FlagmasterCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var FlagmasterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    FlagmasterCtrl = $controller('FlagmasterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(FlagmasterCtrl.awesomeThings.length).toBe(3);
  });
});
