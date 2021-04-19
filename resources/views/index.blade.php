@extends('layout.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange text-lg font-semibold" style="color:orange">
                Popular movies
            </h2>
            <div class="grid grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="https://scontent.ftun10-1.fna.fbcdn.net/v/t1.18169-9/10313852_275372859307788_3421392646328098070_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=_63uAh5Ruw8AX-NKIRY&_nc_ht=scontent.ftun10-1.fna&oh=3d6a4af73ecf68bba25dc305db05bb65&oe=60A25053" alt="Choufli hal"
                            class=""
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection