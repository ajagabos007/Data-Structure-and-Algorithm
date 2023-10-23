def binary_search(list, target):
    first = 0
    last = len(list) - 1

    while first <= last: 
        min_point = (first + last ) // 2

        if first == last:
            return min_point
        if list[min_point] < target: 
            first = min_point +1
        elif list[min_point] > target:
            last = min_point -1
    return None

def verify (index):
    if index is not None: 
        print('Target foud at index: ', index)
    
numbers = [1,2,3,4,5,6,7,8,9,10]

result = binary_search(numbers, 0)
verify(result)
        
    