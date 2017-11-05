<?php
    function f1() {
        $fileinfo = 'no_file_info';
        $backtrace = debug_backtrace();
        if (!empty($backtrace[0]) && is_array($backtrace[0])) {
            $fileinfo = substr($backtrace[1]['file'], strripos($backtrace[1]['file'], "\\") + 1, strripos($backtrace[1]['file'], "."));
        }
        echo $fileinfo;
    }
?>