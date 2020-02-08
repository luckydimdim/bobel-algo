namespace LinkedList
{
    public class LinkedList
    {
        public Node Head { get; set; }

        public void InsertFirst(string data)
        {
            if (this.Head == null) {
                this.Head = new Node(data);

                return;
            }

            this.Head = new Node(data, this.Head);
        }
    }
}