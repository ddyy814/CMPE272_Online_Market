<?php

// Start a new Session
session_start();

// Get Current Page Address with Complete Path
$cur_add= "http://".$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];

// If 'Back' or 'Forward' link was not clicked to reach current page
// Then that page is valid to be entered into the history list
if (!isset($_GET['prev']) & !isset($_GET['next']))
{
    // If Session has not been initiated before
   if ($_SESSION==NULL)
   {
      // Set history count as 0
      $_SESSION['count']=0;

     // Store current page address in the history as 0th entry
      $_SESSION['pageadd'][$_SESSION['count']]=$cur_add;

   }

   // If Session has been initiated before
   else
   {
     // Increase counter pointing to current page
     $_SESSION['count']=$_SESSION['count']+1;

     // Store current page address in history list as count-th entry
     $_SESSION['pageadd'][$_SESSION['count']]=$cur_add;

     // If user went back in history and 
     // then branched off differently
     // this line ensures that the old history 
     // branch is discarded with preceding entries intact
     $_SESSION['pageadd']=
       array_slice($_SESSION['pageadd'],0,$_SESSION['count']+1);
   }
}

// If 'Back' link was clicked to reach current page
elseif (isset($_GET['prev']))

{
   // Decrease the counter pointing to an entry in history link list
   // Make no change to history entries
   $_SESSION['count']=$_SESSION['count']-1;

}

// If 'Forward' link was clicked to reach current page
elseif (isset($_GET['next']))

{
   // Increase the counter pointing to an entry in history list
   // Make no change to history entries
   $_SESSION['count']=$_SESSION['count']+1;

}

// If the function 'prev1' has not been declared before
if (!function_exists('prev1'))

{
   // This function generates the 'Back' link
   function prev1()
      {

          // If session has been initiated and current count 
          // points to anything but the first entry
          if (($_SESSION!=NULL) & $_SESSION['count']>=1)

          {
              // Generate the link to previous page in history, 
              // including a flag to make the page realize 
              // it doesn't have to go into the list as a new entry
              echo "<a href=".
                 $_SESSION['pageadd'][$_SESSION['count']-1].
                  "?prev=1>Back</a>";
              echo '<br>';
          }
      }
}

// If the function 'next1' has not been declared before
if (!function_exists('next1'))

{
   // This function generates the 'Forward' link
   function next1()

      {
          // If Session has been initiated and current count
          // points to anything but the last entry
          if (($_SESSION!=NULL) & 
               $_SESSION['count']<count($_SESSION['pageadd'])-1)

          {
               // Generate the 'Forward' link,
               // including a flag to make the next page 
               // realize it shouldn't go as a new entry in the list
               echo "<a href=".
                 $_SESSION['pageadd'][$_SESSION['count']+1].
                    "?next=1>Forward</a>";
               echo "<br>";
          }
      }
}

?>