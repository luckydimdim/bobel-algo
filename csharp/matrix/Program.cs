using System;
using System.Collections.Generic;

namespace Matrix
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var program = new Program();

            var result = program.Matrix(4);

            foreach (List<int> row in result) {
                foreach (int cell in row) {
                    Console.Write(cell + " ");
                }
                Console.WriteLine();
            }
        }

        /// <summary>
        /// Write a function that accepts an integer N
        /// and returns a NxN spiral matrix.
        /// </summary>
        /// <example>
        /// Matrix(4)
        ///     [[1,  2,  3, 4],
        ///     [12, 13, 14, 5],
        ///     [11, 16, 15, 6],
        ///     [10,  9,  8, 7]]
        /// </example>
        /// <param name="n">Matrix size</param>
        /// <return>Spiral Matrix</return>
        public List<List<int>> Matrix(int n)
        {
            var matrix = new List<List<int>>();

            for (int i = 0; i < n; ++i)
            {
                var col = new List<int>();

                for (int j = 0; j < n; ++j) 
                {
                    col.Add(0);
                }

                matrix.Add(col);
            }

            this.walk(matrix);

            return matrix;            
        }

        private void walk(
            List<List<int>> matrix, 
            int row = 0, 
            int col = 0, 
            string direction = "right", 
            int counter = 1
        ) {
            int size = matrix.Count * matrix.Count;

            if (size + 1 == counter) 
            {
                return;
            }

            // Console.WriteLine(direction + " Row: "+ row +" Col: "+ col +" = "+ counter + " Size: "+ matrix.Count);

            matrix[row][col] = counter;
            counter++;

            switch (direction) {
                case "right":
                    if (col + 1 >= matrix.Count || matrix[row][col + 1] != 0) {
                        direction = "down";
                        row++;
                    } else {
                        col++;
                    }
                    break;

                case "down":
                    if (row + 1 >= matrix.Count || matrix[row + 1][col] != 0) {
                        direction = "left";
                        col--;
                    } else {
                        row++;
                    }                
                    break;

                case "left":
                    if (col - 1 < 0 || matrix[row][col - 1] != 0) {
                        direction = "top";
                        row--;
                    } else {
                        col--;
                    }                
                    break;

                case "top":
                    if (row - 1 < 0 || matrix[row - 1][col] != 0) {
                        direction = "right";
                        col++;
                    } else {
                        row--;
                    }                
                    break;
            }

            this.walk(matrix, row, col, direction, counter);
        }
    }
}
