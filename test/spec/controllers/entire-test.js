'use strict';

describe('Controller: EntireTestCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var EntireTestCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    EntireTestCtrl = $controller('EntireTestCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(EntireTestCtrl.awesomeThings.length).toBe(3);
  });
});
