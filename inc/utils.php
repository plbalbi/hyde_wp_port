<?php
/**
 * Utility functions used theme-wide
 *
 * @package palbisblog
 */

function string_contains($haystack, $needle) {
    return !is_bool(strpos($haystack, $needle));
}