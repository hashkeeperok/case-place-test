<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
          crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .testapp-tabs {
            margin: 20px 0;
        }
    </style>
</head>
<body class="antialiased">

<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
        <a class="navbar-brand me-auto link-dark" href="/">Case Place Test</a>
        <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link px-2">go to
                    github</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <ul class="nav nav-tabs testapp-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="task1-tab" data-bs-toggle="tab"
                    data-bs-target="#task1" type="button" role="tab"
                    aria-controls="task1" aria-selected="true">Task 1
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="task2-tab" data-bs-toggle="tab"
                    data-bs-target="#task2" type="button" role="tab"
                    aria-controls="task2" aria-selected="false">Task 2
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="task3-tab" data-bs-toggle="tab"
                    data-bs-target="#task3" type="button" role="tab"
                    aria-controls="task3" aria-selected="false">Task 3
            </button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="task1" role="tabpanel"
             aria-labelledby="task1-tab">
            <form id="task1Form">
                <div class="form-group">
                    <label for="testText">Write text</label>
                    <textarea class="form-control" id="testText"
                              rows="6">{{ $text }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Check</button>
                </div>
            </form>
            <div id="testResult" class="alert alert-primary" role="alert">
                @foreach ($arr as $key => $val)
                    {{ $key }}: {{ $val }} <br>
                @endforeach
            </div>
            <pre class="hljs"
                 style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(240, 240, 240); color: rgb(68, 68, 68);"><span
                    class="hljs-keyword" style="font-weight: 700;">public</span> <span
                    class="hljs-function"><span class="hljs-keyword"
                                                style="font-weight: 700;">function</span> <span
                        class="hljs-title"
                        style="color: rgb(136, 0, 0); font-weight: 700;">getWordCounts</span><span
                        class="hljs-params">(string $text, int $wordsCount)</span>: <span
                        class="hljs-title"
                        style="color: rgb(136, 0, 0); font-weight: 700;">array</span> </span>{
        $codeWatch = array_merge(
            [<span class="hljs-string" style="color: rgb(136, 0, 0);">'-'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'"'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'!'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'@'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'#'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'$'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'%'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'^'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'&amp;'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'*'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'('</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">')'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'_'</span>],
            [<span class="hljs-string" style="color: rgb(136, 0, 0);">';'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">"'"</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'+'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'{'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'}'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'|'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">':'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'"'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'&lt;'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'&gt;'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'?'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'['</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">']'</span>],
            [<span class="hljs-string" style="color: rgb(136, 0, 0);">','</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'.'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'/'</span>, <span
                    class="hljs-string" style="color: rgb(136, 0, 0);">''</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'~'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'`'</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'='</span>]
        );

        $newText = str_replace($codeWatch, <span class="hljs-string"
                                                 style="color: rgb(136, 0, 0);">''</span>, $text);
        $newText = preg_replace(<span class="hljs-string"
                                      style="color: rgb(136, 0, 0);">"/[0-9]/"</span>, <span
                    class="hljs-string" style="color: rgb(136, 0, 0);">""</span>, $newText);

        $wordArray = preg_split(
            <span class="hljs-string"
                  style="color: rgb(136, 0, 0);">'/\s+/u'</span>,
            $newText,
            <span class="hljs-keyword" style="font-weight: 700;">null</span>,
            PREG_SPLIT_NO_EMPTY
        );

        $wordArray = array_count_values($wordArray);
        arsort($wordArray);

        <span class="hljs-keyword" style="font-weight: 700;">return</span> array_slice($wordArray, <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">0</span>, $wordsCount);
    }</pre>
        </div>
        <div class="tab-pane fade show active" id="task2" role="tabpanel"
             aria-labelledby="profile-tab">
            <form id="task2Form">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Transform
                    </button>
                </div>
            </form>
            <canvas id="testCanvas">
                У вас не поддерживается Canvas =(
            </canvas>
            <pre class="hljs"
                 style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(240, 240, 240); color: rgb(68, 68, 68);"><span
                    class="hljs-function"><span class="hljs-keyword"
                                                style="font-weight: 700;">function</span> <span
                        class="hljs-title"
                        style="color: rgb(136, 0, 0); font-weight: 700;">canvasInit</span>(<span
                        class="hljs-params">canvas</span>) </span>{
    canvas.width = <span class="hljs-number"
                         style="color: rgb(136, 0, 0);">1000</span>;
    canvas.height = <span class="hljs-number" style="color: rgb(136, 0, 0);">1000</span>;
    canvas.style.backgroundColor = <span class="hljs-string"
                                         style="color: rgb(136, 0, 0);">'#d1cbf8'</span>;
}

<span class="hljs-function"><span class="hljs-keyword"
                                  style="font-weight: 700;">function</span> <span
        class="hljs-title" style="color: rgb(136, 0, 0); font-weight: 700;">toRad</span>(<span
        class="hljs-params">num</span>) </span>{
    <span class="hljs-keyword"
          style="font-weight: 700;">return</span> num * <span
                    class="hljs-built_in"
                    style="color: rgb(57, 115, 0);">Math</span>.PI / <span
                    class="hljs-number"
                    style="color: rgb(136, 0, 0);">180</span>;
}

<span class="hljs-function"><span class="hljs-keyword"
                                  style="font-weight: 700;">function</span> <span
        class="hljs-title" style="color: rgb(136, 0, 0); font-weight: 700;">drawRectInCenter</span>(<span
        class="hljs-params">canvas, context, width, height, color, angle</span>) </span>{
    context.clearRect(<span class="hljs-number"
                            style="color: rgb(136, 0, 0);">0</span>, <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">0</span>, canvas.width, canvas.height);

    <span class="hljs-keyword" style="font-weight: 700;">const</span> x = canvas.width / <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">2</span> - width / <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">2</span>;
    <span class="hljs-keyword" style="font-weight: 700;">const</span> y = canvas.height / <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">2</span> - height / <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">2</span>;

    <span class="hljs-keyword" style="font-weight: 700;">if</span> (angle) {
        <span class="hljs-keyword" style="font-weight: 700;">const</span> radAngle = toRad(angle);
        <span class="hljs-keyword" style="font-weight: 700;">const</span> dx = canvas.width / <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">2</span>;
        <span class="hljs-keyword" style="font-weight: 700;">const</span> dy = canvas.height / <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">2</span>;

        context.save();
        context.translate(dx, dy);
        context.rotate(radAngle);
        context.translate(-dx, -dy);
    }

    context.fillStyle = color;
    context.fillRect(x, y, width, height);

    <span class="hljs-keyword" style="font-weight: 700;">if</span> (angle) {
        context.restore();
    }
}

    <span class="hljs-keyword"
          style="font-weight: 700;">const</span> canvas = <span
                    class="hljs-built_in" style="color: rgb(57, 115, 0);">document</span>.getElementById(<span
                    class="hljs-string" style="color: rgb(136, 0, 0);">'testCanvas'</span>);
    canvasInit(canvas);

    <span class="hljs-keyword" style="font-weight: 700;">const</span> context = canvas.getContext(<span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'2d'</span>);
    drawRectInCenter(canvas, context, <span class="hljs-number"
                                            style="color: rgb(136, 0, 0);">200</span>, <span
                    class="hljs-number"
                    style="color: rgb(136, 0, 0);">100</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'#2812ba'</span>);

    $(<span class="hljs-string" style="color: rgb(136, 0, 0);">'#task2Form button'</span>).on(<span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'click'</span>, <span
                    class="hljs-function"><span class="hljs-keyword"
                                                style="font-weight: 700;">function</span> (<span
                        class="hljs-params">e</span>) </span>{
        e.preventDefault();
        drawRectInCenter(canvas, context, <span class="hljs-number"
                                                style="color: rgb(136, 0, 0);">300</span>, <span
                    class="hljs-number"
                    style="color: rgb(136, 0, 0);">100</span>, <span
                    class="hljs-string"
                    style="color: rgb(136, 0, 0);">'#2812ba'</span>, <span
                    class="hljs-number" style="color: rgb(136, 0, 0);">45</span>);
    });
});
</pre>
        </div>
        <div class="tab-pane fade" id="task3" role="tabpanel"
             aria-labelledby="contact-tab">
                    <pre class="hljs"
                         style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(240, 240, 240); color: rgb(68, 68, 68);"><span
                            class="hljs-keyword" style="font-weight: 700;">SELECT</span>
    *
<span class="hljs-keyword" style="font-weight: 700;">FROM</span>
    (
    <span class="hljs-keyword" style="font-weight: 700;">SELECT</span>
        products.*,
        <span class="hljs-keyword" style="font-weight: 700;">IF</span>(
            @collection = Collection_id,
            @i := @i +<span class="hljs-number"
                            style="color: rgb(136, 0, 0);">1</span>,
            @i := <span class="hljs-number"
                        style="color: rgb(136, 0, 0);">1</span> + <span
                            class="hljs-keyword"
                            style="font-weight: 700;">LEAST</span>(@collection := Collection_id, <span
                            class="hljs-number"
                            style="color: rgb(136, 0, 0);">0</span>)
        ) <span class="hljs-keyword" style="font-weight: 700;">AS</span> pindex
    <span class="hljs-keyword" style="font-weight: 700;">FROM</span>
        products,
        (
    <span class="hljs-keyword" style="font-weight: 700;">SELECT</span>
        @i := <span class="hljs-number" style="color: rgb(136, 0, 0);">0</span>,
        @collection := <span class="hljs-number" style="color: rgb(136, 0, 0);">0</span>
    ) <span class="hljs-keyword" style="font-weight: 700;">AS</span> _
<span class="hljs-keyword" style="font-weight: 700;">ORDER</span> <span
                            class="hljs-keyword"
                            style="font-weight: 700;">BY</span>
    Collection_id,
    Published_date
<span class="hljs-keyword" style="font-weight: 700;">DESC</span>
) <span class="hljs-keyword" style="font-weight: 700;">AS</span> temp_tab
<span class="hljs-keyword" style="font-weight: 700;">WHERE</span>
    pindex &lt;= <span class="hljs-number"
                       style="color: rgb(136, 0, 0);">2</span>;</pre>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/test.js')}}"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>
</html>


