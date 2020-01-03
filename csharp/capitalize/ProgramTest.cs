using NUnit.Framework;
using Capitalize;

namespace Tests
{
    public class ProgramTest
    {
        private Program _program = null;

        [SetUp]
        public void Setup()
        {
            this._program = new Program();
        }

        [Test]
        public void ProgramExists()
        {
            var type = this._program.GetType();
            Assert.True(type.GetMethod("Capitalize") != null);
        }

        [Test]
        public void CapitalizesTheFirstLetterOfEveryWordInASentence()
        {
            string expected = "Hi There, How Is It Going?";
            string actual = this._program.Capitalize("hi there, how is it going?");

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void CapitalizesTheFirstLetter()
        {
            string expected = "I Love Breakfast At Bill Miller Bbq";
            string actual = this._program.Capitalize("i love breakfast at bill miller bbq");

            Assert.AreEqual(expected, actual);
        }
    }
}