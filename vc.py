str1=input()
key=list(str1[0:8])
n=8
list_str=[str1[i:i+n] for i in range(0,len(str1),n)]
q=list_str[2:]
#print(q)

def xor(a, b, n):
    ans = ""
     
    # Loop to iterate over the
    # Binary Strings
    for i in range(n):
         
        # If the Character matches
        if (a[i] == b[i]):
            ans += "0"
        else:
            ans += "1"
    return ans
m=[]
for i in q:
    m.append(xor(key,i,len(q)))
print(m)