using NUnit.Framework;
using Pyramid;

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
        public void TestFunctionExists()
        {
            var type = this._program.GetType();
            Assert.True(type.GetMember("Pyramid") != null);
        }

        [Test]
        public void TestPrintsAPryamidForN2()
        {
            string expected = " # \n###";
            string actual = this._program.Pyramid(2);

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void TestPrintsAPryamidForN3()
        {
            string expected = "  #  \n ### \n#####";
            string actual = this._program.Pyramid(3);

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void TestPrintsAPryamidForN4()
        {
            string expected = "   #   \n  ###  \n ##### \n#######";
            string actual = this._program.Pyramid(4);

            Assert.AreEqual(expected, actual);
        }
    }
}