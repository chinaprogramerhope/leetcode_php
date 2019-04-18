<?php
/**
 * User: hanxiaolong
 * Time: 2019/4/18 22:34
 */

//给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
//
//你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。
//
//示例:
//
//给定 nums = [2, 7, 11, 15], target = 9
//
//因为 nums[0] + nums[1] = 2 + 7 = 9
//所以返回 [0, 1]

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $ret = [];
        
        foreach ($nums as $k1 => $v1) {
            $copyNums = $nums;
            unset($copyNums[$k1]);

            foreach ($copyNums as $k2 => $v2) {
                if ($v1 + $v2 === $target) {
                    $ret[] = $k2;
                }
            }
        }
        
        return $ret;
    }
}

$nums = [2, 7, 11, 15];
$target = 9;

$solution = new Solution();
$ret = $solution->twoSum($nums, $target);
print_r($ret);