<div>

    @extends('layouts.layout')
    @section('title', 'Home')
    @section('content')
        <div class="p-20 flex items-center font-poppins justify-center flex-col">
            <div>
                <h1 class="text-xl italic p-10">Sobre nós </h1>
            </div>

            <div class="flex items-center text-start   font-poppins text-xl color text-slate-600">
                <div class="indent-9">
                    <p>O Instituto Lanterna Luminosa é uma Associação Civil de Terceiro Setor dedicada ao combate do abuso
                        contra
                        mulheres e seus filhos. Nosso compromisso é amplo, abrangendo desde a prevenção de todos os tipos de
                        abusos
                        até o apoio e fortalecimento da mulher que se encontra em uma relação abusiva.<br>
                        Atuamos de maneira integral, fornecendo suporte essencial em todos os aspectos da vida das mulheres
                        afetadas, incluindo as áreas profissional, financeira, jurídica, de segurança, saúde, autoestima,
                        emocional

                        e espiritual. Valorizamos uma abordagem humanizada, regida por princípios como respeito, ética,
                        solidariedade, proatividade, comprometimento e consciência. <br>
                        Um dos nossos diferenciais é a forma inovadora e lúdica com que abordamos temas sensíveis
                        relacionados
                        ao
                        abuso e à violência doméstica. O projeto "Em Mares de Sereios" exemplifica essa abordagem,
                        utilizando
                        palestras musicais, vídeos, livros, ebooks, podcasts, redes sociais e piers de atendimento, sejam
                        eles
                        presenciais ou online. <br>

                        Os piers de atendimento abrangem todas as áreas da vida das mulheres afetadas, visando auxiliar na
                        retomada
                        de sua autonomia e protagonismo. Contamos com a participação de voluntários, empresas públicas,
                        mistas e
                        privadas, secretarias governamentais, poder legislativo, judiciário e outras organizações do
                        terceiro
                        setor.
                        <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-gray-300">
            <div class="flex p-10 font-poppins">
                <img class="w-30" src="{{ asset('image/dataphoto1.webp') }}" alt="">
                <div class="mt-10 ml-10  flex-col">
                    <div class="mt-10 ml-10 p-3">
                        <h1 class="text-3xl">Compreensão Profunda</h1>
                        <p class="text-md">O Instituto Lanterna Luminosa (ILL) dedica-se ao combate do abuso <br> contra
                            mulheres e seus
                            filhos,
                            proporcionando apoio abrangente para um reinício seguro e saudável em diversas áreas da
                            vida.
                        </p>
                    </div>
                    <div>
                        <div class="flex items-center mt-10 ml-10">
                            <img class=" w-10 h-10" src="{{ asset('image/sad.png') }}" alt="">
                            <div class="flex-col text-start p-3">
                                <h3>A triste realidade</h3>
                                <p class="text-slate-600">O abuso contra mulheres persiste como uma triste realidade,
                                    desafiando
                                    os esforços para
                                    construir uma sociedade justa e igualitária. A violência</p>
                            </div>
                        </div>

                        <div class="flex items-center mt-10 ml-10">
                            <img class="w-10 h-10" src="{{ asset('image/sad.png') }}" alt="">
                            <div class="flex-col text-start p-3">
                                <h3>A violência</h3>
                                <p class="text-slate-600">Estão previstos cinco tipos de violência doméstica e familiar
                                    contra a
                                    mulher na Lei Maria da Penha: física, psicológica, moral, sexual e patrimonial.</p>
                            </div>
                        </div>

                        <div class="flex items-center mt-10 ml-10">
                            <img class="w-10 h-10" src="{{ asset('image/sad.png') }}" alt="">
                            <div class="flex-col text-start p-3">
                                <h3>O medo</h3>
                                <p class="text-slate-600">O medo de denunciar os agressores muitas vezes silencia as
                                    vítimas,
                                    ressaltando a necessidade urgente de centros de orientação e apoio.</p>
                            </div>
                        </div>
                        <div class="flex items-center mt-10 ml-10">
                            <img class="w-10 h-10" src="{{ asset('image/sad.png') }}" alt="">
                            <div class="flex-col text-start p-3">
                                <h3>As dependências</h3>
                                <p class="text-slate-600">Muitas vezes as mulheres não conseguem sair das relações
                                    abusivas
                                    e se
                                    libertar do parceiro abusador por conta da dependência emocional e financeira que as
                                    prendem
                                    à situação, visto que tantas mulheres abrem mão de sua vida profissional para cuidar
                                    de
                                    seus
                                    filhos e do parceiro, consequentemente, ficando sem recursos financeiros para se
                                    sustentar
                                    em caso de separação.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex font-poppins p-40">
                <div class="items-start flex-col">
                    <h1 class="text-3xl">Voz com Poder</h1>
                    <h3 class="text-md">Engajado na promoção do empoderamento feminino, o ILL trabalha incansavelmente para
                        desafiar e superar a triste realidade do abuso contra mulheres, oferecendo um suporte holístico para
                        reinícios vibrantes e saudáveis.</h3>
                    <div class="flex items-center mt-10 ml-10">
                        <img class="w-10 h-10" src="{{ asset('image/sad.png') }}" alt="">
                        <div class="flex-col text-start p-3">
                            <h3>Resiliência Triunfante</h3>
                            <p class="text-slate-600">A resiliência das mulheres diante do abuso é uma poderosa narrativa de
                                superação, desafiando as sombras dessa triste realidade e construindo um caminho para uma
                                sociedade mais justa e igualitária.</p>
                        </div>
                    </div>
                </div>
                <img class="" src="{{ asset('image/dataphoto2.webp') }}" alt="">
            </div>

            <div class="flex items-center justify-center flex-col p-20 ">
                <div class="p-20 text-center">
                    <h1 class="text-2xl">Contribua com a nossa vaquinha</h1>
                    <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, ipsa unde magnam
                        explicabo quis enim quia iusto odit ad vel nam quasi a hic sed laboriosam libero delectus
                        consequuntur itaque!</p>
                </div>

                <div>
                    <button
                        class="bg-black     text-orange-200  w-full h-full p-5  rounded-lg hover:text-white ease-in duration-300 hover:scale-110">Acesse
                        clicando aqui</button>
                </div>
            </div>
        </div>

        <div class="p-10">
            <div class="flex justify-center text-2xl font-normal ">
                <h1>Depoimentos</h1>
            </div>
            <div class="flex  justify-center    gap-48  ">

                <div class=" w-[32rem] h-[32rem] p-10   shadow-2xl  text-2xl bg-slate-50">
                    <p>Ele quebrou meu braço, fui parar no hospital. Depois, abrigada na casa de parentes, busquei
                        ajuda. Elas me acompanharam e deram todo o apoio, amenizando as minhas dores até nos dias em que
                        sinto que nem quero mais viver. Esse trabalho significou muito pra mim e, com certeza, está
                        ajudando muitas mulheres.</p>

                    <div class="flex items-center justify-center gap-2  ">
                        <img class="w-10 rounded-tl-3xl rounded-bl-xl" src="{{ asset('image/user1.webp') }}" alt="">
                        <p class="text-sm font-semibold">
                            Ana Clara Anjos <br>
                            <span class=" font-light">Vítima de abuso.</span>
                        </p>
                    </div>


                </div>

                <div class=" w-[32rem] h-[32rem] p-10   shadow-2xl  text-2xl bg-slate-50">
                    <p>Descobri o horror de ser violentada, oprimida e deprimida. Me senti impotente! Durante o
                        acolhimento, elas me ouviram, me defenderam em todas as audiências e estiveram comigo até o fim
                        do
                        processo porque são mulheres que entendem outras mulheres, sabem das nossas dores e lutam pelos
                        mesmos ideias que os nossos.</p>
                    <div class="flex items-center justify-center gap-2  ">
                        <img class="w-10 rounded-tl-3xl rounded-bl-xl" src="{{ asset('image/user1.webp') }}" alt="">
                        <p class="text-sm font-semibold">
                            Ana Clara Anjos <br>
                            <span class=" font-light">Vítima de abuso.</span>
                        </p>
                    </div>
                </div>

                <div class="w-[32rem] h-[32rem] p-10   shadow-2xl  text-2xl bg-slate-50  ">
                    <p>Tinha acabado de sofrer abusos e maus tratos do meu ex-parceiro. Sem dinheiro para pagar
                        advogados, fui apresentada a elas por uma pessoa do Ministério Público. Eu serei eternamente
                        grata a todo o grupo por tudo o que fizeram e fazem por mim e por todas as mulheres que passam
                        por momentos tão humilhantes, difíceis e cruéis nessa sociedade machista.</p>

                    <div class="flex items-center  justify-center gap-2   ">
                        <img class="w-10   rounded-tl-3xl rounded-bl-xl" src="{{ asset('image/user1.webp') }}"
                            alt="">
                        <p class="text-sm font-semibold">
                            Ana Clara Anjos <br>
                            <span class=" font-light">Vítima de abuso.</span>
                        </p>
                    </div>


                </div>
            </div>
        </div>


        <div class="flex items-center justify-center flex-col  p-10 gap-4">
            <div>
                <h1 class="text-4xl">Perguntas Frequentes</h1>
            </div>
            <div>
                <div x-data="{ open: false }">
                    <button class="bg-slate-800 rounded-md text-orange-400 p-[1rem] w-[30rem]  text-xl text-start "
                        @click="open = ! open"> Onde o
                        instituto se localiza </button>
                    <div class="text-center justify-center flex" x-show="open" x-transition ">
                                            <p>Nossa ONG atualmente atua no Brasil todo.</p>
                                        </div>
                                    </div>
                            </div>

                            <div>
                                <div x-data="{ open: false }">
                                    <button class="bg-slate-800 rounded-md text-orange-400 p-[1rem] w-[30rem]  text-xl text-start " @click="open = ! open"> Como faço para me voluntariar? </button>
                                    <div class="text-center justify-center flex" x-show="open" x-transition ">
                        <p>Disponibilizamos um formulário no topo do site para entrar em contato, também temos nossas redes
                            sociais..</p>
                    </div>
                </div>
            </div>
        </div>


        <div class=" flex items-center justify-center p-10 ">
            <div class=" bg-slate-800 w-[50rem]  flex p-10 gap-2 rounded-xl ">
                <div class="">
                    <h1 class="text-white text-3xl">Ainda restou dúvidas? Chame a gente!</h1>
                    <p class="text-white">Dê voz às mulheres: traga nossa palestra para sua comunidade ou empresa. Entre em contato conosco
                        pelo
                        e-mail:</p>
                    <p class=" text-yellow-300">institutolanternaluminosa@gmail.comOu contate a presidente pelo WhatsApp:+55 (41) 9164-1633
                        (Emanoelli)
                    </p>
                    <h3 class=" text-yellow-500">Não deixe para depois!</h3>
                </div>

                <button class="rounded-md mt-10 bg-white w-[10rem] h-full p-3">Contate-nos</button>
            </div>

            
        </div>
        <div>
            @if ($isOpen)
                <div class=" fixed top-20  right-10 " wire:transition>
                    @include('livewire.modal')
                </div>
            @endif

            @if ($isImageChanged)
                <button wire:click='abrirView'
                    class="fixed bottom-4 right-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <p>Fechar</p>
                </button>
            @else
                <button wire:click='abrirView'
                    class="fixed bottom-4 right-4 bg-blue-500 hover:bg-blue-700  rounded-2xl text-white font-bold py-2 px-4 ">
                    <img class="w-10 h-10 rounded-lg" src="{{ asset('image/balao-de-fala-com-linhas-de-texto.png') }}"
                        alt="">
                </button>
            @endif
        </div>

    </div>

@endsection
