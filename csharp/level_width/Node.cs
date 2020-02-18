using System.Collections.Generic;

namespace LevelWidth
{
    public class Node
    {
        public string Data = "";
        public List<Node> Children = null;

        public Node(string data)
        {
            this.Data = data;
            this.Children = new List<Node>();
        }

        public void Add(string data)
        {
            var node = new Node(data);
            this.Children.Add(node);
        }
    }
}