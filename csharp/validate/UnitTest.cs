using System;
using Xunit;

namespace Validate
{
    public class UnitTest
    {
        [Fact]
        public void ValidateRecognizesAValidBST()
        {
            var node = new Node(10);
            node.Insert(5);
            node.Insert(15);
            node.Insert(0);
            node.Insert(20);

            var program = new Program();
            Assert.True(program.Validate(node));
        }

        [Fact]
        public void ValidateRecognizesAInvalidBST()
        {
            var node = new Node(10);
            node.Insert(5);
            node.Insert(15);
            node.Insert(0);
            node.Insert(20);
            node.Left.Left.Left = new Node(999);

            var program = new Program();
            Assert.False(program.Validate(node));
        }
    }
}
