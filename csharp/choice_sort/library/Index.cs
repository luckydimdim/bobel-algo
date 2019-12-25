using System;

namespace Library
{
    public class Index
    {
        public int[] ChoiceSort(int[] input)
        {
            int temp;

            for (int outer = 0; outer < input.Length - 1; ++outer) {
                for (int inner = outer + 1; inner < input.Length; ++inner) {
                    if (input[outer] > input[inner]) {
                        temp = input[outer];
                        input[outer] = input[inner];
                        input[inner] = temp;
                    }
                }
            }

        	return input;
        }
    }
}