<div class="ui grid">
    <div class="row">
        <div class="three wide column"></div>
        <div class="ten wide column">
            <hr />
            <br />
            <br />
            {{-- メインの部分 --}}
            <h3 class="ui header">利用できるパーツ群</h1>
            <div class="ui huge labels" id='dragerea'>
                @foreach ($node as $node_list)
                    <div id={{$node_list->node_name}} class="ui label button item" draggable="true" >
                        {{$node_list->node_name}}
                    </div>
                @endforeach
            </div>

        </div>
        <div class="three wide column"></div>
    </div>
    <div class="row">
        <div class="three wide column"></div>
        <div class="ten wide column">
            <div class="ui grid">
                <div class="row">
                    <div class="five wide column">
                        <div class="droparea centered drop1">原因</div>
                    </div>
                    <div class="three wide column">

                    </div>
                    <div class="five wide column">
                        <div class="droparea centered drop2">結果</div>
                    </div>
                    <div class="three wide column">
                        <div class="centered add">
                            <a class="btn btn-block btn-primary">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="three wide column"></div>
    </div>
</div>
<br />
<br />
