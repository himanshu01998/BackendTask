def check_list(lst):
    l = len(lst) - 1
    if(lst[0] == lst[l]):
        print("True")
    else:
        print("False")

l1 = [10, 20, 30, 40, 10]
l2 = [75, 65, 35, 75, 30]

check_list(l1)
check_list(l2)