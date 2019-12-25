using System;
using System.Collections.Generic;

namespace Library
{
    public class Index
    {
        public int[] QuickSort(int[] input)
        {
            if (input.Length <= 1) {
                return null;
            }

            int barrier = input[0];
            var left = new List<int>();
            var middle = new List<int>();
            var right = new List<int>();

            for (int index = 0; index < input.Length; ++index) {
                if (input[index] < barrier) {
                    left.Add(input[index]);
                } else if (input[index] == barrier) {
                    middle.Add(input[index]);
                } else {
                    right.Add(input[index]);
                }
            }

            int[] leftArray = left.ToArray();
            int[] rightArray = right.ToArray();

            this.QuickSort(leftArray);
            this.QuickSort(rightArray);

            var result = new List<int>();
            result.AddRange(leftArray);
            result.AddRange(middle);
            result.AddRange(rightArray);

            int[] temp = result.ToArray();

            for (int index = 0; index < temp.Length; ++index) {
                input[index] = temp[index];
            }

        	return input;
        }
    }
}