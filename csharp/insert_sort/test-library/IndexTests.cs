using Library;
using Xunit;

namespace TestApp
{
    public class IndexTests
    {
        [Fact]
        public void TestIndex() {
            Assert.Equal(new int[] { 1, 2, 3, 4, 5 }, new Index().InsertSort(new int[] { 5, 3, 1, 4, 2 }));
        }
    }
}