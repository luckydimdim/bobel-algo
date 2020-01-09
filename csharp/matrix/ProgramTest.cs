using NUnit.Framework;
using System.Collections.Generic;
using Matrix;

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
        public void FunctionExists()
        {
            var type = this._program.GetType();

            Assert.True(type.GetMember("Matrix") != null);
        }

        [Test]
        public void MatrixProducesA2x2Array()
        {
            var expected = new List<List<int>>() 
            {
                new List<int>() { 1, 2 },
                new List<int>() { 4, 3 }
            };

            List<List<int>> actual = this._program.Matrix(2);

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void MatrixProducesA3x3Array()
        {
            var expected = new List<List<int>>() 
            {
                new List<int>() { 1, 2, 3 },
                new List<int>() { 8, 9, 4 },
                new List<int>() { 7, 6, 5 }
            };

            List<List<int>> actual = this._program.Matrix(3);

            Assert.AreEqual(expected, actual);
        }

        [Test]
        public void MatrixProducesA4x4Array()
        {
            var expected = new List<List<int>>() 
            {
                new List<int>() { 1,  2,  3, 4 },
                new List<int>() { 12, 13, 14, 5 },
                new List<int>() { 11, 16, 15, 6 },
                new List<int>() { 10, 9,  8, 7 }
            };

            List<List<int>> actual = this._program.Matrix(4);

            Assert.AreEqual(expected, actual);
        }
    }
}