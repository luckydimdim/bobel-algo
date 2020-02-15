namespace LinkedList
{
    public class Node
    {
        public string Data { get; set; }
        public Node Next { get; set; }

        public Node(string data, Node node = null)
        {
            this.Data = data;
            this.Next = node;
        }
    }
}