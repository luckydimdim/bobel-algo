using System;
using Xunit;

namespace Qfroms
{
    public class UnitTest
    {
        [Fact]
        public void QueueIsAClass()
        {
            string @namespace = "Qfroms";
            string @class = "Queue";

            var myClassType = Type.GetType(@namespace +"."+ @class);
            object instance = myClassType == null ? null : Activator.CreateInstance(myClassType);

            Assert.True(myClassType != null);
        }

        [Fact]
        public void CanAddElementsToAQueue()
        {
            var q = new Queue();

            q.Add(1);

            Assert.True(true);
        }

        [Fact]
        public void CanRemoveElementsFromAQueue()
        {
            var q = new Queue();

            q.Add(1);
            q.Remove();

            Assert.True(true);
        }

        [Fact]
        public void OrderOfElementsIsMaintained()
        {
            var q = new Queue();

            q.Add(1);
            q.Add(2);
            q.Add(3);

            Assert.Equal(1, q.Remove());
            Assert.Equal(2, q.Remove());
            Assert.Equal(3, q.Remove());
            Assert.Null(q.Remove());
        }

        [Fact]
        public void PeekEeturnsButDoesNotRemoveTheFirstValue()
        {
            var q = new Queue();

            q.Add(1);
            q.Add(2);

            Assert.Equal(1, q.Peek());
            Assert.Equal(1, q.Peek());
            Assert.Equal(1, q.Remove());
            Assert.Equal(2, q.Remove());
        }
    }
}
