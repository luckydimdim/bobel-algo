using System;
using System.Collections.Generic;
using System.Linq;

namespace Fib
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var program = new Program();
            Console.WriteLine(program.Fib(4));
        }

        /// <summary>
        /// Print out the n-th entry in the fibonacci series.
        /// The fibonacci series is an ordering of numbers where
        /// each number is the sum of the preceeding two.
        ///
        /// For example, the sequence [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
        /// forms the first ten entries of the fibonacci series.
        /// <summary>
        /// <example>Fib(4) == 3</example>
        /// <param name="n">Number of entry in sequence</param>
        /// <return>Element of fibonacci series</return>
        public int Fib(int n)
        {
            var result = new List<int>{ 0, 1 };

            result = fib(result, n);

            return result.ElementAt(n);
        }

        private List<int> fib(List<int> series, int n)
        {
            int count = series.Count;

            if (count == n + 1) {
                return series;
            }

            series.Add(series.ElementAt(count - 2) + series.ElementAt(count - 1));

            return fib(series, n);
        }
    }
}
