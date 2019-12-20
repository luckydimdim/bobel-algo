<?php
class Index
{
    /**
     * Given a string, return a new string with the reversed
     * order of characters
     *
     * @examples
     * reverse('apple') === 'leppa'
     * reverse('hello') === 'olleh'
     * reverse('Greetings!') === '!sgniteerG'
     *
     * @param string $str
     * @return string
     */
    public static function reverse(string $str): string
    {
        if (!$str) {
            return '';
        }

        $result = str_split($str);
        $result = array_reverse($result);
        $result = implode('', $result);

        return $result;
    }
}
