const mergeSort = require('./index')

test('check if function exists', () => {
	expect(typeof mergeSort).toEqual('function');
});

test('check if function arranges unsorted values properly', () => {
	expect(mergeSort([5,3,1,4,2])).toEqual([1,2,3,4,5]);
});

test('check if function arranges sorted values properly', () => {
	expect(mergeSort([1,2,3,4,5])).toEqual([1,2,3,4,5]);
});