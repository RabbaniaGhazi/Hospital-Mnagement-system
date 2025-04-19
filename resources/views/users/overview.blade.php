<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        max-width: 800px;
        margin: 100px auto;
        padding: 20px;
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .summary {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 5px;
    }

    .alert {
        margin-bottom: 15px;
    }
</style>

<div class="container">
    <h1>Financial Overview</h1>
    <form method="GET" action="{{ route('users.overview') }}">
        <label for="time_period">Select Time Period:</label>
        <select name="time_period" id="time_period" onchange="this.form.submit()">
            <option value="today" {{ $timePeriod == 'today' ? 'selected' : '' }}>Today</option>
            <option value="last_week" {{ $timePeriod == 'last_week' ? 'selected' : '' }}>Last Week</option>
            <option value="last_month" {{ $timePeriod == 'last_month' ? 'selected' : '' }}>Last Month</option>
            <option value="yearly" {{ $timePeriod == 'yearly' ? 'selected' : '' }}>Yearly</option>
        </select>
    </form>

    <p>Total Patients: {{ $totalPatients }}</p>
    <p>Total Payment Amount: {{ number_format($totalPayment ?? 0, 2) }}</p>
    <p>Hospital Share: {{ number_format($hospitalShare, 2) }}</p>
    <p>Doctor Share: {{ number_format($doctorShare, 2) }}</p>
    <p>Staff Share: {{ number_format($staffShare, 2) }}</p>

    <h2>Doctor Shares</h2>
    <ul>
        @if(isset($doctorShares) && $doctorShares->isNotEmpty())
            @foreach ($doctorShares as $share)
                <li>Doctor: {{ $share->user->name }}, Share: {{ number_format($share->user_share, 2) }}%</li>
            @endforeach
        @else
            <li>No doctor shares available for this period.</li>
        @endif
    </ul>

    <h2>Staff Shares</h2>
    <ul>
        @if(isset($staffShares) && $staffShares->isNotEmpty())
            @foreach ($staffShares as $share)
                <li>Staff: {{ $share->user->name }}, Share: {{ number_format($share->user_share, 2) }}%</li>
            @endforeach
        @else
            <li>No staff shares available for this period.</li>
        @endif
    </ul>
</div>
</body>
</html>