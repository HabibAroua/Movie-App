@extends('layout.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange text-lg font-semibold" style="color:orange">
                Popular movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="https://scontent.ftun10-1.fna.fbcdn.net/v/t1.18169-9/10313852_275372859307788_3421392646328098070_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=_63uAh5Ruw8AX-NKIRY&_nc_ht=scontent.ftun10-1.fna&oh=3d6a4af73ecf68bba25dc305db05bb65&oe=60A25053" alt="Choufli hal"
                            class="hover:opacity-75 transition ease-in-out duration-150"
                        />
                    </a>
                    <div>
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">
                            Maktoub
                        </a>
                        <div class="flex items-center-gray-400">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path d="M17.56 21a1 1 0 01-.46-.11L12
                                        18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0
                                        01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0
                                        011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25
                                        1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"
                                    />
                                </g>
                            </svg>
                            <span>Star</span>
                            <span class="ml-1">92%</span>
                            <span class="mx-2">|</span>
                            <span>September 10 2008</span>
                        </div>
                        <div class="text-gray-400">
                            Romance, Drama, Crime
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection