<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-slate-800 dark:text-slate-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-800 overflow-hidden shadow-xl sm:rounded-2xl border border-slate-200 dark:border-slate-700">
                <div class="p-6 text-slate-900 dark:text-slate-100">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold">Incoming Bookings</h3>
                        <div class="text-sm text-slate-500">
                            Updates are applied instantly
                        </div>
                    </div>
                    
                    @if(session('success'))
                        <div class="mb-6 bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 px-4 py-3 rounded-xl flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto rounded-xl border border-slate-200 dark:border-slate-700">
                        <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-700 bg-slate-50 dark:bg-slate-900">
                            <thead>
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Date & Time</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Customer Details</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Service Info</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Price</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-700 bg-white dark:bg-slate-900">
                                @forelse($bookings as $booking)
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-bold text-slate-900 dark:text-white">{{ \Carbon\Carbon::parse($booking->booking_date)->format('M d, Y') }}</div>
                                            <div class="text-xs font-medium text-slate-500 flex items-center gap-1 mt-1">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm font-bold text-slate-900 dark:text-white">{{ $booking->customer_name }}</div>
                                            <div class="text-xs text-slate-500 mt-0.5">{{ $booking->customer_phone }}</div>
                                            <div class="text-xs text-slate-400 mt-1 truncate max-w-[200px]" title="{{ $booking->customer_address }}">{{ $booking->customer_address }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-bold rounded-md bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 border border-indigo-200 dark:border-indigo-800 capitalize">
                                                {{ $booking->service_type }}
                                            </span>
                                            <div class="text-xs font-medium text-slate-500 mt-2 capitalize">Type: {{ $booking->car_type }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-700 dark:text-slate-300">
                                            Rp {{ number_format($booking->price, 0, ',', '.') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @php
                                                $statusClasses = [
                                                    'confirmed' => 'bg-emerald-100 text-emerald-800 border-emerald-200 dark:bg-emerald-900/30 dark:text-emerald-400 dark:border-emerald-800',
                                                    'pending' => 'bg-amber-100 text-amber-800 border-amber-200 dark:bg-amber-900/30 dark:text-amber-400 dark:border-amber-800',
                                                    'completed' => 'bg-slate-100 text-slate-800 border-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:border-slate-700',
                                                    'cancelled' => 'bg-rose-100 text-rose-800 border-rose-200 dark:bg-rose-900/30 dark:text-rose-400 dark:border-rose-800',
                                                ];
                                                $class = $statusClasses[$booking->status] ?? 'bg-gray-100 text-gray-800';
                                            @endphp
                                            <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-bold rounded-full border {{ $class }} capitalize">
                                                {{ $booking->status }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <form action="{{ route('bookings.update-status', $booking) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('PUT')
                                                <select name="status" onchange="this.form.submit()" class="text-xs font-medium bg-white dark:bg-slate-800 border border-slate-300 dark:border-slate-600 text-slate-700 dark:text-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-1.5 cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                                                    <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="confirmed" {{ $booking->status === 'confirmed' ? 'selected' : '' }}>Confirm</option>
                                                    <option value="completed" {{ $booking->status === 'completed' ? 'selected' : '' }}>Complete</option>
                                                    <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>Cancel</option>
                                                </select>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                            <div class="flex flex-col items-center justify-center">
                                                <svg class="w-12 h-12 text-slate-300 dark:text-slate-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                                <span class="font-medium">No bookings found yet.</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>