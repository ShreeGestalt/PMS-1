'use strict';

describe('Service: flagService', function () {

  // load the service's module
  beforeEach(module('pmsApp'));

  // instantiate service
  var flagService;
  beforeEach(inject(function (_flagService_) {
    flagService = _flagService_;
  }));

  it('should do something', function () {
    expect(!!flagService).toBe(true);
  });

});
