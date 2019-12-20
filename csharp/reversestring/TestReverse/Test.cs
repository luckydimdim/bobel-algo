using Microsoft.VisualStudio.TestTools.UnitTesting;
using reversestring;

namespace TestReverse
{
    [TestClass]
    public class UnitTest1
    {
        private Index Index = null;
        
        [TestInitialize]
        public void SetUp()
        {
            this.Index = new Index();
        }

        [TestMethod]
        public void RevertFunctionExists()
        {
            var type = this.Index.GetType();
            Assert.IsTrue(type.GetMethod("Reverse") != null);
        }

        [TestMethod]
        public void FunctionReversesString()
        {
            Assert.AreEqual(this.Index.Reverse("abcd"), "dcba");
        }
        
        [TestMethod]
        public void FunctionReversesStringWithWhitespaces()
        {
            Assert.AreEqual(this.Index.Reverse("  abcd"), "dcba  ");
        }        
    }
}