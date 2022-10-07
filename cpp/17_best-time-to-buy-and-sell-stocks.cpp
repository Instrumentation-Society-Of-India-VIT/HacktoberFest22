#include<iostream>
#include<vector>
using namespace std;
class Solution {
public:
    int maxProfit(vector<int>& prices) {
        int n=prices.size(),profit=0,best_buy=prices[0];
        for(int i=1;i<n;i++){
            best_buy=min(best_buy,prices[i]);
            profit=max(profit,prices[i]-best_buy);
        }
        return profit;
    }
};

int main(){
    int n,temp;
    cin>>n;
    vector<int> prices;
    for(int i=0;i<n;i++){
        cin>>temp;
        prices.push_back(temp);
    }
    Solution obj;
    cout<<obj.maxProfit(prices)<<endl;
    return 0;
}