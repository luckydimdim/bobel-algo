using System;
using Xunit;

namespace Bst
{
    public class UnitTest
    {
        [Fact]
        public void NodeExists()
        {
            string @namespace = "Bst";
            string @class = "Node";

            var myClassType = Type.GetType(@namespace +"."+ @class);
            object instance = myClassType == null ? null : Activator.CreateInstance(myClassType, 0);

            Assert.True(myClassType != null);
        }

        [Fact]
        public void NodeCanInsertCorrectly()
        {
            var node = new Node(10);
            node.Insert(5);
            node.Insert(15);
            node.Insert(17);

            Assert.Equal(5, node.Left.Data);
            Assert.Equal(15, node.Right.Data);
            Assert.Equal(17, node.Right.Right.Data);
        }

        [Fact]
        public void ContainsReturnsodeWithTheSameData()
        {
            var node = new Node(10);
            node.Insert(5);
            node.Insert(15);
            node.Insert(20);
            node.Insert(0);
            node.Insert(-5);
            node.Insert(3);

            Node expected = node.Left.Left.Right;
            Node actual = node.Contains(3);

            Assert.Equal(expected, actual);
        }

        [Fact]
        public void ContainsReturnsNullIfValueNotFound()
        {
            var node = new Node(10);
            node.Insert(5);
            node.Insert(15);
            node.Insert(20);
            node.Insert(0);
            node.Insert(-5);
            node.Insert(3);

            Assert.Null(node.Contains(33333));
        }
    }
}
