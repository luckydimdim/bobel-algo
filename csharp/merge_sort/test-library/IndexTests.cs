using Library;
using Xunit;

namespace TestApp
{
    public class IndexTests
    {
        [Fact]
        public void TestMergeSort() {
            Assert.Equal(new int[] { 1, 2, 3, 4, 5 }, new Index().MergeSort(new int[] { 5, 3, 1, 4, 2 }));
        }

        [Fact]
        public void TestMerge() {
            Assert.Equal(new int[] { 1, 2, 3, 4 }, new Index().Merge(new int[] { 3, 4 }, new int[] { 1, 2 }));
        }        
    }
}