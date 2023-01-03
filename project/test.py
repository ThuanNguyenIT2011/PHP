def get_k_largest(list1, k):
    s = set(list1)
    list1 = list(s)
    list1.sort(reverse=True)
    final_list = []
    for i in range(k):
        final_list.append(str(list1[i]))

    return ', '.join(final_list)

k = int(input())
l = input()
l = l.split(', ')
list1 = [int(x) for x in l]
print(get_k_largest(list1, k), end='')
