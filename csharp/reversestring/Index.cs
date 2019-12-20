using System;
using System.Linq;

namespace reversestring
{
    public class Index
    {
        static void Main(string[] args)
        {
            var index = new Index();
            String reversedString = index.Reverse("apple");
            
            Console.WriteLine(reversedString);
        }
        
        /// <summary>
        /// --- Directions
        /// Given a string, return a new string with the reversed
        /// order of characters
        /// </summary>
        /// <param name="str">String to Reverse</param>
        /// <example>
        /// reverse("apple") == "leppa"
        /// reverse("hello") == "olleh"
        /// reverse("Greetings!") == "!sgniteerG"
        /// </example>
        /// <returns>Reversed String</returns>
        public String Reverse(String str)
        {
            if (String.IsNullOrEmpty(str))
            {
                return String.Empty;
            }

            var chars = str.ToCharArray().ToArray();
            chars = chars.Reverse().ToArray();

            String result = String.Join("", chars);

            return result;
        }
    }
}