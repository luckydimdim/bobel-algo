using System;
using System.Text.RegularExpressions;

namespace Vowels
{
    public class Program
    {
        public static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
        }

        /// <summary>
        /// Write a function that returns the number of vowels
        /// used in a string.  Vowels are the characters 'a', 'e'
        /// 'i', 'o', and 'u'.
        /// </summary>
        /// <examples>
        /// Vowels('Hi There!') --> 3
        /// Vowels('Why do you ask?') --> 4
        /// Vowels('Why?') --> 0
        /// </examples>
        /// <param name="input" type="string">String to search vovels</param>
        /// <return type="int">Quantity of vovels</return>
        public int Vowels(string input)
        {
            MatchCollection matches = Regex.Matches(input, "[aeiou]", RegexOptions.IgnoreCase);

            return matches.Count;
        }
    }
}
