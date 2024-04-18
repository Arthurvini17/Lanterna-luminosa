<div class="bg-white rounded-lg">
    <header class=" bg-slate-800 w-full h-full flex items-center justify-center p-2 rounded-t-lg">
        <nav class="flex items-center justify-between gap-1">
            <div>
                <h2 class="text-white">Como podemos te ajudar?</h2>
                <p class="text-slate-600"> Responderemos em alguns instantes...</p>
            </div>
            
            <div>
                <h1 wire:click="fecharView">fechar</h1>
            </div>
        </nav>
    </header>
    <form wire:submit='save' class="flex items-center justify-center p-10">
        <div>
            <div>
                <label for="name">Nome Completo</label>
                <input class="p-1 w-full  rounded-lg border border-slate-600 " type="text" wire:model='name'
                    placeholder="Seu nome completo">
            </div>

            <div>
                <label for="email">E-mail</label>
                <input class="p-1 w-full rounded-lg border border-slate-600" type="email" nwire:model="email"
                    placeholder="Seu e-mail aqui">
            </div>

            <div>
                <label for="telefone">Telefone / Whatsapp</label>
                <input class="p-1 w-full rounded-lg border border-slate-600 " type="number" wire:model="number"
                    placeholder="(00) 0000-0000">
            </div>

            <div>
                <label for="message">Sua Mensagem</label>
                <textarea class="p-1 w-full rounded-lg border border-slate-600 " wire:model="message" id="" cols="30"
                    rows="10" placeholder="Sua mensagem">
                </textarea>
            </div>

            <button wire:submit='save' type="submit">Enviar</button>


        </div>
    </form>
</div>
