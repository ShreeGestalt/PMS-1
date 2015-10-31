'use strict';

describe('Controller: TestCalculatorCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var TestCalculatorCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    TestCalculatorCtrl = $controller('TestCalculatorCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(TestCalculatorCtrl.awesomeThings.length).toBe(3);
  });
});
