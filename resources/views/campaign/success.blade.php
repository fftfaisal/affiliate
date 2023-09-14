<x-campaign-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="p-1 rounded shadow-lg">
            <div class="flex items-center p-4 bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#a35ca3] w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-4xl mt-0 font-bold text-[#a35ca3]">Thank you for signup. <a href="https://app.samsonqbank.com/users/register" class="text-black">Click here</a> to complete your details and payment</p>
            </div>
        </div>
    </div>
@push('script')
    <script>
        fpr("referral",{email:"{{ $email }}"})
    </script>
@endpush
</x-campaign-layout>
