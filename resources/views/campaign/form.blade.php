<div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow my-20">
    <div class="text-center py-4 px-8 text-black text-xl border-b border-grey-100">Register and book this course</div>
    <div class="py-4 px-8">
        <form method="post" action="{{ route('campaign-page.store',$slug) }}">
            @csrf
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-3" role="alert">
                    @foreach($errors->all() as $error)
                        <div class="font-bold">{{$error}}</div>
                    @endforeach
                </div>
            @endif
            <div class="flex mb-4">
                <div class="w-1/2 mr-1">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="first_name">First Name</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="first_name" type="text" name="first_name" placeholder="Your first name">
                </div>
                <div class="w-1/2 ml-1">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="last_name">Last Name</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="last_name" type="text" name="last_name" placeholder="Your last name">
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="email">Email Address</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" name="email" placeholder="Your email address">
            </div>
            <div class="flex items-center justify-center my-8">
                <button class="bg-[#198bcc] text-white font-bold py-2 px-4 rounded-full" type="submit">
                    Book Course
                </button>
            </div>
        </form>
    </div>
</div>
