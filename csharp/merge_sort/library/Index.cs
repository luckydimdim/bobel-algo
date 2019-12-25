using System;
using System.Collections.Generic;

namespace Library
{
    public class Index
    {
        public int[] Merge(int[] left, int[] right)
        {
            var result = new List<int>();
            int leftIndex = 0;
            int rightIndex = 0;

            while (leftIndex < left.Length && rightIndex < right.Length) {
                if (left[leftIndex] <= right[rightIndex]) {
                    result.Add(left[leftIndex]);
                    leftIndex++;
                } else {
                    result.Add(right[rightIndex]);
                    rightIndex++;
                }
            }

            while (leftIndex < left.Length) {
                result.Add(left[leftIndex]);
                leftIndex++;
            }

            while (rightIndex < right.Length) {
                result.Add(right[rightIndex]);
                rightIndex++;
            }

            return result.ToArray();
        }

        public int[] MergeSort(int[] input)
        {
            if (input.Length <= 1) {
                return null;
            }

            int middle = input.Length / 2;
            int[] left = new int[middle];
            int[] right = new int[input.Length - middle];

            for (int leftIndex = 0; leftIndex < middle; ++leftIndex) {
                left[leftIndex] = input[leftIndex];
            }

            int ind = 0;

            for (int rightIndex = middle; rightIndex < input.Length; ++rightIndex) {
                right[ind] = input[rightIndex];
                ind++;
            }

            this.MergeSort(left);
            this.MergeSort(right);

            int[] result = this.Merge(left, right);

            for (int index = 0; index < result.Length; ++index) {
                input[index] = result[index];
            }

        	return input;
        }
    }
}













