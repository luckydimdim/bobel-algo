// --- Directions
// Implement a Queue datastructure using two stacks.
// *Do not* create an array inside of the 'Queue' class.
// Queue should implement the methods 'add', 'remove', and 'peek'.
// For a reminder on what each method does, look back
// at the Queue exercise.
// --- Examples
//     const q = new Queue();
//     q.add(1);
//     q.add(2);
//     q.peek();  // returns 1
//     q.remove(); // returns 1
//     q.remove(); // returns 2

const Stack = require('./stack');

class Queue {
    constructor() {
        this.primary = new Stack();
        this.secondary = new Stack();
    }

    add(value) {
        while (this.secondary.peek() !== undefined) {
            this.primary.push(this.secondary.pop());
        }

        this.primary.push(value);
    }

    remove() {
        while (this.primary.peek() !== undefined) {
            this.secondary.push(this.primary.pop());
        }

        return this.secondary.pop();
    }

    peek() {
        while (this.primary.peek() !== undefined) {
            this.secondary.push(this.primary.pop());
        }

        return this.secondary.peek();
    }
}

module.exports = Queue;
