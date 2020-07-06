                @foreach($task as $tasks)
                <form action="/update" method="post">
                @csrf
                    <input type="hidden" value="{{$tasks->id}}" name="title">
                    <input type="text" value=" {{$tasks->Title}}" name="" id="">
                    <input type="text" value=" {{$tasks->Task}}" name="" id="">
                    <input type="text" value=" {{$tasks->date}}" name="" id="">

<button type="submit"></button>
                </form>
                @endforeach