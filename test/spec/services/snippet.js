'use strict';

describe('Service: snippet', function () {

  // load the service's module
  beforeEach(module('pmsApp'));

  // instantiate service
  var snippet;
  beforeEach(inject(function (_snippet_) {
    snippet = _snippet_;
  }));

  it('should do something', function () {
    expect(!!snippet).toBe(true);
  });

});
