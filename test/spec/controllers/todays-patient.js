'use strict';

describe('Controller: TodaysPatientCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var TodaysPatientCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    TodaysPatientCtrl = $controller('TodaysPatientCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(TodaysPatientCtrl.awesomeThings.length).toBe(3);
  });
});
