<x-layout>
    <h3 class="text-[35px] bg-transparent font-semibold text-center py-3">Add Job</h3>
    <form method="post" class="m-auto w-1/2 space-y-5 "  action="/jobs" >
        @csrf
        <x-Forms.input placeholder="Title" name="title" type="text"/>
        <x-Forms.input placeholder="Salary" name="salary" type="text"/>        
        <x-Forms.select  name="location">
            <option  value="Remote">Remote</option>
            <option  value="Company">Company</option>
        </x-Forms.select>
        <x-Forms.select  name="schedule">
            <option  value="Full Time">Full Time</option>
            <option  value="Part Time">Part Time</option>
        </x-Forms.select>
        <x-Forms.input placeholder="Work Time" name="workTime" type="text"/>
        <x-Forms.input placeholder="URL" name="url" type="text"/>
        <x-Forms.input placeholder="Tags (Must seprate with comma(,))" name="tags" type="text"/>        
        <div class="flex items-center font-semibold gap-3">
            <label  for="featured">Featured</label>
            <input id="featured" name="featured" type="checkbox">
        </div>
        <div>
            <x-Forms.button>Add Job</x-Forms.button>
        </div>
    </form>
</x-layout>