<?php
    class exercise1 {
        public static function logic ($numbers_values) {
            $sum = (float) array_sum($numbers_values);
            $prom = (float) $sum / count($numbers_values);
            $result = ($prom <= 3.9) ? "Go Study, the average is $prom" : "Awarded, the average is $prom";
            return $result;
        }
    }
?>