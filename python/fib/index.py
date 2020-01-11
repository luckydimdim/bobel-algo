# --- Directions
# Print out the n-th entry in the fibonacci series.
# The fibonacci series is an ordering of numbers where
# each number is the sum of the preceeding two.
# For example, the sequence
#  [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
# forms the first ten entries of the fibonacci series.
# Example:
#   fib(4) == 3

def fib(n):
    if (n < 2):
        return n

    return fib(n - 2) + fib(n - 1)

def memoize(fn):
    cache = {}

    def inner(*args):
        if args in cache:
            result = cache[args];
        else:
            result = fn(*args)
            cache[args] = result

        return result

    return inner

fib = memoize(fib)

#print(fib(4))


