using System;

namespace palindrome
{
    public class Program2
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
        }
        
        public bool Palindrome(String str)
        {
            char[] chars = str.ToCharArray();
            String revertedStr = "";
            
            for (int i = 0; i < chars.Length; ++i)
            {
                revertedStr = chars[i] + revertedStr;
            }

            return revertedStr == str;
        }        
    }
}