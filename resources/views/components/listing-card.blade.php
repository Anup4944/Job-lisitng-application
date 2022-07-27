@props(['listing'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4"> {{$listing->company}}</div>
            <x-listing-tags :tagsCsv="$listing->tags"/>
         
            <div class="text-lg mt-4 flex items-center justify-center ">
                <i class="fa-solid fa-location-dot"></i>
                
                <h3 class="ml-2">{{$listing->location}} </h3>
            </div>
        </div>
    </div>
</x-card>