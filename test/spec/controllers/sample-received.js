'use strict';

describe('Controller: SampleReceivedCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var SampleReceivedCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    SampleReceivedCtrl = $controller('SampleReceivedCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(SampleReceivedCtrl.awesomeThings.length).toBe(3);
  });
});
