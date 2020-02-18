namespace Bst
{
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