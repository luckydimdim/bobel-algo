from Node import Node

def levelWidth(root):
    result = []
    array = [root, 'stop']
    counter = 0

    while len(array):
        node = array[0]
        array.remove(node)

        if node == 'stop':
            if counter == 0:
                return result

            array.append('stop')
            result.append(counter)
            counter = 0
        else:
            counter += 1
            array += node.children

    return result