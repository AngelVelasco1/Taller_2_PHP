<?php
    class exercise1 {
        public static function logic ($numbers_values) {
            $sum = (float) array_sum($numbers_values);
            $prom = (float) $sum / count($numbers_values);
            $result = ($prom <= 3.9) ? "Go Study, the average is $prom" : "Awarded, the average is $prom";
            return $result;
        }
    }
    class exercise2 {
        public static function toNumber(array $numbers_values) {
            $number = $numbers_values['number'];
            $result = self::logic($number);
            return $result;
        }
        public static function logic (float $number) {
            ($number % 2 == 0) ? $result = "The number is even" : $result = "The number is odd";
            return $result;
        }
    }

    class exercise3 {
        public static function logic(array $data): string {
            $intensity = $data['intensity'];
            $resistance = $data['resistance'];
            $voltage = $intensity * $resistance;

            $result = "The voltage is $voltage";
            return $result;
        }
    }
?>