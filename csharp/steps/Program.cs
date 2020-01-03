using System;
using System.Collections.Generic;

namespace Steps
{
    public class Program
    {
    	private Program _program = null;
    	private static List<string> _result = null;

        public static void Main(string[] args)
        {
			var _program = new Program();
    		
            Console.WriteLine(_program.Steps(4));
        }

        /// <summary>
        /// Write a function that accepts a positive number N.
        /// The function should console log a step shape
        /// with N levels using the # character.  Make sure the
        /// step has spaces on the right hand side!
        /// </summary>
        /// <example>
        /// Steps(4):
        /// '#   '
        /// '##  '
        /// '### '
        /// '####'
        /// </example>
        /// <param name="int">
        /// Quatity of steps
        /// </param>
        public string Steps(int n)
        {
        	Program._result = new List<string>();	
        	Program.stepsRecursive(n);

        	return String.Join("\n", Program._result);
        }

        private static void stepsRecursive(int n, int row = 0, string stage = "")
        {
        	if (row == n) 
        	{
        		return;
        	}

        	if (stage.Length == n) 
        	{
        		Program._result.Add(stage);
        		Program.stepsRecursive(n, ++row);

        		return;
        	}

        	if (stage.Length <= row) 
        	{
        		Program.stepsRecursive(n, row, stage + "#");
        	} 
        	else 
        	{
        		Program.stepsRecursive(n, row, stage + " ");
        	}
        }
    }
}
