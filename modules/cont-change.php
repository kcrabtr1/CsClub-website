<?php
      if ($_SERVER['QUERY_STRING']==''){
        $pageCont = 'modules/dashboard.php';
        $dashboardActive="active";
        $bcrumbPage = "Dashboard";
      }
      if ($_SERVER['QUERY_STRING'] == 'tasks'){
            //Page content to change to
            $pageCont = 'modules/tasks-content.php';
            //Button set to active
            $taskActive="active";
            //BreadCrumb page name
            $bcrumbPage = "Tasks";
       }
       if ($_SERVER['QUERY_STRING'] == 'dashboard'){
             $pageCont = 'modules/dashboard.php';
             $dashboardActive="active";
             $bcrumbPage = "Dashboard";
        }
        if ($_SERVER['QUERY_STRING'] == 'userAccounts'){
              $pageCont = 'modules/userAcc-cont.php';
              $userActive="active";
              $bcrumbPage = "User Accounts";
         }
         if ($_SERVER['QUERY_STRING'] == 'newpost'){
               $pageCont = 'modules/newpost-cont.php';
               $newsActive="active";
               $bcrumbPage = "New Post";
          }



 ?>
