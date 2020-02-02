using System;
using System.Collections.Generic;
using System.Linq;

namespace Sum
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var program = new Program();

            Console.WriteLine(program.Sum("11", "9"));
        }

        /// <summary>
        /// Implement function which can sum 2 strings
        /// </summary>
        /// <example>
        /// program.Sum('111', '222') = '333'
        /// </example>
        public string Sum(string a, string b)
        {
            List<int> left = a.ToCharArray()
                .Select(x => int.Parse(x.ToString())).Reverse().ToList();

            List<int> right = b.ToCharArray()
                .Select(x => int.Parse(x.ToString())).Reverse().ToList();

            var result = new List<int>();
            int i = 0;
            int j = 0;
            int value = 0;
            int memory = 0;

            while (i < left.Count && j < right.Count) {
                value = left[i] + right[j];

                if (value > 9) {
                    memory = 1;
                    value -= 10;
                    result.Add(value);
                } else {
                    result.Add(value + memory);
                    memory = 0;
                }

                i++;
                j++;
            }

            while (i < left.Count) {
                result.Add(left[i] + memory);
                memory = 0;
                i++;
            }

            while (j < right.Count) {
                result.Add(right[j] + memory);
                memory = 0;
                j++;
            }

            IEnumerable<string> sum = result.Select(x => x.ToString()).Reverse();

            return string.Join("", sum);
        }
    }
}
