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

        [Fact]
        public void Size()
        {
            var list = new LinkedList();

            Assert.Equal(0, list.Size());

            list.InsertFirst("a");
            list.InsertFirst("b");
            list.InsertFirst("c");
            list.InsertFirst("d");
            list.InsertFirst("e");

            Assert.Equal(5, list.Size());
        }

        [Fact]
        public void GetFirst()
        {
            var list = new LinkedList();
            list.InsertFirst("a");

            Assert.Equal("a", list.GetFirst().Data);

            list.InsertFirst("b");

            Assert.Equal("b", list.GetFirst().Data);
        }

        [Fact]
        public void GetLast()
        {
            var list = new LinkedList();
            list.InsertFirst("a");

            Assert.Equal("a", list.GetLast().Data);

            list.InsertFirst("b");

            Assert.Equal("a", list.GetLast().Data);
        }

        [Fact]
        public void Clear()
        {
            var list = new LinkedList();
            list.InsertFirst("a");
            list.Clear();

            Assert.Null(list.Head);
        }

        [Fact]
        public void RemoveFirst()
        {
            var list = new LinkedList();
            list.InsertFirst("a");
            list.RemoveFirst();

            Assert.Equal(0, list.Size());
            Assert.Null(list.Head);
        }

        [Fact]
        public void RemoveLast()
        {
            var list = new LinkedList();
            list.InsertFirst("c");
            list.InsertFirst("b");
            list.InsertFirst("a");
            list.RemoveLast();

            Assert.Equal(2, list.Size());
            Assert.Equal("b", list.GetLast().Data);
        }

        [Fact]
        public void InsertLast()
        {
            var list = new LinkedList();

            list.InsertFirst("a");
            list.InsertLast("b");

            Assert.Equal(2, list.Size());
            Assert.Equal("b", list.GetLast().Data);
        }

        [Fact]
        public void GetAt()
        {
            var list = new LinkedList();

            Assert.Null(list.GetAt(10));

            list.InsertFirst("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertLast("d");

            Assert.Equal("a", list.GetAt(0).Data);
            Assert.Equal("b", list.GetAt(1).Data);
            Assert.Equal("c", list.GetAt(2).Data);
            Assert.Equal("d", list.GetAt(3).Data);

        }

        [Fact]
        public void RemoveAt()
        {
            var list = new LinkedList();

            try
            {
                list.RemoveAt(0);
                Assert.True(true);
            }
            catch (Exception)
            {
                Assert.True(false);
            }

            list.InsertFirst("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertLast("d");

            Assert.Equal("b", list.GetAt(1).Data);
            list.RemoveAt(1);
            Assert.Equal("c", list.GetAt(1).Data);

            list.RemoveAt(2);
            Assert.Null(list.GetAt(2));
        }

        [Fact]
        public void InsertAt()
        {
            var list = new LinkedList();

            list.InsertLast("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertAt("hi", 0);

            Assert.Equal("hi", list.GetAt(0).Data);
            Assert.Equal("a", list.GetAt(1).Data);
            Assert.Equal("b", list.GetAt(2).Data);
            Assert.Equal("c", list.GetAt(3).Data);
        }

        [Fact]
        public void ForEach()
        {
            var list = new LinkedList();

            list.InsertLast("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertLast("d");

            list.ForEach(node =>
            {
                node.Data = node.Data + "0";
            });

            Assert.Equal("a0", list.GetAt(0).Data);
            Assert.Equal("b0", list.GetAt(1).Data);
            Assert.Equal("c0", list.GetAt(2).Data);
            Assert.Equal("d0", list.GetAt(3).Data);
        }

        [Fact]
        public void Loop()
        {
            var list = new LinkedList();

            list.InsertLast("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertLast("d");

            foreach (Node node in list)
            {
                node.Data = node.Data + "0";
            }

            Assert.Equal("a0", list.GetAt(0).Data);
            Assert.Equal("b0", list.GetAt(1).Data);
            Assert.Equal("c0", list.GetAt(2).Data);
            Assert.Equal("d0", list.GetAt(3).Data);
        }
    }
}
