using System;
using System.Collections.Generic;

namespace Capitalize
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var program = new Program();
            Console.WriteLine(program.Capitalize("a lazy fox"));
        }

        /// <summary>
        /// Write a function that accepts a string.  The function should
        /// capitalize the first letter of each word in the string then
        /// return the capitalized string.
        /// </summary>
        /// <examples>
        /// Capitalize('a short sentence') --> 'A Short Sentence'
        /// Capitalize('a lazy fox') --> 'A Lazy Fox'
        /// capitalize('look, it is working!') --> 'Look, It Is Working!'
        /// </examples>
        /// <param name="input">A string to be capitalized</param>
        /// <return>Capitalized string</return>
        public string Capitalize1(string input)
        {
        	string result = String.Empty;

        	string[] words = input.Split(" ");

        	foreach (string word in words) 
        	{
				char[] letters = word.ToCharArray();

				for (int i = 0; i < letters.Length; ++i) 
				{
					if (i == 0) 
					{
						result += letters[i].ToString().ToUpper();
					} 
					else 
					{
						result += letters[i].ToString().ToString();
					}
				}

				result += " ";
        	}

        	return result.Trim();
        }

        public string Capitalize(string input)
        {
        	var result = new List<string>();

        	foreach (string word in input.Split(" ")) 
        	{
				result.Add(word.Substring(0, 1).ToUpper() + word.Substring(1));
        	}

        	return String.Join(" ", result);
        }        
    }
}
