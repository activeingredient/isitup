<?php
header("Content-type: text/xml");
include_once("settings.php");
?>
<?xml version="1.0" encoding="UTF-8"?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
	<ShortName>Is it up?</ShortName>
	<Description>Check the availability of a website.</Description>
	<Url type="text/html" method="get" template="http://<?php echo $setting["host"]; ?>/{searchTerms}"></Url>
	<Image height="16" width="16">data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAKkSURBVDjLpZPdT5JhGMb9W+BPaK3matVqndXWOOigA6fmJ9DUcrUMlrN0mNMsKTUznQpq6pyKAm8CIogmypcg8GIiX8rHRHjhVbPt6o01nMvZWge/k3vP9duuZ/edAyDnf/hjoCMP2Vr3gUDj3CdV6zT1xZ6iFDaKnLEkBFOmPfaZArWT5sw60iFP+BAbOzTcQSqDZzsNRyCNkcVoaGghzDlVQKylOHJrMrUZ2Yf52y6kc36IxpyoH1lHF7EBgyMKV4jCJ5U/1UVscU4IZOYEa3I1HtwI01hwxlDLhDoJD/wxGr5YGmOLAdRIrVCuhmD3JdA6SQabx12srGB0KSpc86ew4olDOGjH4x4z0gdHDD9+c4TaQQtq+k2Yt0egXYugTmoVZgV9cyHSxXTtJjZR3WNCVfcK/NE0ppYDUNu2QTMCtS0IbrsOrVMOWL27eNJtJLOCDoWXdgeTEEosqPxoBK/TwDzWY9rowy51gJ1dGr2zLpS2aVH5QQ+Hbw88sZ7OClrGXbQrkMTTAQu4HXqUv9eh7J0OSfo7tiIU+GItilpUuM/AF2tg98eR36Q+FryQ2kjbVhximQu8dgPKxPMoeTuH4tfqDIWvCBQ2KlDQKEe9dBlGTwR36+THFZg+QoUxAL0jgsoOQzYYS+wjskcjTzSToVAkA7Hqg4Spc6tm4vgT+eIFVvmb+eCSMwLlih/cNg0KmpRoGzdl+BXOb5jAsMYNjSWAm9VjwesPR1knFilPNMu510CkdPZtqK1BvJQsoaRZjqLGaTzv1UNp9EJl9uNqxefU5QdDnFNX+Y5Qxrn9bDLUR6zjqzsMizeWYdG5gy6ZDbk8aehiuYRz5jHdeDTKvlY1IrhSMUxe4g9SuVwpdaFsgDxf2i84V9zH/us1/is/AdevBaK9Tb3EAAAAAElFTkSuQmCC</Image>
	<OutputEncoding>UTF-8</OutputEncoding>
	<InputEncoding>UTF-8</InputEncoding>
</OpenSearchDescription>