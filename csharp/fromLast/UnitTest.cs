using System;
using Xunit;
using LinkedList;

namespace FromLast
{
    public class UnitTest
    {
        [Fact]
        public void FromExists()
        {
            var list = new LinkedList.LinkedList();
            var type = list.GetType();

            Assert.NotNull(type.GetMember("FromLast"));
        }

        [Fact]
        public void FromLastReturnsTheNodeNElementsFromTheEnd()
        {
            var list = new LinkedList.LinkedList();
            var program = new Program();

            list.InsertLast("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertLast("d");
            list.InsertLast("e");

            Assert.Equal("b", program.FromLast(list, 3).Data);
        }
    }
}
