using System;
using Xunit;
using LinkedList;

namespace Circular
{
    public class UnitTest
    {
        [Fact]
        public void CircularExists()
        {
            var list = new LinkedList.LinkedList();
            var type = list.GetType();

            Assert.NotNull(type.GetMember("Circular"));
        }

        [Fact]
        public void CircularDetectsCircularLinkedLists()
        {
            var list = new LinkedList.LinkedList();
            var program = new Program();

            var a = new Node("a");
            var b = new Node("b");
            var c = new Node("c");

            list.Head = a;
            a.Next = b;
            b.Next = c;
            c.Next = b;

            Assert.True(program.Circular(list));
        }

        [Fact]
        public void CircularDetectsCircularLinkedListsLinkedAtTheHead()
        {
            var list = new LinkedList.LinkedList();
            var program = new Program();

            var a = new Node("a");
            var b = new Node("b");
            var c = new Node("c");

            list.Head = a;
            a.Next = b;
            b.Next = c;
            c.Next = a;

            Assert.True(program.Circular(list));
        }

        [Fact]
        public void CircularDetectsNonCircularLinkedLists()
        {
            var list = new LinkedList.LinkedList();
            var program = new Program();

            var a = new Node("a");
            var b = new Node("b");
            var c = new Node("c");

            list.Head = a;
            a.Next = b;
            b.Next = c;
            c.Next = null;

            Assert.False(program.Circular(list));
        }
    }
}
