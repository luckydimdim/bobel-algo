const sum = require('./index');

test('function exists', () => {
    expect(sum).toBeDefined();
});

test('simle sum of two small numbers', () => {
    expect(sum('11', '22')).toEqual('33');
});

test('sum of very long number', () => {
    expect(sum('111111111111111111111', '222')).toEqual('111111111111111111333');
});

test('put to memory', () => {
    expect(sum('11', '9')).toEqual('20');
});