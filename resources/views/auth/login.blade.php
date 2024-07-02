<x-layout>
    <h3 class="text-[35px] bg-transparent font-semibold text-center py-3">Login</h3>
    <form method="post" class="m-auto w-1/2 space-y-10 "  action="/login">
        @csrf
        <x-Forms.input placeholder="E-mail" name="email" type="email"/>
        <x-Forms.input placeholder="Password" name="password" type="password"/>
        <div>
            <x-Forms.button>Login</x-Forms.button>
        </div>
    </form>
</x-layout>