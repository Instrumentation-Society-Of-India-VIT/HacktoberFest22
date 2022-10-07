//kadane's Algorithm

#include<bits/stdc++.h>
using namespace std;


// } Driver Code Ends
class Solution{
    public:
    // arr: input array
    // n: size of array
    //Function to find the sum of contiguous subarray with maximum sum.
    long long maxSubarraySum(int arr[], int n){
        
        int greatestSum=arr[0],currSum=0;//greatestSum keeps track of total greatest sum till now and currSum keeps track of current sum
        for(int i=0;i<n;i++){
            currSum+=arr[i];
            if(currSum>greatestSum){
                greatestSum=currSum;
            }
            if(currSum<0){//if current sum is zero, it will definitely not contribute maximum sum
                currSum=0;
            }
        }
        return greatestSum;
        
    }
};

//{ Driver Code Starts.

int main()
{
    int t,n;
    
    cin>>t; //input testcases
    while(t--) //while testcases exist
    {
        
        cin>>n; //input size of array
        
        int a[n];
        
        for(int i=0;i<n;i++)
            cin>>a[i]; //inputting elements of array
            
        Solution ob;
        
        cout << ob.maxSubarraySum(a, n) << endl;
    }
}

// } Driver Code Ends