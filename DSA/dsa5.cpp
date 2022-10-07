#include<stdio.h>
#define max 4
int n,A[max],B[max],C[max],i,top_1=-1,top_2=-1,top_3=-1,k=1;
void transfer(char x,char z);
void display();
void TOH(int n,char x,char y,char z);
int main()
{
char p,q,x='A',y='B',z='C';
for(i=max-1;i>=0;i--)
{
A[i]=4-i;
}
top_1=max-1;
for(i=max-1;i>=0;i--)
{
B[i]=0;
C[i]=0;
}
n=4;
printf("\n ****************** TOWER OF HANOI PROBLEM*********************");
printf("\n\t\t********USING RECURSION********");
display();
TOH(n,'A','B','C');
printf("\n *************** AFTER COMPLETE TRANSFORMATION***************");
display();
}
void TOH(int n,char x,char y,char z)
{
	if(n>0)
{
 TOH(n-1,x,z,y);
 transfer(x,z);k=k+1;
 TOH(n-1,y,x,z);
}
}
void transfer(char x,char z)
{
if(x=='A'&&z=='B')
{
 B[++top_2]=A[top_1];
 A[top_1--]=0;
 printf("\n step(%d) (A --->> B)",k);
 display();
}
 else if(x=='C'&&z=='B')
 {
 B[++top_2]=C[top_3];
 C[top_3--]=0;
 printf("\n step(%d) (C --->> B)",k);
 display();
 }
 else if(x=='B'&&z=='C')
 {
 C[++top_3]=B[top_2];
 B[top_2--]=0;
 printf("\n step(%d) (B --->> C)",k);
display();
 }
 else if(x=='A'&&z=='C')
 {
 C[++top_3]=A[top_1];
A[top_1--]=0;
printf("\n step(%d) (A --->> C)",k);
display();
}
else if(x=='C'&&z=='A')
{
A[++top_1]=C[top_3];
C[top_3--]=0;
printf("\n step(%d) (C --->> A)",k);
display();
 }
else if(x=='B'&&z=='A')
{
 A[++top_1]=B[top_2];
 B[top_2--]=0;
 printf("\n step(%d) (B --->> A)",k);
 display();
 }
}
void display()
{
printf("\n\t A__|__B__|__C");
for(i=max-1;i>=0;i--)
{
printf("\n\t %d | %d | %d",A[i],B[i],C[i]);
}
}
