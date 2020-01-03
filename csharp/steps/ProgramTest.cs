using NUnit.Framework;
using Steps;

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
        public void TestProgramExists()
        {
            var type = this._program.GetType();
            Assert.True(type.GetMethod("Steps") != null);
        }

        [Test]
        public void StepsCalledWithN1()
        {
            string expected = "#";
            string actual = this._program.Steps(1);

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void StepsCalledWithN2()
        {
            string expected = "# \n##";
            string actual = this._program.Steps(2);

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void StepsCalledWithN3()
        {
            string expected = "#  \n## \n###";
            string actual = this._program.Steps(3);

            Assert.AreEqual(expected, actual);
        }
    }
}