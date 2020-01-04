using System;
using System.Collections.Generic;

namespace Pyramid
{
    public class Program
    {
    	private List<string> _result = null;

        public static void Main(string[] args)
        {
        	var program = new Program();

            Console.Write(program.Pyramid(5));
        }

        /// <summary>
        /// Write a function that accepts a positive number N.
        /// The function should console log a pyramid shape
        /// with N levels using the # character.  Make sure the
        /// pyramid has spaces on both the left *and* right hand sides
        /// </summary>
        /// <example>
        /// Pyramid(3):
        /// '  #  '
        /// ' ### '
        /// '#####'
        /// </example>
        /// <param name="n">Number of levels of pyramid</param>
        public string Pyramid(int n)
        {
        	this._result = new List<string>();

        	this.buildPyramid(n);

        	return String.Join("\n", this._result);
        }

        private void buildPyramid(int rows, int row = 0, string stage = "")
        {
        	if (rows == row)
        	{
        		return;
        	}

        	int width = rows * 2 - 1;
        	int center = rows - 1;

        	if (stage.Length == width) 
        	{
        		this._result.Add(stage);
        		buildPyramid(rows, ++row);

        		return;
        	}

        	if (stage.Length < center - row || stage.Length > center + row) 
        	{
				buildPyramid(rows, row, stage + " ");
        	}
        	else
        	{
        		buildPyramid(rows, row, stage + "#");	
        	}
        }
    }
}
