using System;
using Xunit;

namespace fizzbuzz
{
    public class TestProgram
    {
    	private Program _program = null;

    	public TestProgram()
    	{
    		this._program = new Program();
    	}

        [Fact]
        public void TestFizzBuzzExists()
        {
        	var type = this._program.GetType();

        	Assert.True(type.GetMethod("FizzBuzz") != null);
        }

        [Fact]
        public void TestFizzBuzzWorksProperly()
        {
        	string expected = "1\n2\nfizz\n4\nbuzz";
        	string actual = this._program.FizzBuzz(5);

        	Assert.Equal(expected, actual);
        }
    }
}
