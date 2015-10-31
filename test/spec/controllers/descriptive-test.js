'use strict';

describe('Controller: DescriptiveTestCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var DescriptiveTestCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    DescriptiveTestCtrl = $controller('DescriptiveTestCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(DescriptiveTestCtrl.awesomeThings.length).toBe(3);
  });
});
