<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Confirmed</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 30px; margin: 0;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
        <h2 style="color: #2c3e50;">Halo {{ $booking->name }},</h2>

        <p style="font-size: 16px; line-height: 1.5;">
            Terima kasih telah melakukan pemesanan tiket melalui <strong>MyTicket</strong>. Berikut adalah detail pesanan Anda:
        </p>

        <table style="width: 100%; margin-top: 20px; font-size: 15px;">
            <tr>
                <td><strong>ID Transaksi</strong></td>
                <td>: {{ $booking->booking_trx_id }}</td>
            </tr>
            <tr>
                <td><strong>Nama</strong></td>
                <td>: {{ $booking->name }}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>: {{ $booking->email }}</td>
            </tr>
            <tr>
                <td><strong>No. Telepon</strong></td>
                <td>: {{ $booking->phone_number }}</td>
            </tr>
            <tr>
                <td><strong>Total Peserta</strong></td>
                <td>: {{ $booking->total_participant }}</td>
            </tr>
            <tr>
                <td><strong>Total Pembayaran</strong></td>
                <td>: Rp{{ number_format($booking->total_amount, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td><strong>Tanggal Mulai</strong></td>
                <td>: {{ \Carbon\Carbon::parse($booking->started_at)->translatedFormat('d F Y') }}</td>
            </tr>
        </table>

        <p style="margin-top: 25px; font-size: 16px;">
            Mohon tunggu konfirmasi pembayaran dari kami. Kami akan segera memproses tiket Anda setelah pembayaran dikonfirmasi.
        </p>

        <p style="margin-top: 20px;">
            <a href="{{ route('front.check_booking') }}" style="display: inline-block; background-color: #3498db; color: #fff; padding: 12px 20px; text-decoration: none; border-radius: 5px; font-size: 14px;">
                Cek Status Booking
            </a>
        </p>

        <p style="margin-top: 30px;">Salam hangat,</p>
        <p style="font-weight: bold;">Tim MyTicket</p>
    </div>
</body>
</html>
