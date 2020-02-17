# --- Directions
# Given a string, return the character that is most
# commonly used in the string.
# --- Examples
# max_char("abcccccccd") === "c"
# max_char("apple 1231111") === "1"
def max_char(chars_sequence):
	char_map = {}
	max_char_name = ''
	max_char_rate = 0

	chars = list(str(chars_sequence))

	for char in chars:
		if char in char_map:
			char_map[char]+=1
		else:
			char_map[char]=1


	for char in char_map:
		if max_char_rate < char_map[char]:
			max_char_rate = char_map[char]
			max_char_name = char

	return max_char_name

def aaa(c):
	cc = {}

	for l in c:
		if l in cc:
			cc[l] += 1
		else:
			cc[l] = 1

	mm = 0
	pp = None

	for ff in cc:
		if cc[ff] > mm:
			mm = cc[ff]
			pp = ff

	return pp

print(aaa('abcccccccd'))