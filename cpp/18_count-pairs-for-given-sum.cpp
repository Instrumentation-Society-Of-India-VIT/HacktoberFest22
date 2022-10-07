#include<iostream>
using namespace std;
class Solution{   
public:
    int getPairsCount(int arr[], int n, int k) {
        int i,j,count=0;
        for(i=0;i<n-1;i++){
            for(j=i+1;j<n;j++){
                if(arr[i]+arr[j]==k)
                count++;
            }
        }
        return count;
    }
};

int main(){
    int n,k;
    cin>>n;
    cin>>k;
    int arr[n];
    for(int i=0;i<n;i++){
        cin>>arr[i];
    }
    Solution obj;
    cout<<obj.getPairsCount(arr,n,k)<<endl;
}