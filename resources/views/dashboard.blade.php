<x-admin-layout>

    <!-- Header -->
    <div class="mb-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-white">Dashboard Overview</h1>
            <p class="text-slate-400 mt-1">Welcome back, {{ Auth::user()->name }}. Here's what's happening today.</p>
        </div>
        <div class="flex items-center gap-3">
            <span
                class="px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-medium flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                System Healthy
            </span>
            <span class="text-slate-500 text-sm font-medium">{{ now()->format('D, d M Y') }}</span>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Stats Card 1 -->
        <div
            class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex items-start justify-between group hover:border-indigo-500/30 transition-colors">
            <div>
                <p class="text-slate-400 text-sm font-medium mb-1">Total Bookings</p>
                <h3 class="text-3xl font-bold text-white">{{ $bookings->count() }}</h3>
            </div>
            <div
                class="w-10 h-10 rounded-lg bg-indigo-500/10 flex items-center justify-center text-indigo-400 group-hover:bg-indigo-500 group-hover:text-white transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                    </path>
                </svg>
            </div>
        </div>

        <!-- Stats Card 2 -->
        <div
            class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex items-start justify-between group hover:border-amber-500/30 transition-colors">
            <div>
                <p class="text-slate-400 text-sm font-medium mb-1">Pending Actions</p>
                <h3 class="text-3xl font-bold text-white">{{ $bookings->where('status', 'pending')->count() }}</h3>
            </div>
            <div
                class="w-10 h-10 rounded-lg bg-amber-500/10 flex items-center justify-center text-amber-400 group-hover:bg-amber-500 group-hover:text-white transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>

        <!-- Stats Card 3 -->
        <div
            class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex items-start justify-between group hover:border-emerald-500/30 transition-colors">
            <div>
                <p class="text-slate-400 text-sm font-medium mb-1">Total Revenue</p>
                <h3 class="text-3xl font-bold text-white">Rp
                    {{ number_format($bookings->where('status', 'completed')->sum('price'), 0, ',', '.') }}</h3>
            </div>
            <div
                class="w-10 h-10 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-500 group-hover:text-white transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
            </div>
        </div>
        <!-- Stats Card 4 -->
        <div
            class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex items-start justify-between group hover:border-blue-500/30 transition-colors">
            <div>
                <p class="text-slate-400 text-sm font-medium mb-1">Services Completed</p>
                <h3 class="text-3xl font-bold text-white">{{ $bookings->where('status', 'completed')->count() }}</h3>
            </div>
            <div
                class="w-10 h-10 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- bookings Table -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden">
        <div class="p-6 border-b border-slate-800 flex items-center justify-between">
            <h3 class="text-lg font-bold text-white">Recent Bookings</h3>
            <div class="text-sm text-slate-500">
                Latest transactions
            </div>
        </div>

        @if(session('success'))
            <div
                class="m-6 mb-0 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 px-4 py-3 rounded-xl flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-800">
                <thead class="bg-slate-950/50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">Date &
                            Time</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">
                            Customer Details</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">
                            Service Info</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">Total
                            Price</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800 bg-slate-900">
                    @forelse($bookings as $booking)
                        <tr class="hover:bg-slate-800/50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-white">
                                    {{ \Carbon\Carbon::parse($booking->booking_date)->format('M d, Y') }}</div>
                                <div class="text-xs font-medium text-slate-500 flex items-center gap-1 mt-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-bold text-white">{{ $booking->customer_name }}</div>
                                <div class="text-xs text-slate-500 mt-0.5">{{ $booking->customer_phone }}</div>
                                <div class="text-xs text-slate-400 mt-1 truncate max-w-[200px]"
                                    title="{{ $booking->customer_address }}">{{ $booking->customer_address }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-bold rounded-md bg-indigo-900/30 text-indigo-300 border border-indigo-800 capitalize">
                                    {{ $booking->service_type }}
                                </span>
                                <div class="text-xs font-medium text-slate-500 mt-2 capitalize">Type:
                                    {{ $booking->car_type }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-300">
                                Rp {{ number_format($booking->price, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $statusClasses = [
                                        'confirmed' => 'bg-emerald-900/30 text-emerald-400 border-emerald-800',
                                        'pending' => 'bg-amber-900/30 text-amber-400 border-amber-800',
                                        'completed' => 'bg-slate-800 text-slate-300 border-slate-700',
                                        'cancelled' => 'bg-rose-900/30 text-rose-400 border-rose-800',
                                    ];
                                    $class = $statusClasses[$booking->status] ?? 'bg-gray-800 text-gray-300';
                                @endphp
                                <span
                                    class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-bold rounded-full border {{ $class }} capitalize">
                                    {{ $booking->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <form action="{{ route('bookings.update-status', $booking) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" onchange="this.form.submit()"
                                        class="text-xs font-medium bg-slate-800 border border-slate-600 text-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-1.5 cursor-pointer hover:bg-slate-700 transition-colors appearance-none">
                                        <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Pending
                                        </option>
                                        <option value="confirmed" {{ $booking->status === 'confirmed' ? 'selected' : '' }}>
                                            Confirm</option>
                                        <option value="completed" {{ $booking->status === 'completed' ? 'selected' : '' }}>
                                            Complete</option>
                                        <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>
                                            Cancel</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-12 h-12 text-slate-600 mb-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                        </path>
                                    </svg>
                                    <span class="font-medium">No bookings found yet.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>