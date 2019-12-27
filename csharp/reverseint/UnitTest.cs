using NUnit.Framework;
using reverseint;

namespace Tests
{
    public class Tests
    {
        private Program _program = null;
        
        [SetUp]
        public void Setup()
        {
            this._program = new Program();
        }

        [Test]
        public void ReverseIntFunctionExists()
        {
            var type = this._program.GetType();
            Assert.IsTrue(type.GetMethod("ReverseInt") != null);
        }

        [Test]
        public void ReverseIntHandles0AsAnInput()
        {
            // Arrange
            int expected = 0;
            int actual = this._program.ReverseInt(0);
            
            // Act, Assert
            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void ReverseIntFlipsAPositiveNumber()
        {
            Assert.AreEqual(5, this._program.ReverseInt(5));
            Assert.AreEqual(15, this._program.ReverseInt(51));
            Assert.AreEqual(9, this._program.ReverseInt(90));
            Assert.AreEqual(2359, this._program.ReverseInt(9532));
        }

        [Test]
        public void ReverseIntFlipsANegativeNumber()
        {
            Assert.AreEqual(-5, this._program.ReverseInt(-5));
            Assert.AreEqual(-15, this._program.ReverseInt(-51));
            Assert.AreEqual(-9, this._program.ReverseInt(-90));
            Assert.AreEqual(-2359, this._program.ReverseInt(-9532));            
        }
    }
}