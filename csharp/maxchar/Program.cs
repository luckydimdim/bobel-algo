using System;
using System.Collections.Generic;

namespace maxchar
{
    public class Program
    {
        public static void Main(string[] args)
        {
        	var program = new Program();

            Console.WriteLine(program.MaxChar("abcccccccd`"));
        }

 		/// <summary>
 		/// Given a string, return the character that is most
 		/// commonly used in the string.
 		/// </summary>
 		/// <example>MaxChar("abcccccccd") == "c"</example>
 		/// <example>MaxChar("1231111") == "1"</example>
        public char MaxChar(string input)
        {
        	var charDict = new Dictionary<char, int>();
        	char[] chars = input.ToCharArray();

        	foreach (char letter in chars) {
        		if (charDict.ContainsKey(letter)) {
        			charDict[letter] += 1;
    			} else {
					charDict[letter] = 1;
    			}
        	}

        	char maxChar = input[0];
        	int maxCharRate = 0;

        	foreach (var entry in charDict) {
        		if (entry.Value > maxCharRate) {
        			maxCharRate = entry.Value;
        			maxChar = entry.Key;
        		}
        	}

        	return maxChar;
        }
    }
}
