print('ini adalah teks dari Python')

for i in range(20):
    for j in range(20):
        if(i==j or j==20-1-i):
            print('*', end='')
        else:
            print(' ', end='')
    print()
