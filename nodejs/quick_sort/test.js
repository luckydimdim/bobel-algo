const quickSort = require('./index');

test('function exists', () => {
	expect(quickSort).toBeDefined();
});

test('function arranges unsorted values properly', () => {
	expect(quickSort([5,3,1,4,2])).toEqual([1,2,3,4,5]);
});

test('function arranges sorted values properly', () => {
	expect(quickSort([1,2,3,4,5])).toEqual([1,2,3,4,5]);
});