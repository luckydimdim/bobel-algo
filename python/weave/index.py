from queue import Queue

def weave(sourceOne, sourceTwo):
    result = Queue()

    while(sourceOne.peek() != None and sourceTwo.peek() != None):
        if sourceOne.peek() != None:
            result.add(sourceOne.remove())

        if sourceTwo.peek() != None:
            result.add(sourceTwo.remove())

    return result
