using System;
using Xunit;

namespace Stack
{
    public class UnitTest
    {
        [Fact]
        public void StackIsAClass()
        {
            string @namespace = "Stack";
            string @class = "Stack";

            var myClassType = Type.GetType(@namespace +"."+ @class);
            object instance = myClassType == null ? null : Activator.CreateInstance(myClassType);

            Assert.True(myClassType != null);
        }

        [Fact]
        public void StackCanAddAndRemoveItems()
        {
            var r = new Stack();

            r.Push(1);
            Assert.Equal(1, r.Pop());

            r.Push(2);
            Assert.Equal(2, r.Pop());
        }

        [Fact]
        public void StackCanFollowsFirstInLastOut()
        {
            var s = new Stack();

            s.Push(1);
            s.Push(2);
            s.Push(3);

            Assert.Equal(3, s.Pop());
            Assert.Equal(2, s.Pop());
            Assert.Equal(1, s.Pop());
        }

        public void PeekReturnsTheFirstElementButDoesntPopIt()
        {
            var s = new Stack();

            s.Push(1);
            s.Push(2);
            s.Push(3);

            Assert.Equal(3, s.Peek());
            Assert.Equal(3, s.Pop());
            Assert.Equal(2, s.Peek());
            Assert.Equal(2, s.Pop());
            Assert.Equal(1, s.Peek());
            Assert.Equal(1, s.Pop());
        }
    }
}
