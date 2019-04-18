<?php
/**
 * User: hanxiaolong
 * Time: 2019/4/18 23:35
 */

//给定两个大小为 m 和 n 的有序数组 nums1 和 nums2。
//
//请你找出这两个有序数组的中位数，并且要求算法的时间复杂度为 O(log(m + n))。
//
//你可以假设 nums1 和 nums2 不会同时为空。
//
//示例 1:
//
//nums1 = [1, 3]
//nums2 = [2]
//
//则中位数是 2.0
//示例 2:
//
//nums1 = [1, 2]
//nums2 = [3, 4]
//
//则中位数是 (2 + 3)/2 = 2.5

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $arr = array_merge($nums1, $nums2);
        sort($arr);
        $len = count($arr);
        if ($len % 2 === 0) {
            return ($arr[intval($len / 2)] + $arr[intval($len / 2) + 1]) / 2;
        } else {
            return $arr[intval($len / 2)];
        }
    }
}

$nums1 = [1, 3];
$nums2 = [2];

$instance = new Solution();
$ret = $instance->findMedianSortedArrays($nums1, $nums2);
$ret = sprintf('%.1f', $ret);
echo $ret;

