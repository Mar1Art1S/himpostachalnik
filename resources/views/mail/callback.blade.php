<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body { margin: 0; padding: 0; font-family: sans-serif; background-color: #f8fafc; color: #1e293b; }
        .container { max-width: 600px; margin: 40px auto; padding: 30px; background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); border: 1px solid #e2e8f0; }
        h1 { font-size: 24px; font-weight: 700; color: #1d4ed8; margin-top: 0; margin-bottom: 20px; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        td { padding: 12px; border-bottom: 1px solid #f1f5f9; }
        td.label { font-weight: 600; color: #475569; width: 140px; }
        td.value { color: #0f172a; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <table>
            <tbody>
                <tr>
                    <td class="label">Ім'я:</td>
                    <td class="value">{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td class="label">Телефон:</td>
                    <td class="value">{{ $data['phone'] }}</td>
                </tr>
                <tr>
                    <td class="label">Коментар:</td>
                    <td class="value">{{ $data['message'] ?? 'Не вказано' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
