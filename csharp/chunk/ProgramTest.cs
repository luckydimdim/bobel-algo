using System;
using System.Collections.Generic;
using Xunit;

namespace chunk
{
    public class ProgramTest
    {
    	private Program _program = null;

    	public ProgramTest()
    	{
    		this._program = new Program();
    	}

        [Fact]
        public void TestChunkExists()
        {
        	var type = this._program.GetType();
        	Assert.True(type.GetMethod("Chunk") != null);
        }

        [Fact]
        public void TestChunkDividesAnArrayOf10ElementsWithChunkSize2()
        {
	        var expected = new List<List<int>>
	        {
				new List<int> { 1, 2 },
				new List<int> { 3, 4 },
				new List<int> { 5, 6 },
				new List<int> { 7, 8 },
				new List<int> { 9, 10 }
	        };
	        
	        List<List<int>> actual = this._program.Chunk(new int[] { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 }, 2);

	        Assert.Equal(expected, actual);
        }

        [Fact]
        public void TestChunkDividesAnArrayOf3ElementsWithChunkSize1()
        {
        	var expected = new List<List<int>>
        	{
        		new List<int> { 1 },
        		new List<int> { 2 },
        		new List<int> { 3 }
        	};

        	List<List<int>> actual = this._program.Chunk(new int[] { 1, 2, 3 }, 1);

        	Assert.Equal(expected, actual);
        }

        [Fact]
        public void TestChunkDividesAnArrayOf5ElementsWithChunkSize3()
        {
        	var expected = new List<List<int>>
        	{
        		new List<int> { 1, 2, 3 },
        		new List<int> { 4, 5 }
        	};

        	List<List<int>> actual = this._program.Chunk(new int[] { 1, 2, 3, 4, 5 }, 3);

        	Assert.Equal(expected, actual);
        }

        [Fact]
        public void TestChunkDividesAnArrayOf13ElementsWithChunkSize5()
        {
        	var expected = new List<List<int>>
        	{
        		new List<int> { 1, 2, 3, 4, 5 },
        		new List<int> { 6, 7, 8, 9, 10 },
        		new List<int> { 11, 12, 13 }
        	};

        	List<List<int>> actual = this._program.Chunk(new int[] { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13 }, 5);

        	Assert.Equal(expected, actual);
        }
    }
}
