
def recursive_binary_search(list, target):
    
    if len(list) == 0:
        return False
    
    else:
        mid_point = len(list) // 2 
        if list[mid_point] == target:
            return True
            
        # return  recursive_binary_search(list[:mid_point-1], target)  if list[mid_point] > target else recursive_binary_search(list[mid_point+1:], target)
        # return (recursive_binary_search(list[:mid_point-1], target), recursive_binary_search(list[mid_point+1:], target) ) [list[mid_point] < target]
        return {True: recursive_binary_search(list[:mid_point-1], target), False:recursive_binary_search(list[mid_point+1:], target) } [list[mid_point] > target]
        # else: 
        #     if list[mid_point] > target: 
        #         return recursive_binary_search(list[:mid_point-1], target)
        #     elif list[mid_point] < target: 
        #         return recursive_binary_search(list[mid_point+1:], target)

numbers = [1,2,3,4,5,6,7,8,9,10]

def verify (result):
    if result is True: 
        print('Target found : ', result)

result = recursive_binary_search(numbers, 3)
verify(result)