using System;
using Xunit;
using System.Collections.Generic;

namespace LevelWidth
{
    public class UnitTest
    {
        [Fact]
        public void FunctionExists()
        {
            var program = new Program();
            var type = program.GetType();

            Assert.True(type.GetMember("LevelWidth") != null);
        }

        [Fact]
        public void LevelWidthReturnsNumberOfNodesAtWidestPoint()
        {
            var root = new Node("0");
            root.Add("1");
            root.Add("2");
            root.Add("3");
            root.Children[0].Add("4");
            root.Children[2].Add("5");

            var program = new Program();

            Assert.Equal(new List<int> { 1, 3, 2 }, program.LevelWidth(root));
        }

        [Fact]
        public void LevelWidthReturnsNumberOfNodesAtWidestPoint2()
        {
            var root = new Node("0");
            root.Add("1");
            root.Children[0].Add("2");
            root.Children[0].Add("3");
            root.Children[0].Children[0].Add("4");

            var program = new Program();

            Assert.Equal(new List<int> { 1, 1, 2, 1 }, program.LevelWidth(root));
        }
    }
}
