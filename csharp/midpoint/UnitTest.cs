using System;
using Xunit;
using LinkedList;

namespace Midpoint
{
    public class UnitTest
    {
        [Fact]
        public void MidpointExists()
        {
            var list = new LinkedList.LinkedList();
            var type = list.GetType();

            Assert.NotNull(type.GetMember("Midpoint"));
        }

        [Fact]
        public void Odd2()
        {
            var list = new LinkedList.LinkedList();
            var program = new Program();

            list.InsertLast("a");
            list.InsertLast("b");
            list.InsertLast("c");

            Assert.Equal("b", program.Midpoint(list).Data);
        }

        [Fact]
        public void Odd4()
        {
            var list = new LinkedList.LinkedList();
            var program = new Program();

            list.InsertLast("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertLast("d");
            list.InsertLast("e");

            Assert.Equal("c", program.Midpoint(list).Data);
        }

        [Fact]
        public void Even2()
        {
            var list = new LinkedList.LinkedList();
            var program = new Program();

            list.InsertLast("a");
            list.InsertLast("b");

            Assert.Equal("a", program.Midpoint(list).Data);
        }

        [Fact]
        public void Even4()
        {
            var list = new LinkedList.LinkedList();
            var program = new Program();

            list.InsertLast("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertLast("d");

            Assert.Equal("b", program.Midpoint(list).Data);
        }
    }
}
