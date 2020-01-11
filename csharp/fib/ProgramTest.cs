using System;
using Xunit;

namespace Fib
{
    public class ProgramTest
    {
        private Program _program = null;

        public ProgramTest()
        {
            this._program = new Program();
        }

        [Fact]
        public void FunctionExists()
        {
            var type = this._program.GetType();

            Assert.True(type.GetMember("Fib") != null);
        }

        [Fact]
        public void CalculatesCorrectFibValueFor1()
        {
            int expected = 1;
            int actual = this._program.Fib(1);

            Assert.Equal(expected, actual);
        }

        [Fact]
        public void CalculatesCorrectFibValueFor2()
        {
            int expected = 1;
            int actual = this._program.Fib(2);

            Assert.Equal(expected, actual);
        }

        [Fact]
        public void CalculatesCorrectFibValueFor3()
        {
            int expected = 2;
            int actual = this._program.Fib(3);

            Assert.Equal(expected, actual);
        }

        [Fact]
        public void CalculatesCorrectFibValueFor4()
        {
            int expected = 3;
            int actual = this._program.Fib(4);

            Assert.Equal(expected, actual);
        }

        [Fact]
        public void CalculatesCorrectFibValueFor39()
        {
            int expected = 63245986;
            int actual = this._program.Fib(39);

            Assert.Equal(expected, actual);
        }        
    }
}
