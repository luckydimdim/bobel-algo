const choiseSort = require('./index');

test('check if function exists', () => {
	expect(typeof choiseSort).toEqual('function');
});

test('check if function arranges unsorted array properly', () => {
	expect(choiseSort([5,3,1,4,2])).toEqual([1,2,3,4,5]);
});

test('check if function arranges sorted array properly', () => {
	expect(choiseSort([1,2,3,4,5])).toEqual([1,2,3,4,5]);
});