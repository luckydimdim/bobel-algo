using NUnit.Framework;
using Vowels;

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
        public void FunctionExists()
        {
            var type = this._program.GetType();

            Assert.True(type.GetMember("Vowels") != null);
        }

        [Test]
        public void ReturnsTheNumberOfVowelsUsed1()
        {
            int expected = 5;
            int actual = this._program.Vowels("aeiou");

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void ReturnsTheNumberOfVowelsUsedWhenTheyAreCapitalized()
        {
            int expected = 5;
            int actual = this._program.Vowels("AEIOU");

            Assert.AreEqual(expected, actual);
        } 

        [Test]
        public void ReturnsTheNumberOfVowelsUsed2()
        {
            int expected = 5;
            int actual = this._program.Vowels("abcdefghijklmnopqrstuvwxyz");

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void ReturnsTheNumberOfVowelsUsed3()
        {
            int expected = 0;
            int actual = this._program.Vowels("bcdfghjkl");

            Assert.AreEqual(expected, actual);
        }        
    }
}