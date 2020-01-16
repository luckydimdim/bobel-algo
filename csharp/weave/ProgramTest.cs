using System;
using Xunit;

namespace Weave
{
    public class ProgramTest
    {
        [Fact]
        public void QueuesHaveAPeekFunction()
        {
            var q = new Queue();
            var type = q.GetType();

            Assert.True(type.GetMember("Peek") != null);
        }

        [Fact]
        public void PeekReturnsButDoesNotRemoveTheFirstValue()
        {
            var q = new Queue();
            q.Add(1);
            q.Add(2);

            Assert.Equal(1, q.Peek());
            Assert.Equal(1, q.Peek());
            Assert.Equal(1, q.Remove());
            Assert.Equal(2, q.Remove());
        }

        [Fact]
        public void WeaveIsAFunction()
        {
            var p = new Program();
            var type = p.GetType();

            Assert.True(type.GetMember("Weave") != null);
        }

        [Fact]
        public void WeaveCanCombineTwoQueues()
        {
            var p = new Program();

            var one = new Queue();
            one.Add(1);
            one.Add(2);
            one.Add(3);
            one.Add(4);

            var two = new Queue();
            two.Add("one");
            two.Add("two");
            two.Add("three");
            two.Add("four");

            var result = p.Weave(one, two);

            Assert.Equal(1, result.Remove());
            Assert.Equal("one", result.Remove());
            Assert.Equal(2, result.Remove());
            Assert.Equal("two", result.Remove());
            Assert.Equal(3, result.Remove());
            Assert.Equal("three", result.Remove());
            Assert.Equal(4, result.Remove());
            Assert.Equal("four", result.Remove());
        }
    }
}
