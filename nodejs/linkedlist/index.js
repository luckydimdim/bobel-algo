// --- Directions
// Implement classes Node and Linked Lists
// See 'directions' document

class Node {
    constructor(data, next = null) {
        this.data = data;
        this.next = next;
    }
}

class LinkedList {
    constructor() {
        this.head = null;
    }

    insertFirst(data) {
        this.head = new Node(data, this.head);
    }

    size() {
        let counter = 0;
        let node = this.head;

        while (node) {
            counter++;
            node = node.next;
        }

        return counter;
    }

    getFirst() {
        return this.head;
    }

    getLast() {
        if (!this.head) {
            return null;
        }

        let node = this.head;

        while (node.next) {
            node = node.next;
        }

        return node;
    }

    clear() {
        this.head = null;
    }

    removeFirst() {
        if (!this.head) {
            return;
        }

        this.head = this.head.next;
    }

    removeLast() {
        if (!this.head) {
            return;
        }

        if (!this.head.next) {
            this.head = null;
            return;
        }

        let previous = this.head;
        let current = previous.next;

        while (current.next) {
            previous = current;
            current = current.next;
        }

        previous.next = null;
    }

    insertLast(data) {
        const node = new Node(data);

        if (!this.head) {
            this.head = node;

            return;
        }

        const last = this.getLast();
        last.next = node;
    }

    getAt(index) {
        if (!this.head) {
            return null;
        }

        let counter = 0;
        let node = this.head;

        while (counter < index) {
            counter++;
            node = node.next;

            if (!node) {
                return null;
            }
        }

        return node;
    }

    removeAt(index) {
        if (!this.head) {
            return;
        }

        let counter = 0;

        if (index === 0) {
            this.head = this.head.next;
            return;
        }

        const previous = this.getAt(index - 1);
        const next = this.getAt(index + 1);

        previous.next = next;

        /*while (counter <= index) {
            counter++;

            if (counter === index) {
                let next = current ? current.next : null;

                previous.next = next;

                return;
            }

            previous = current;
            current = current.next;

            if (!previous || !current) {
                return;
            }
        }*/
    }

    insertAt(data, index) {
        if (index === 0) {
            this.head = new Node(data, this.head);

            return;
        }

        let previous = this.getAt(index - 1);

        if (!previous) {
            previous = this.getLast();
        }

        previous.next = new Node(data, previous.next);
    }
}

module.exports = { Node, LinkedList };
