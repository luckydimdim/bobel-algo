namespace Validate
{
    public class Node
    {
        public int Data;
        public Node Left;
        public Node Right;

        public Node(int data)
        {
            this.Data = data;
            this.Left = null;
            this.Right = null;
        }

        public void Insert(int data)
        {
            if (data <= this.Data)
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
    }
}