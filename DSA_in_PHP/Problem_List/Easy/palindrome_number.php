<?php
/**
 * Given an integer x, return true if x is a palindrome, and false otherwise
 * 
 * Example 1:
 * Input: x = 121
 * Output: true
 * Explanation: 121 reads as 121 from left to right and from right to left.
 * 
 * Example 2:
 * Input: x = -121
 * Output: false
 * Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
 *
 *  Example 3:
 * Input: x = 10
 * Output: false
 * Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
 * 
 * Constraints:
 * -231 <= x <= 231 - 1
 * 
 * Follow up: Could you solve it without converting the integer to a string?
 * 
 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        // Negative numbers are not palindromes
        if ($x < 0) {
            return false;
        }

        // Convert the integer to a string
        $str = (string)$x;

        // Use two pointers to check if the string is a palindrome
        $left = 0;
        $right = strlen($str) - 1;

        while ($left < $right) {
            if ($str[$left] !== $str[$right]) {
                return false; // Characters don't match, not a palindrome
            }
            $left++;
            $right--;
        }

        return true; // All characters match, it's a palindrome
    }

    function isPalindromeFollowUp($x){
        // Negative numbers and numbers ending with 0 (except 0 itself) are not palindromes
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }

        $reversed = 0;
        $original = $x;

        while ($x > 0) {
            $digit = $x % 10;
            $reversed = $reversed * 10 + $digit;
            $x = (int)($x / 10);
        }

        return $reversed === $original;
    }
}