<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Report Details</h1>
    <div class="bg-white p-6 rounded shadow-md">
        <h2 class="text-lg font-semibold mb-2">Date:{{ \Carbon\Carbon::parse($report->created_at)->format('d/m/Y') }}</h2>
        <h3 class="text-md font-semibold mb-2">Treatment: {{ $report->treatment->name ?? 'N/A' }}</h3>
        <p class="text-gray-700"><strong>Report Details:</strong> {{ $report->report_details }}</p>
        <p class="text-gray-700"><strong>Simplified Treatment Report:</strong> {{ $report->simplified_report }}</p>
    </div>
    <div class="mt-4">
        <button
            type="button"
            class="bg-red-600 text-white px-4 py-2 rounded"
            onclick="window.history.back();">
            Close
        </button>
    </div>
</div>
