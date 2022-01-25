/*
 *|______Mohamed Hazem.                       .18107076______|
                             #FIREMIDO#                 
 * and open the template in the editor.
 */
package dynamiczz;

import java.util.*;
public class Dynamiczz {
//top down recursive function Time complexity O(n^2);
	

    /* Returns the best obtainable price for a rod of length
       n and price[] as prices of different pieces */
    
    /* Returns the best obtainable price for a rod of
       length n and price[] as prices of different pieces */
    static int cutRod(int price[],int n) //send Array and Size
    {
        int val[] = new int[n+1]; // create Temporary array which has same number of old array + 1
        val[0] = 0;               // make it's first element = 0 ( this the job of new array)
 
        // Build the table val[] in bottom up manner and return
        // the last entry from the table
        for (int i = 1; i<=n; i++) // for loop on the arraies
        {
            int max_val = Integer.MIN_VALUE;
            // Integer.MinValue stores the minimum possible value for any integer variable in Java.
            for (int j = 0; j < i; j++)
                max_val = Math.max(max_val, //  Math.max returns the greater of two int values. in our case it's (max_val and Price)
                                                price[j] + val[i-j-1]);
                                                                            //
                 val[i] = max_val;          //  val[i] Storage new max_val
        }
 
        return val[n]; // return array at element number N we send 
    }
 
    /* Driver program to test above functions */
    public static void main(String args[])
    {
 Scanner sc=new Scanner(System.in); 
        System.out.println("enter lenght of rod (N) ");
        int N = sc.nextInt() ;
        
        int arr[]=  new int[N];
        System.out.println("enter the (price) of it's elements in cumulative");
        System.out.println("For example if rod = 3 then \nthe input be like [3 5 8] ");
        int size = arr.length;
        for(int i =0 ; i<size ; i ++)
        {
           arr[i]= sc.nextInt();
        }
        System.out.println("Maximum Obtainable Value is "+
                            cutRod(arr, size));
    }
}

/*
 Exeplation

    let say 
                N=3    [1,2,3]
                        | | |
                cost = [3,5,8]

                The Vel  = [0,1,2,3]   size[N+1]
                
                    Start of the process
                                                                                                  price[j] + val[i-j-1]);
                         when i=1 (j=0 , price[0] + val[1-0-1=0] = 3+0 ) => max = 3 & vel[1] = 3

                         when i=2 (j=0 , price[0] + val[2-0-1=1] = 3+3 ) => max = 6 & vel[2] = 6
                         when i=2 (j=1 , price[1] + val[2-1-1=0] = 5+0 ) => max = 5 & vel[2] = 5

                         when i=3 (j=0 , price[0] + val[3-0-1=2] = 3+6 ) => max = 9 & vel[3] = 9
                         when i=3 (j=1 , price[1] + val[3-1-1=1] = 5+3 ) => ? 8>9 ! max = 9 & vel[3] = 9
                         when i=3 (j=2 , price[2] + val[3-2-1=0] = 8+0 ) => ? 8>9 ! max = 9 & vel[3] = 9

                    Maxmum value is 9 


*/