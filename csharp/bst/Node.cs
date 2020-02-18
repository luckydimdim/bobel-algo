namespace Bst
{
    /// <summary>
    /// --- Directions
    /// 1) Implement the Node class to create
    /// a binary search tree.  The constructor
    /// should initialize values 'data', 'left',
    /// and 'right'.
    /// 2) Implement the 'insert' method for the
    /// Node class.  Insert should accept an argument
    /// 'data', then create an insert a new node
    /// at the appropriate location in the tree.
    /// 3) Implement the 'contains' method for the Node
    /// class.  Contains should accept a 'data' argument
    /// and return the Node in the tree with the same value.
    /// </summary>
    public class Node
    {
        public int Data;
        public Node Left = null;
        public Node Right = null;

        public Node(int data)
        {
            this.Data = data;
        }

        public void Insert(int data)
        {
            if (data < this.Data)
            {
                if (this.Left != null)
                {
                    this.Left.Insert(data);
                }
                else
                {
                    this.Left = new Node(data);
                }
            }
            else
            {
                if (this.Right != null)
                {
                    this.Right.Insert(data);
                }
                else
                {
                    this.Right = new Node(data);
                }
            }
        }

        public Node Contains(int data)
        {
            if (data == this.Data)
            {
                return this;
            }

            if (data < this.Data)
            {
                if (this.Left != null)
                {
                    return this.Left.Contains(data);
                }
            }
            else
            {
                if (this.Right != null)
                {
                    return this.Right.Contains(data);
                }
            }

            return null;
        }
    }
}