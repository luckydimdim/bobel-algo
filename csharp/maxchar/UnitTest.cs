using NUnit.Framework;
using maxchar;

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
        public void TestMaxCharExists()
        {
            var type = this._program.GetType();
            Assert.IsTrue(type.GetMethod("MaxChar") != null);
        }

        [Test]
        public void TestMaxCharFindsTheMostFrequentlyUsedChar()
        {
            Assert.AreEqual(this._program.MaxChar("a"), 'a');
            Assert.AreEqual(this._program.MaxChar("abcdefghijklmnaaaaa"), 'a');
        }

        [Test]
        public void TestMaxCharWorksWithNumbersInTheString()
        {
            Assert.AreEqual(this._program.MaxChar("ab1c1d1e1f1g1"), '1');
        }
    }
}