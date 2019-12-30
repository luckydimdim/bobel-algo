using System;
using System.Collections.Generic;
using System.Linq;

namespace chunk
{
    public class Program
    {
        public static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
        }

        /// <summary>
        /// Given an array and chunk size, divide the array into many subarrays
        /// where each subarray is of length size
        /// </summary>
        /// <example>Chunk(new int[] { 1, 2, 3, 4 }, 2) --> new int[][]{ new int[] { 1, 2 }, new int[] { 3, 4 } }</example>
        /// <param name="array">Array to be chunked</param>
        /// <param name="size">Size of chunks</param>
        public List<List<int>> Chunk1(int[] array, int size)
        {
        	var result = new List<List<int>>();

        	foreach (int element in array) {
        		if (result.Count == 0 || result[result.Count-1].Count == size) {
        			result.Add(new List<int> { element });
        		} else {
        			(result[result.Count-1]).Add(element);
        		}
        	}

        	return result;
        }

        public List<List<int>> Chunk(int[] array, int size) 
        {
        	var result = new List<List<int>>();
        	int index = 0;

        	while (index < array.Length) 
        	{
        		result.Add(array.Skip(index).Take(size).ToList());
        		index += size;
        	}

        	return result;
        }
    }
}
