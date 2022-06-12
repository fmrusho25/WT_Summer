using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace OutDemo
{
    class OutDemo
    {
        public bool add(int a,int b, out int r1, out int r2)
        {
            r1 = a + b;
            r2 = a - b;
            if (r1 < 50)
            {
                return true;
            }
            else { return false; }
        }
    }
}
