using System;
using System.Collections;
using System.Linq;

namespace Stack
{
    /// <summary>
    /// Create a stack data structure.  The stack
    /// should be a class with methods 'Push', 'Pop', and
    /// 'Peek'.  Adding an element to the stack should
    /// store it until it is removed.
    /// </summary>
    /// <example>
    /// var s = new Stack();
    /// s.Push(1);
    /// s.Push(2);
    /// s.Pop(); // returns 2
    /// s.Pop(); // returns 1
    /// </example>
    public class Stack
    {
        private ArrayList _data = null;

        public Stack()
        {
            this._data = new ArrayList();
        }

        public void Push(object value)
        {
            this._data.Add(value);
        }

        public object Pop()
        {
            object result = null;

            if (this._data.Count > 0)
            {
                result = this._data[this._data.Count - 1];
                this._data.RemoveAt(this._data.Count - 1);
            }

            return result;
        }

        public object Peek()
        {
            object result = null;

            if (this._data.Count > 0)
            {
                result = this._data[this._data.Count - 1];
            }

            return result;
        }
    }
}