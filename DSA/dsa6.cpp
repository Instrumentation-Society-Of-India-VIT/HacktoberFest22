#include<stdio.h>
struct queue
{
int arr[20],first,last;
}p;
int isfull()
{
if(p.last==19)
{
return 1;
}
else
{
return 0;
}
}
int isempty()
{
if(p.last==-1)
{
return 1;
}
else
{
return 0;
}
}
void enqueue()
{
int n;
printf("Enter rider number\n");
scanf("%d",&n);
if(isfull()==0)
p.arr[++p.last]=n;
else
{
printf("Queue is full\n");
}
}
void dequeue()
{
if(isempty()==0)
{
printf("Rider number %cis allowed on to the roller coaster\n",p.arr[p.first]);
p.first++;
}
else
{
printf("There are no people in queue\n");
}
}
int main()
{
p.first=0;
p.last=-1;
int choice,d;
while(choice!=4)
{
printf("Enter 1 to place person in queue\n");
printf("Enter 2 to check if queue is full and to allow all riders\nto enter the rollercoaster\n");
printf("Enter 3 to see all riders in queue\n");
printf("Enter 4 to exit\n");
scanf("%d",&choice);
switch(choice)
{
case 1: {enqueue();
 break;}
case 2: {if(isfull()==1)
 {
 int i;
 for(i=0;i<20;i++)
 {
 dequeue();
 }
 }
 else{printf("Queue does not consist of enough members and the ride cannot start\n");}
 break;}
case 3:{int i;
 for(i=0;i<=p.last;i++)
 {printf("%c \n",p.arr[i]);}}
 printf("\n");
case 4:break;
}
}
return 0;
}
