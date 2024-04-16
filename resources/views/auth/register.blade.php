<div>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="flex items-center justify-center h-full font-poppins ">
        <div class="bg-slate-800 flex items-center justify-center p-10  gap-11 rounded-3xl">
            <img class="w-[30rem]" src="{{ asset('image/register.webp') }}" alt="">
            <form action="{{ route('register.create') }}" method="POST" class="">
                @csrf
                <div>
                    <h1 class="text-white text-2xl mb-4 text-center">Registre-se</h1>
                </div>
                <div>
                    <label for="name">Seu nome</label>
                    <input type="text" name="name" placeholder="Digite seu nome"
                        class="peer block min-h-[auto] w-full  border-b border-b-red-slate bg-transparent px-3 py-[0.32rem]  p-2   leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlInput22"
                        @error('name')
                        <span class="text-xl font-black">{{ $message }}</span>
                    @enderror
                        </div>

                    <div>
                        <label for="email">Seu e-mail</label>
                        <input type="email" name="email" placeholder="Digite seu email"
                            class="peer block min-h-[auto] w-full  border-b border-b-red-slate bg-transparent px-3 py-[0.32rem]  p-2   leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput22">
                    </div>

                    <div>
                        <label for="password">Sua senha</label>
                        <input type="password" name="password" placeholder="Digite sua senha"
                            class="peer block min-h-[auto] w-full  border-b border-b-red-slate bg-transparent px-3 py-[0.32rem]  p-2   leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput22">
                    </div>

                    <div class=" items-center flex justify-center ">
                        <button class="bg-slate-400 rounded-md p-2 mt-2" type="submit">Registrar</button>
                    </div>
            </form>

        </div>
    </div>
</div>
