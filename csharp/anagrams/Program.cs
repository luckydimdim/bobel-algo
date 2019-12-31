using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;

namespace anagrams
{
    public class Program
    {
        public static void Main(string[] args)
        {
        	// var program = new Program();
        	// Console.WriteLine(program.Anagrams("a !bC", "c b!~ A"));
        }

        /// <summary>
        /// Check to see if two provided strings are anagrams of eachother.
        /// One string is an anagram of another if it uses the same characters
        /// in the same quantity. Only consider characters, not spaces
        /// or punctuation.  Consider capital letters to be the same as lower case
		/// </summary>
		/// <example>Anagrams("rail safety", "fairy tales") --> True</example>
		/// <example>Anagrams("RAIL! SAFETY!", "fairy tales") --> True</example>
		/// <example>Anagrams("Hi there", "Bye there") --> False</example>
		/// <param name="a">First string to compare</param>
		/// <param name="b">Second string to compare</param>
		/// <return>Result of comparison</return>
        public bool Anagrams1(string a, string b)
        {
        	Dictionary<char, int> mapA = this.stringToMap(a);
        	Dictionary<char, int> mapB = this.stringToMap(b);

        	if (mapA.Keys.Count != mapB.Keys.Count) {
        		return false;
        	}

        	foreach (var keyValue in mapA) {
        		if (!mapB.ContainsKey(keyValue.Key)) {
        			return false;
        		}

        		if (mapB[keyValue.Key] != keyValue.Value) {
        			return false;
        		}
        	}

        	return true;
        }

        /// <summary>
        /// Helper method for covertion string to char map
        /// </summary>
        private Dictionary<char, int> stringToMap(string value)
        {
        	var result = new Dictionary<char, int>();

        	value = value.ToLower();
        	value = Regex.Replace(value, "\\W", "");
        	char[] chars = value.ToCharArray();

        	foreach (char letter in chars) 
        	{
        		if (!result.ContainsKey(letter)) {
        			result.Add(letter, 1);
        		} else {
        			result[letter] += 1;
        		}
        	}

        	return result;
        }

        public bool Anagrams(string a, string b)
        {
        	a = Regex.Replace(a, "\\W", "");
        	a = a.ToLower();
        	char[] charsA = a.ToCharArray();
        	Array.Sort(charsA);
        	a = String.Join("", charsA);

        	b = Regex.Replace(b, "\\W", "");
        	b = b.ToLower();
        	char[] charsB = b.ToCharArray();
        	Array.Sort(charsB);
        	b = String.Join("", charsB);

        	return a == b;
        }
    }
}
