<?php
namespace Helper;

class DateTime {
    public static function dbToLocale($date, $format = "d/m/Y H:i:s") {
        try {
            if ($date && $date != '0000-00-00 00:00:00') {
                $date = \DateTime::createFromFormat("Y-m-d H:i:s", $date);
                return date_format($date,"d/m/Y H:i:s");
            } else {
                return '';
            }
        } catch (\Exception $e) {
            return $date;
        }

    }

    public static function carbonLocale($timestamp) {
        return ($timestamp) ? $timestamp->format('d/m/Y H:i:s') : '';
    }

    public static function localeToDb($date) {
        if ($date) {
            $date = \DateTime::createFromFormat("d/m/Y H:i:s", $date);
            return date_format($date,"Y-m-d H:i:s");
        } else {
            return null;
        }
    }

    public static function getTimeAgo( $ptime ) {
        $estimate_time = time() - $ptime;

        if( $estimate_time < 1 ) {
            return 'less than 1 second ago';
        }

        $condition = array(
            12 * 30 * 24 * 60 * 60  =>  'year',
            30 * 24 * 60 * 60       =>  'month',
            24 * 60 * 60            =>  'day',
            60 * 60                 =>  'hour',
            60                      =>  'minute',
            1                       =>  'second'
        );

        foreach( $condition as $secs => $str ) {
            $d = $estimate_time / $secs;

            if( $d >= 1 ) {
                $r = round( $d );
                return '' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
            }
        }
    }


}