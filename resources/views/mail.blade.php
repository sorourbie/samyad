<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>عضویت در سایت</title>
    <style>
      /* Add your inline CSS styles here */
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 0;
        margin: 0;
      }

      .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      }

      h1 {
        color: #333;
        text-align: center;
        margin-top: 0;
      }

      p {
        color: #666;
        font-size: 16px;
        line-height: 1.5;
      }

      a {
        color: #fff;
        text-decoration: none;
        background-color: #333;
        border-radius: 5px;
        padding: 10px 20px;
        display: inline-block;
      }

      @media only screen and (max-width: 600px) {
        /* Add your mobile-specific styles here */
        .container {
          max-width: 100%;
          border-radius: 0;
        }
      }
    </style>
  </head>

  <body dir="rtl">

  <br><br><br><br>
    <div class="container">
   
      <h3>کاربر عزیز: {{$fullname}}</h3>
      <p>
          {{$body}}
      </p>
      <p>
          لینک پروفایل شما: <a href="#">www.mysite.com/{{$username}} </a>  می باشد
      </p>
      
      www.mysite.com
    </div>
  </body>
</html>
