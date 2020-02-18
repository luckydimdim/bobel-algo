using System;
using Xunit;
using System.Collections.Generic;

namespace Tree
{
    public class UnitTest
    {
        [Fact]
        public void TreeExists()
        {
            string @namespace = "Tree";
            string @class = "Tree";

            var myClassType = Type.GetType(@namespace +"."+ @class);
            object instance = myClassType == null ? null : Activator.CreateInstance(myClassType);

            Assert.True(myClassType != null);
        }

        [Fact]
        public void NodeExists()
        {
            string @namespace = "Tree";
            string @class = "Node";

            var myClassType = Type.GetType(@namespace +"."+ @class);
            object instance = myClassType == null ? null : Activator.CreateInstance(myClassType, "");

            Assert.True(myClassType != null);
        }

        [Fact]
        public void NodeHasADataAndChildrenProperties()
        {
            var node = new Node("a");
            Assert.Equal("a", node.Data);
            Assert.Equal(0, (int) node.Children.Count);
        }

        [Fact]
        public void NodeCanAddChildren()
        {
            var node = new Node("a");
            node.Add("b");

            Assert.Equal(1, (int) node.Children.Count);
            Assert.Equal(0, (int) node.Children[0].Children.Count);
        }

        [Fact]
        public void NodeCanRemoveChildren()
        {
            var node = new Node("a");
            node.Add("b");

            Assert.Equal(1, (int) node.Children.Count);

            node.Remove("b");

            Assert.Equal(0, (int) node.Children.Count);
        }

        [Fact]
        public void TreeStartsEmpty()
        {
            var tree = new Tree();
            Assert.Null(tree.Root);
        }

        [Fact]
        public void TreeCanTraverseBF()
        {
            var letters = new List<string>();
            var tree = new Tree();
            tree.Root = new Node("a");
            tree.Root.Add("b");
            tree.Root.Add("c");
            tree.Root.Children[0].Add("d");

            tree.TraverseBF(node =>
            {
                letters.Add(node.Data);
            });

            var expected = new List<string> { "a", "b", "c", "d" };

            Assert.Equal(expected, letters);
        }

        [Fact]
        public void TreeCanTraverseDF()
        {
            var letters = new List<string>();
            var tree = new Tree();
            tree.Root = new Node("a");
            tree.Root.Add("b");
            tree.Root.Add("d");
            tree.Root.Children[0].Add("c");

            tree.TraverseDF(node =>
            {
                letters.Add(node.Data);
            });

            var expected = new List<string> { "a", "b", "c", "d" };

            Assert.Equal(expected, letters);
        }
    }
}
