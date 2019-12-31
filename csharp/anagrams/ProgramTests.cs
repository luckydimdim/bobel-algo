using NUnit.Framework;
using anagrams;

namespace Tests
{
    public class ProgramTests
    {
        private Program _program = null;

        [SetUp]
        public void Setup()
        {
            this._program = new Program();
        }

        [Test]
        public void TestAnagramsFunctionExists()
        {
            var type = this._program.GetType();

            Assert.True(type.GetMethod("Anagrams") != null);
        }

        [Test]
        public void TestHelloIsAnAnagramOfLlohe()
        {
            Assert.True(this._program.Anagrams("hello", "llohe"));
        }

        [Test]
        public void TestWhoaHiIsAnAnagramOfHiWhoa()
        {
            Assert.True(this._program.Anagrams("Whoa! Hi!", "Hi! Whoa!"));
        }

        [Test]
        public void TestOneOneIsNotAnAnagramOfTwoTwoTwo()
        {
            Assert.False(this._program.Anagrams("One One", "Two two two"));
        }

        [Test]
        public void TestOneOneIsNotAnAnagramOfOneOneC()
        {
            Assert.False(this._program.Anagrams("One one", "One one c"));
        }

        [Test]
        public void TestATreeALifeABenchIsNotAnAnagramOfATreeAFenceAYard()
        {
            Assert.False(this._program.Anagrams("A tree, a life, a bench", "A tree, a fence, a yard"));
        }
    }
}






