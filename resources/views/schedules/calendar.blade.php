<x-app-layout>
    <x-slot name="header">
        　
    </x-slot>

    <div>
        <p>
            @if(session('msg'))
            {{ session('msg') }}
            @endif
        </p>
    </div>
    
    <a href="/">戻る</a>
    <a href="/calendar/create">予定作成</a>
    <a href="/friend/add">友達追加</a>
    <p>ユーザーID:{{ Auth::user()->id }}</p>
    <div id='calendar'></div>
    


</x-app-layout>