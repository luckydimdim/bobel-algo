/**
 * --- Directions:
 * Implement function which can sum 2 strings
 *
 * --- Example:
 * '111' + '222' = '333'
 */
function sum(a, b) {
    const left = a.split('').reverse();
    const right = b.split('').reverse();

    const result = [];
    let i = 0;
    let j = 0;
    let value = 0;
    let memory = 0;

    while (i < left.length && j < right.length) {
        value = parseInt(left[i]) + parseInt(right[j]);

        if (value >= 10) {
            memory = 1;
            value -= 10;
            result.push(value);
        } else {
            result.push(value + memory);
            memory = 0;
        }

        i++;
        j++;
    }

    while (i < left.length) {
        if (i < left.length) {
            result.push(parseInt(left[i]) + memory);
            i++;
        }
    }

    while (j < right.length) {
        if (j < right.length) {
            result.push(parseInt(right[j]) + memory);
            j++;
        }
    }

    return result.reverse().join('');
}

module.exports = sum;