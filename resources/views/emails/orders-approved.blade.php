<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Approved</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 30px; margin: 0;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
        <h2 style="color: #27ae60;">Hi {{ $booking->name }},</h2>

        <p style="font-size: 16px; line-height: 1.5;">
            Pesanan Anda dengan kode booking <strong>{{ $booking->booking_trx_id }}</strong> telah <strong>berhasil disetujui</strong>!
        </p>

        <p style="font-size: 16px;">
            Silakan datang ke loket terdekat untuk menukarkannya dengan tiket fisik Anda.
        </p>

        <p style="margin-top: 20px;">
            <a href="{{ route('front.check_booking') }}" style="display: inline-block; background-color: #3498db; color: #fff; padding: 12px 20px; text-decoration: none; border-radius: 5px; font-size: 14px;">
                Cek Status Booking
            </a>
        </p>

        <p style="margin-top: 30px;">Terima kasih,</p>
        <p style="font-weight: bold;">{{ config('app.name') }}</p>
    </div>
</body>
</html>
