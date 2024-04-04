<div>
    @livewireStyles

    @extends('layouts.layout')
    @section('title', 'Home')
    @section('content')
        <div>
            <div class="flex items-center font-poppins justify-center p-10">
                <h1 class="text-xl italic ">Sobre nós </h1>
            </div>

            <div class="flex items-center p-10  font-poppins text-xl color text-slate-600">
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

                    Um dos nossos diferenciais é a forma inovadora e lúdica com que abordamos temas sensíveis relacionados
                    ao
                    abuso e à violência doméstica. O projeto "Em Mares de Sereios" exemplifica essa abordagem, utilizando
                    palestras musicais, vídeos, livros, ebooks, podcasts, redes sociais e piers de atendimento, sejam eles
                    presenciais ou online. <br>

                    Os piers de atendimento abrangem todas as áreas da vida das mulheres afetadas, visando auxiliar na
                    retomada
                    de sua autonomia e protagonismo. Contamos com a participação de voluntários, empresas públicas, mistas e
                    privadas, secretarias governamentais, poder legislativo, judiciário e outras organizações do terceiro
                    setor.
                    <br>
                </p>
            </div>
        </div>

        <div class="bg-gray-300">
            <div class="flex p-10 font-poppins">
                <img class="w-30" src="{{ asset('image/dataphoto1.webp') }}" alt="">
                <div class="text-center flex-col">
                    <h1>Compreensão Profunda</h1>
                    <p>O Instituto Lanterna Luminosa (ILL) dedica-se ao combate do abuso contra mulheres e seus filhos,
                        proporcionando apoio abrangente para um reinício seguro e saudável em diversas áreas da vida.</p>

                    <div>
                        <div class="flex items-center mt-10 ml-10">
                            <img class="  w-10 h-10" src="{{ asset('image/sad.png') }}" alt="">
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
                                <p class="text-slate-600">Muitas vezes as mulheres não conseguem sair das relações abusivas
                                    e se
                                    libertar do parceiro abusador por conta da dependência emocional e financeira que as
                                    prendem
                                    à situação, visto que tantas mulheres abrem mão de sua vida profissional para cuidar de
                                    seus
                                    filhos e do parceiro, consequentemente, ficando sem recursos financeiros para se
                                    sustentar
                                    em caso de separação.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex font-poppins">

                <div class="flex-col text-start text-xl p-10">
                    <h1 class="font-bold   text-4xl">Voz com poder</h1>
                    <p class="text-slate-600">Engajado na promoção do empoderamento feminino, o ILL trabalha incansavelmente
                        para desafiar e superar a
                        triste realidade do abuso contra mulheres, oferecendo um suporte holístico para reinícios vibrantes
                        e
                        saudáveis.</p>
                </div>


                <div class="flex">
                    <div>
                        <h1>Resiliência Triunfante</h1>
                        A resiliência das mulheres diante do abuso é uma poderosa narrativa de superação, desafiando as
                        sombras
                        dessa triste realidade e construindo um caminho para uma sociedade mais justa e igualitária.</p>
                    </div>
                </div>
                <img src="{{ asset('image/dataphoto2.webp') }}" alt="">

            </div>


            <div x-data="{ open: false }">
                <button>
                <img class="w-10 h-10" src="{{ asset('image/balao-de-fala-com-linhas-de-texto.png') }}" alt=""
                    wire:click="abrirView">
                </button>
                    @if ($isOpen)
                        <div>
                            @include('livewire.modal')
                        </div>
                    @endif
            </div>
        </div>

        @livewireScripts
    </div>
@endsection
