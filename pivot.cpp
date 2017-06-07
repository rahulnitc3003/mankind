#include <iostream>
using namespace std;

int maximum(int arr[],int size)
{
	int i,mx=0;
	for(i=0;i<size;i++)
		if(arr[i]>arr[mx])
			mx = i;
	return mx;
}

int binary_search(int arr[],int l, int r, int key)
{
	while(l<r)
	{
		int mid = (l+r)/2;
		if(arr[mid]==key)
			return mid;
		if(arr[mid]<key)
			return binary_search(arr,mid+1,r,key);
		else
			return binary_search(arr,l,mid-1,key);
	}
	return -1;
}

int main(int argc, char const *argv[])
{
	int arr[] = {4,5,6,1,2,3};
	int key;
	cin>>key;
	int size =sizeof(arr)/sizeof(arr[0]);
	int i;
	for(i=0;i<size;i++)
		cout<<arr[i]<<" ";
	
	//cout<<"\nMAXIMUM index ="<<maximum(arr,size);

	int res = binary_search(arr,0,maximum(arr,size)+1,key);
	if(res!=-1)
	{
		cout<<"\nFOUND AT POSITION"<<res;
	}
	else
	{
		res = binary_search(arr,maximum(arr,size),size,key);
		if(res!=-1)
			cout<<"\nFOUND AT POSITION"<<res;
		else
			cout<<"\nNOT FOUND";
	}
	return 0;
}