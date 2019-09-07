<?php
use Carbon\Carbon;
use App\MenuItem;

function formatDate($postDate) {

        $now = Carbon::now()->toDateTimeString();

        $diff = date_diff(date_create($now), date_create($postDate));

        $day = $diff->format("%d");

        $hour = $diff->format("%h");

        $minutes = $diff->format("%i");

        $seconds = $diff->format("%s");

        $year = $diff->format("%Y");

        if ($day < 1) {

            if ($hour < 1) {
                return $diff->format('%i Minutes ago');
            } else {
                return $diff->format('%h Hours ago');
            }
        } else {


            $dateTime = explode(" ", $postDate);
            $data = explode("-", $dateTime[0]);

            $Y = $data[0];
            $m = $data[1];
            $d = $data[2];

            $data2 = explode(":", $dateTime[1]);
            $H = $data2[0];
            $i = $data2[1];
            $s = $data2[2];


            return date("D, d M Y", mktime($H, $i, 0, $m, $d, $Y)); //$diff->format('%d Day, %h Hours %i Minutes');
        }
}
    
function getPoductDetails($id){

  $productsData = MenuItem::findOrFail($id);
  return $productsData;
} 




    
    
    ?>
    