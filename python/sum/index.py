# Implement function which can sum
# 2 strings: '111' + '222' = '333'
def sum(a, b):
    left = list(a)
    left = left[::-1]

    right = list(b)
    right = right[::-1]

    result = []
    amount = 0
    memory = 0

    i = 0
    j = 0

    while i < len(left) and j < len(right):
        amount = int(left[i]) + int(right[j])

        if amount >= 10:
            memory = 1
            amount = amount - 10
            result.append(amount)
        else:
            result.append(amount + memory)
            memory = 0

        i = i + 1
        j = j + 1

    while i < len(left):
        result.append(int(left[i]) + memory)
        memory = 0
        i = i + 1

    while j < len(right):
        result.append(int(right[j]) + memory)
        memory = 0
        j = j + 1

    result = result[::-1]

    return ''.join(str(x) for x in result)
