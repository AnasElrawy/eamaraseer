<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رسالة جديدة</title>
    <style>
        body { font-family: 'Arial', sans-serif; direction: rtl; text-align: right; }
        .container { width: 100%; max-width: 600px; margin: auto; background: #f4f4f4; padding: 20px; border-radius: 10px; }
        .header { text-align: center; margin-bottom: 20px; }
        .header img { max-width: 150px; }
        .content { background: #fff; padding: 20px; border-radius: 10px; }
        .footer { text-align: center; font-size: 12px; color: #666; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ $logo }}" alt="شعار الموقع" width="100">
        </div>
        <div class="content">
            <h2>طلب جديد من العميل</h2>
            <p><strong>الاسم:</strong> {{ $data['name'] }}</p>
            <p><strong>رقم الهاتف:</strong> {{ $data['phone'] }}</p>
            <p><strong>نوع الخدمة:</strong> {{ $serviceName }}</p>
            <p><strong>الرسالة:</strong> {{ $data['message'] }}</p>
        </div>
        <div class="footer">
            <p>© {{ date('Y') }} جميع الحقوق محفوظة لموقعك</p>
        </div>
    </div>
</body>
</html>
