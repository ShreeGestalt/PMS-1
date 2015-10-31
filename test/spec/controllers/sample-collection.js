'use strict';

describe('Controller: SampleCollectionCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var SampleCollectionCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    SampleCollectionCtrl = $controller('SampleCollectionCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(SampleCollectionCtrl.awesomeThings.length).toBe(3);
  });
});
