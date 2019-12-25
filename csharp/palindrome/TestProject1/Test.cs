using Microsoft.VisualStudio.TestTools.UnitTesting;
using palindrome;

namespace TestProject1
{
    [TestClass]
    public class Test
    {
        private Program2 _program = null;
        
        [TestInitialize]
        public void SetUp()
        {
            this._program = new Program2();
        }        
        
        [TestMethod]
        public void TestPalindromeMethodExists()
        {
            var type = this._program.GetType();
            Assert.IsTrue(type.GetMethod("Palindrome") != null);            
        }

        [TestMethod]
        public void TestPalidromeWorks()
        {
            Assert.IsTrue(this._program.Palindrome("abcba"));            
        }
        
        [TestMethod]
        public void TestPalidromeNotWorks()
        {
            var program = new Program2();
            Assert.IsFalse(this._program.Palindrome("abcba22"));            
        }        
    }
}