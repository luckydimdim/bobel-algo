using Library;
using Xunit;

namespace TestApp
{
    public class IndexTests
    {
        [Fact]
        public void TestQuickSort() {
            Assert.Equal(new int[] { 1, 2, 3, 4, 5 }, new Index().QuickSort(new int[] { 5, 3, 1, 4, 2 }));
        }
    }
}