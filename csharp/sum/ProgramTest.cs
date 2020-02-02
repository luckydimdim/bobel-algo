using System;
using Xunit;

namespace Sum
{
    public class ProgramTest
    {
        private Program _program = null;

        public ProgramTest()
        {
            this._program = new Program();
        }

        [Fact]
        public void FunctionSumExists()
        {
            var type = this._program.GetType();
            Assert.NotNull(type.GetMember("Sum"));
        }

        [Fact]
        public void SumProperlyPutsValuesToMemory()
        {
            string expected = "20";
            string actual = this._program.Sum("11", "9");

            Assert.Equal(expected, actual);
        }

        [Fact]
        public void SumWorksProperlyWithBigNumbers()
        {
            string expected = "111111111111111111111111111111333";
            string actual = this._program.Sum("111111111111111111111111111111111", "222");

            Assert.Equal(expected, actual);
        }
    }
}
