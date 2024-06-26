<?php

namespace App\Traits;

use App\Models\CityDeliveryTime;
use App\Models\CityDistrict;
use App\Models\PlanBundleDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use stdClass;
use Jantinnerezo\LivewireAlert\LivewireAlert;


trait HelperTrait
{

   use LivewireAlert;






   protected function getDefaultPreview()
   {


      // 1: define defaultPreview Picture
      $defaultPreview = url('assets/img/placeholder.png');

      return $defaultPreview;



   } // end function







   // --------------------------------------------------------------
   // --------------------------------------------------------------
   // --------------------------------------------------------------










   protected function getCurrentDate()
   {


      // 1: getDate
      return $currentDate = date('Y-m-d', strtotime('+4 hours'));


   } // end function









   // --------------------------------------------------------------







   protected function getNextDate()
   {


      // 1: getDate
      return $nextDate = date('Y-m-d', strtotime('+1 day +4 hours'));


   } // end function










   // --------------------------------------------------------------







   protected function getPauseDate()
   {


      // 1: getDate
      return $pauseDate = date('Y-m-d', strtotime('+1 day +4 hours'));


   } // end function








   // --------------------------------------------------------------







   protected function getUnPauseDate()
   {


      // 1: getDate
      return $unPauseDate = date('Y-m-d', strtotime('+1 day +4 hours'));


   } // end function







   // --------------------------------------------------------------
   // --------------------------------------------------------------
   // --------------------------------------------------------------












   public function refreshSelect($childSelectId, $parentModel, $childModel, $parentValue, $isEmpty = false)
   {



      // 1: city - districts
      if ($parentModel == 'city' && $childModel == 'district') {

         $cityDistricts = $parentValue ?
            CityDistrict::where('cityId', $parentValue)
               ->get(['id', 'name as text'])->toArray() : [];



         // :: makeEmpty
         $isEmpty ? array_unshift($cityDistricts, ['id' => '', 'text' => '']) : null;


         $this->dispatch('refreshSelect', id: $childSelectId, data: $cityDistricts);


      } // end if







      // 2: city - deliveryTime
      if ($parentModel == 'city' && $childModel == 'deliveryTime') {

         $cityDeliveryTimes = $parentValue ?
            CityDeliveryTime::where('cityId', $parentValue)
               ->get(['id', 'title as text'])->toArray() : [];



         // :: makeEmpty
         $isEmpty ? array_unshift($cityDeliveryTimes, ['id' => '', 'text' => '']) : null;




         $this->dispatch('refreshSelect', id: $childSelectId, data: $cityDeliveryTimes);


      } // end if












      // 3: bundle - days
      if ($parentModel == 'bundle' && $childModel == 'days') {

         $bundleDays = $parentValue ?
            PlanBundleDay::where('planBundleId', $parentValue)
               ->get(['days as id', 'days as text'])->toArray() : [];



         // :: makeEmpty
         $isEmpty ? array_unshift($bundleDays, ['id' => '', 'text' => '']) : null;


         $this->dispatch('refreshSelect', id: $childSelectId, data: $bundleDays);


      } // end if






   } // end function










   // --------------------------------------------------------------
   // --------------------------------------------------------------
   // --------------------------------------------------------------









   protected function makeRequest($requestURL, $instance)
   {




      // 1: URL - token
      $requestURL = env('APP_API') . $requestURL;
      // $token = session('token');



      // 2: sendRequest
      $response = Http::post($requestURL, [
         'instance' => $instance,
      ])->json();





      // 3: convertToObject
      $response = json_decode(json_encode($response));

      return $response;


   } // end function









   // --------------------------------------------------------------
   // --------------------------------------------------------------
   // --------------------------------------------------------------











   protected function makeAlert($type, $message = '', $confirmMethod = '')
   {



      // 1: removeType (custom)
      if ($type == 'remove') {


         $this->alert('question', 'This item and related items will be permanently removed', [
            'position' => 'top',
            'timer' => '',
            'toast' => true,
            'width' => '400',
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Remove',
            'cancelButtonText' => 'Cancel',
            'confirmButtonColor' => '#dc3545',
            'cancelButtonColor' => '#d3d3d3',
            'onConfirmed' => $confirmMethod,
         ]);



         // 2: questionType
      } elseif ($type == 'question') {


         $this->alert('question', $message, [
            'position' => 'top',
            'timer' => '',
            'toast' => true,
            'width' => '400',
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Confirm',
            'cancelButtonText' => 'Cancel',
            'confirmButtonColor' => '#87b2a9',
            'cancelButtonColor' => '#d3d3d3',
            'onConfirmed' => $confirmMethod,
         ]);




         // 3: success - info
      } else {

         $this->alert($type, $message, [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'width' => '400',
            'timerProgressBar' => true,
         ]);

      } // end if





   } // end function










   // --------------------------------------------------------------
   // --------------------------------------------------------------
   // --------------------------------------------------------------










   protected function uploadFile($instanceFile, $path)
   {


      // 1: makeFileName - upload
      $fileName = date('h.iA') . rand(10, 10000) . rand(10, 10000) . rand(10, 10000) . $instanceFile->getClientOriginalName();
      $instanceFile->storeAs($path, $fileName, 'public');


      // 1.2: return fileName
      return $fileName;



   } // end function









   // --------------------------------------------------------------
   // --------------------------------------------------------------
   // --------------------------------------------------------------









   protected function removeFile($fileName, $path)
   {


      // 1: removeFile
      Storage::disk('public')->delete($path . '/' . $fileName);

      return true;


   } // end function








   // --------------------------------------------------------------
   // --------------------------------------------------------------
   // --------------------------------------------------------------








   protected function makeSerial($characters, $currentCount)
   {


      // 1: convert
      $currentCount = intval($currentCount);



      // 1.2: defineAndConcat
      if ($currentCount < 10) {

         return $characters . '-000' . ($currentCount + 1);

      } elseif ($currentCount < 100) {

         return $characters . '-00' . ($currentCount + 1);

      } elseif ($currentCount < 1000) {

         return $characters . '-0' . ($currentCount + 1);

      } elseif ($currentCount < 10000) {

         return $characters . '-' . ($currentCount + 1);

      } // end if




   } // end function









   // --------------------------------------------------------------
   // --------------------------------------------------------------
   // --------------------------------------------------------------









   function formatBytes($bytes, $precision = 1)
   {


      // ::rootOfFormat
      $kilobyte = 1024;
      $megabyte = $kilobyte * 1024;
      $gigabyte = $megabyte * 1024;



      // 1: bytes
      if ($bytes < $kilobyte) {
         return $bytes . ' B';


         // 2: kiloBytes
      } elseif ($bytes < $megabyte) {
         return round($bytes / $kilobyte, $precision) . ' KB';


         // 3: megaBytes
      } elseif ($bytes < $gigabyte) {
         return round($bytes / $megabyte, $precision) . ' MB';


         // 4: gigaBytes
      } else {

         return round($bytes / $gigabyte, $precision) . ' GB';

      } // end if


   } // end function









   // --------------------------------------------------------------







   function differentInDays($fromDate, $untilDate)
   {



      // 1: convertToMilliseconds
      $fromDate = strtotime($fromDate);
      $untilDate = strtotime($untilDate);




      // 1.2: sub - round
      $difference = $untilDate - $fromDate;

      return round($difference / (60 * 60 * 24));





   } // end function













   // --------------------------------------------------------------







   function makeGroupToken()
   {



      // :: returnToken
      return date('dmYhisA');




   } // end function











} // end trait
