<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dasalon</title>

</head>

<body style="margin:0px; font-family: 'Lato', sans-serif;">
    
    <div style="width:500px; margin:5px auto; padding:5px; background:#572a8e;">
        
        <div style="width:100%; height:100%; background-color: #2e2e2f; background:#ffd966; padding:0px 40px 40px 40px; box-sizing: border-box;">
            
            <div style="padding:10px 0; text-align:center;"><img style="width:210px;" src="{{ asset('public/assets/media/logos/logo3.png') }}" alt="Dasalon" title="Dasalon"/></div>
            
           
            <p style="font-size:16px; font-weight:500; color:#FFF; text-align:center; margin-bottom:15px; line-height:24px;">Hello <strong>{{$user->name}}</strong></p>
           
 
            <p style="font-size:15px; font-weight:500; color:#FFF; text-align:center; margin-bottom:15px; line-height:21px;"><a href="{{ route('partner.verify', $token) }}" style="color: #FFF;background: #ea2e91;text-decoration: none;padding: 5px 14px 3px;height: 25px;display: inline-block;border-radius: 100px;margin: 4px 0 0;font-size: 16px;font-weight: 500;">Activate Now</a></p>

            <div>
                <div style="margin-top:30px; margin-bottom:15px; background:#FFF; padding:2px;"></div>           
                
            </div>            
            
            
        </div>
    </div>
</body>
</html>
