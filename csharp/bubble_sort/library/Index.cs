using System;

namespace Library
{
    public class Index
    {
        public int[] BubbleSort(int[] input)
        {
			int temp = -1;

        	for (int outer = 0; outer < input.Length; ++outer) {
        		for (int inner = 0; inner < input.Length; ++inner) {
        			if (input[outer] < input[inner]) {
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