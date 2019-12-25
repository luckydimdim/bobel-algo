const insertSort = require('./index');

test('insertSort is a function', () => {
  expect(typeof insertSort).toEqual('function');
});

test('insertSort arranges unsorted values properly', () => {
  expect(insertSort([5,3,1,4,2])).toEqual(
    [1,2,3,4,5]
  );
});

test('insertSort arranges sorted values properly', () => {
  expect(insertSort([1,2,3,4,5])).toEqual(
    [1,2,3,4,5]
  );
});
