// --- Directions
// 1) Create a node class.  The constructor
// should accept an argument that gets assigned
// to the data property and initialize an
// empty array for storing children. The node
// class should have methods 'add' and 'remove'.
// 2) Create a tree class. The tree constructor
// should initialize a 'root' property to null.
// 3) Implement 'traverseBF' and 'traverseDF'
// on the tree class.  Each method should accept a
// function that gets called with each element in the tree

class Node {
    constructor(data) {
        this.data = data;
        this.children = [];
    }

    add(data) {
        const node = new Node(data);
        this.children.push(node);
    }

    remove(data) {
        this.children = this.children.filter(element => {
            return element.data !== data;
        });
    }
}

class Tree {
    constructor() {
        this.root = null;
    }

    traverseBFRecursive(fn, node = null) {
        if (!this.root) {
            return;
        }

        if (!node) {
            node = this.root;
            fn(node);
        }

        for (let child of node.children) {
            fn(child);
        }

        for (let child of node.children) {
            this.traverseBF(fn, child);
        }
    }

    traverseBF(fn) {
        const arr = [this.root];

        while (arr.length) {
            let node = arr.shift();
            arr.push(...node.children)

            fn(node);
        }
    }

    traverseDFRecursive(fn, node = null) {
        if (!this.root) {
            return;
        }

        if (!node) {
            node = this.root;
            fn(node);
        }

        for (let child of node.children) {
            fn(child);
            this.traverseDF(fn, child);
        }
    }

    traverseDF(fn) {
        const arr = [this.root];

        while (arr.length) {
            let node = arr.shift();
            arr.unshift(...node.children);

            fn(node);
        }
    }
}

module.exports = { Tree, Node };
