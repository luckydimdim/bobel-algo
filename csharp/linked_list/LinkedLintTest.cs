using System;
using Xunit;

namespace LinkedList
{
    public class LinkedListTest
    {
        [Fact]
        public void LinkedListExists()
        {
            string @namespace = "LinkedList";
            string @class = "LinkedList";

            var myClassType = Type.GetType(@namespace +"."+ @class);
            object instance = myClassType == null ? null : Activator.CreateInstance(myClassType);

            Assert.True(myClassType != null);
        }

        [Fact]
        public void NodeExists()
        {
            string @namespace = "LinkedList";
            string @class = "Node";

            var myClassType = Type.GetType(@namespace +"."+ @class);
            object instance = myClassType == null ? null : Activator.CreateInstance(myClassType, "data", null);

            Assert.True(myClassType != null);
        }

        [Fact]
        public void NodeHasProperties()
        {
            var node = new Node("data");
            var type = node.GetType();

            Assert.NotNull(type.GetProperty("Data"));
            Assert.NotNull(type.GetProperty("Next"));
        }

        [Fact]
        public void InsertFirst()
        {
            var list = new LinkedList();

            list.InsertFirst("a");
            Assert.Equal("a", list.Head.Data);

            list.InsertFirst("b");
            Assert.Equal("b", list.Head.Data);
        }
    }
}
