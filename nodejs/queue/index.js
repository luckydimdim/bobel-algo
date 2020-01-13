// --- Description
// Create a queue data structure.  The queue
// should be a class with methods 'add' and 'remove'.
// Adding to the queue should store an element until
// it is removed
// --- Examples
//     const q = new Queue();
//     q.add(1);
//     q.remove(); // returns 1;

class Queue {
    constructor() {
        this.storage = new Array();
    }

    add(element) {
        this.storage.unshift(element);
    }

    remove() {
        return this.storage.pop();
    }
}

/*const queue = new Queue();

queue.add(1);
queue.add(2);
queue.add(3);

console.log(queue.remove());
console.log(queue.remove());
console.log(queue.remove());
console.log(queue.remove());*/

module.exports = Queue;
