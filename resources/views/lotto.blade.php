<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>今日幸運數字</title>
    <a class="ml-4 text-sm:items-center text-gray-700 underline" href="/">首頁 <span class="sr-only"></span></a>
  </head>
  <body>
    <div class="container">
        <h2>今日你的幸運數字如下:</h2>
        <table class="table table-striped">
        <tr>
            <th>預測中獎號碼：</th>
          @foreach ($numbers as $number)
           <tr>
           <th>{{ $number }}</th>
           </tr>
                    
          @endforeach
         
          <th>特別號：{{ $lucky_number }}</th>
        </tr>
        </table>
    </div>
   
  </body>
</html>