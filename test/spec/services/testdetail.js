'use strict';

describe('Service: testdetail', function () {

  // load the service's module
  beforeEach(module('pmsApp'));

  // instantiate service
  var testdetail;
  beforeEach(inject(function (_testdetail_) {
    testdetail = _testdetail_;
  }));

  it('should do something', function () {
    expect(!!testdetail).toBe(true);
  });

});
