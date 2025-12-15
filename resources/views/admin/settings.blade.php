<x-admin-layout>
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-white">Account Settings</h1>
        <p class="text-slate-400 mt-1">Manage your profile information and security.</p>
    </div>

    <div class="space-y-6">
        <!-- Profile Info -->
        <div class="p-4 sm:p-8 bg-slate-900 border border-slate-800 rounded-2xl shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password -->
        <div class="p-4 sm:p-8 bg-slate-900 border border-slate-800 rounded-2xl shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete User (Optional, maybe hide for primary admin) -->
        <div class="p-4 sm:p-8 bg-slate-900 border border-slate-800 rounded-2xl shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-admin-layout>