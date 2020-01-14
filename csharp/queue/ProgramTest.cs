using System;
using Xunit;

namespace Queue
{
    public class ProgramTest
    {
        [Fact]
        public void QueueIsAClass()
        {
            string @namespace = "Queue";
            string @class = "Queue";

            var myClassType = Type.GetType(@namespace +"."+ @class);
            object instance = myClassType == null ? null : Activator.CreateInstance(myClassType);

            Assert.True(myClassType != null);
        }

        [Fact]
        public void CanAddElementsToAQueue()
        {
            var q = new Queue();
            var type = q.GetType();

            Assert.True(type.GetMember("Add") != null);
            var ex = Record.Exception(() => q.Add(1));
            Assert.Null(ex);
        }

        [Fact]
        public void CanRemoveElementsFromAQueue()
        {
            var q = new Queue();
            var type = q.GetType();

            Assert.True(type.GetMember("Remove") != null);
            q.Add(1);
            
            int expected = 1;
            int actual = q.Remove();

            Assert.Equal(expected, actual);
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
        }
    }
}
