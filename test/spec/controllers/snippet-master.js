'use strict';

describe('Controller: SnippetMasterCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var SnippetMasterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    SnippetMasterCtrl = $controller('SnippetMasterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(SnippetMasterCtrl.awesomeThings.length).toBe(3);
  });
});
