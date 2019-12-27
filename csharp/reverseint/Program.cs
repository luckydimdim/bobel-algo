using System;
using System.Collections.Generic;
using System.Linq;

namespace reverseint
{
    class Program
    {
        static void Main(string[] args)
        {   
            int param = 0;
            if (args.Length > 0)
            {
                param = int.Parse(args[0]);
            }

            var program = new Program();
            Console.WriteLine(program.ReverseInt(param));
        }
        
        /// <summary>
        /// Given an integer, return an integer
        /// that is the reverse ordering of numbers. 
        /// </summary>
        /// <example>
        /// ReverseInt(500) == 5
        /// ReverseInt(-15) == -51
        /// ReverseInt(-90) == -9
        /// ReverseInt(15) == 51
        /// ReverseInt(981) == 189
        /// </example>
        /// <param name="number">input value</param>
        /// <returns>reversed integer</returns>
        public int ReverseInt(int number)
        {
            char[] chars = number.ToString().ToCharArray();
            string reversed = "";

            foreach (char letter in chars)
            {
                if (letter == '-')
                {
                    continue;
                }

                reversed = letter + reversed;
            }

            var result = int.Parse(reversed) * Math.Sign(number);
            
            return result;
        }
    }
}
