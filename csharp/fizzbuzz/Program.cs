using System;
using System.Collections.Generic;

namespace fizzbuzz
{
    public class Program
    {
        public static void Main(string[] args)
        {
        	var program = new Program();
            Console.WriteLine(program.FizzBuzz(5));
        }

 		/// <summary>
 		/// Write a program that console logs the numbers
 		/// from 1 to n. But for multiples of three print
  		/// “fizz” instead of the number and for the multiples
  		/// of five print “buzz”. For numbers which are multiples
  		/// of both three and five print “fizzbuzz”.
  		/// </summary>
  		///	<example>
 		/// FizzBuzz(5):
 		/// 1
  		/// 2
  		/// fizz
  		/// 4
  		/// buzz
  		/// </example>
        public string FizzBuzz(int digit)
        {
        	var result = new List<String>();

        	for (int i = 1; i <= digit; ++i) {
        		string current = String.Empty;

        		if (i % 3 == 0) {
        			current = "fizz";
        		}

        		if (i % 5 == 0) {
        			current = "buzz";
        		}

        		if (String.IsNullOrEmpty(current)) {
        			current = i.ToString();
        		}

        		result.Add(current);
        	}

        	return String.Join("\n", result.ToArray());
        }
    }
}
