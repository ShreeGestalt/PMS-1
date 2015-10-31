'use strict';

describe('Controller: GenricCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var GenricCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    GenricCtrl = $controller('GenricCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(GenricCtrl.awesomeThings.length).toBe(3);
  });
});
