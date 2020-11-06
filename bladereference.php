<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($price > 15)
        <p>this pizza is expensive</p>
    @elseif($price < 5)
        <p>this pzza is cheap</p>
    @else
        <p>this pizza is reasonably priced</p>
    @endif

    @unless($base == 'cheesy crust')
        <p>you don't have cheesy crust</p>
    @endunless

    @php
        $name = 'Fabian';
        echo ($name);
    @endphp

    @for($i = 0; $i < 5; $i++)
        <p>the value of i is {{ $i }}</p>
    @endfor

    @foreach($pizzas as $pizza)
        <div>
            {{ $loop->index }} {{ $pizza['type']}} - {{ $pizza['base'] }}
            @if($loop->first ) //can be ->last
                <p>first in  the loop</p>
            @endif
        </div>
    @endforeach


</body>
</html>
