const bubbleSort = require('./index');

test('bubbleSort is a function', () => {
  expect(typeof bubbleSort).toEqual('function');
});

test('bubbleSort arranges unsorted values properly', () => {
  expect(bubbleSort([5,3,1,4,2])).toEqual(
    [1,2,3,4,5]
  );
});

test('bubbleSort arranges sorted values properly', () => {
  expect(bubbleSort([1,2,3,4,5])).toEqual(
    [1,2,3,4,5]
  );
});
