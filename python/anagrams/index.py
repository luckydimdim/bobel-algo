import re
from pprint import pprint

# --- Description
# Check to see if two provided strings are anagrams of eachother.
# One string is an anagram of another if it uses the same characters
# in the same quantity. Only consider characters, not spaces
# or punctuation.  Consider capital letters to be the same as lower case
#
# --- Examples
# anagrams('rail safety', 'fairy tales') --> True
# anagrams('RAIL! SAFETY!', 'fairy tales') --> True
# anagrams('Hi there', 'Bye there') --> False


def anagrams1(a, b):
    mapA = str_to_map(a)
    mapB = str_to_map(b)

    if len(mapA.keys()) != len(mapB.keys()):
        return False

    for letter, count in mapA.items():
        if not letter in mapB:
            return False

        if count != mapB[letter]:
            return False

    return True


def str_to_map(value):
    result = {}

    value = value.lower()
    value = re.sub("\W", "", value)

    for char in value:
        if not char in result:
            result.update({char: 1})
        else:
            result[char] += 1

    return result


def anagrams(a, b):
    normalizedA = sorted(re.sub("\W", "", a.lower()))
    normalizedB = sorted(re.sub("\W", "", b.lower()))

    return normalizedA == normalizedB


print(anagrams('a b!c', 'B c~a!'))
normalizedA = sorted(re.sub("\W", "", 'a b!c'.lower()))
b = ['a', 'b', 'c']

pprint(normalizedA)
