// --- Directions
// Given the root node of a tree, return
// an array where each element is the width
// of the tree at each level.
// --- Example
// Given:
//     0
//   / |  \
//  1  2   3
//  |      |
//  4      5
// Answer: [1, 3, 2]

function levelWidth(root) {
    const result = [];
    const array = [root, 'stop'];
    let counter = 0;

    while (array.length) {
        let node = array.shift();

        if (node === 'stop') {
            if (counter === 0) {
                return result;
            }

            result.push(counter);
            counter = 0;
            array.push('stop');
        } else {
            counter++;
            array.push(...node.children);
        }
    }

    return result;
}

module.exports = levelWidth;
