<?php
 if(isset($_POST['submit'])) {
   $url = $_POST['link'];
    $context = [
        'http' => [
            'method' => 'GET',
            'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.47 Safari/537.36",
        ],
    ];

      //validation url
    if(preg_match("@https:[/][/]www.instagram.com[/]p[/]@",$url)) {

          $context = stream_context_create($context);
          $data = file_get_contents($url, false, $context);

          preg_match_all( '@content="([^"]+.mp4)"@' , $data, $match );
          $src = array_pop($match);
          $urlFile = $src[0];
          $befName = substr($src[0],99); //cut long sting to generate file name
          $fileName = 'download/video/'.$befName;

              file_put_contents($fileName, file_get_contents($urlFile));

              $filePath = 'download/video/'.$befName;
              if(!empty($fileName) && file_exists($filePath)){
                  // Define headers
                  header("Cache-Control: public");
                  header("Content-Description: File Transfer");
                  header("Content-Disposition: attachment; filename=$fileName");
                  header("Content-Type: application/zip");
                  header("Content-Transfer-Encoding: binary");

                  // Read the file
                  readfile($filePath);
                  exit;
              }else{
                  echo 'Sorry The file does not exist.';
              }


    }else {
      echo
      '<script> alert("Please Enter The Url Valid");

      </script>';
    }




  }

 ?>
