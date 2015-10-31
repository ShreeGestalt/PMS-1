'use strict';

describe('Controller: TestMasterDetailsCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var TestMasterDetailsCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    TestMasterDetailsCtrl = $controller('TestMasterDetailsCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(TestMasterDetailsCtrl.awesomeThings.length).toBe(3);
  });
});
