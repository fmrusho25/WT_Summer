using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace OutDemo
{
    class Program
    {
        static void Main(string[] args)
        {
            OutDemo od = new OutDemo();
            int a = 10, b = 20, r1, r2;

            bool r = od.add(a, b, out r1, out r2);
            if (r)
            {
                Console.WriteLine("If After: {0} {1} {2} {3} {4}", a, b, r1, r2, r);
            }
            else
            {
                Console.WriteLine("Else After: {0} {1} {2} {3} {4}", a, b, r1, r2, r);
            }

        }
    }
}
