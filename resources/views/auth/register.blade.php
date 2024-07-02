<x-layout>
    <h3 class="text-[35px] bg-transparent font-semibold text-center py-3">Register Form</h3>
    <form method="post" class="m-auto w-1/2 space-y-10 "  action="/register" enctype="multipart/form-data">
        @csrf
        <x-Forms.input placeholder="Name" name="name" type="text"/>
        <x-Forms.input placeholder="E-mail" name="email" type="email"/>
        <x-Forms.input placeholder="Password" name="password" type="password"/>
        <x-Forms.input placeholder="Confirm Password" name="password_confirmation" type="password"/>
        <x-Forms.input placeholder="Employer Name" name="employer" type="text"/>
        <x-Forms.input placeholder="" name="logo" type="file"/>
        <div>
            <x-Forms.button>Resister</x-Forms.button>
        </div>
    </form>
</x-layout>