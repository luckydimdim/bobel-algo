using System;
using System.Collections;

namespace Weave
{
    /// <summary>
    /// --- Directions
    /// Implement a 'peek' method in this Queue class.
    /// Peek should return the last element (the next
    /// one to be returned) from the queue *without*
    /// removing it.
    /// </summary>
    public class Queue
    {
        private ArrayList _data;

        public Queue()
        {
            this._data = new ArrayList();
        }

        public void Add(object element)
        {
            this._data.Insert(0, element);
        }

        public object Remove()
        {
            object result = this._data[this._data.Count - 1];
            this._data.RemoveAt(this._data.Count - 1);

            return result;
        }

        public object Peek()
        {
            if (this._data.Count > 0)
            {
                return this._data[this._data.Count - 1];
            }

            return null;
        }
    }
}