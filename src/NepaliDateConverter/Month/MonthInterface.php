<?php

namespace Vinus\NepaliDateConverter\Month;

interface MonthInterface {
    public static function getTitle($index);
    public static function isValidRange($yy,$mm,$dd);
}