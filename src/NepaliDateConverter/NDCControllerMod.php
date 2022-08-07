<?php
namespace Vinus\NepaliDateConverter;

use Vinus\NepaliDateConverter\Month\Nepali;
use Vinus\NepaliDateConverter\Month\English;
use App\Http\Controllers\Controller;

class NDCControllerMod extends Controller
{
    private $nepaliDates = array(
        0 => array(1992, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),       
        1 => array(1993, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        2 => array(1994, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        3 => array(1995, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        4 => array(1996, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        5 => array(1997, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        6 => array(1998, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30),
        7 => array(1999, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),      
        8 => array(2000, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        9 => array(2001, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        10 => array(2002, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        11 => array(2003, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        12 => array(2004, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        13 => array(2005, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        14 => array(2006, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        15 => array(2007, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        16 => array(2008, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        17 => array(2009, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        18 => array(2010, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        19 => array(2011, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        20 => array(2012, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        21 => array(2013, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        22 => array(2014, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        23 => array(2015, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        24 => array(2016, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        25 => array(2017, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        26 => array(2018, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        27 => array(2019, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        28 => array(2020, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        29 => array(2021, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        30 => array(2022, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        31 => array(2023, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        32 => array(2024, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        33 => array(2025, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        34 => array(2026, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        35 => array(2027, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        36 => array(2028, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        37 => array(2029, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30),
        38 => array(2030, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        39 => array(2031, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        40 => array(2032, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        41 => array(2033, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        42 => array(2034, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        43 => array(2035, 30, 32, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        44 => array(2036, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        45 => array(2037, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        46 => array(2038, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        47 => array(2039, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        48 => array(2040, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        49 => array(2041, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        50 => array(2042, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        51 => array(2043, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        52 => array(2044, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        53 => array(2045, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        54 => array(2046, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        55 => array(2047, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        56 => array(2048, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        57 => array(2049, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        58 => array(2050, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        59 => array(2051, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        60 => array(2052, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        61 => array(2053, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        62 => array(2054, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        63 => array(2055, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        64 => array(2056, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30),
        65 => array(2057, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        66 => array(2058, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        67 => array(2059, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        68 => array(2060, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        69 => array(2061, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        70 => array(2062, 30, 32, 31, 32, 31, 31, 29, 30, 29, 30, 29, 31),
        71 => array(2063, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        72 => array(2064, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        73 => array(2065, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        74 => array(2066, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        75 => array(2067, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        76 => array(2068, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        77 => array(2069, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        78 => array(2070, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        79 => array(2071, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        80 => array(2072, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        81 => array(2073, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        82 => array(2074, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        83 => array(2075, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        84 => array(2076, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        85 => array(2077, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        86 => array(2078, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        87 => array(2079, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        88 => array(2080, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        89 => array(2081, 31, 31, 32, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        90 => array(2082, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        91 => array(2083, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30),
        92 => array(2084, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30),
        93 => array(2085, 31, 32, 31, 32, 30, 31, 30, 30, 29, 30, 30, 30),
        94 => array(2086, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        95 => array(2087, 31, 31, 32, 31, 31, 31, 30, 30, 29, 30, 30, 30),
        96 => array(2088, 30, 31, 32, 32, 30, 31, 30, 30, 29, 30, 30, 30),
        97 => array(2089, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        98 => array(2090, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30)
    );

    /**
     * Calculates whether english year is leap year or not
     *
     * @param int $year Year to check for leap year
     * @return bool If is leap year return true otherwise false
     */
    public function isLeapYear($year)
    {
        $a = $year;
        if ($a % 100 == 0) {
            if ($a % 400 == 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            if ($a % 4 == 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    /**
     * Returns converted English date for the supplied Nepali date
     * @param $year int Year (2071)
     * @param $month int Month (09)
     * @param $date  int Date (16)
     * @return array Converted English Date
     * @throws CalendarException CalendarException
     */
    public function nepaliToEnglish($year, $month, $date)
    {
        $def_eyy = 1934;
        $def_emm = 4;
        $def_edd = 14 - 1;  // initial english date.
        $def_nyy = 1992;
        $total_nDays = 0;
        $day = 4 - 1;
        $k = 0;

        $monthData = array(0,31,28,31,30,31,30,31,31,30,31,30,31);
        $lmonth = array(0,31,29,31,30,31,30,31,31,30,31,30,31);

        // Check for date range
        $chk = $this->isValidDate($year, $month, $date);

        if ($chk !== TRUE) {
            throw new CalendarException(sprintf(CalendarMessages::E_OUT_OF_RANGE, $year, $month, $date));
        } else {
            // Count total days in-terms of year
            for ($i = 0; $i < ($year - $def_nyy); $i++) {
                for ($j = 1; $j <= 12; $j++) {
                    $data = $this->getData($def_nyy + $k);
                    $total_nDays += $data[$j];
                }
                $k++;
            }

            // Count total days in-terms of month
            for ($j = 1; $j < $month; $j++) {
                $data = $this->getData($def_nyy + $k);
                $total_nDays += $data[$j];
            }

            // Count total days in-terms of dat
            $total_nDays += $date;

            // Calculation of equivalent english date...
            $totalEnglishDays = $def_edd;
            $m = $def_emm;
            $y = $def_eyy;
            while ($total_nDays != 0) {
                if ($this->isLeapYear($y)) {
                    $a = $lmonth[$m];
                } else {
                    $a = $monthData[$m];
                }

                $totalEnglishDays++;
                $day++;

                if ($totalEnglishDays > $a) {
                    $m++;
                    $totalEnglishDays = 1;
                    if ($m > 12) {
                        $y++;
                        $m = 1;
                    }
                }

                if ($day > 7) {
                    $day = 1;
                }

                $total_nDays--;
            }

            $numDay = $day;

            $nepDate = new DateVO();
            $nepDate->year = $y;
            $nepDate->month = $m;
            $nepDate->date = $totalEnglishDays;
            $nepDate->day = Days::getTitle($day);
            $nepDate->nmonth = English::getTitle($m);
            $nepDate->numDay = $numDay;

            return (array) $nepDate;
        }
    }

    /**
     * currently can only calculate the date between AD 1944-2033...
     *
     * @param int $year Year
     * @param int $month Month
     * @param int $date Date
     * @return array Converted Nepali Date for the supplied English Date
     * @throws CalendarException CalendarExceptions
     */
    public function englishToNepali($fulldate)
    {
        if (str_contains($fulldate, '-')) { 
            $fulldate = explode('-',$fulldate);
        }
        else {
            $fulldate = explode('/',$fulldate);
        }
        $year = $fulldate[0];
        $month = $fulldate[1];
        $date = $fulldate[2];
        // Check for date range
        $chk = English::isValidRange($year, $month, $date);

        if ($chk !== TRUE) {
            throw new CalendarException(sprintf(CalendarMessages::E_OUT_OF_RANGE, $year, $month, $date));
        } else {
            // Month data.
            $monthData = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

            // Month for leap year
            $lmonth = array(31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

            $def_eyy = 1934;    // initial english date.
            $def_nyy = 1992;
            $def_nmm = 9;
            $def_ndd = 16;  // inital nepali date.
            $total_eDays = 0;
            $day = 6;
            // Count total no. of days in-terms year
            for ($i = 0; $i < ($year - $def_eyy); $i++) //total days for month calculation...(english)
            {
                if ($this->isLeapYear($def_eyy + $i) === TRUE) {
                    for ($j = 0; $j < 12; $j++) {
                        $total_eDays += $lmonth[$j];
                    }
                } else {
                    for ($j = 0; $j < 12; $j++) {
                        $total_eDays += $monthData[$j];
                    }
                }
            }

            // Count total no. of days in-terms of month
            for ($i = 0; $i < ($month - 1); $i++) {
                if ($this->isLeapYear($year) === TRUE) {
                    $total_eDays += $lmonth[$i];
                } else {
                    $total_eDays += $monthData[$i];
                }
            }

            // Count total no. of days in-terms of date
            $total_eDays += $date;


            $i = 0;
            $j = $def_nmm;
            $total_nDays = $def_ndd;
            $m = $def_nmm;
            $y = $def_nyy;
            // Count nepali date from array
            while ($total_eDays != 0) {
                $data = $this->getData($def_nyy + $i);
                $a = $data[$j];

                $total_nDays++;     //count the days
                $day++;             //count the days interms of 7 days

                if ($total_nDays > $a) {
                    $m++;
                    $total_nDays = 1;
                    $j++;
                }

                if ($day > 7) {
                    $day = 1;
                }

                if ($m > 12) {
                    $y++;
                    $m = 1;
                }

                if ($j > 12) {
                    $j = 1;
                    $i++;
                }

                $total_eDays--;
            }

            $numDay = $day;

            $nepDate = new DateVO();
            $nepDate->year = $y;
            $nepDate->month = $m;
            $nepDate->date = $total_nDays;
            $nepDate->day = Days::getTitle($day);
            $nepDate->nmonth = Nepali::getTitle($m);
            $nepDate->numDay = $numDay;

            return (array)$nepDate;
        }
    }

    public function getData($year)
    {
        foreach($this->nepaliDates as $yearData) {
            if($yearData[0] == $year) {
                return $yearData;
            }
        }

        throw new CalendarException(CalendarMessages::E_UNSUPPORTED);
    }

    public function isValidDate($year, $month, $date)
    {
        $data = $this->getData($year);

        if ($month < 1 || $month > 12) {
            return false;
        }

        $actualDays = $data[$month];
        if($date > $actualDays || $date < 1) {
            return false;
        }

        return true;
    }


}