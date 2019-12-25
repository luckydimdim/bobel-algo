using System;

namespace Library
{
    public class Index
    {
        public int[] InsertSort(int[] input)
        {
            int temp;

            for (int outer = 1; outer < input.Length; ++outer) {
                for (int inner = outer; inner > 0 && input[inner - 1] > input[inner]; --inner) {
                    temp = input[inner - 1];
                    input[inner - 1] = input[inner];
                    input[inner] = temp;
                }
            }

        	return input;
        }
    }
}